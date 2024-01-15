@extends('layout.be.template')
@section('title','Edit Customer')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-6">
           
            <div class="card">
                <div class="card-header">Edit Customer</div>
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

                
                    <form action="{{ route('customer.update', $customer-> id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label>Nama Customer</label>
                        <input type="text" name="Nama_customer" class="form-control" value="{{$customer->Nama_customer}}">
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" name="Alamat" class="form-control" value="{{$customer->Alamat}}">
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="No_telp" class="form-control" value="{{$customer->No_telp}}">
                    </div>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{route('customer.index')}}" class="btn btn-warning">Batal</a>
                </form>

                </div>
            </div>
        </div>
    
</div>
    

@endsection