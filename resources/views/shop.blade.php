@extends('layouts.master',['title'=>'Putri - Shop'])

{{-- Section --}}
@section('content')

@include('layouts.slide')
<div class="jumbotron Shop pt-5 pb-3 px-0">
    <h2>All Products</h2>
    <div class="col-md-12 optionShop p-0 border bg-white mt-3">
        <div class="btn-group flex-wrap">
            <button class="btn">
                <i class="fa fa-th"></i>
            </button>
            <button class="btn">
                <i class="fa fa-th-large"></i>
            </button>
            <button class="btn">
                Sort By <i class="fa fa-list"></i>
            </button>
            <button class="btn">
                Category <i class="fa fa-arrow-down"></i>
            </button>
            <button class="btn">
                Limits <i class="fa fa-sort-numeric-asc"></i>
            </button>
        </div>
    </div>
    <div class="ShopProduct mt-4">
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
