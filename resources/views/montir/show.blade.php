<!-- resources/views/montir/show.blade.php -->

<x-layout>
    <x-slot name="title">Data Montir</x-slot> 
    <x-slot name="card_title">Daftar Montir</x-slot> 
    <x-slot name="card_footer"></x-slot>

    <h2 class="text-center">Data Montir</h2>
                <a href="{{ route('montir.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah
                            Data</i></button></a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Keahlian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_montir as $montir)
            <tr>

                <td>{{ $montir->id }}</td>
                <td>{{ $montir->nama }}</td>
                <td>{{ $montir->gender }}</td>
                <td>{{ $montir->tgl_lahir }}</td>
                <td>{{ $montir->tmp_lahir }}</td>
                <td>{{ $montir->keahlian }}</td>
                <td>
                    <form action="{{ route('montir.destroy', $montir->id) }}" method="post">
                        <a href="{{ route('montir.view', $montir->id) }}" class="btn btn-transparant"><i
                                class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('montir.edit', $montir->id) }}" class="btn btn-transparant"><i
                                class="fas fa-edit text-warning"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparant"><i
                                class="fas fa-trash text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
