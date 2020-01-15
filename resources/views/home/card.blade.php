@extends('layout.headerlog')
@extends('layout.home')
@section('content')
<h1 class="text-center text-purple pb-5" id="firstheading">
    ثبت سفارش
</h1>
<section class="form login-form m-auto">
    <form>
        <div class="form-group">
            <label for="fullname">نام و نام خانوادگی :</label>
            <input type="text" class="form-control" id="fullname" name="fullname">
        </div>
        <div class="form-group">
            <label for="order_type">نوع سفارش :</label>
            <select class="form-control" id="order_type" name="order_type">
                <option value="web"> طراحی سایت</option>
                <option value="seo">سئو</option>
                <option value="graphic"> گرافیک</option>
                <option vlue="branding">برندینگ</option>
                <option value="bussines-cansel">مشاوره تجاری</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">توضیحات:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="phone">شماره تماس:</label>
            <input type="phone" class="form-control" id="phone" name="phone">
        </div>
        <p class="text-center">
            <input type="submit" value="ثبت سفارش" name="submit" class="btn btn-purple">
        </p>
    </form>

</section>
    @endsection