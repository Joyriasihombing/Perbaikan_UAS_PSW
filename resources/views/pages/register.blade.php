<x-app-layout title="Register">
    <style>
        .container {
            background-color: #fff5e6;
        }

        .card {
            border-color: #ffa500;
        }

        .card-header {
            background-color: #ffa500;
            color: white;
        }

        .btn-primary {
            background-color: #ffa500;
            border-color: #ffa500;
        }

        .btn-primary:hover {
            background-color: #cc8400;
            border-color: #cc8400;
        }

        .form-label {
            color: #ffa500;
        }

        .form-control:focus {
            border-color: #ffa500;
            box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.25);
        }

        .alert-danger {
            background-color: #ffe6e6;
            color: #ff0000;
            border-color: #ff0000;
        }

        a {
            color: #ffa500;
        }

        a:hover {
            color: #cc8400;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation"
                                    class="form-label">{{ __('Confirm Password') }}</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </form>
                        <a href="{{ route('auth.login') }}">{{ __('Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
