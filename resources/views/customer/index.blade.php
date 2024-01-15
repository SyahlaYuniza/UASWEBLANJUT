@extends('layout.be.template')
@section('title','Data Customer')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-12">
            <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
        </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
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
                            <td>{{ $row->Nama_customer }}</td>
                            <td>{{ $row->No_telp }}</td>
                         
                            <td>{{ $row->Alamat }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td> 

                                <form method="POST" action ="{{ route('customer.destroy', $row->id) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Del" class="btn btn-danger">
                                <a href="{{ route('customer.edit', $row->id) }}"
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