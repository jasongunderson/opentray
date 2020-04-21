@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update Resident
            <a href="{{ route('residents.index') }}" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
        <form method="post" action="{{ route('residents.update', $resident->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-inline row">
                <label for="fname" class="col-1">First Name:</label>
                <input type="text" class="form-control col-5" name="fname" value="{{ $resident->fname }}" dusk="input_fname" />
                <label for="lname" class="col-1">Last Name:</label>
                <input type="text" class="form-control col-5" name="lname" value="{{ $resident->lname }}" dusk="input_lname" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="facility" class="col-1">Facility:</label>
                <select class="form-control col-3" name="facility" value="{{old('facility')}}" dusk="input_facility">
                    <option value="" selected disabled hidden></option>
                    @foreach ($facilities->all() as $facility)
                    <option value={{ $facility['id'] }}>{{$facility['name']}}</option>
                    @endforeach
                </select>
                <label for="room" class="col-1">Room:</label>
                <input type="text" class="form-control col-3" name="room" value="{{ $resident->room }}" dusk="input_room" />
                <label for="dine" class="col-1">Dining Area:</label>
                <input type="text" class="form-control col-3" name="dine" value="{{ $resident->dine }}" dusk="input_dine" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="likes" class="col-1">Likes:</label>
                <input type="text" class="form-control col-3" name="likes" value="{{ $resident->likes }}" dusk="input_likes" />
                <label for="dislikes" class="col-1">Dislikes:</label>
                <input type="text" class="form-control col-3" name="dislikes" value="{{ $resident->dislikes }}" dusk="input_dislikes" />
                <label for="allergies" class="col-1">Allergies:</label>
                <input type="text" class="form-control col-3" name="allergies" value="{{ $resident->allergies }}" dusk="input_allergies" />
            </div>
            <br>
            <div class="form-inline row">
                <label for="comment col-1" class="col-1">Comments:</label>
                <input type="text" class="form-control col-11" name="comment" value="{{ $resident->comment }}" dusk="input_comment" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary col" dusk="button_update">Update</button>
        </form>
    </div>
</div>
@endsection