<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ma'had Landing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* NAVBAR */
    .navbar {
      backdrop-filter: blur(10px);
      background: rgba(0,0,0,0.6);
      z-index: 9999; /* 🔥 penting */
    }

    .dropdown-menu {
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      z-index: 9999;
    }

    /* HERO */
    .hero {
      height: 100vh;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
      url('https://www.emporioarchitect.com/upload/portofolio/1280/desain-pondok-pesantren-mediteran-2-lantai-55030223-829735221030223093338.jpg') center/cover;
      display: flex;
      align-items: center;
      color: white;
    }

    .hero h1 {
      font-weight: 600;
      font-size: 3rem;
    }

    .btn-custom {
      background: #1f7a63;
      color: white;
      border-radius: 50px;
      padding: 10px 25px;
    }

    /* CARD */
    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: 0.3s;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }

    .card:hover {
      transform: translateY(-8px);
    }

    /* TITLE */
    .section-title {
      font-weight: 600;
      margin-bottom: 30px;
    }

    /* FEATURE */
    .feature-box {
      padding: 30px;
      border-radius: 15px;
      background: #f8f9fa;
      transition: 0.3s;
    }

    .feature-box:hover {
      background: #1f7a63;
      color: white;
    }

    footer {
      background: #111;
      color: #aaa;
    }

    .dropdown-menu {
  background: rgba(0, 0, 0, 0.7); /* transparan gelap */
  backdrop-filter: blur(12px);
  border: none;
  border-radius: 10px;
  padding: 8px;
  margin-top: 8px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  animation: fadeDown 0.25s ease;
}

/* posisi biar lurus */
.dropdown-menu {
  left: 0 !important;
  right: auto !important;
}

/* item */
.dropdown-item {
  color: #fff;
  border-radius: 8px;
  padding: 10px 15px;
  transition: 0.3s;
}

/* hover */
.dropdown-item:hover {
  background: #1f7a63;
  color: white;
  transform: translateX(5px);
}

/* animasi */
@keyframes fadeDown {
  from {
    opacity: 0;
    transform: translateY(-8px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">

    <a class="navbar-brand fw-bold" href="#">MA'HAD AL-JAMI'AH</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{url('beranda')}}">Beranda</a>
        </li>

        <!-- 🔥 DROPDOWN PROFIL -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown">
            Profil
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{url('profil-mahad')}}">Profil Ma’had</a></li>
            <li><a class="dropdown-item" href="{{url('profil-pengasuh')}}">Profil Pengasuh</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('program')}}">Program</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('pendaftaran')}}">Pendaftaran</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('kontak')}}">Kontak</a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container text-center">
    <h1>MA'HAD AL-JAMI'AH UNIVERSITAS HASYIM ASY'ARI</h1>
    <p class="mt-3 mb-4">Pendidikan modern berbasis nilai Islam yang mendunia</p>
    <a href="#" class="btn btn-custom">Jelajahi</a>
  </div>
</section>

<!-- BERITA -->
<!-- BERITA -->
<section class="container py-5">
  <h2 class="text-center section-title">Berita Terbaru</h2>

  <div class="row g-4">

    <!-- BERITA 1 -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://mahad.unhasy.ac.id/wp-content/uploads/2026/02/asdasdasdasdasdasd.jpg" class="w-100" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="fw-bold">
            Dorong Potensi Mahasantri
          </h5>
          <p class="text-muted">
            Divisi SDM Ma’had Al-Jami’ah UNHASY mengapresiasi mahasantri aktif dalam minat dan bakat.
          </p>
        </div>
      </div>
    </div>

    <!-- BERITA 2 -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://mahad.unhasy.ac.id/wp-content/uploads/2026/02/Gambar1.jpg" class="w-100" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="fw-bold">
            Senam Sehat Mahasantri
          </h5>
          <p class="text-muted">
            Kegiatan senam rutin untuk menjaga kebugaran dan mempererat kebersamaan mahasantri.
          </p>
        </div>
      </div>
    </div>

    <!-- BERITA 3 -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://tebuireng.online/wp-content/uploads/2024/08/prestasi1.jpg" class="w-100" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="fw-bold">
            Prestasi Mahasantri
          </h5>
          <p class="text-muted">
            Mahasantri berhasil meraih prestasi di tingkat nasional dan internasional.
          </p>
        </div>
      </div>
    </div>

  </div>

</section>


<!-- CTA -->
<section class="bg-dark text-white text-center py-5">
  <h3>Gabung Bersama Kami</h3>
  <p class="mb-3">Mulai perjalanan pendidikan terbaik Anda hari ini</p>
  <a href="#" class="btn btn-custom">Daftar Sekarang</a>
</section>

<!-- FOOTER -->
<footer class="text-center p-4">
  <p>© 2026 Ma’had UNHASY Tebuireng</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>