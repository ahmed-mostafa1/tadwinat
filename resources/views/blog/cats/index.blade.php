@extends('layouts/master')
@section('title', 'كل التصنيفات')
@section('content')

<h1>This is Categories List</h1>
<hr>
@foreach ($categories as $category)
    <h2>{{$category->name}}</h2>
@endforeach

@endsection