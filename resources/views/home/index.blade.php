@extends('layout.master')
@section('title')
    Halaman Absen
@endsection
@section('content')

<div class="container">
    <div class="row mx-auto">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Selamat Datang {{ Auth::user()->name }} - <a href="/logout" class="btn btn-danger">Logout</a> </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="/absensi">
                        <fieldset>
                            {{ csrf_field() }}
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" placeholder="Keterangan" name="keterangan" autofocus></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Absen</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
