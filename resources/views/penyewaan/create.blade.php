@extends('layout.be.template')
@section('title','Tambah Penyewaan')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Tambah Penyewaan</div>
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

                    <form action="{{ route('penyewaan.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                            <label>Customer</label>

                            <select name="Nama_customer" class="form-select">

                                @foreach($data_customer as $row)

                                    <option value="{{ $row->Nama_customer }}">{{ $row->Nama_customer }}</option>

                                @endforeach

                            </select>

                            {{-- <input type="text" name="customer_id" class="form-control"> --}}
                        </div>
                        <div class="mb-3">
                            <label>Nama Lapangan Basket</label>

                            <select name="Nama_lapangan_basket" class="form-select">

                                @foreach($data_lapbasket as $row)

                                    <option value="{{ $row->Nama_lapangan_basket }}">{{ $row->Nama_lapangan_basket }}</option>

                                @endforeach

                            </select>

                            {{-- <input type="text" name="customer_id" class="form-control"> --}}
                        </div>
                    <div class="mb-3">
                        <label>Tanggal sewa</label>
                        <input type="date" name="Tanggal_sewa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Jam mulai</label>
                        <input type="text" name="Jam_mulai" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Jam selesai</label>
                        <input type="text" name="Jam_selesai" class="form-control">
                    </div>
                 
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('penyewaan.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection