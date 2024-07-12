<x-layout>
    <x-slot name="title">Tambah Data Montir</x-slot>
    <x-slot name="card_title">Form Tambah Data Montir</x-slot>
    <x-slot name="card_footer"></x-slot>
    
    <form action="{{ route('montir.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nomor">Nomor</label>
            <input type="number" name="nomor" id="nomor" value="{{ old('nomor') }}" class="form-control">
            <x-input-error :messages="$errors->get('nomor')" class="mt-2" />
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control">
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-select form-select-lg mb-3">
                <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}" class="form-control">
            <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2" />
        </div>
        <div class="form-group">
            <label for="tmp_lahir">Tempat Lahir</label>
            <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ old('tmp_lahir') }}" class="form-control">
            <x-input-error :messages="$errors->get('tmp_lahir')" class="mt-2" />
        </div>
        <div class="form-group">
            <label for="keahlian">Keahlian</label>
            <textarea name="keahlian" id="keahlian" class="form-control">{{ old('keahlian') }}</textarea>
            <x-input-error :messages="$errors->get('keahlian')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('montir.show') }}" class="btn btn-success mr-2">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</x-layout>
