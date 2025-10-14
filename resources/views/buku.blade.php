<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
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

        tr:hover td {
            background-color: rgba(255, 255, 255, 0.25);
        }
    </style>
</head>
<body>
    <h1>📚 Daftar Buku</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $index => $buku)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
