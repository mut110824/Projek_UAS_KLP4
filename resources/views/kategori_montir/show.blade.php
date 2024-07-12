            <x-layout>
                <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
                <x-slot name="title">Data Kategori Montir</x-slot>
                <x-slot name="card_title">Daftar Kategori Montir Aktif</x-slot>
                <x-slot name="card_footer"></x-slot>

                <h2 class="text-center">Data Kategori Montir</h2>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_kategori_montir as $kategori_montir)
                        <tr>
                            <td>{{ $kategori_montir->id }}</td>
                            <td>{{ $kategori_montir->nama}}</td>
                            <td>
                                <a href="{{ route('kategori_montir.view', $kategori_montir->id) }}" class="btn btn-transparent"><i
                                        class="fas fa-eye text-info"></i></a>
                                <a href="{{ route('kategori_montir.edit', $kategori_montir->id) }}" class="btn btn-transparent"><i
                                        class="fas fa-edit text-warning"></i></a>
                                <form action="{{ route('kategori_montir.destroy', $kategori_montir->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-transparent"><i
                                            class="fas fa-trash text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-layout>
