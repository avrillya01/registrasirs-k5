<form method="POST" action="{{ route('pasiens.store') }}">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama"><br>

    <label>No KTP:</label>
    <input type="text" name="no_ktp"><br>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir"><br>

    <label>Alamat:</label>
    <textarea name="alamat"></textarea><br>

    <button type="submit">Simpan</button>
</form>
