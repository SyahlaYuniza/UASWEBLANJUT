@extends('layout.be.template')
@section('title','Data Lapangan Basket')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-12">
            <a href="{{ route('lapbasket.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
        </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Lapangan Basket</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                            <img src="/images/{{ $row->image }}" width="100px">
                            </td>
                            <td>{{ $row->Nama_lapangan_basket }}</td>
                            <td>{{ $row->Lokasi }}</td>
                            <td>{{ $row->Harga }}</td>
                           
                            <td> 

                                <form method="POST" action ="{{ route('lapbasket.destroy', $row->id) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Del" class="btn btn-danger">
                                <a href="{{ route('lapbasket.edit', $row->id) }}"
                                    class="btn btn-warning">Edit</a>
                                </form>
                                        
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

                </div>
            </div>
        </div>
    
</div>
    

@endsection