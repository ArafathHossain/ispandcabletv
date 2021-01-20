<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Sowren\ShurjoPay\ShurjoPayService;
use DB;

class ShurjoPayController extends Controller
{
    /**
     * Handle a response coming from ShurjoPay server
     * after a successful or failed transaction.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function response(Request $request)
    {
        $response = (new ShurjoPayService(500, route('home'), 'https://shurjopay.com'))->makePayment();
        print_r($response->getContents());
        die();
        try {
            
            $data = ShurjoPayService::decryptResponse($request->spdata);
            $txnId = '584126841jhgv';
            $bankTxnId = '658412562';
            $amount = '200';
            $bankStatus = "none";
            $resCode = '2548';
            $resCodeDescription = "iuygfdcviuhgyvgh bugyvh g";
            $paymentOption = "kiuygfdg gfvg ";
            $status = "";
            $res = [];

            switch ($resCode) {
                case '000':
                    $status = 'Success';
                    $res['status'] = true;
                    $res['message'] = "Transaction attempt successful";
                    break;
                default:
                    $status = 'Failed';
                    $res['status'] = false;
                    $res['message'] = "Transaction attempt failed";
                    break;
            }

            $redirectUrl = $request->get('success_url').
                "?status={$status}&msg={$res['message']}".
                "&tx_id={$txnId}&bank_tx_id={$bankTxnId}".
                "&amount={$amount}&bank_status={$bankStatus}&sp_code={$resCode}".
                "&sp_code_des={$resCodeDescription}&sp_payment_option={$paymentOption}";

            return redirect($redirectUrl);

        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
