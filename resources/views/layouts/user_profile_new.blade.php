@extends('')


@section('')

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ویرایش اطلاعات</h5>
                <div class="row">
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>نام و نام خانوادگی:</p>
                            <p>رضا میردامادی</p>
                        </div>
                    </div>
                    <div class="col-6 block-item" >
                        <div class="mt-2 text-muted">
                            <p>پست الکترونیکی:</p>
                            <p>info@gmial.com</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 block-item" >
                        <div class="mt-2 text-muted">
                            <p>شماره تلفن همراه:</p>
                            <p>09123456789</p>
                        </div>
                    </div>
                    <div class="col-6 block-item" >
                        <div class="mt-2 text-muted">
                            <p>کد ملی:</p>
                            <p>0012345678</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>دریافت خبرنامه:</p>
                            <p>خیر</p>
                        </div>
                    </div>
                    <div class="col-6 block-item">
                        <div class="mt-2 text-muted">
                            <p>شماره کارت:</p>
                            <p>-</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="btn btn-primary mt-3">ویرایش اطلاعات شخصی</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">لیست آخرین علاقه مندی ها</h5>
                <div class="row">
                    <div class="col-12 block-item">
                        <div class="row" style="height: 100%">
                            <div class="col-3">
                                <img class="card-img-overlay" src="{{ asset('images/smiling.png') }}" alt="Card image cap" style="width: 100px;height: auto">
                            </div>
                            <div class="col-6">
                                <p>محصول1</p>
                                <span class="text-danger">12000</span>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 block-item">
                        <div class="row" style="height: 100%">
                            <div class="col-3">
                                <img class="card-img-overlay" src="{{ asset('images/smiling.png') }}" alt="Card image cap" style="width: 100px;height: auto">
                            </div>
                            <div class="col-6">
                                <p>محصول1</p>
                                <span class="text-danger">12000</span>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 block-item">
                        <div class="row" style="height: 100%">
                            <div class="col-3">
                                <img class="card-img-overlay" src="{{ asset('images/smiling.png') }}" alt="Card image cap" style="width: 100px;height: auto">
                            </div>
                            <div class="col-6">
                                <p>محصول1</p>
                                <span class="text-danger">12000</span>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary mt-3">مشاهده و ویرایش لیست مورد علاقه</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        <h5>آخرین سفارش ها</h5>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">شماره سفارش</th>
                <th scope="col">تاریخ ثبت سفارش</th>
                <th scope="col">مبلغ قابل پرداخت</th>
                <th scope="col">مبلغ کل</th>
                <th scope="col">عملیات پرداخت</th>
                <th scope="col">جزییات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><a href="#" class="btn btn-primary">جزییات</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><a href="#" class="btn btn-primary">جزییات</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><a href="#" class="btn btn-primary">جزییات</a></td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection