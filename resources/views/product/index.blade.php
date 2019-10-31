@extends('layout.master')
@section('title')
    <h1>All Data:</h1>
    <a href="#">create</a>
    <br>

    <table width="70%" border="1" cellpadding="5" cellspacing="5" >
        <th> id </th>
        <th> product_name </th>
        <th> price </th>
        <th> category-name </th>
        <th> opetation </th>

        @foreach ($products as $product)






     <tr>

        <td>{{ $product->id }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{  $product->Category->name }}</td>
        <td>
            <a href="#" >edit</a>


            <form method="POST" action="#">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-primary" type="submit">Delete</button>

            </form>



        </td>
     </tr>
     @endforeach
    </table>




@endsection


