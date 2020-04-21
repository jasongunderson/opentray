@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update An Employee
            <a href="{{ route('staff.index') }}" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
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
                <select class="form-control col-5" name="facility" value="{{old('facility')}}" dusk="input_facility">
                    <option value="" selected disabled hidden></option>
                    @foreach ($facilities->all() as $facility)
                    <option value={{ $facility['id'] }}>{{$facility['name']}}</option>
                    @endforeach
                </select>
                <label for="permission" class="col-1">Permission:</label>
                <select class="form-control col-5" name="permission" value={{old('permission')}} dusk="input_permission">
                    <option value="" selected disabled hidden></option>
                    <option value=3>3</option>
                    <option value=2>2</option>
                    <option value=1>1</option>
                    <option value=0>0</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_update">Update Employee</button>
        </form>
    </div>
</div>
@endsection