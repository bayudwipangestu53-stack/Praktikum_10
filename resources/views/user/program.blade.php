<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Ma'had</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }

        .navbar {
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(10px);
        }

        .hero {
            height: 60vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('{{ asset("https://tebuireng.online/wp-content/uploads/2025/03/khataman-12.jpg") }}') center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .section { padding: 60px 0; }
        .section-alt { background: #f9fafb; }

        .card-custom {
            border: none;
            border-radius: 18px;
            padding: 20px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
            cursor: pointer;
            background: white;
        }

        .card-custom:hover {
            transform: translateY(-8px);
        }

        /* SAAT DIKLIK */
        .card-custom.active {
            background: #1f7a63;
            color: white;
        }

        .card-custom.active p {
            color: #e0f2f1;
        }

        .img-card {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 12px;
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
        <h1 class="fw-bold">Program Ma’had</h1>
        <p>Pembinaan Ilmu, Akhlak, dan Potensi</p>
    </div>
</section>

<!-- PROGRAM KEAGAMAAN -->
<section class="section">
    <div class="container">
        <h3 class="mb-4">Program Keagamaan</h3>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card-custom">
                    <h5>Ngaji Kitab Kuning</h5>
                    <p>Pembelajaran kitab klasik untuk memperdalam ilmu agama dan tradisi pesantren.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <h5>Ngaji Al-Qur’an</h5>
                    <p>Membina kemampuan membaca Al-Qur’an dengan baik dan benar.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <h5>Maulid Diba’</h5>
                    <p>Menumbuhkan kecintaan kepada Nabi melalui shalawat.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- UKM (ADA GAMBAR) -->
<section class="section section-alt">
    <div class="container">
        <h3 class="mb-4">Unit Kegiatan Mahasantri</h3>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="card-custom">
                    <img src="{{ asset('image\pn2.jpeg') }}" class="img-card">
                    <h6 class="mt-3">Pagar Nusa</h6>
                    <p>Bela diri berbasis nilai spiritual dan disiplin.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom">
                    <img src="{{ asset('image\tl.jpeg') }}" class="img-card">
                    <h6 class="mt-3">Tilawatil Qur’an</h6>
                    <p>Seni membaca Al-Qur’an dengan indah.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom">
                    <img src="{{ asset('image\md.jpeg') }}" class="img-card">
                    <h6 class="mt-3">Media</h6>
                    <p>Kreativitas di bidang jurnalistik dan digital.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-custom">
                    <img src="{{ asset('image\fst.jpeg') }}" class="img-card">
                    <h6 class="mt-3">Futsal</h6>
                    <p>Olahraga untuk kesehatan dan kekompakan.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MINAT BAKAT -->
<section class="section">
    <div class="container">
        <h3 class="mb-4">Minat & Bakat</h3>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card-custom">
                    <h5>Membaca Kitab</h5>
                    <p>Melatih pemahaman kitab kuning secara mandiri.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <h5>Jurnalistik</h5>
                    <p>Mengasah kemampuan menulis dan berpikir kritis.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-custom">
                    <h5>Public Speaking</h5>
                    <p>Melatih komunikasi dan kepercayaan diri.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center p-4">
    <p>© 2026 Ma’had UNHASY Tebuireng</p>
</footer>

<!-- SCRIPT -->
<script>
    const cards = document.querySelectorAll('.card-custom');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            cards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>