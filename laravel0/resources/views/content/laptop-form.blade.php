@extends('layouts.master')

@section('content')
    <h2>Form Input</h2>
    <form action="{{ url('/store-laptop') }}" method="post">
        @csrf
        Kode : <input type="text" name="kode" required>
        <br>
        Nama Laptop : <input type="text" name="nama" required>
        <br>
        <button class="btn btn-primary" type="submit">Proses</button>
    </form>
@endsection