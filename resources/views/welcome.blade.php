@extends('layout/layout')
@section('title', 'Wellcome')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Welcome</div>

                    <div class="card-body">
                        <p>Welcome, {{ Auth::user()->name }}!</p>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
