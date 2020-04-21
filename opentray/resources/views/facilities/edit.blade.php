@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update A Facility
            <a href="{{ route('facilities.index') }}" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <form method="post" action="{{ route('facilities.update', $facility->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-inline row">
                <span class="col-3"></span>
                <label for="fname" class="col-1">Name</label>
                <input type="text" class="form-control col-5" name="name" value="{{ $facility->name }}" dusk="input_name" />
                <span class="col-3"></span>
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_update">Update Facility</button>
        </form>
    </div>
</div>
@endsection