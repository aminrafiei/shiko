@extends('main.layouts.app')



@section('content')

    <div class="row rtl text-right my-5">
        <div class="col-md-3 category px-0">
            <ul class="list-group category__list">
                <h6 class="category__title">دسته بندی نتایج</h6>
                @foreach($category as $item)
                    <a href="{{route('search.cat',['name'=>$item->name])}}">
                        <li class="list-group-item category__item">{{$item->name}}</li>
                    </a>
                @endforeach
            </ul>


            <div class="card ltr my-3 filter">
                <h5 class="card-header">:برند</h5>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" style="font-size: 12px" class="form-control text-right"
                               placeholder="نام محصول مورد نظر را بنویسید" aria-label="Recipient's username"
                               aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="list-group rtl filter-list">
                        <li class="list-group-item category__item"><input type="checkbox"
                                                                          class="filter-list__input ml-2"
                                                                          aria-label="Checkbox for following text input">Morbi
                            leo risus
                        </li>
                        <li class="list-group-item category__item"><input type="checkbox"
                                                                          class="filter-list__input ml-2"
                                                                          aria-label="Checkbox for following text input">Porta
                            ac consectetur ac
                        </li>
                        <li class="list-group-item category__item"><input type="checkbox"
                                                                          class="filter-list__input ml-2"
                                                                          aria-label="Checkbox for following text input">Vestibulum
                            at eros
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row sort bg-info mb-3 py-2">
                <ul class="sort_list">
                    <span><i class="fas fa-bars mx-2"></i>مرتب سازی بر اساس:</span>
                    <li class="sort__item" style="display: inline-block"><a class="sort__link" href="#">گران ترین</a>
                    </li>
                    <li class="sort__item" style="display: inline-block"><a class="sort__link" href="#">ارزان ترین</a>
                    </li>
                    <li class="sort__item" style="display: inline-block"><a class="sort__link" href="#">پرفروش ترین</a>
                    </li>
                    <li class="sort__item" style="display: inline-block"><a class="sort__link" href="#">محبوب ترین</a>
                    </li>
                    <li class="sort__item" style="display: inline-block"><a class="sort__link" href="#">جدید ترین</a>
                    </li>
                    <li class="sort__item" style="display: inline-block"><a class="sort__link" href="#">پربازدید
                            ترین</a></li>

                </ul>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card card-product">
                            <img class="card-img-top" src="{{asset('images/'.$product->image)}}" alt="Card image cap">
                            <div class="card-body card-product__body">
                                <div class="card-product__text">
                                    <p class="card-text">{{$product->title}}</p>
                                </div>
                                <p class="text-danger">تومان{{$product->price}}</p>
                                <a href="{{route('show.products.details',['id'=>$product->id])}}"
                                   class="btn btn-primary">مشاهده</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row my-3 container-fluid">
            <div class="col-md-8 offset-md-5">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection