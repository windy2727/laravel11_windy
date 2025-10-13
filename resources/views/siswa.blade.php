<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa & Buku</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top left, #2a004f, #5a00a3, #a400d6);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            min-height: 100vh;
        }

        h1 {
            font-size: 2.6rem;
            font-weight: 700;
            color: #ffe6ff;
            text-shadow: 0 0 15px rgba(255, 192, 255, 0.4);
            margin-bottom: 25px;
            animation: fadeIn 0.8s ease;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            margin-bottom: 25px;
        }

        .add-btn {
            background: linear-gradient(to right, #ff66cc, #9933ff);
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(255, 105, 180, 0.3);
            transition: all 0.3s ease;
        }

        .add-btn:hover {
            background: linear-gradient(to right, #9933ff, #ff66cc);
            transform: translateY(-2px);
        }

        .search-box input {
            padding: 12px 16px;
            border-radius: 12px;
            border: none;
            outline: none;
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
            width: 260px;
            text-align: center;
            transition: 0.3s;
        }

        .search-box input::placeholder {
            color: #e5ccff;
        }

        .search-box input:focus {
            background-color: rgba(255, 255, 255, 0.25);
            width: 300px;
        }

        table {
            width: 90%;
            border-collapse: separate;
            border-spacing: 0 10px;
            background-color: transparent;
        }

        th {
            background: linear-gradient(to right, #ff66cc, #9933ff);
            color: #fff;
            padding: 14px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            border: none;
        }

        td {
            background-color: rgba(255, 255, 255, 0.12);
            padding: 14px;
            border: none;
            border-radius: 10px;
            color: #f9ecff;
            text-align: center;
            font-size: 14px;
            line-height: 1.5;
        }

        tr {
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        tr:hover td {
            background-color: rgba(255, 255, 255, 0.25);
            transform: scale(1.01);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <h1>📘 Daftar Siswa & Buku</h1>

    <div class="top-bar">
        <button class="add-btn">+ Tambah Siswa</button>
        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari nama, buku, atau jurusan... 🔍">
        </div>
    </div>

    <table id="siswaTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            @php
                $bukuList = [
                    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka'],
                    ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Hasta Mitra'],
                    ['judul' => 'Dilan 1990', 'penulis' => 'Pidi Baiq', 'penerbit' => 'Pastel Books'],
                    ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'penerbit' => 'Gramedia'],
                    ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'penerbit' => 'Republika'],
                    ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'penerbit' => 'Bentang Pustaka'],
                    ['judul' => 'Ronggeng Dukuh Paruk', 'penulis' => 'Ahmad Tohari', 'penerbit' => 'Gramedia'],
                    ['judul' => 'Supernova', 'penulis' => 'Dee Lestari', 'penerbit' => 'Bentang Pustaka'],
                    ['judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'penerbit' => 'Gramedia'],
                    ['judul' => 'Orang-Orang Biasa', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka'],
                ];

                $siswas = [
                    ['nama' => 'Windy', 'kelas' => '12 RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Yuli', 'kelas' => '12 RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Isna', 'kelas' => '12 RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Siti', 'kelas' => '12 RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Nadia', 'kelas' => '12 RPL 3', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Tantri', 'kelas' => '12 RPL 3', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Gina', 'kelas' => '12 RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                    ['nama' => 'Marwaj', 'kelas' => '12 RPL 3', 'jurusan' => 'Rekayasa Perangkat Lunak'],
                ];

                foreach ($siswas as $i => &$s) {
                    $buku = $bukuList[$i % count($bukuList)];
                    $s['buku'] = $buku['judul'];
                    $s['penulis'] = $buku['penulis'];
                    $s['penerbit'] = $buku['penerbit'];
                }
            @endphp

            @foreach ($siswas as $index => $siswa)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $siswa['nama'] }}</td>
                    <td>{{ $siswa['kelas'] }}</td>
                    <td>{{ $siswa['jurusan'] }}</td>
                    <td>{{ $siswa['buku'] }}</td>
                    <td>{{ $siswa['penulis'] }}</td>
                    <td>{{ $siswa['penerbit'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // Pencarian otomatis
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#siswaTable tbody tr');
            rows.forEach(row => {
                let text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
