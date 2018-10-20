@extends('main.layouts.app')


@section('content')


    <div class="container my-5">

        <div class="row">
            <div class="col-6">
                <div style="">
                    <img src="{{asset('images/'.$product->image)}}" class="img-thumbnail " alt="picture!" style="height: 600px;width: 550px">
                </div>
                <div class="row">
                    @foreach($product->picture as $picture)
                        <div class="col-4 col-sm-6m-12">
                            <img src="{{asset('images/'.$picture->picture)}}" class="img-thumbnail" alt="picture!" style="height: 200px">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-6">
                <h1 class="text-right">{{$product->title}}</h1>
                <h4 class="text-right my-3">قیمت:{{$product->price}} تومان</h4>
                @if($product->total_qty > 0)
                    <h6 class="text-right">موجودی:درانبار</h6>
                @else
                    <h6 class="text-right">موجودی:تمام شده</h6>
                @endif
                <h6 class="text-right">تگ:بدون تگ</h6>
                <h6 class="text-right">دسته بندی:<em>
                        @foreach($product->category as $category)
                            {{$category->name}},
                        @endforeach
                    </em></h6>
                <p class="text-right">{!!$product->description!!}</p>
                <form action="{{route('add.to.cart',['id' => $product->id])}}" method="get">
                    @csrf
                    <div class="form-group text-right">
                        <label for="color">رنگ</label>
                        <label class="form-control">{{$product->color->color}}</label>
                        <small class="form-text text-muted">رنگ های دیگر محصول رو میتوانید جست و جو کنید</small>
                    </div>
                    <div class="form-group text-right">
                        <label for="size">سایز</label>
                        <select name="size" class="form-control">
                            @foreach($product->size as $size)
                                @if($size->pivot->qty > 0)
                                    <option value="{{$size->id}}">{{$size->cloth_size}}{{$size->pants_size}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-outline-info" disabled>اضافه به علاقه مندی</button>
                        <button type="submit"
                                class="btn btn-outline-success" {{$product->total_qty>0 ? null : "disabled"}}>{{$product->total_qty>0 ? "خرید میکنم" : "تمام شده"}}</button>

                    </div>

                </form>
            </div>
        </div>
        <hr>
        <div class="row text-right">
            @foreach($product->comment as $comment)
                @if($comment->isShow == 1)
                    <div class="col-md-8 offset-md-4 my-3">
                        <div class="panel panel-white post panel-shadow">
                            <div class="post-heading">
                                <div class="pull-right image">
                                    <img src="{{asset('images/userimg.jpg')}}" class="img-circle avatar"
                                         alt="user profile image">
                                </div>
                                <div class="pull-left meta">
                                    <div class="title h4">
                                        <a href="#"><b>{{$comment->user->name}}</b></a>
                                    </div>
                                    <h6 class="text-muted my-2">1 minute ago</h6>
                                </div>
                            </div>
                            <br>
                            <div class="post-description">
                                <h5>
                                    {{$comment->title}}
                                </h5>
                                <p>{{$comment->description}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        @guest
            <div class="container-form">
                <p class="text-right">لطفا برای ثبت نظر خود <a href="{{route('login')}}">وارد</a> اکانت خود شوید و در
                    صورت نداشتن حساب <a href="{{route('register')}}"> ثبت نام</a> کنید</p>
            </div>
            @else
                <div class="panel-body">
                    <form class="form-group text-right"
                          action={{route('new.comment',['id' => $product->id])}} method="post" role="form">
                        @csrf
                        <label for="title">نظر خود را بنوسید</label>
                        <input type="text" name="title" placeholder="عنوان نظر" class="form-control text-right"
                               required>
                        <textarea type="text" name="description" placeholder="نظر خود را بنویسید..."
                                  class="form-control text-right"
                                  required></textarea>
                        <input type="submit" class="btn btn-outline-secondary mt-1" value="ثبت نظر">

                    </form>
                </div>
                @endguest
    </div>


    <script>
        function show_information() {
            document.getElementById("comments").style.display = "none";
            document.getElementById("information").style.display = "block";
            document.getElementById("comments_btn").classList.remove("active");
            document.getElementById("information_btn").classList.add("active");
        }

        function show_comments() {
            document.getElementById("information").style.display = "none";
            document.getElementById("comments").style.display = "block"
            document.getElementById("information_btn").classList.remove("active");
            document.getElementById("comments_btn").classList.add("active");

        }
    </script>

@endsection