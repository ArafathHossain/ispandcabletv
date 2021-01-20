@extends('admin.admin_layouts')


@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/matrix-login.css')}}" />

        <div id="loginbox">            
            <form action="{{route('admin.login')}}" method="post">
                @csrf
                 <div class="control-group normal_text"> <h3><img src="{{asset('public/backend/img/logo.png')}}" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input style="height: 35px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        </div>
                    </div>
                </div>
                

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        </div>
                    </div>
                </div>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
                    </span>
                @enderror

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
                    </span>
                @enderror
                
                <div class="form-actions">
                    <span class="pull-right"><button  type="submit" class="btn btn-blue">Login</button></span>

                </div>
            </form>
        </div>
@endsection
