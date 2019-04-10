@extends('store.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>{{ __('Reset Password') }}</h1>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
