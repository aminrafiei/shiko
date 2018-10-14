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
            <form id="testt" action={{route('update.product',['id' => $product->id])}} method="POST"
                  enctype="multipart/form-data"
                  role="form">
                <fieldset>
                    <legend>به روز رسانی کردن محصول</legend>
                    {{csrf_field()}}
                    <div>
                        <label for="title">عنوان محصول:</label>
                        <input type="text" name="title" placeholder="عنوان" id="title"
                               value={{$product->title}} required>
                    </div>

                    <textarea name="description" title="description"
                              id="mytextarea">{{$product->description}}</textarea>
                    <input type="number" name="price" placeholder="قیمت" value={{$product->price}} required>
                    <input type="text" name="tag" placeholder="برچسب ها" value={{$product->tag}}>

                    <div>
                        <img src={{asset('images/'.$product->image)}} id="output" alt="image" name="image"
                             class="product-image img-add-cms">
                        <label for="image">image</label>
                        <input id="img" type="file" name="image" onchange="readURL(this);" accept="image/*">
                    </div>

                    <div class="mt-3">
                        <label for="size">sizes</label>
                        <select name="size_id[]" id="size" class="form-control" multiple>
                            @foreach($sizes as $size)
                                <option value={{$size->id}}
                                        {{$product->size->contains('id',$size->id) ? 'selected' : ''}}
                                >{{$size->cloth_size}}{{$size->pants_size}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="color">color</label>
                        <select name="color_id" id="color" class="form-control">
                            @foreach($colors as $color)
                                <option value={{$color->id}}
                                        {{($product->color->id == $color->id) ? 'selected' : ''}}
                                >{{$color->color}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mt-3">
                        <label for="category">Categories</label>
                        <select name="category_id[]" id="category" class="form-control" multiple>
                            @foreach($categories as $category)
                                <option value={{$category->id}}
                                        {{$product->category->contains('id',$category->id) ? 'selected' : ''}}
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <!--<input type="file" class="form-control" name="images[]" placeholder="address" multiple>-->

                    <input type="file" id="uploadFile" name="images[]" multiple accept="image/*"
                           class="form__input form__input--browse" style="display: none"/>

                    <input type="submit" id="submit" value="به روزرسانی محصول" class="submit">

                    @include('layouts.error')

                </fieldset>
            </form>
            <button id="openFrame" onclick="openFrame()">انتخاب عکس</button>
            <div class="mt-5">

                @foreach($product->picture as $image)
                    <img src="{{asset('images/'.$image->picture)}}" class="product-image">
                @endforeach

            </div>
        </div>

        <hr>
    </div>
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection

