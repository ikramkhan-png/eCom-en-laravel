@extends('master') @section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <h3>Login Page</h3>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter email"
                    />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password"
                    />
                </div>
                <div class="text-right mb-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="text-right">
                    <a href="/register">Register Your Self!</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
