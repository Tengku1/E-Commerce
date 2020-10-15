@extends('layouts.master',['title'=>'Shoppers - Shop'])

{{-- Section --}}
@section('content')

<div class="jumbotron detail bg-transparent">
    <div class="col-md-6 float-left">
        <img src="images/SupJacket.jpg" alt="" srcset="" class="w-100">
    </div>
    <div class="col-md-6 float-left border-left">
        <span class="titleProduct">Supreme Leader Jacket</span>
        <p class="price-lg"><s>Rp. 3.000.000</s> Rp. 10.000.000</p>
        <table class="col-10 text-capitalize mb-3">
            <tr>
                <td>Toko</td>
                <td>pt pencari cinta sejati</td>
            </tr>
            <tr>
                <td>Pengiriman</td>
                <td>Go go power ranger</td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>Supreme</td>
            </tr>
            <tr>
                <td>Dikirim dari </td>
                <td>korea utara</td>
            </tr>
            <tr>
                <td>kuantitas</td>
                <td>
                    <input type="number" class="px-2" min="0" max="69">
                    <span class="small">Tersisa 69</span>
                </td>
            </tr>
        </table>
        <h4>Description : </h4>
        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore in repudiandae distinctio
            perspiciatis enim est? Ea ullam, commodi officiis reprehenderit ipsam dolor quibusdam doloremque voluptate,
            aliquid facilis, vitae qui aperiam?
            Eos ratione minima illo repellendus, eveniet itaque. Odit nam eveniet sapiente veniam beatae repudiandae
            ducimus. Autem sed ea, officia vero facilis, inventore dolorum sunt rem, dolor saepe soluta nisi.
            Laboriosam?
            Iure quisquam similique itaque nihil ipsum unde aspernatur ab tempora! Possimus, eius expedita deleniti at
            illum dolor suscipit tenetur quisquam ab doloremque repellendus, perspiciatis fugiat itaque sapiente
            voluptatum consequatur veritatis?</blockquote>
        <div class="col-md-12 btn-group text-white">
            <div class="btn p-3 bg-info"><i class="fa fa-shopping-basket"></i> Keranjang</div>
            <div class="btn p-3 bg-success"><i class="fa fa-shopping-cart"></i> Beli</div>
        </div>
    </div>
</div>

@endsection
{{-- ======= --}}
