@extends('layout.master')
@section('title')
    <h1>Create New Record:</h1>

    <form action="{{ url('/product/') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
        <input type="text" class="form-control" name="product_name">
        </div>


        <div class="form-group">
        <input type="text" class="form-control" name="	price">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection


