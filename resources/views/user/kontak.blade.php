<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Ma'had</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(10px);
        }

        .hero {
            height: 50vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('{{ asset("https://tebuireng.online/wp-content/uploads/2023/10/IMG-20231014-WA0058.jpg") }}') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .section {
            padding: 80px 0;
        }

        .card-contact {
            border: none;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: 100%;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
        }

        .btn-main {
            background: #1f7a63;
            color: white;
            border-radius: 50px;
            padding: 12px 25px;
        }

        iframe {
            border-radius: 15px;
            width: 100%;
            height: 300px;
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
    <div>
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p>Ma’had UNHASY Tebuireng</p>
    </div>
</section>

<!-- KONTAK -->
<section class="section">
    <div class="container">
        <div class="row g-4">

            <!-- INFO -->
            <div class="col-md-5">
                <div class="card-contact">
                    <h4>Informasi Kontak</h4>
                    <p class="mt-3"><strong>Alamat:</strong><br>
                    Tebuireng, Jombang, Jawa Timur</p>

                    <p><strong>Telepon:</strong><br>
                    0851-9494-9859</p>

                    <p><strong>Email:</strong><br>
                    info@mahadunhasy.ac.id</p>
                </div>
            </div>

            <!-- FORM -->
            <div class="col-md-7">
                <div class="card-contact">
                    <h4>Kirim Pesan</h4>

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama Anda">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
                        </div>

                        <button class="btn btn-main">Kirim Pesan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MAP -->
<section class="section">
    <div class="container">
        <h4 class="text-center mb-4">Lokasi Kami</h4>

        <iframe 
            src="https://maps.google.com/maps?q=Tebuireng%20Jombang&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center p-4">
    <p>© 2026 Ma’had UNHASY Tebuireng</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>