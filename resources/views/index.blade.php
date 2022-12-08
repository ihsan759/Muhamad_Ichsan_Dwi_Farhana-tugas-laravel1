@extends('parent')

@section('content')

@php
    $data = [
        [
            "nama" => "fulan",
            "foto" => "https://picsum.photos/200",
            "bio" => "11-10-2010 laki-laki",
            "active" => false,
            "alamat" => "jl sindangjaya",
            "role" => "admin"
        ],
        [
            "nama" => "fulanah",
            "foto" => "https://picsum.photos/200",
            "bio" => "10-10-2010 perempuan",
            "active" => true,
            "alamat" => "jl asia-afrika",
            "role" => "user"
        ],
        [
            "nama" => "jamet",
            "foto" => "https://picsum.photos/200",
            "bio" => "9-10-2010 laki-laki",
            "active" => false,
            "alamat" => "jl sukabumi",
            "role" => "user"
        ],
        [
            "nama" => "maimunah",
            "foto" => "https://picsum.photos/200",
            "bio" => "9-10-2000 perempuan",
            "active" => false,
            "alamat" => "jl sukabumi",
            "role" => "user"
        ],
        [
            "nama" => "Mr. Been",
            "foto" => "https://picsum.photos/200",
            "bio" => "9-10-2001 laki-laki",
            "active" => false,
            "alamat" => "jl priangan",
            "role" => "user"
        ],
        [
            "nama" => "ahmad",
            "foto" => "https://picsum.photos/200",
            "bio" => "9-11-2001 laki-laki",
            "active" => true,
            "alamat" => "jl padalarang",
            "role" => "admin"
        ],
        [
            "nama" => "budi",
            "foto" => "https://picsum.photos/200",
            "bio" => "8-10-2001 laki-laki",
            "active" => false,
            "alamat" => "jl pringgolayan",
            "role" => "user"
        ],
        [
            "nama" => "joko",
            "foto" => "https://picsum.photos/200",
            "bio" => "1-10-2001 laki-laki",
            "active" => true,
            "alamat" => "jl priangan",
            "role" => "user"
        ],
        [
            "nama" => "roni",
            "foto" => "https://picsum.photos/200",
            "bio" => "2-10-2001 laki-laki",
            "active" => true,
            "alamat" => "jl priangan",
            "role" => "user"
        ],
        [
            "nama" => "teguh",
            "foto" => "https://picsum.photos/200",
            "bio" => "12-12-2012 laki-laki",
            "active" => true,
            "alamat" => "jl buah batu",
            "role" => "admin"
        ],
    ];

    $filters = [
        "active" => true,
        "role" => "admin"
    ];
    $icon = './home.png';
@endphp

@foreach ($data as $d)
    @if($filters['active'] == $d['active'] && $filters['role'] == $d['role'])
        @includeif('components.card', [
            "d" => $d
        ])
    @endif
@endforeach

@endsection
@section('title','Tugas 1 Laravel')
@section('icon', $icon)
