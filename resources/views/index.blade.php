@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="p-3 mb-2 bg-white text-dark container" style="margin-top:30px;width:600px">
            <div class="row">
                <div class="col-sm">
                    <form action="" method="post">
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

                        <button type="submit" class="btn btn-primary mt-4">Login</button>
                    </form>
                    @if (session('status'))
                        {{ session('status') }}
                    @endif
                </div>

            </div>

        </div>

    </div>
@endsection
