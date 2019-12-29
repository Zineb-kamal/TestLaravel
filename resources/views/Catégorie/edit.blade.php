@extends('Parties.master')
@section('content')
		
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form   method ="POST" action="{{ url('Catégories/'.$catg->id)}}">
				@csrf
				@method('PUT')
				<div class="form-group" >
					<label for="name">Nom :</label>
					<input type="text" class="form-control @if($errors->get('name')) is-invalid @endif" name="name" value="{{ old('name',$catg->name )}}">
					@if($errors->get('name'))
					  @foreach($errors->get('name') as $err)
					       <ul><li>{{$err}}</li></ul>
					     @endforeach
					@endif
				</div>
				<div class="from-group ">
					<label for="slug">Prenom:</label>
					<input type="text" class="form-control @if($errors->get('slug')) is-invalid @endif" name="slug" value="{{old('slug',$catg->slug)}}" >
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