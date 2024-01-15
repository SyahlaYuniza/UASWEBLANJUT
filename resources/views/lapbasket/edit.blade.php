@extends('layout.be.template')
@section('title','Edit Kasir')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Edit Kasir</div>
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

                    <form action="{{ route('lapbasket.update', $lapbasket-> id)}}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label>Gambar</label>
                        <input type="file" name="image" class="form-control">
                        <img src="/images/{{ $lapbasket->image }}" width="300px">
                    </div>
                    <div class="mb-3">
                        <label>Nama Lapangan Basket</label>
                        <input type="text" name="Nama_lapangan_basket" class="form-control" value="{{$lapbasket->Nama_lapangan_basket}}">
                    </div>
                    <div class="mb-3">
                        <label>Lokasi</label>
                        <input type="text" name="Lokasi" class="form-control" value="{{$lapbasket->Lokasi}}">
                    </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="text" name="Harga" class="form-control" value="{{$lapbasket->Harga}}">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('lapbasket.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection