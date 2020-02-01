@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Resident</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('residents.update', $resident->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" name="fname" value={{ $resident->fname }} />
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" name="lname" value={{ $resident->lname }} />
            </div>
            <div class="form-group">
                <label for="facility">Facility:</label>
                <input type="text" class="form-control" name="facilty" value={{ $resident->facility }} />
            </div>
            <div class="form-group">
                <label for="room">Room:</label>
                <input type="text" class="form-control" name="room" value={{ $resident->room }} />
            </div>
            <div class="form-group">
                <label for="dine">Dining Area:</label>
                <input type="text" class="form-control" name="dine" value={{ $resident->dine }} />
            </div>
            <div class="form-group">
                <label for="likes">Likes:</label>
                <input type="text" class="form-control" name="likes" value={{ $resident->likes }} />
            </div>
            <div class="form-group">
                <label for="dislikes">Dislikes:</label>
                <input type="text" class="form-control" name="dislikes" value={{ $resident->dislikes }} />
            </div>
            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <input type="text" class="form-control" name="allergies" value={{ $resident->allergies }} />
            </div>
            <div class="form-group">
                <label for="comment">Comments:</label>
                <input type="text" class="form-control" name="comment" value={{ $resident->comment }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection