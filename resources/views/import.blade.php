@extends('layouts.master') @section('title', 'Import Excel') @section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="container">
            {{-- notifikasi form validasi --}}
            @if ($errors->has('file'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('file') }}</strong>
            </span>
            @endif
            {{-- notifikasi sukses --}}
            @if ($sukses = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $sukses }}</strong>
            </div>
            @endif
            <div class="row contentadmin justify-content-center tabledetail">
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#importExcel">
                    IMPORT EXCEL
                </button>
                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="{{route('import.excel')}}" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                </div>
                                <div class="modal-body">

                                    {{ csrf_field() }}

                                    <label>Pilih file excel</label>
                                    <div class="form-group">
                                        <input type="file" name="file" required="required">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered" style="width: 100%;margin-top: 40px;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Tipe</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($excels as $excel)
                            <tr>
                                <th scope="col">{{$i}}</th>
                                <th scope="col">{{$excel->popskuid}}</th>
                                <th scope="col">{{$excel->quantity}}</th>
                                <th scope="col">{{$excel->paytype}}</th>
                            </tr> 
                            @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row pagination">
                        {{ $excels->links() }}
                    </div>
            </div>
        </div>
    </div>
</div>

@stop
