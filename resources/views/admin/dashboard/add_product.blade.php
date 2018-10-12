@extends('layouts.dashboard')

<script src="{{asset('path/to/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('path/to/tinymce/jquery.tinymce.min.js')}}"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#mytextarea'
    });
</script>
@section('content2')
    <div class="add-product-container">
        <div class="form-container">
            <form id="testt" action={{route('add.product.submit')}} method="POST" enctype="multipart/form-data"
                  role="form">
                <fieldset>
                    <legend>اضافه کردن محصول</legend>
                    {{csrf_field()}}
                    <div>
                        <label for="title">عنوان محصول:</label>
                        <input type="text" name="title" placeholder="عنوان" id="title" required>

                    </div>
                    <textarea name="description" title="description" id="mytextarea"></textarea>
                    <input type="number" name="price" placeholder="قیمت" required>
                    <input type="text" name="tag" placeholder="برچسب ها">

                    <div class="mt-3">
                        <label for="size">size</label>
                        <select name="size_id[]" id="size" class="form-control" multiple>
                            @foreach($sizes as $size)
                                <option value={{$size->id}}>{{$size->cloth_size}}{{$size->pants_size}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="color">color</label>
                        <select name="color_id" id="color" class="form-control">
                            @foreach($colors as $color)
                                <option value={{$color->id}}>{{$color->color}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="category">Categories</label>
                        <select name="category_id[]" id="category" class="form-control" multiple>
                            @foreach($categories as $category)
                                <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <img class="img-add-cms" src="" id="output" alt="image" name="image" class="product-image">
                        <!-- set the src -->
                        <label class="img-labl-add-cms" for="image" style="cursor: pointer;">Upload Image</label>
                        <input class="img-input-add-cms" type="file" accept="image/*" name="image" id="image"
                               onchange="loadFile(event)" style="display: none;">


                    </div>


                    <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>

                    <input type="submit" id="submit" value="ایجاد محصول" class="submit">

                    @include('layouts.error')

                </fieldset>
            </form>

        </div>

    </div>

@endsection

<script>
    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
