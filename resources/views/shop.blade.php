@extends('layouts.app',['title'=>'Shoppers - Shop'])

{{-- Section --}}
@section('content')

@include('layouts.slide')
<div class="jumbotron Shop pt-5 pb-3 px-0">
    <h2>All Products</h2>
    <div class="clearfix border py-1 mt-4 optionShop">
        <div class="flex-wrap">
            <button class="btn"><i class="fa fa-th-large"></i></button>
            <button class="btn"><i class="fa fa-th"></i></button>
            <div class="optionDrop">
                <button class="btn">Categories</button>
                <div class="optionDropContent clearfix border">
                    <a href="#">Jacket</a>
                    <a href="#">Wallets</a>
                </div>
            </div>
            <button class="btn">Limit</button>
        </div>
        
    </div>
    <div class="ShopProduct mt-5">
        <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
            <a href="/detail">
                <div class="card-body">
                    <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
                </div>
            </a>
            <div class="card-footer">
                <span class="titleProduct">Supreme Jacket</span>
                <p>$10 - $69</p>
            </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
            <a href="/detail">
                <div class="card-body">
                    <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
                </div>
            </a>
            <div class="card-footer">
                <span class="titleProduct">Supreme Jacket</span>
                <p>$10 - $69</p>
            </div>
        </div>
        <div class="card col-lg-4 col-md-4 col-sm-6 col-6">
            <a href="/detail">
                <div class="card-body">
                    <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
                </div>
            </a>
            <div class="card-footer">
                <span class="titleProduct">Supreme Jacket</span>
                <p>$10 - $69</p>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- ======= --}}
