@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Cards
      <a href="{{ route('print') }}" class="btn btn-primary" dusk="button_back">Back</a>
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
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
    </div>
    @endsection