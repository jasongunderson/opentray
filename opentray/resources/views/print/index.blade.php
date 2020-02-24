@extends('base')

@section('main')
<script>
    queue = [];

    function addQueue(id) {
        if (!queue.includes(id)) {
            queue.push(id);
            document.getElementById("row" + id).style.backgroundColor = "lightgreen";
            document.getElementById("formQueue").value = queue;
            document.getElementById("queueButton").disabled = false;
        }
    }

    function removeQueue(id) {
        if (queue.includes(id)) {
            queue.splice(queue.indexOf(id), 1);
            document.getElementById("row" + id).style.backgroundColor = "";
            document.getElementById("formQueue").value = queue;
            if (queue.length == 0) {
                document.getElementById("queueButton").disabled = true;
            }
        }
    }
</script>
<div class="row">
    <div class="col-sm-12">
        <form method="get" action="{{ route('print/cards') }}">
            <h1 class="display-3">Print
                <a href="{{ route('print/cards') }}" class="btn btn-primary">Print All</a>
                <div class="form-group d-none">
                    <label for="queue">Queue</label>
                    <input type="text" class="form-control" name="queue" id="formQueue" required />
                </div>
                <button type="submit" class="btn btn-primary" id="queueButton" disabled>Print Queue</button>
                <a href="{{ route('print') }}" class="btn btn-primary">Reset</a>
            </h1>
        </form>
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
                <tr id="row{{$resident->id}}">
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
                        <a class="btn btn-primary" onclick=addQueue("{{$resident->id}}")>Queue</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" onclick=removeQueue("{{$resident->id}}")>Unqueue</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection