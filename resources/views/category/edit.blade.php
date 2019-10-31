@extends('layout.master')
@section('title')
    <h1>Edit Record:</h1>

    <form action="{{ url('/category/'.$categories->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('put')}}

        <div class="form-group">
        <input type="text" class="form-control" name="name" value="{{ $categories->name }}">
        </div>


        <div class="form-group">
        <input type="text" class="form-control" name="salary" value="{{ $categories->salary }}">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection


