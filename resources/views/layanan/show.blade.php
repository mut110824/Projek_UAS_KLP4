            <x-layout>
                <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
                <x-slot name="title">Data Layanan</x-slot>
                <x-slot name="card_title">Daftar Layanan Aktif</x-slot>
                <x-slot name="card_footer"></x-slot>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Jenis Layanan</th>
                            <th>Total Biaya</th>
                            <th>Rating</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_layanan as $layanan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $layanan->kode }}</td>
                            <td>{{ strtoupper($layanan->nama) }}</td>
                            <td>{{ $layanan->deskripsi }}</td>
                            <td>{{ $layanan->jenis->pekerjaan }}</td>
                            <td>{{ $layanan->total_biaya }}</td>
                            <td>{{ $layanan->rating }}</td>
                            <td>
                                <form action="{{ route('layanan.destroy', $layanan->id) }}" method="post">
                                    <a href="{{ route('layanan.view', $layanan->id) }}" class="btn btn-transparant"><i
                                            class="fas fa-eye text-info"></i></a>
                                    <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-transparant"><i
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