<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1b3a, #3b1e3d);
            color: #f5e9f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 40px;
        }

        h1 {
            color: #ffd6e0;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            text-shadow: 0 0 10px rgba(255, 192, 203, 0.4);
        }

        .message {
            background-color: rgba(93, 63, 211, 0.2);
            border: 2px solid #ff9ecf;
            color: #ffd6e0;
            padding: 14px 20px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 25px;
            width: 80%;
            animation: fadeIn 0.8s ease;
            box-shadow: 0 0 10px rgba(255, 182, 193, 0.4);
        }

        input[type="text"] {
            padding: 12px 16px;
            border-radius: 8px;
            border: 2px solid #a86fa9;
            width: 320px;
            background-color: #2a2644;
            color: #fbeaff;
            outline: none;
            transition: all 0.3s ease;
            box-shadow: 0 0 8px rgba(255, 192, 203, 0.25);
        }

        input[type="text"]::placeholder {
            color: #cfa7d4;
        }

        input[type="text"]:focus {
            background-color: #382d53;
            box-shadow: 0 0 10px rgba(255, 182, 193, 0.6);
        }

        table {
            border-collapse: collapse;
            width: 85%;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
            margin-top: 30px;
            animation: fadeIn 0.8s ease;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
        }

        th {
            background: linear-gradient(to right, #5a5ddf, #d15fa3);
            color: #fff;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        td {
            color: #f3e6ff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        tr:hover {
            background-color: rgba(255, 182, 193, 0.15);
            transition: 0.3s;
        }

        footer {
            margin-top: 40px;
            color: #d7b0e4;
            font-size: 0.9rem;
            opacity: 0.8;
            text-align: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        input[type="text"]:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>

    {{-- 💬 Pesan dari Controller --}}
    @if(isset($message))
        <div class="message">
            {{ $message }}
        </div>
    @endif

    <h1>📚 Daftar Buku</h1>

    <input type="text" id="searchInput" placeholder="Cari judul atau penulis...">

    <table id="bookTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book['judul'] }}</td>
                    <td>{{ $book['penulis'] }}</td>
                    <td>{{ $book['tahun'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <footer>💙 Tugas Praktik Kerja Lapangan 2025 | Windy</footer>

    <script>
        const allBooks = @json($books);
        const tableBody = document.querySelector("#bookTable tbody");
        const searchInput = document.getElementById("searchInput");

        searchInput.addEventListener("input", function() {
            const search = this.value.toLowerCase();
            const filtered = allBooks.filter(b =>
                b.judul.toLowerCase().includes(search) ||
                b.penulis.toLowerCase().includes(search)
            );

            tableBody.innerHTML = "";

            if (filtered.length === 0) {
                tableBody.innerHTML = `<tr><td colspan="4" style="text-align:center; color:#ffd6e0;">Tidak ada buku ditemukan 😢</td></tr>`;
                return;
            }

            filtered.forEach((book, index) => {
                const row = `<tr style="animation: fadeIn 0.3s ease;">
                    <td>${index + 1}</td>
                    <td>${book.judul}</td>
                    <td>${book.penulis}</td>
                    <td>${book.tahun}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        });
    </script>
</body>
</html>
