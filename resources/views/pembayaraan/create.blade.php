@extends('layout.be.template')
@section('title','Tambah Pembayaraan')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Tambah Pembayaraan</div>
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

                    <form action="{{ route('pembayaraan.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                            <label>Customer</label>

                            <select name="Nama_customer" class="form-select">

                                @foreach($data_customer as $row)

                                    <option value="{{ $row->Nama_customer }}">{{ $row->Nama_customer }}</option>

                                @endforeach

                            </select>

                            {{-- <input type="text" name="Nama_customer" class="form-control"> --}}
                        </div>
                    <div class="mb-3">
                        <label>Jumlah jam Sewa</label>
                        <input type="text" name="Jumlah_jam_sewa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Total Bayar</label>
                        <input type="text" name="Jumlah_bayar" class="form-control">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('pembayaraan.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection