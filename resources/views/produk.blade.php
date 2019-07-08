@extends('layouts.master') @section('title', 'Produk') @section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row contentadmin justify-content-center tabledetail">
                <div class="col-md-12">
                    <table class="table table-bordered" style="width: 100%;margin-top: 40px;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">SKU ID</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($produks as $item)
                            <tr>
                                <th scope="col">{{$i}}</th>
                                <th scope="col">{{$item->produk}}</th>
                                <th scope="col">{{$item->sku_id}}</th>
                                <th scope="col">{{$item->harga}}</th>
                            </tr> 
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row pagination">
                        {{ $produks->links() }}
                    </div>
            </div>
        </div>
    </div>
</div>

@stop
