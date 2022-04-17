@extends('layouts.dashboard.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            {{-- form input --}}
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah data User</h4>
                        <p class="card-description">
                            Basic form elements
                        </p>
                        @if (Session::get('failed'))
                            <div class="alert alert-warning">{{ Session::get('failed') }}</div>
                        @endif
                        <form class="forms-sample" action="{{ route('store-product') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Merk</label>
                                <select name="merk_id" class="form-control">
                                    <option value="">--Pilih--</option>
                                    @foreach ($merk as $mrk)
                                        <option value="{{ $mrk->id }}">{{ $mrk->merk_product }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" name="nama_product"
                                    placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHarga4">Harga</label>
                                <input type="number" class="form-control" name="harga" id="exampleInputHarga4"
                                    placeholder="Harga">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSpesifikasi4">Spesifikasi</label>
                                <textarea name="spesifikasi" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" id="exampleSelectGender" name="status">
                                    <option value="0">Unpublish</option>
                                    <option value="1">Publish</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="{{ route('product') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="{{ asset('admin-template/js/file-upload.js') }}"></script>
    @endpush
@endsection
