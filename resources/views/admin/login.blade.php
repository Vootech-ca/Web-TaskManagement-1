<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('Project Name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <p>{{ trans('Project Name') }}</p>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <form action="{{ route('login') }}" method="post">
                @if (session()->has('error'))
                <div class="alert alert-error" role="alert">
                    {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @csrf
                <div class="input-group mb-3">
                    <label for="username"> </label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="{{ trans('Username') }}" value="{{ old('username') }}" required autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope @error('username') text-danger @enderror"></span>
                        </div>
                    </div>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <label for="password"> </label>
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="{{ trans('Password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock @error('password') is-invalid @enderror"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ trans('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ trans('Sign In') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h5 class="text-center">
        By: <a href="#" target="_blank"><b>Company Name</b>Co.</a>
    </h5>
</div>
</body>
</html>
