@extends('layout.masteradmin')
@section('content1')
<table class="table m-6">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Pembimbing</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $i)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $i['name']}}</td>
            <td>{{ $i['email']}}</td>
            <td>{{ $i->pembimbing['name_pbb']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
