@include('inc.header')

	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<form class="form-horizontal" method="POST" action="{{ url('insert') }}">
					{{csrf_field()}}
				  <fieldset>
				    <legend>Laravel CRUD Application</legend>
				    
				      @if(count($errors) >0 )
						@foreach($errors->all() as $error)
							<div class="alert alert-danger">
								{{$error}}
							</div>
						@endforeach
				      @endif
				    <div class="form-group row">
				      <label for="title" class="col-lg-2">Title</label>

					  	<div class="col-lg-10">
					      	<input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter title">
					      	<small id="title" class="form-text text-muted">Try to give unique title.
					      	</small>
					  	</div>
				    </div>
				    <div class="form-group row">
				      <label for="title" class="col-lg-2">Description</label>
					  	<div class="col-lg-10">
					      	 
					      	<textarea name="description" class="form-control" placeholder="Enter description"></textarea>
					      	
					  	</div>
				    </div>
				    
				    <button type="submit" class="btn btn-primary">Submit</button>

				    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>

				  </fieldset>
				</form>
				
			</div>
			
		</div>
	</div>

@include('inc.footer')
