@extends('layout.profile')


@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{ url('foto_pengembalian/' . $pengembalian->foto) }}" width="400px">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <h3>{{ $pengembalian->nama_barang }}</h3>
                        <div class="bg-red py-2 px-3 mt-4">
                            <h2>
                                {{ $pengembalian->nama_pengembali }}
                            </h2>
                        </div>
                        <div class="bg-yellow py-2 px-3 mt-4">
                            <h2>
                                {{ $pengembalian->tanggal }}
                            </h2>
                        </div>
                    </div>
                </div>
                {{-- <div class="row mt-4">
                    <nav class="w-100"></nav>
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                            role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                            role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating"
                            role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                    </nav>
                </div> --}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <tr>
            <th><a href="/pengembalian" class="btn btn-success tbn-sm">Kembali</a></th>
        </tr>
    @endsection
