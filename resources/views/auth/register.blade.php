@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="p-3 mb-2 bg-white text-dark container" style="margin-top:30px;width:600px">
            <div class="row">
                <div class="col-sm">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">

                        </div>
                        @error('email')
                            {{ $message }}
                        @enderror

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">

                        </div>
                        @error('password')
                        {{ $message }}
                        @enderror

                        <div class="form-group mt-3">
                            <label for="password">Password confirmation</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation">

                        </div>
                        @error('password_confirmation')
                        {{ $message }}
                        @enderror

                        <button type="submit" class="btn btn-primary mt-4">Register</button>
                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
