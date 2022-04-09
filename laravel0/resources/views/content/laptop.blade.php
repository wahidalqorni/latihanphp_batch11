@extends('layouts.master')

@section('content')
    <h1>Halaman Daftar Laptop</h1>
    <a href="{{ url('/add-laptop') }}" class="btn btn-primary">Add Data</a>

    {{-- {{ $kode }} --}}

    @if (Session::get('kode'))
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Session::get('kode') }}</td>
                    <td>{{ Session::get('nama') }}</td>
                </tr>
            </tbody>
        </table>
    @endif

@endsection