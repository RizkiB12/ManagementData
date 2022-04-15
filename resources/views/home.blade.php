@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-10 p-3 border bg-white rounded rounded-xl">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama</th>
                            <th scope="col">TTL</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Riwayat Pekerjaan</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldatapegawai as $pegawai)
                            <tr>
                                {{-- <th scope="row">{{ $pegawai->id }}</th> --}}
                                <td>{{ $pegawai->nama }}</td>
                                <td>{{ $pegawai->tempat_lahir }}, {{ $pegawai->tgl_lahir }}</td>
                                <td>{{ $pegawai->alamat }}</td>
                                <td>{{ $pegawai->riwayat_pekerjaan }}</td>
                                <td>{{ $pegawai->ktp }}</td>
                                <td>{{ $pegawai->category }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
