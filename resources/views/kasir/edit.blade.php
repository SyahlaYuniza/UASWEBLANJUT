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

                    <form action="{{ route('kasir.update', $kasir-> id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label>Nama Kasir</label>
                        <input type="text" name="Nama" class="form-control" value="{{$kasir->Nama}}">
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="No_telp" class="form-control" value="{{$kasir->No_telp}}">
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" name="Alamat" class="form-control" value="{{$kasir->Alamat}}">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('kasir.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection