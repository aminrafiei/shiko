@extends('layouts.dashboard')
@section('content2')
	<div class="add-product-container">
		<div class="form-container">
			<form id="testt" action={{route('edit.special.product',['id' => $slidebar->id])}} method="POST"
			      enctype="multipart/form-data"
			      role="form">
				<fieldset>
					<legend>به روز رسانی کردن محصول</legend>
					{{csrf_field()}}

					<div class="mt-3">
						<input type="text" name="product_id" placeholder="id">
					</div>

					<input type="submit" id="submit" value="به روزرسانی محصول" class="submit">
					@if(Session::has('message'))
						<div class = "alert" style = "background: red">
							<a style = "margin-bottom: 200px">
								{{Session::get('message')}}
							</a>
						</div>
					@endif
					@include('layouts.error')

				</fieldset>
			</form>

				<img src="{{asset('images/'.$slidebar->image)}}" class="product-image">
		</div>
	</div>
@endsection

