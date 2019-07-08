@extends('layouts.master')
@section('title', 'Dashboard Admin')
@section('content')
        <div class="page-wrapper">
                @csrf
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">TEST</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin/admin">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                    <a href="" style="color:#fff;">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white" >Dashboard</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                    <a href="">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Order</h6></a>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                    <a href="">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Produk</h6></a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                    <a href="">
                                <h1 class="font-light text-white"><i class="mdi mdi-face"></i></h1>
                                <h6 class="text-white">User</h6></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <h4>Detail Pesanan Terkirim</h4>
                            <table class="table table-bordered" style="width: 100%;margin-top: 40px;">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">SKU ID</th>
                                            <th scope="col">Pay Type</th>
                                            <th scope="col">Status Order</th>
                                            <th scope="col">Nama Customer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=1)
                                        
                                        @foreach ($result as $item)
                                        <tr>
                                        <th scope="col">{{$i}}</th>
                                                <th scope="col">{{$item->produk->produk}}</th>
                                                <th scope="col">{{$item->orderid}}</th>
                                                <th scope="col">{{$item->produk->sku_id}}</th>
                                                <th scope="col">{{$item->pembayaran}}</th>
                                                <th scope="col">{{$item->status}}</th>
                                                <th scope="col">{{$item->user->nama}}</th>
                                            </tr>
                                            @php($i++)
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
</div>
            <footer class="footer text-center">
                ReDesigned and ReDeveloped by Wildan</a>.
            </footer>
        </div>

    </div>

@endsection 