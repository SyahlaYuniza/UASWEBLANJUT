@extends('layout.be.template')
@section('title','Tambah Lapangan Basket')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header">Tambah Kasir</div>
                    <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                    <form action="{{ route('lapbasket.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Gambar</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Nama Lapangan Basket</label>
                        <input type="text" name="Nama_lapangan_basket" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Lokasi</label>
                        <input type="text" name="Lokasi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="text" name="Harga" class="form-control">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('lapbasket.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection