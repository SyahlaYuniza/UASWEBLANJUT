@extends('layout.be.template')
@section('title','Edit Pembayaraan')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Edit Pembayaraan</div>
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

                    <form action="{{ route('pembayaraan.update', $pembayaraan-> id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label>Nama Customer</label>
                        <input type="text" name="Nama_customer" class="form-control" value="{{$pembayaraan->Nama_customer}}">
                    </div>
                    <div class="mb-3">
                        <label>Jumlah Jam Sewa</label>
                        <input type="text" name="Jumlah_jam_sewa" class="form-control" value="{{$pembayaraan->Jumlah_jam_sewa}}">
                    </div>
                    <div class="mb-3">
                        <label>Total bayar</label>
                        <input type="text" name="Jumlah_bayar" class="form-control" value="{{$pembayaraan->jumlah_bayar}}">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('pembayaraan.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection