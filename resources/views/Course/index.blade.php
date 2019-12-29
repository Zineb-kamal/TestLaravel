@extends('Parties.master')
@section('content')
@include('Parties.falsh-msg')
<div class="container">
  <!--table-->
  <table class="table table-sm" id="output">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Category Id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Slug</th>
        <th scope="col">Actions :</th>
      </tr>
    </thead>
    <tbody>
      @foreach($courses as $course)
      <tr>
        <th scope="row">{{$course->id}}</th>
        <td>{{$course->category_id}}</td>
        <td>{{$course->name}}</td>
        <td>{{$course->description}}</td>
        <td>{{$course->slug}}</td>
          <td>  
            <form method="POST" action="{{url('Courses/'.$course->id.'/destroy')}}">
              @csrf
              @method('DELETE')
              <a type="submit" class="btn btn-primary" href="{{url('Courses/'.$course->id)}}">
                <i class="far fa-eye" ></i>
              </a>
            <a type="submit" class="btn btn-success" href="{{url('Courses/'.$course->id.'/edit')}}">
                  <i class="fas fa-edit" ></i>
                </a>
            <button type="submit" class="btn btn-danger" href="{{url('Courses/'.$course->id.'/destroy')}}">
                <i class="far fa-trash-alt"></i>
              </button>
            </form>
            </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a type="submit" class="btn btn-secondary float-right" href="{{url('Courses/create')}}">+</a>
 {{$courses->links()}}
    </div>
  
  

@endsection