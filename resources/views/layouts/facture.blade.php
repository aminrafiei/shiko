<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('fontawesome/css/all.css')}}">
</head>
<body>

<div class="main-container">
    <div class="map">
        <div class="map__item">
            <div class="map__icon map__icon--circle">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="map__text"><span>سبدخرید</span></div>
        </div>
        <div class="map__item">
            <div class="map__icon map__icon--circle">
                <i class="far fa-clipboard"></i>
            </div>
            <div class="map__text"><span>سبدخرید</span></div>
        </div>
        <div class="map__item">
            <div class="map__icon map__icon--circle">
                <i class="fas fa-gift"></i>
            </div>
            <div class="map__text"><span>سبدخرید</span></div>
        </div>
    </div>
    <div class="user-information">
        <div class="user-information__title">نام و آدرس تحویل گیرنده</div>
        <div class="user-information__content">
            <table>
                <tr>
                    <td><strong>گیرنده:</strong></td>
                    <td><span>سیروان </span><span>خسروی</span></td>
                </tr>
                <tr>
                    <td>شماره تماس:</td>
                    <td>0900000000</td>
                </tr>
                <tr>
                    <td>کد پستی:</td>
                    <td>0000000000</td>
                </tr>
                <tr>
                    <td>نشانی:</td>
                    <td>تهران</td>
                </tr>

            </table>
        </div>
    </div>
    <div class="products-list">
        <div class="products-list__title"><h1>لیست کالاهای انتخابی شما</h1></div>
        <div class="products-list__item">
            <div class="products-list__name">
                <strong style="">جالبه</strong>
                <img src="" alt="sirco" class="products-list__image">
            </div>
            <div class="products-list__number">
                <p><span> تعداد</span><span> 2</span><span> عدد</span></p>
            </div>
            <div class="products-list__price">
                <table>
                    <tr>
                        <td>قیمت:</td>
                        <td>100000</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="products-list__facture">
            <div class="products-list__bill">
                <table>
                    <tr>
                        <td>تخفیف:</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>هزینه ارسال:</td>
                        <td>10000</td>
                    </tr>
                    <tr>
                        <td>مبلغ قابل پرداخت:</td>
                        <td>10000</td>
                    </tr>
                </table>
            </div>

            <div class="products-list__pay">
                <form action="" role="form">
                    <div>
                        <label for="place-pay">پرداخت در محل</label>
                        <input type="radio" name="pay" id="place-pay">
                    </div>
                    <div>
                        <label for="online-pay">پرداخت آنلاین</label>
                        <input type="radio" name="pay" id="online-pay">
                    </div>
                    <button type="submit">تایید و پرداخت</button>
                </form>

            </div>
        </div>
    </div>

</div>

</body>
</html>