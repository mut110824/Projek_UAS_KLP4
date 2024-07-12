<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Montir</x-slot> 
<x-slot name="card_title">Detail Montir :: {{ $montir->id }} -  {{ $montir->nama }}</x-slot> 
<x-slot name="card_footer"></x-slot>
<table class="table table-striped table-sm">
    <tr><th>Kode</th><td>{{ $montir->nomor }}</td></tr>
    <tr><th>Nama</th><td>{{ $montir->nama }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $montir->gender }}</td></tr>
    <tr><th>Tanggal Lahir</th><td>{{ $montir->tgl_lahir }}</td></tr>
    <tr><th>Tempat Lahir</th><td>{{ $montir->tmp_lahir }}</td></tr>
    <tr><th>Keahlian</th><td>{{ $montir->keahlian }}</td></tr>
</table>
<div>
    <a href="{{ route('montir.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
