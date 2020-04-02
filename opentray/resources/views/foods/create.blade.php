@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Add Food
            <a href="{{ route('foods.index') }}" class="btn btn-primary" dusk="button_back">Back</a>
        </h1>
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
            <form method="post" action="{{ route('foods.store') }}">
                @csrf
                <div class="form-inline row">
                    <label for="name" class="col-1">Name:</label>
                    <input type="text" class="form-control col-5" name="name" value="{{old('name')}}" dusk="input_name" />
                </div>
                <br>
                <button type="submit" class="btn btn-primary col" dusk="button_add">Add Food</button>
            </form>
        </div>
    </div>
</div>
@endsection