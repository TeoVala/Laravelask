@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="p-3 mb-2 bg-white text-dark container" style="margin-top:30px;width:600px">
            <div class="row">
                <div class="col-sm">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>gr</td>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <td>Mark</td>
                            <td>213213</td>
                            <td>Mark</td>
                        </tr>
                        </tbody>
                    </table>

                    User token key:

                    <input class="form-control mt-2" type="text" value="{{ $token_key }}" readonly>


                </div>

            </div>

        </div>

    </div>
@endsection
