<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Laravel</title>
</head>
<body>
<h1>{{ $title ?? '' }}</h1>
{{-- routing yang bodo amat --}}
<a href="/tambah">Tambah</a>
{{-- routing yang sering digunakan atau tidak terlalu rumit --}}
<a href="{{ url('penjumlahan/tambah') }}">Kurang</a>
{{-- routing yang rumit, dikarenakan terdapat case sensitive. tapi dijelasin salahnya dimana --}}
<a href="{{ route('kali') }}">Kali</a>
<a href="{{ route('bagi') }}">Bagi</a>
<a href="{{ url()->previous() }}">Kembali</a>
</body>
</html>
