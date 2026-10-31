<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark p-3">

    <!-- Header Banner Hijau -->
    <div class="p-2 rounded mb-3 text-white fs-4" style="background-color: #1f3a2c;">
        Respon
    </div>

    <!-- Card Tampilan Utama -->
    <div class="card text-center p-4 shadow-sm border-0">
        <div class="card-body">
            <!-- Judul Ucapan -->
            <h2 class="text-primary fw-bold mb-1">Terima Kasih, {{ $nama }}! 🎉</h2>
            <p class="text-muted fs-6 mb-4">Pertanyaan Anda telah berhasil dikirim.</p>

            <!-- Box Pertanyaan -->
            <div class="bg-light p-3 rounded mb-4 text-center border-start border-primary border-4">
                <div class="fw-bold mb-1 text-dark">Pertanyaan Anda:</div>
                <div class="fst-italic text-secondary">"{{ $pertanyaan }}"</div>
            </div>

            <!-- Informasi Balasan Email -->
            <p class="text-muted fst-italic mb-1">
                Pertanyaan Anda akan segera kami tanggapi dan balas melalui email <strong>{{ $email }}</strong>.
            </p>
            <p class="text-muted fst-italic mb-4 small">
                Mohon cek kotak masuk atau folder spam Anda secara berkala.
            </p>

            <!-- Tombol Kembali -->
            <a href="/" class="btn btn-primary px-4">Kembali ke Beranda</a>
        </div>
    </div>

</body>

</html>