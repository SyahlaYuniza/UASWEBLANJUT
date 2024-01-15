@extends('layout.be.template')
@section('title','Data Pembayaraan')
@section('content')

<div  class="container px-4 mt-4">
<div class="row">
        <div class="col-md-12">
            <a href="{{ route('pembayaraan.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah
        </a>
            <div class="card">
                <div class="card-header card-body">

                <table class="table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Jumlah Jam Sewa</th>
                        <th>Total bayar</th> 
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->Nama_customer }}</td>
                            <td>{{ $row->Jumlah_jam_sewa }}</td>
                            <td>{{ $row->Jumlah_bayar }}</td>
                           
                            <td> 

                                <form method="POST" action ="{{ route('pembayaraan.destroy', $row->id) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Del" class="btn btn-danger">
                                <a href="{{ route('pembayaraan.edit', $row->id) }}"
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