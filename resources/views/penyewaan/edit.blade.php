@extends('layout.be.template')
@section('title','Edit Penyewaan')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Edit Penyewaan</div>
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

                    <form action="{{ route('penyewaan.update', $penyewaan-> id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label>Nama Customer</label>
                        <input type="text" name="Nama_customer" class="form-control" value="{{$penyewaan->Nama_customer}}">
                    </div>
                    <div class="mb-3">
                        <label>Nama lapangan basket</label>
                        <input type="text" name="Nama_lapangan_basket" class="form-control" value="{{$penyewaan->Nama_lapangan_basket}}">
                    </div>
                    <div class="mb-3">
                        <label>Tanggal sewa</label>
                        <input type="text" name="Tanggal_sewa" class="form-control" value="{{$penyewaan->Tanggal_sewa}}">
                    </div>
                    <div class="mb-3">
                        <label>Jam mulai</label>
                        <input type="text" name="Jam_mulai" class="form-control" value="{{$penyewaan->Jam_mulai}}">
                    </div>
                    <div class="mb-3">
                        <label>Jam selesai</label>
                        <input type="text" name="Jam_selesai" class="form-control" value="{{$penyewaan->Jam_selesai}}">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('penyewaan.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection