@extends('layouts.dashboard')

@section('content2')
    <div class="wrapper-title">
        <div class="content-title">
            <h1>محصولات</h1>
        </div>
    </div>



                <script>
                    function confirmFunction() {
                        if (confirm('آيا مطمعن هستيد كه ميخواهيد موارد انتخابي را حذف كنيد؟')) {
                            document.getElementById("submit").click();
                        }
                    }
                </script>



    <div class="products-container">



            <table class="steelBlueCols">
                <thead>
                <tr>
                    <th>انتخاب</th>
                    <th>عنوان</th>
                    <th>نویسنده</th>
                    <th>تعداد نظرات</th>
                    <th>برچسب ها</th>
                    <th>انتشار</th>
                    <th>تاریخ آپدیت</th>
                    <th>به روزرسانی<</th>

                </tr>
                </thead>
                <tbody>

                <form method="POST" action="{{route('remove.product')}}">
                    {{csrf_field()}}
                    @foreach($products as $product)

                <tr>
                    <td><input name="checkbox[]" type="checkbox" value="{{$product->id}}"></td>
                    <td><a href={{route('show.products.details',['id'=>$product->id])}}>{{$product->title}}</a>
                    </td>
                    <td><a href="#">{{$product->admin->name}}</a></td>
                    <td><a href={{route('comment.details',['id'=>$product->id])}}>{{$product->comment()->count()}}</a></td>
                    <td><a href="#">{{$product->tag}}</a></td>
                    <td><a href="#">{{$product->created_at}}</a></td>
                    <td><a href="#">{{$product->updated_at}}</a></td>
                    <td>
                        <a href="{{"update-product/".$product->id}}">
                            <button type="button" class="btn btn-outline-info mr-sm-3">تغییر</button>
                        </a>
                    </td>
                </tr>
                    @endforeach
                    <button onclick="confirmFunction()" class="btn btn-danger delete-product">حذف</button>
                    <input type="submit" id="submit" style="display: none">
                </form>
                </tbody>
            </table>

        </div>

    @endsection