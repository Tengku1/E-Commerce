@extends('layouts.master', ['title' => 'Putri Indonesia'])
@section('content')
@include('layouts.slide')
<div class="container mt-5">
    <div class="col-12 ProductCard mb-5 clearfix">
        <div class="col-12 text-center mb-4" id="categories">
            <h5>Categories</h5>
        </div>
        <div class="card col-md-4 px-2 border-0">
            <div class="card-body border-0">
                <img src="{{secure_asset('images/Supreme-Shoulder-Bag-SS18-Red.jpg')}}" alt="" srcset="" class="w-100 h-100">
                <img src="{{secure_asset('images/Supreme-Shoulder-Bag-SS18-Black.jpg')}}" alt="" srcset="" class="w-100 h-75">
            </div>
            <div class="card-footer border-0 bg-transparent">
                <h5 class="text-center">Supreme Bags</h5>
            </div>
        </div>
        <div class="card col-md-4 px-2 border-0">
            <div class="card-body border-0">
                <img src="{{secure_asset('images/GucciWallets.jpeg')}}" alt="" srcset="" class="w-100 h-100">
                <img src="{{secure_asset('images/GucciWallets2.jpeg')}}" alt="" srcset="" class="w-100 h-75">
            </div>
            <div class="card-footer border-0 bg-transparent">
                <h5 class="text-center">Gucci Wallets</h5>
            </div>
        </div>
        <div class="card col-md-4 px-2 border-0">
            <div class="card-body border-0">
                <img src="{{secure_asset('images/SupJacket.jpg')}}" alt="" srcset="" class="w-100 h-100">
                <img src="{{secure_asset('images/OreoSupreme.jpg')}}" alt="" srcset="" class="w-100 h-75">
            </div>
            <div class="card-footer border-0 bg-transparent">
                <h5 class="text-center">Custom</h5>
            </div>
        </div>
    </div>
</div>
<div class="col-12 clearfix py-5 px-0 text-center bestSeller mb-5 border" id="#bestSeller">
    <div class="col-md-12">
        <button class="btn rounded-0 text-white">Our Best Seller</button>
    </div>
    <div class="col-md-12 mt-5">
        <div class="card col-md-3 px-3 itemBest float-left">
            <div class="card-body">
                <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
                <img src="{{secure_asset('images/OreoSupreme.jpg')}}" alt="" srcset="" class="w-100 h-75">
            </div>
            <div class="card-footer">
                <span>Supreme Jacket</span>
                <span>$10 - $69</span>
            </div>
        </div>
        <div class="card col-md-3 px-3 itemBest float-left">
            <div class="card-body">
                <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="card-footer">
                <span>Supreme Jacket</span>
                <span>$10 - $69</span>
            </div>
        </div>
        <div class="card col-md-3 px-3 itemBest float-left">
            <div class="card-body">
                <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="card-footer">
                <span>Supreme Jacket</span>
                <span>$10 - $69</span>
            </div>
        </div>
        <div class="card col-md-3 px-3 itemBest float-left">
            <div class="card-body">
                <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="card-footer">
                <span>Supreme Jacket</span>
                <span>$10 - $69</span>
            </div>
        </div>
    </div>
</div>

<div class="excellence clearfix px-0 text-center mb-3 text-capitalize">
    <div class="BoxExcellence p-0">
        <div class="col-md-6 descExcellence">
            <h1>Meet Supreme Jacket</h1>
            <span>
                Jaket kualitas terbaik, menampilkan Pemimpin Tertinggi Kim Jong Un. Rasakan sensasi Berdebar yang
                mengamuk di dada Anda, waspadai serangan nuklirnya!

            </span>
        </div>
        <div class="col-md-6 p-0">
            <img src="images/SupJacket.jpg" alt="" srcset="">
        </div>
    </div>
    <div class="BoxExcellence p-0">
        <div class="col-md-6 descExcellence">
            <h1>Oreo Supreme</h1>
            <span>
                Oreoo edisi supreme , dengan rasa seperti anda menjadi supreme leader kim jong unch. Belilah oreo
                supreme, dengan harga terjangkau , hanya $10 - $999 saja.
            </span>
        </div>
        <div class="col-md-6 p-0">
            <img src="images/OreoSupreme.jpg" alt="" srcset="">
        </div>
    </div>
</div>

<div class="jumbotron clearfix py-5 px-0 text-center mt-4 bg-transparent border" id="#followUs">
    <h6 class="text-uppercase">Cara termudah untuk membuat orang mengingat Anda adalah "pinjamlah uang mereka"</h6>
</div>

<div class="col-12 clearfix py-5 px-0 text-center mb-2">
    <h6 class="text-uppercase">our principe</h6>
</div>

<div class="ourPrincipe text-center mb-4 py-5 text-capitalize border">
    <div class="col-md-11 BoxPrincipe mx-5">
        <div class="card col-md-4 border-0 float-left">
            <h2>Header</h2>
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deserunt accusantium rem rerum! Laudantium reprehenderit repudiandae dolorum asperiores facilis,
                necessitatibus aperiam alias eveniet, repellendus</span>
        </div>
        <div class="card col-md-4 border-0 float-left">
            <h2>Header</h2>
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deserunt accusantium rem rerum! Laudantium reprehenderit repudiandae dolorum asperiores facilis,
                necessitatibus aperiam alias eveniet, repellendus</span>
        </div>
        <div class="card col-md-4 border-0 float-left">
            <h2>Header</h2>
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deserunt accusantium rem rerum! Laudantium reprehenderit repudiandae dolorum asperiores facilis,
                necessitatibus aperiam alias eveniet, repellendus</span>
        </div>
    </div>
</div>

<footer class="col-md-12 font-weight-bolder p-4 text-center text-white p-5 clearfix">
    <h4>Follow Us</h4>
    <div class="col-md-12 my-4">
        <i class="fa fa-facebook-square"></i>
        <i class="fa fa-whatsapp"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter-square"></i>
    </div>
    <div class="col-md-12">
        Powered by Tengku
    </div>
</footer>
@endsection
