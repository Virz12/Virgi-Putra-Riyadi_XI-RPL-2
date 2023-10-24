<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleBase.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleEditCreate.css')}}">
    <!-- ICON -->
    <script src="https://kit.fontawesome.com/a1fe272ba9.js" crossorigin="anonymous"></script>
    <title>Edit Data Siswa</title>
</head>

<body>
    <nav>
        <div class="container">
            <img src="{{ asset('img/brand.png')}}" alt="Logo">
            <h1>EDIT DATA SISWA</h1>
        </div>
    </nav>
    <main>
        <div class="container">
            <a href="{{ route('siswa.index')}}">
                <i class="fa-solid fa-arrow-left"></i>Kembali
            </a>
            <form method="POST" action="{{ route('siswa.update', $siswa->nis) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for="nis">Nis :</label>
                    <input type="number" id="nis" name="nis" value="{{ $siswa->nis}}" autocomplete="off" required>
                    @error('nis')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="nama">Nama :</label>
                    <input type="text" id="nama" name="nama" value="{{ $siswa->nama }}" autocomplete="off" required>
                    @error('nama')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        @if ($siswa->jenis_kelamin == 'Pria')
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                        @else
                        <option value="Wanita">Wanita</option>
                        <option value="Pria">Pria</option>
                        @endif
                    </select>
                    @error('jenis_kelamin')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="tempat_lahir">Tempat Lahir :</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" autocomplete="off" required>
                    @error('tempat_lahir')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" autocomplete="off" required>
                    @error('tanggal_lahir')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5" required>{{ $siswa->alamat }}</textarea>
                    @error('alamat')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="no_telp">Nomor Telepon :</label>
                    <input type="number" id="no_telp" name="no_telp" value="{{ $siswa->no_telp }}" autocomplete="off" required>
                    @error('no_telp')
                    <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin mengubah data ini?')">Simpan</button>
            </form>
        </div>
    </main>
    <footer>
        <span>Copyright © Made By Virgi</span>
    </footer>
</body>

</html>