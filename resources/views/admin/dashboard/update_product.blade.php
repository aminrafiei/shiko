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

        <form class="form-group" action={{route('update.product',['id' => $product->id])}} method="POST"
              enctype="multipart/form-data"
              role="form">
            <fieldset>
                <legend class="text-right">به روز رسانی کردن محصول</legend>
                {{csrf_field()}}
                <div>
                    <label for="title">عنوان محصول:</label>
                    <input class="form-control my-2" type="text" name="title" placeholder="عنوان" id="title"
                           value={{$product->title}} required>
                </div>

                <textarea name="description" title="description"
                          id="mytextarea">{{$product->description}}</textarea>
                <div class="offset-9">
                    <input class="form-control my-2" type="number" name="price" placeholder="قیمت"
                           value={{$product->price}} required>
                    <input class="form-control my-2" type="text" name="tag" placeholder="برچسب ها"
                           value={{$product->tag}}>
                </div>

                <div class="mt-3">
                    <label for="size">سایز</label>
                    <select name="size_id[]" id="size" class="form-control" multiple>
                        @foreach($sizes as $size)
                            <option value={{$size->id}}
                                    {{$product->size->contains('id',$size->id) ? 'selected' : ''}}
                            >{{$size->cloth_size}}{{$size->pants_size}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <label for="category">دسته بندی</label>
                    <select name="category_id[]" id="category" class="form-control" multiple>
                        @foreach($categories as $category)
                            <option value={{$category->id}}
                                    {{$product->category->contains('id',$category->id) ? 'selected' : ''}}
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <label for="color">رنگ</label>
                    <select name="color_id" id="color" class="form-control">
                        @foreach($colors as $color)
                            <option value={{$color->id}}
                                    {{($product->color->id == $color->id) ? 'selected' : ''}}
                            >{{$color->color}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <label class="text-right" for="image">عکس:</label>
                    <img src={{asset('images/'.$product->image)}} id="output" alt="image" name="image"
                         class="card-img col-md-8 offset-md-5" style="height: 200px;width: 300px">
                    <input class="form-control btn-outline-primary my-2" id="img" type="file" name="image"
                           onchange="readURL(this);" accept="image/*">
                </div>
                <!--<input type="file" class="form-control" name="images[]" placeholder="address" multiple>-->

                <input type="file" id="uploadFile" name="images[]" multiple accept="image/*"
                       class="form__input form__input--browse" style="display: none"/>

                <input type="submit" id="submit" value="به روزرسانی محصول"
                       class="btn btn-outline-success container-fluid">

                <div class="my-2 row">
                    @foreach($product->picture as $image)
                        <img src="{{asset('images/'.$image->picture)}}" class="col-4 card-img-top">
                    @endforeach
                </div>
                <input type="file" class="btn btn-outline-primary container-fluid" name="images[]" placeholder="address"
                       multiple accept="image/*">
                <em>بیشتر از ۳ عکس اضافه نشود</em>
            </fieldset>
        </form>
        @include('layouts.error')
    </div>

    <hr>
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection

