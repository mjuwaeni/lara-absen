@extends('layout.master')
@section('title')
    Halaman Pembimbing
@endsection
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="/postpbb">
                                {{csrf_field()}}
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nama Lengkap" name="name_pbb" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Alamat" name="alamat" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="No. WA" name="wa" type="text">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="user_id">
                                                <option>Membimbing</option>
                                            @foreach ( $users as $i)
                                                <option value="{{ $i->id }}">{{ $i->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block" type="submit">Tambah</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
