@extends('layout.be.template')
@section('title','Data Kasir')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-12">
            <a href="{{ route('kasir.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
        </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kasir</th>
                        <th>Phone</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->Nama }}</td>
                            <td>{{ $row->No_telp }}</td>
                            <td>{{ $row->Alamat }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td> 

                                <form method="POST" action ="{{ route('kasir.destroy', $row->id) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Del" class="btn btn-danger">
                                <a href="{{ route('kasir.edit', $row->id) }}"
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