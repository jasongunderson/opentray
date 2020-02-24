@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Update Resident
            <a href="{{ route('residents.index') }}" class="btn btn-primary">Back</a>
        </h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('residents.update', $resident->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-inline row">
                <label for="fname" class="col-1">First Name:</label>
                <input type="text" class="form-control col-5" name="fname" value={{ $resident->fname }} />
                <label for="lname" class="col-1">Last Name:</label>
                <input type="text" class="form-control col-5" name="lname" value={{ $resident->lname }} />
            </div>
            <br>
            <div class="form-inline row">
                <label for="facility" class="col-1">Facility:</label>
                <input type="text" class="form-control col-3" name="facilty" value={{ $resident->facility }} />
                <label for="room" class="col-1">Room:</label>
                <input type="text" class="form-control col-3" name="room" value={{ $resident->room }} />
                <label for="dine" class="col-1">Dining Area:</label>
                <input type="text" class="form-control col-3" name="dine" value={{ $resident->dine }} />
            </div>
            <br>
            <div class="form-inline row">
                <label for="likes" class="col-1">Likes:</label>
                <input type="text" class="form-control col-3" name="likes" value={{ $resident->likes }} />
                <label for="dislikes" class="col-1">Dislikes:</label>
                <input type="text" class="form-control col-3" name="dislikes" value={{ $resident->dislikes }} />
                <label for="allergies" class="col-1">Allergies:</label>
                <input type="text" class="form-control col-3" name="allergies" value={{ $resident->allergies }} />
            </div>
            <br>
            <div class="form-inline row">
                <label for="comment col-1" class="col-1">Comments:</label>
                <input type="text" class="form-control col-11" name="comment" value={{ $resident->comment }} />
            </div>
            <br>
            <button type="submit" class="btn btn-primary col">Update</button>
        </form>
    </div>
</div>
@endsection