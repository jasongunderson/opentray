@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Residents
      <a href="{{ route('residents.create') }}" class="btn btn-primary" dusk="button_create">Add Resident</a>
    </h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Facility</td>
          <td>Room</td>
          <td>Dining Area</td>
          <td>Likes</td>
          <td>Dislikes</td>
          <td>Allergies</td>
          <td>Comments</td>
          <td colspan=2>Actions</td>
        </tr>
      </thead>
      <tbody>
        @foreach($residents as $resident)
        <tr>
          <td>{{$resident->id}}</td>
          <td>{{$resident->fname}} {{$resident->lname}}</td>
          <td>{{$resident->facility}}</td>
          <td>{{$resident->room}}</td>
          <td>{{$resident->dine}}</td>
          <td>{{$resident->likes}}</td>
          <td>{{$resident->dislikes}}</td>
          <td>{{$resident->allergies}}</td>
          <td>{{$resident->comment}}</td>
          <td>
            <a href="{{ route('residents.edit',$resident->id)}}" class="btn btn-primary" dusk="button_edit">Edit</a>
          </td>
          <td>
            <form action="{{ route('residents.destroy', $resident->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit" dusk="button_delete">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection