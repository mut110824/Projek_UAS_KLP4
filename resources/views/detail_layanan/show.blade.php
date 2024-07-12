<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Detail Layanan</x-slot> 
<x-slot name="card_title">Daftar Detail Layanan Aktif</x-slot> 
<h2 class="text-center">Data Detail Layanan</h2>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th> 
            <th>Total Biaya</th>
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_detail_layanan as $detail_layanan)
        <tr>
            <td>{{ $detail_layanan->id }}</td>
            <td>{{ $detail_layanan->pekerjaan }}</td>
            <td>{{ $detail_layanan->biaya }}</td>
            <td>
               <form action="{{ route('detail_layanan.destroy', $detail_layanan->id) }}" method="post">
               <a href="{{ route('detail_layanan.view', $detail_layanan->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('detail_layanan.edit', $detail_layanan->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>