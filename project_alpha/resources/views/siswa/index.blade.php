<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleBase.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleIndex.css')}}">
    <!-- ICON -->
    <script src="https://kit.fontawesome.com/a1fe272ba9.js" crossorigin="anonymous"></script>
    <title>Data Siswa</title>
</head>

<body>
    @include('sweetalert::alert')
    <nav>
        <div class="container">
            <img src="{{ asset('img/brand.png')}}" alt="Logo">
            <h1>DATA SISWA</h1>
        </div>
    </nav>
    <main>
        <div class="container">
            <button><a href="{{ route('siswa.create')}}">Tambah Siswa</a></button>
            <table>
                <thead>
                    <tr>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{ $data->nis }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->tempat_lahir}}</td>
                        <td>{{ $data->tanggal_lahir}}</td>
                        <td>{{ $data->alamat}}</td>
                        <td>{{ $data->no_telp}}</td>
                        <td>
                            <button><a href="{{ route('siswa.edit', $data->nis) }}">Edit</a></button>
                        </td>
                        <td>
                            <form action="{{ route('siswa.destroy', $data->nis) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <span>Copyright © Made By Virgi</span>
    </footer>
</body>

</html>