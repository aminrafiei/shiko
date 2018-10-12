@extends('layouts.dashboard')

@section('content2')
    <div class="wrapper-title">
        <div class="content-title">
            <h1>نظرات</h1>

        </div>
    </div>

    <p class="text-right">دسترسی سریع به کامنت ها. برای اطلاعت بیشتر روی تعداد کامنت ها کلیک کنید</p>

    <div class="products-container">

        <form method="POST" action="{{route('publish.comment')}}">
        <table class="steelBlueCols">
            <thead>
            <tr>
                <th>انتخاب</th>
                <th>عنوان</th>
                <th>عنوان محصول</th>
                <th>نویسنده</th>
                <th>توضیحات</th>
                <th>تاریخ انتشار</th>
                <th>تاریخ آپدیت</th>

            </tr>
            </thead>
            <tbody>

            {{csrf_field()}}
            @foreach($comments as $comment)

                    <tr>
                        <td><input name="checkbox[]" type="checkbox" value="{{$comment->id}}"
                                    {{$comment->isShow==1 ? 'checked' : ''}}></td>
                        <td><a href="#">{{$comment->title}}</a></td>
                        <td>
                            <a href={{route('show.products.details',['id'=>$comment->product->id])}}>{{$comment->product->title}}</a>
                        </td>
                        <td><a href="#">{{$comment->user->name}}</a></td>
                        <td><a href="#">{{$comment->description}}</a></td>
                        <td><a href="#">{{$comment->created_at}}</a></td>
                        <td><a href="#">{{$comment->updated_at}}</a></td>
                    </tr>

            @endforeach
            <button onclick="confirmFunction()" class="btn btn-danger delete-product">انتشار</button>
            <input type="submit" id="submit" style="display: none">

            </tbody>
        </table>

        </form>

    </div>
    <script>
        function confirmFunction() {
            if (confirm('آيا مطمعن هستيد كه ميخواهيد موارد انتخابي را انتشار دهید؟')) {
                document.getElementById("submit").click();
            }
        }
    </script>
@endsection