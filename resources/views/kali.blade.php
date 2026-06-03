@extends('main')
@section('content')
<br><br>
<form action="{{ route('action-kali') }}" method="post">
    @csrf
    {{-- input csrf token --}}
    <label for="">Angka 1</label>
    <input type="text" placeholder="Masukkan Angka 1" name="angka_1"><br><br>
    <label for="">Angka 2</label>
    <input type="text" placeholder="Masukkan Angka 2" name="angka_2">
    <br><br>
    <button type="submit">Proses</button>
</form>

<h1>Hasilnya = {{ $kali }}</h1>

@endsection
