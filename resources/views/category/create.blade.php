@extends('layout.master')
@section('title')
    <h1>Create New Record:</h1>

    <form action="{{ url('/category/') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
        <input type="text" class="form-control" name="name">
        </div>


        <div class="form-group">
        <input type="text" class="form-control" name="salary">
        </div>





        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection


