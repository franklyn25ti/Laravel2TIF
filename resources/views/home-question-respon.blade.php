<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>
</head>
<body>
    <h1>Terima Kasih atas Pertanyaan Anda</h1>
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Pertanyaan:</strong> {{ $pertanyaan }}</p>
    
    <a href="{{ url('/home') }}">Kembali ke Beranda</a>
</body>
</html>