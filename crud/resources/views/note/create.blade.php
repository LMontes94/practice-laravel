@extends('layout.app')

@section('content')

@if($errors->any())
<ul>
    @foreach($errors->all as $error)
    <li>{{$error}}</li>
</ul>
@endif
<a href="{{ route('note.index')}}">Back</a>
<form action="{{route('note.store')}}" method="POST">
    @csrf <!- seguridad que indestifica nuestro form para defender de ataques externos-!>
        <label for="">Title:</label>
        <input type="text" name="title" class="@error('title') danger @enderror">
        @error('title')
        <p style="color:red">{{$message}}</p>
        @enderror
        <label for="">Description:</label>
        <input type="text" name="description">
        @error('description')
        <p style="color:red">{{$message}}</p>
        @enderror
        <input type="submit" value="Create">
</form>
@endsection