@extends('admin.layout')
@section('content')
<div class="row">
	{!! Form::open() !!}
	
		@if($errors->any())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
			@endif

			<div class='x_pannel'>
				<div class="x_title">
					<h2 class="sub_title">Page content</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
						
					</ul>
	}
				
<div class="clearfix"></div>
</div>
<div class="x_content">
	<div class="form-group has-feedback" style="position:relative;">
		<label for="name" class="hws_form_label">Title :</label>
		<input type="text" name="title" value="{{$Page->Page_title}}"
		class="form-control" placeholder="Title.." readonly="readonly">
		<span> class="hws_error text-right text-danger">
		{{$errors->first('title')}}
		</span>
	</div>
	
</div>
</div>
</div>
{!! Form::close() !!}










</div>

@endsection
@push('footer-script')