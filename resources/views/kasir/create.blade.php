@extends('layout.be.template')
@section('title','Tambah Kasir')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
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

                    <form action="{{ route('kasir.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Kasir</label>
                        <input type="text" name="Nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>No telp</label>
                        <input type="text" name="No_telp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" name="Alamat" class="form-control">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('kasir.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection