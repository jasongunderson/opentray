@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Food
            <a href="{{ route('foods.create') }}" class="btn btn-primary" dusk="button_create">Add Food</a>
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $food)
                <tr>
                    <td>{{$food->id}}</td>
                    <td>{{$food->name}}</td>
                    <td>
                        <a href="{{ route('foods.edit',$food->id)}}" class="btn btn-primary" dusk="button_edit">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('foods.destroy', $food->id)}}" method="post">
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