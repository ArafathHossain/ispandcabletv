@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />
<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Balance Transfer table</h5>
          </div>
        <form action="{{route('store.balance_transfar')}}" method="post">
          @csrf
          <div class="row-fluid">

              <div class="span6">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                      <div class="form-horizontal">
                        <div class="control-group">
                          <label class="control-label">From Account</label>
                          <div class="controls">
                            <select name="from_account">
                              <option value="Bank">Bank</option>
                              <option value="Bkash">Bkash</option>
                              <option value="Rocket">Rocket</option>
                              <option value="E-pay">E-pay</option>
                              <option value="Hand-Cash">Hand Cash</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="span6">
                  <div class="widget-box">
                      <div class="widget-content nopadding">
                        <div class="form-horizontal">
                          <div class="control-group">
                            <label class="control-label">To Account</label>
                            <div class="controls">
                              <select name="to_account">
                                <option value="Bank" >Bank</option>
                                <option value="Bkash" >Bkash</option>
                                <option value="Rocket" >Rocket</option>
                                <option value="Hand-Cash" >Hand Cash</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="widget-box">
                    <div class="widget-content nopadding">
                      <div class="form-horizontal">
                        <div class="control-group">
                          <label class="control-label">Amount :</label>
                          <div class="controls">
                            <input type="text" class="span11" name="amount" required="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions ">
                    <button type="submit" class="btn btn-success">Transfar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>





@endsection




