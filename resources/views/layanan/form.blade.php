<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah Data Layanan</x-slot>
    <x-slot name="card_title">Form Tambah Data Layanan</x-slot>
    <x-slot name="card_footer"></x-slot>
    <form action="{{ route('layanan.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode">Kode </label>
            <input type="number" name="kode" id="kode" value="{{ $layanan->kode}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="nama" name="nama" id="nama" value="{{ $layanan->nama }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $layanan->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="rating">Jenis Layanan</label>
            <input type="number" name="rating" id="rating" value="{{ $layanan->rating}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="rating">Total Biaya</label>
            <input type="number" name="rating" id="rating" value="{{ $layanan->rating}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" value="{{ $layanan->rating}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="montir_id">Montir</label>
            <select name="montir_id" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_montir as $montir)
                <option value="{{ $montir->id }}" {{ $layanan->montir_id==$montir->id ? 'selected': ''}}>
                    {{ $montir->nama }}
                </option>
                @endforeach
            </div>
            <input type="hidden" name="id" value="{{ $layanan->id }}">
            <a href="{{ route('layanan.show') }}" class="btn btn-success mr-2">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>