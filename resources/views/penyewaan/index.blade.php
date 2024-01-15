@extends('layout.be.template')
@section('title','Data Penyewaan')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-12">
            <a href="{{ route('penyewaan.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
        </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                       <th>Nama Customer</th>
                        <th>Nama lapangan basket</th>
                        <th>Tanggal Sewa</th> 
                        <th>Jam Mulai</th> 
                        <th>Jam Selesai </th> 
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->Nama_customer }}</td>
                            <td>{{ $row->Nama_lapangan_basket }}</td>
                            <td>{{ $row->Tanggal_sewa}}</td>
                            <td>{{ $row->Jam_mulai}}</td>
                            <td>{{ $row->Jam_selesai}}</td>
                           
                            <td> 

                                <form method="POST" action ="{{ route('penyewaan.destroy', $row->id) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Del" class="btn btn-danger">
                                <a href="{{ route('penyewaan.edit', $row->id) }}"
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