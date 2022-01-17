@extends('layout.masteradmin')
@section('content1')
<a href="/downloadpdf" class="btn btn-success">Download</a>
<table class="table m-6">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Waktu</th>
            <th scope="col">Status</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>
                <ul type="none">
                    @foreach ($user->absensi as $i)
                    <li>{{ $i->created_at}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul type="none">
                    @foreach ($user->absensi as $i)
                    <li>{{ $i->status}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul type="none">
                    @foreach ($user->absensi as $i)
                    <li>{{ $i->keterangan}}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
