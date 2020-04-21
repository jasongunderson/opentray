@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Add An Employee
            <a href="{{ route('staff.index') }}" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <div>
            <form method="post" action="{{ route('staff.store') }}">
                @csrf
                <div class="form-inline row">
                    <label for="fname" class="col-1">First Name:</label>
                    <input type="text" class="form-control col-5" name="fname" value="{{old('fname')}}" dusk="input_fname" />
                    <label for="lname" class="col-1">Last Name:</label>
                    <input type="text" class="form-control col-5" name="lname" value="{{old('lname')}}" dusk="input_lname" />
                </div>
                <br>
                <div class="form-inline row">
                    <label for="facility" class="col-1">Facility:</label>
                    <select class="form-control col-5" name="facility" value="{{old('facility')}}" dusk="input_facility">
                        @foreach ($facilities->all() as $facility)
                        <option value={{ $facility['id'] }}>{{$facility['name']}}</option>
                        @endforeach
                    </select>
                    <label for="permission" class="col-1">Permission:</label>
                    <select class="form-control col-5" name="permission" value="{{old('permission')}}" dusk="input_permission">
                        <option value=3>3</option>
                        <option value=2>2</option>
                        <option value=1>1</option>
                        <option value=0>0</option>
                    </select>
                </div>
                <br>
                <div class="form-inline row">
                    <label for="uname" class="col-1">Username:</label>
                    <input type="text" class="form-control col-3" name="uname" value="{{old('uname')}}" dusk="input_uname" />
                    <label for="password" class="col-1">Password:</label>
                    <input type="password" class="form-control col-3" name="password" value="" dusk="input_password" />
                    <label for="password_confirm" class="col-1">Confirm Password:</label>
                    <input type="password" class="form-control col-3" name="password_confirm" value="" dusk="input_password_confirm" />
                </div>
                <br>
                <button type="submit" class="btn btn-primary col" dusk="button_add">Add Employee</button>
            </form>
        </div>
    </div>
</div>
@endsection