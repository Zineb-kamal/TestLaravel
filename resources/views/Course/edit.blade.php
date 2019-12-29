@extends('Parties.master')
@section('content')
		
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form   method ="POST" action="{{ url('Courses/'.$course->id)}}">
				@csrf
				@method('PUT')
				<div class="form-group" >
					<label for="category_id'">Category Id :</label>
					<input type="text" class="form-control  @if($errors->get('category_id')) is-invalid @endif" name="category_id" value="{{old('category_id',$course->category_id)}}">
					@if($errors->get('category_id'))
					@foreach($errors->get('category_id') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
					@endif	
				</div>

				<div class="form-group" >
					<label for="name">Name :</label>
					<input type="text" class="form-control @if($errors->get('name')) is-invalid @endif" name="name" value="{{ old('name',$course->name )}}">
					@if($errors->get('name'))
					  @foreach($errors->get('name') as $err)
					       <ul><li>{{$err}}</li></ul>
					     @endforeach
					@endif
				</div>

				<div class="from-group ">
					<label for="description">Description:</label>
					<textarea type="text" class="form-control @if($errors->get('description')) is-invalid @endif" name="description"  >
					{{old('description')}}
					</textarea>
					@if($errors->get('description'))
					@foreach($errors->get('description') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
					@endif	
				</div>

				<div class="from-group ">
					<label for="slug">Prenom:</label>
					<input type="text" class="form-control @if($errors->get('slug')) is-invalid @endif" name="slug" value="{{old('slug',$course->slug)}}" >
					@if($errors->get('slug'))
					@foreach($errors->get('slug') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
					@endif	
				</div>

				<div class="from-group">
					<input type="submit" class="form-control btn btn-primary" value="Edit" >
				</div>
			</form>
		</div>
	</div>
</div>
@endsection