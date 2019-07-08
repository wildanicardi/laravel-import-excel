@extends('layouts.master') @section('title', 'Order') @section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row contentadmin justify-content-center tabledetail">
                    <div class="col-md-4">

                    <form method="POST" action="{{route('update.order')}}">
                                @csrf
                                <button class="btn btn-danger" type="submit">update Order
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                <div class="col-md-12">
                    <table class="table table-bordered" style="width: 100%;margin-top: 40px;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($data as $item)
                            <tr>
                                <th scope="col">{{$i}}</th>
                                <th scope="col">{{$item->produk->produk}}</th>
                                <th scope="col">{{$item->qty}}</th>
                                <th scope="col">{{$item->pembayaran}}</th>
                                <th scope="col">{{$item->user->nama}}</th>
                                <th scope="col">{{$item->status}}</th>
                            </tr> 
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row pagination">
                        {{ $data->links() }}
                    </div>
            </div>
        </div>
    </div>
</div>

@stop
