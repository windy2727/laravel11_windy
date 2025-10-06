<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* Background biru tua gradasi */
            background: linear-gradient(135deg, #1e3a8a, #3b82f6, #93c5fd);
            background-attachment: fixed;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 60px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            text-align: center;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #1e3a8a; /* biru tua */
        }
        h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #475569; /* abu kebiruan */
            font-weight: normal;
        }
        p {
            line-height: 1.8;
            margin-bottom: 25px;
            color: #444;
        }
        .hobby {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .hobby-item {
            background: #bfdbfe; /* biru muda lembut */
            color: #1e3a8a;
            padding: 12px 22px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.08);
            transition: transform 0.2s, background 0.3s;
            font-weight: 500;
        }
        .hobby-item:hover {
            transform: translateY(-3px);
            background: #93c5fd;
        }
        footer {
            margin-top: 35px;
            padding-top: 15px;
            border-top: 2px solid #1e3a8a;
            font-size: 14px;
            color: #475569;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tentang Saya</h1>
        <h2>Halo 👋, Saya Windy</h2>

        <p>
            Saya berusia 18 tahun dan tertarik dengan dunia teknologi, khususnya dalam pengembangan aplikasi.  
            Selain belajar, saya juga memiliki hobi yang membuat hidup lebih seimbang dan menyenangkan.
        </p>

        <h2>Hobi Saya</h2>
        <div class="hobby">
            <div class="hobby-item">🏊‍♀️ Berenang</div>
            <div class="hobby-item">🏸 Bulu Tangkis</div>
            <div class="hobby-item">🥟 Makan Dimsum</div>
        </div>

        <footer>
            &copy; 2025 Windy - Halaman Tentang Saya
        </footer>
    </div>
</body>
</html>
