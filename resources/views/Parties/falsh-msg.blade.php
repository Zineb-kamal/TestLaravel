@if($message=session()->get('success'))
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
           <div class="alert alert-success alert-block">
              <button class="close" data-dismiss="alert">×</button>
	          <strong>{{$message}}</strong>
          </div>
        </div>	
    </div>
</div>
@endif