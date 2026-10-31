```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>

    <!-- Menggunakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark p-2">

    <div class="bg-success-subtle text-dark p-2 rounded mb-3">
        Respon
    </div>

    <div class="bg-light p-1 rounded">
        <div class="card border-0 rounded-3">
            <div class="card-body text-center p-4">

                <h5 class="text-primary fw-bold">
                    Terima Kasih, {{ $nama }}! 🎉
                </h5>

                <p class="text-secondary small">
                    Pertanyaan Anda telah berhasil dikirim.
                </p>

                <div class="bg-light border-start border-primary border-3 p-3 mb-3">
                    <strong>Pertanyaan Anda:</strong><br>
                    "{{ $pertanyaan }}"
                </div>

                <p class="text-secondary small fst-italic">
                    Pertanyaan Anda akan segera kami tanggapi
                    dan balas melalui email
                    <strong>{{ $email }}</strong>.
                </p>

                <p class="text-secondary small">
                    Mohon cek kotak masuk atau folder spam Anda secara berkala.
                </p>

                <a href="{{ url('/') }}" class="btn btn-primary btn-sm">
                    Kembali ke Beranda
                </a>

            </div>
        </div>
    </div>

</body>
</html>
```