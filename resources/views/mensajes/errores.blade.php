<div class="row">
	<div class="col-lg-12">
	
		
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
	
			@endif
	</div>
</div>