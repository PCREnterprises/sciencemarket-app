@extends('layouts.app')

@section('content')

<div id="bg-window"></div>
<div id="main-container">
    <br>
    <div id="login-logo">
        <img id="" src="{{asset('storage/img/logo4.svg')}}" width="70" height="70"/>
        <img id="" src="{{asset('storage/img/logo.svg')}}" width="250" height="70"/>
    </div>
    <br>
    <form method="post" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        <div class="form-group form-section">
            <label for="name-area" class="form-labels">{{ __('Username') }}</label>
            <input class="form-control input-class" id="name-area" type="text" name="userid" placeholder="Enter login ID" value="{{ old('userid') }}" />
        </div>
        <div class="form-group form-section">
            <label for="pwd-area" class="form-labels">{{ __('Password') }}</label>
            <input class="form-control input-class" id="pwd-area" type="password" name="pwd" placeholder="Enter password" />
        </div>
        
    <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div></br> -->
        
        <div class="form-row-2">
            <table>
            <tr><td>
                <span class="checkbox">
                    <label><input class="" type="checkbox" value="" name="remMe">Remember me</label>
                </span>
                </td>
                <td>
                <a id="fp-link" href="frgt_pwd.php" target="_blank" name="fgtPwd">Forgot Password?</a>
                </td>
            </tr>
            </table>
        </div></br>
        <div class="form-row-3">
            <input class="btn btn-primary inp-button" type="submit" value="Sign in" />
            <a href="register.php" class="btn btn-primary inp-button">New user? Sign up</a>
        </div>
    </form>
</div>
@endsection
