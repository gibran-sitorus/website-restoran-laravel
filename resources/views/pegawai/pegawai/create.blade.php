@extends('layouts.pegawai')

@section('title', 'Tambah Pegawai')

@section('foto_pegawai', $pegawai['foto_pegawai'])
@section('nama_pegawai', $pegawai['nama_pegawai'])
@section('email_pegawai', $pegawai['email_pegawai'])
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')
<div class="col-lg-8">
    <div class="card" style="background: #f5f5f5">
        <div class="basic-form">

            <form method="POST" action="{{URL('pegawai/pelanggan')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input id="name" class="form-control" type="text" name="nama_pegawai" placeholder="Nama" required autofocus>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input id="email" class="form-control" type="email" name="email_pegawai" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input id="username" class="form-control" type="text" name="username_pegawai" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" class="form-control" type="password" name="password_pegawai" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Jabatan Pegawai</label>
                    <select name="jabatan_pegawai" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input id="foto" class="form-control" type="file" name="foto_pegawai" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

            </form>
        </div>
    </div>
</div>
@endsection
