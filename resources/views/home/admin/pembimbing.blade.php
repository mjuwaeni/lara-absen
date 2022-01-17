@extends('layout.masteradmin')
@section('content1')
<a href="/home/admin/add-pbb" class="btn btn-success">Tambah Data</a>
<table class="table m-6">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. WA</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pembimbing as $i)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $i->name_pbb }}</td>
            <td>{{ $i->alamat}}</td>
            <td>{{ $i->wa}}</td>
            <td><a href="/home/admin/{{ $i ->id }}/edit" class="btn btn-warning">Edit</a><a href="/home/admin/{{ $i ->id }}/delete" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
