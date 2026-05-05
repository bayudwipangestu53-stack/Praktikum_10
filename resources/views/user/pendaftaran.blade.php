<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Mahasantri</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .navbar {
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(10px);
        }

        .hero {
            height: 70vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('{{ asset("https://mahad.unhasy.ac.id/wp-content/uploads/2026/02/%F0%9F%8C%BF-PENERIMAAN-MAHASANTRI-BARUMahad-Al-Jamiah-UNHASY-TebuirengMenjadi-mahasiswa-itu-meraih-gel.webp") }}') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .section {
            padding: 80px 0;
        }

        .section-light {
            background: #f8f9fa;
        }

        .section-title {
            font-weight: 600;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            padding: 20px;
            background: white;
            box-shadow: 0 5px 20px rgba(0,0,0,0.07);
            height: 100%;
        }

        .btn-main {
            background: #1f7a63;
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
        }

        /* ALUR MODERN */
        .step-box {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .step-box:hover {
            transform: translateY(-5px);
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #1f7a63;
            color: white;
            border-radius: 50%;
            line-height: 50px;
            margin: 0 auto 15px;
            font-weight: bold;
        }

        footer {
            background: #111;
            color: #aaa;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MA'HAD AL-JAMI'AH</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{url('beranda')}}">beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('profil')}}">profil</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('program')}}">program</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('pendaftaran')}}">pendaftaran</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('kontak')}}">kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1 class="fw-bold">Penerimaan Mahasantri Baru</h1>
        <p class="mt-3">Ma’had UNHASY Tebuireng Tahun 2026/2027</p>
    </div>
</section>

<!-- DESKRIPSI -->
<section class="section">
    <div class="container text-center">
        <p>
            Ma’had Al-Jami’ah UNHASY Tebuireng hadir sebagai pusat pembinaan karakter,
            spiritualitas, dan intelektual mahasiswa dalam lingkungan religius.
        </p>
    </div>
</section>

<!-- PROGRAM -->
<section class="section section-light">
    <div class="container">
        <h3 class="text-center mb-4">Program Pembinaan</h3>

        <div class="row g-4">
            <div class="col-md-4"><div class="card-custom">Pengajian Kitab</div></div>
            <div class="col-md-4"><div class="card-custom">Tahfidz & Istighosah</div></div>
            <div class="col-md-4"><div class="card-custom">Shalat Jamaah</div></div>
        </div>
    </div>
</section>

<!-- FASILITAS -->
<section class="section">
    <div class="container">
        <h3 class="text-center mb-4">Fasilitas</h3>

        <div class="row text-center">
            <div class="col-md-3">✔ Mushola</div>
            <div class="col-md-3">✔ WiFi</div>
            <div class="col-md-3">✔ Kantin</div>
            <div class="col-md-3">✔ Security 24 Jam</div>
        </div>
    </div>
</section>

<!-- ALUR MODERN -->
<section class="section section-light">
    <div class="container">
        <h3 class="text-center mb-5">Alur Pendaftaran</h3>

        <div class="row text-center">

            <div class="col-md-3">
                <div class="step-box">
                    <div class="step-number">1</div>
                    <h6>Mahasiswa UNHASY</h6>
                    <p>Terdaftar sebagai mahasiswa aktif</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="step-box">
                    <div class="step-number">2</div>
                    <h6>Isi Form</h6>
                    <p>Mengisi formulir online</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="step-box">
                    <div class="step-number">3</div>
                    <h6>Verifikasi</h6>
                    <p>Menyerahkan bukti pendaftaran</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="step-box">
                    <div class="step-number">4</div>
                    <h6>Masuk Ma’had</h6>
                    <p>Hadir sesuai jadwal</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="section text-center">
    <div class="container">
        <h3>Daftar Sekarang</h3>
        <p>Klik tombol di bawah untuk mulai pendaftaran</p>

        <a href="https://forms.gle/ouNjbngTPfHJ6T3k7" target="_blank" class="btn btn-main">
            Isi Formulir
        </a>

        <p class="mt-3">Admin: 085194949859</p>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center p-4">
    <p>© 2026 Ma’had UNHASY Tebuireng</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>