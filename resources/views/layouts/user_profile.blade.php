<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('jquery-3.2.1.js')}}"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-push-8">
            <div class="sidebar">
                <div class="inside">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <i class="fas fa-user-edit"></i>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div class="switch"><a href="#"><p>تغییر رمز</p></a></div>
                            </th>
                            <th>
                                <div class="switch"><a href="#"><p>خروج از حساب</p></a></div>
                            </th>
                        </tr>
                    </table>
                </div>

                <a class="active" href="#home"><p>حساب کاربری شما</p></a>
                <div class="list-options"><a href="#news"><i class="far fa-user"></i>پروفایل</a></div>
                <div class="list-options"><a href="#contact"><i class="fas fa-shopping-cart"></i>همه سفارش ها</a>
                </div>
                <div class="list-options"><a href="#return"><i class="far fa-share-square"></i>درخواست مرجوعی</a>
                </div>
                <div class="list-options"><a href="#favorite"><i class="far fa-star"></i>لیست علاقه مندی ها</a>
                </div>
                <div class="list-options"><a href="#comment"><i class="fas fa-glasses"></i>نقد و نظرات</a></div>

            </div>
        </div>
        <div class="col-sm-8 col-sm-pull-4">
            <div class="content">
                <h2>اطلاعات شخصی</h2>
                <div class="border1">
                    <table class="table table-bordered">

                        <tr>
                            <th><p class="text-info">نام و نام خانوادگی</p>{{$user->name}}</th>
                            <th><p class="text-info">پست الکترونیکی</p>{{$user->email}}</th>

                        </tr>
                        <tr>
                            <th><p class="text-info">شماره تلفن</p>000000000</th>
                            <th><p class="text-info">کدملی</p>00000000</th>
                        </tr>

                    </table>

                    <div class="profile-edit"><a href="#"><i class="far fa-edit"></i>
                            <p>ویرایش اطلاعات شخصی</p></a></div>
                </div>

                <h2>آخرین سفارش ها</h2>

                <div class="border2">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <div class="insidy1">

                                    <span class="label ordered">شماره پیگیری :</span>
                                    <span class="label ordered">قیمت :</span>
                                    <span class="label ordered">مشاهده :</span>
                                </div>
                                @foreach($user->order as $item)
                                    <div class="insidy1">
                                        <div class="inside1">{{$item->order_id}}</div>
                                        <div class="inside1">{{unserialize(base64_decode($item->cart))->totalPrice}}</div>
                                        <div class="inside1"><button>test</button></div>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>