@extends('layouts.dashboard')

<script src="{{asset('path/to/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('path/to/tinymce/jquery.tinymce.min.js')}}"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#mytextarea'
    });
</script>

@section('cms_content')

    <div class="container my-5 border">

        <form class="form-group" action={{route('add.product.submit')}} method="POST" enctype="multipart/form-data"
              role="form">
            <fieldset>
                {{csrf_field()}}
                <legend class="text-right">اضافه کردن محصول</legend>
                <div class="text-right offset-8">
                    <label for="title">عنوان محصول:</label>
                    <input class="form-control my-2" type="text" name="title" placeholder="عنوان" id="title"
                           required>
                </div>
                <textarea name="description" title="description" id="mytextarea"></textarea>
                <div class="offset-9">
                    <input class="form-control my-2" type="number" name="price" placeholder="قیمت" required>
                    <input class="form-control my-2" type="text" name="tag" placeholder="برچسب ها">
                </div>

                <div class="mt-3 text-right">
                    <label for="size">سایز</label>
                    <select name="size_id[]" id="size" class="form-control text-left" multiple>
                        @foreach($sizes as $size)
                            <option value={{$size->id}}>{{$size->cloth_size}}{{$size->pants_size}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3 text-right">
                    <label for="category">دسته بندی</label>
                    <select name="category_id[]" id="category" class="form-control" multiple>
                        @foreach($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3 text-right">
                    <label for="color">رنگ</label>
                    <select name="color_id" id="color" class="form-control">
                        @foreach($colors as $color)
                            <option value={{$color->id}}>{{$color->color}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <img class="card-img col-md-8 offset-md-5" style="height: 200px;width: 300px" src="" id="output"
                         alt="image" name="image">
                    <label class="form-control btn-outline-primary my-2" for="image" style="cursor: pointer;">Upload
                        Image</label>
                    <input class="img-input-add-cms" type="file" accept="image/*" name="image" id="image"
                           onchange="loadFile(event)" style="display: none;">
                </div>

                <input type="file" class="form-control" name="images[]" placeholder="address" multiple accept="image/*" >
                <em>بیشتر از ۳ عکس اضافه نشود</em>
                <br>
                <input type="submit" id="submit" value="ایجاد محصول" class="btn btn-outline-success my-2 container-fluid">
                @include('layouts.error')
            </fieldset>
        </form>
    </div>

@endsection

<script>
    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
