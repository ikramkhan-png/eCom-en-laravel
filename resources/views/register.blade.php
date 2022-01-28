@extends('master') @section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <h4>User registeration Form</h4>
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label>User Name :</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter Your Name Here!"
                    />
                </div>
                <div class="form-group">
                    <label>Email address :</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter email"
                    />
                    <small id="emailHelp" class="form-text text-muted"
                        >We'll never share your email with anyone else.</small
                    >
                </div>
                <div class="form-group">
                    <label>Password :</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password"
                    />
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
