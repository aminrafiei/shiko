@extends('layouts.index')
<script src="{{asset('jquery-3.2.1.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
<link href="{{asset('icomoon/style.css')}}" rel="stylesheet">
@section('content')

    <div class="container-fluid">

        <div class="images col-xs-12 col-md-6 col-md-push-6">
            <img src="{{asset('images/'.$product->image)}}" class="main-image" alt="picture!">
            @foreach($product->picture as $picture)
                <img src="{{asset('images/'.$picture->picture)}}" class="sub-image" alt="picture!">
            @endforeach
        </div>
        <div class="product-details-container col-xs-12 col-md-6 col-md-pull-6">
            <div class="product-details">
                <div class="product-title">
                    <h1>{{$product->title}}</h1>
                </div>
                <div class="product-price">
                    <strong>{{$product->price}}</strong>
                </div>


                <form action="{{route('add.to.cart',['id' => $product->id])}}" method="post">
                    @csrf
                    <div class="product-color">
                        <div class="text">
                            <span style="display: inline-block">رنگ:</span>
                        </div>
                    {{$product->color->color}}

                    </div>
                    <div class="product-size">
                        <div class="text">
                            <span style="display: inline-block">انتخاب سایز:</span>
                        </div>

                        <select name="size">
                            @foreach($product->size as $size)
                                @if($size->pivot->qty > 0)
                                    <option value="{{$size->id}}">{{$size->cloth_size}}{{$size->pants_size}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="group-images">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    @if($product->total_qty > 0)
                        <div class="product-add">
                            <button class="add-to-cart"><i
                                        class="fas fa-shopping-cart"></i> افزودن به سبد خرید
                            </button>

                            <a href="#" class="add-to-fav"><i class="fas fa-heart"></i></a>

                        </div>
                    @else
                        <h3>تمام شده</h3>
                    @endif
                </form>
                <div class="product-advantages">

                    <ul>
                        <li>
                            <i class="icon-credit-card-alt"></i>

                        </li>
                        <li>
                            <i class="icon-dollar"></i>

                        </li>
                        <li>
                            <i class="icon-grip-horizontal-solid"></i>

                        </li>
                        <li>
                            <i class="icon-checkmark"></i>

                        </li>
                    </ul>

                </div>
                <div class="product-property">
                    <strong>ویژگی های محصول:</strong>
                    <ul>
                        <li>
                            <p>
                                {!!$product->description!!}
                            </p>
                        </li>
                        <li>
                            <p>
                                {!!$product->description!!}
                            </p>
                        </li>
                        <li>
                            <p>
                                {!!$product->description!!}
                            </p>
                        </li>
                        <li>
                            <p>
                                {!!$product->description!!}
                            </p>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="product-hmmm">
        <ul class="nav nav-tabs">
            <li id="comments_btn" class="active"><a href="#information" onclick="show_comments()">نظرات کاربران</a></li>
            <li id="information_btn"><a href="#comments" onclick="show_information()">مشخصات محصول</a></li>
        </ul>
        <div class="comments" id="comments">

            @guest
                <div class="container-form">
                    <p>
                        please <a href={{route('register')}}>sign-up</a> for submit your comment!
                        or if you already have account , <a href={{route('login')}}>login</a> for more...
                    </p>
                </div>
                @else
                    <div class="container-form">
                        <div class="jalebe" style="height: 550px">
                            <form action={{route('new.comment',['id' => $product->id])}} method="post" role="form">
                                @csrf
                                <input type="text" name="title" placeholder="عنوان نظر" class="comment-title" required>
                                <textarea type="text" name="description" placeholder="نظر خود را بنویسید..."
                                          class="comment-text"
                                          required></textarea>
                                <input type="submit" class="comment-submit" value="ثبت نظر">

                            </form>
                        </div>
                    </div>
                    @endguest


                    @foreach($product->comment as $comment)
                        @if($comment->isShow == 1)
                            <div class="user-comment">
                                <p>{{$comment->title}}</p>
                                <div class="comment-text">
                                    <p>
                                        {{$comment->description}}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
        </div>

        <div class="information" id="information">
            <table>
                <tr>
                    <td>جنس</td>
                    <td class="second-col">کتان</td>
                </tr>
                <tr>
                    <td>جنس</td>
                    <td class="second-col">کتان</td>
                </tr>
                <tr>
                    <td>جنس</td>
                    <td class="second-col">کتان</td>
                </tr>

            </table>
        </div>
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