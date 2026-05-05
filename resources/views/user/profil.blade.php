@extends('layouts.app')

@section('title', 'Profil Ma’had')

@section('content')

<style>
.hero-profil {
  height: 40vh;
  background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
  url('https://tebuireng.online/wp-content/uploads/2023/10/IMG-20231014-WA0084.jpg') center/cover;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-align: center;
}

.title-green {
  color: #1f7a63;
  font-weight: 600;
}

.card-profil {
  background: white;
  border-radius: 15px;
  padding: 30px;
  margin-top: -60px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.card-profil p {
  text-align: justify;
  line-height: 1.8;
}
</style>

<!-- HERO -->
<section class="hero-profil">
  <div class="container">
    <h1>Profil Ma’had</h1>
    <p>Ma’had Al-Jami’ah UNHASY Tebuireng</p>
  </div>
</section>

<!-- ISI -->
<div class="container mb-5">

  <div class="card-profil">

    <h3 class="title-green mb-3">Sejarah Singkat</h3>

    <p>
      Ma’had Al-Jami’ah Universitas Hasyim Asy’ari (UNHASY) Tebuireng bukan sekadar hunian mahasiswa, melainkan kawah candradimuka yang memadukan kedalaman spiritualitas pesantren dengan ketajaman intelektual universitas.
    </p>

    <p>
      Didirikan atas inisiasi visioner Dr. (HC). KH. Salahuddin Wahid (Gus Sholah), lembaga ini lahir dari kegelisahan luhur untuk mencetak generasi pilar bangsa yang tidak hanya mahir secara akademis, tetapi juga kokoh dalam akar literasi keislaman.
    </p>

    <p>
      Sejak mulai berkhidmat pada tahun 2009, estafet kepengasuhan Ma’had Al-Jami’ah terus dijaga oleh para muallif dan pendidik yang berintegritas. Dimulai di bawah bimbingan Dr. K. Ali Sa’id, M.HI., perjuangan ini kemudian dilanjutkan dengan penuh dedikasi oleh Dr. KH. Miftahurrohim Syarkun, M.A. (Allahu yarham).
    </p>

    <p>
      Kini, di bawah kepemimpinan Dr. K. Ahmad ‘Ubaydi Hasbillah, M.Th.I., M.A., Ma’had Al-Jami’ah bertransformasi menjadi pusat keunggulan (center of excellence) yang dinamis, relevan dengan tantangan zaman, namun tetap setia pada nilai-nilai luhur Tebuireng.
    </p>

  </div>

</div>

@endsection