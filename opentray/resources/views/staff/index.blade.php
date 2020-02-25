@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Staff
            <a href="{{ route('staff.create') }}" class="btn btn-primary">Add Staff</a>
        </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Facilty</td>
                    <td>Permission</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->fname}} {{$employee->lname}}</td>
                    <td>{{$employee->facility}}</td>
                    <td>{{$employee->permission}}</td>
                    <td>
                        <a href="{{ route('staff.edit',$employee->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('staff.destroy', $employee->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection