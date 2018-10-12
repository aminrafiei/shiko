@extends('layouts.dashboard')

@section('content2')



	<div class = "text-center">
		<div class = "mt-5">
			available offers:
			<div class = "ml-3">
				<form id = "ychix" action = "{{route('remove.special.product')}}" method = "POST">
					@csrf
					@foreach($sliBars as $slibar)
						<a><input name = "checkbox[]" type = "checkbox" value = "{{$slibar->id}}"><img
									src = "{{asset('images/'.$slibar->image)}}" alt = "asd" name = "asd"
									class = "product-image">
						</a>
						<a href = "{{"edit-special-product/".$slibar->id}}">
							<button type = "button" class = "btn btn-outline-info mr-sm-3">تغییر</button>
						</a>
					@endforeach
					<button onclick = "confirmFunction()" class = "btn btn-danger delete-product btn-special-product">حذف</button>
					<input type = "submit" id = "submit" style = "display: none">
				</form>

				<script>
                    function confirmFunction() {
                        if (confirm('آيا مطمعن هستيد كه ميخواهيد موارد انتخابي را حذف كنيد؟')) {
                            document.getElementById("submit").click();
                        }
                    }
				</script>
			</div>
			<hr>
		</div>
		<button id = "openFrame" onclick = "openFrame()">انتخاب عکس</button>
	</div>
	<div>
		<form id = "ychizi" action = "{{route('special.product.submit')}}" method = "POST">
			@csrf
			<input type = "text" name = "getId" placeholder = "Id" style = "margin: 200px">
			<input type = "submit" name = "submit" value = "Submit">
			@if(Session::has('message'))
				<div class = "alert" style = "background: red">
					<a style = "margin-bottom: 200px">
						{{Session::get('message')}}
					</a>
				</div>
			@endif
		</form>
	</div>

	<div class = "form--slider form--slider2" id = "sliderFrame" style = "display: none">
		<div class = "ml-3">
			<button id = "closeFrame" onclick = "closeFrame()" class = "btn--close">X</button>
			<form id = "testt" action = {{route('special.product.submit')}} method="POST"
			      enctype = "multipart/form-data"
			      role = "form" class = "form form--image-selector">
				@csrf

				<div class = "image-selector">
					<label for = "uploadFile" class = "upload-file"><span>انتخاب عکس</span>
						<input type = "file" id = "uploadFile" name = "uploadFile[]" multiple accept = "image/*"
						       class = "form__input form__input--browse" style = "display: none"/>
					</label>

					<button id = "submit" class = "form__submit">ثبت</button>

				</div>

			</form>
			<div id = "image_preview" class = "image-preview"></div>
		</div>
	</div>

@endsection