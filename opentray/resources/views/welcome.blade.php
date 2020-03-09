@extends('base')

@section('main')
<div class="row justify-content-md-center">
    <div class="col-sm-6">
        <h1 class="display-3">Sign In</h1>
        <div>
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" name="uname" dusk="input_uname" />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" dusk="input_password" />
                </div>
                <button type="submit" class="btn btn-primary" dusk="button_signin">Sign In</button>
            </form>
        </div>
    </div>
</div>
@endsection