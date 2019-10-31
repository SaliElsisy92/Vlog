@extends('layout.master')
@section('title')
    <h1>All Data:</h1>
    <a href="#">create</a>
    <br>

    <table width="70%" border="1" cellpadding="5" cellspacing="5" >
        <th> id </th>
        <th> name </th>
        <th> salary </th>
        <th> opetation </th>

        @foreach ($categories as $category)


     <tr>

        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->salary }}</td>
        <td>
            <a href="{{ url('/category/'.$category->id).'/edit' }}" >edit</a>

            <form method="POST" action="{{ url('/category/'.$category->id)}}">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-primary" type="submit">Delete</button>

            </form>



        </td>
     </tr>
     @endforeach
    </table>




@endsection


