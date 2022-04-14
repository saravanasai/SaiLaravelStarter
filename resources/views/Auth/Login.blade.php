@extends('Layouts.Login')
@section('main-section')
<div class="login-box">

    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h4"><b>Sai Laravel Starter kit</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Login</p>
            <form action={{route('authenticate')}} method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" maxlength="10" name="phonenumber" class="form-control" placeholder="Enter Your Phonenumber">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-success btn-block">Login In</button>
                    </div>

                </div>
            </form>
        </div>

    </div>

</div>
@endsection
