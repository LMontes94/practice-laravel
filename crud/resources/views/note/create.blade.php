@extends('layout.app')

@section('content')
<a href="{{ route('note.index')}}">Back</a>
    <form action="{{route('note.store')}}" method="POST">
        @csrf <!- seguridad que indestifica nuestro form para defender de ataques externos-!> 
        <label for="">Title:</label>
        <input type="text" name="title">

        <label for="">Description:</label>
        <input type="text" name="description">

        <input type="submit" value="Create">
    </form>
@endsection