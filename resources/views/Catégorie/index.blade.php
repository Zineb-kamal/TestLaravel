@extends('Parties.master')
@section('content')
@include('Parties.falsh-msg')
<div class="container">
  <!--table-->
  <table class="table table-sm" id="output">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Actions :</th>
      </tr>
    </thead>
    <tbody>
      @foreach($catgs as $cat)
      <tr>
        <th scope="row">{{$cat->id}}</th>
        <td>{{$cat->name}}</td>
        <td>{{$cat->slug}}</td>
          <td>  
            <form method="POST" action="{{url('Catégories/'.$cat->id.'/destroy')}}">
              @csrf
              @method('DELETE')
            
            <a type="submit" class="btn btn-primary" href="{{url('Catégories/'.$cat->id)}}">
              <i class="far fa-eye" ></i>
            </a>
            <a type="submit" class="btn btn-success" href="{{url('Catégories/'.$cat->id.'/edit')}}">
                  <i class="fas fa-edit" ></i>
                </a>
            <button type="submit" class="btn btn-danger" href="{{url('Catégories/'.$cat->id.'/destroy')}}">
                <i class="far fa-trash-alt"></i>
              </button>
            </form>
            </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a type="submit" class="btn btn-secondary float-right" href="{{url('Catégories/create')}}">+</a>
 {{$catgs->links()}}
    </div>
  
  

@endsection