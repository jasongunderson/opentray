@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a contact</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('residents.store') }}">
                @csrf
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" name="fname" />
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" name="lname" />
                </div>
                <div class="form-group">
                    <label for="facility">Facility:</label>
                    <input type="text" class="form-control" name="facility" />
                </div>
                <div class="form-group">
                    <label for="room">Room:</label>
                    <input type="text" class="form-control" name="room" />
                </div>
                <div class="form-group">
                    <label for="dine">Dining Area:</label>
                    <input type="text" class="form-control" name="dine" />
                </div>
                <div class="form-group">
                    <label for="likes">Likes:</label>
                    <input type="text" class="form-control" name="likes" />
                </div>
                <div class="form-group">
                    <label for="dislikes">Dislikes:</label>
                    <input type="text" class="form-control" name="dislikes" />
                </div>
                <div class="form-group">
                    <label for="allergies">Allergies:</label>
                    <input type="text" class="form-control" name="allergies" />
                </div>
                <div class="form-group">
                    <label for="comment">Comments:</label>
                    <input type="text" class="form-control" name="comment" />
                </div>
                <button type="submit" class="btn btn-primary-outline">Add Resident</button>
            </form>
        </div>
    </div>
</div>
@endsection