@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update An Employee
            <a href="{{ route('staff.index') }}" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('staff.update', $staff->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-inline row">
                <label for="fname" class="col-1">First Name:</label>
                <input type="text" class="form-control col-5" name="fname" value="{{ $staff->fname }}" dusk="input_fname" />
                <label for="lname" class="col-1">Last Name:</label>
                <input type="text" class="form-control col-5" name="lname" value="{{ $staff->lname }}" dusk="input_lname" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="facility" class="col-1">Facility:</label>
                <input type="text" class="form-control col-5" name="facility" value="{{ $staff->facility }}" dusk="input_facility" />
                <label for="permission" class="col-1">Permission:</label>
                <input type="text" class="form-control col-5" name="permission" value="{{ $staff->permission }}" dusk="input_permission" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="uname" class="col-1">Username:</label>
                <input type="text" class="form-control col-5" name="uname" value="{{ $staff->uname }}" dusk="input_uname" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_update">Update Employee</button>
        </form>
    </div>
</div>
@endsection