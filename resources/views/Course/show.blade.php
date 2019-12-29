@extends('Parties.master')
@section('content')
<div class="container">
<h1>{{$course->name}}</h1>
<h4>{{$course->category_id}}</h4>
<p>{{$course->description}}</p>
<small>{{$course->slug}}</small>
</div>
@endsection