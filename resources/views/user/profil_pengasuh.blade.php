@extends('layouts.app')

@section('title', 'Profil Pengasuh')

@section('content')

<style>
/* HERO */
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

/* WRAPPER FOTO (INI KUNCI FIX) */
.profile-wrapper {
  position: relative;
  text-align: center;
  margin-top: -80px;
}

/* FOTO */
.profile-img {
  width: 160px;
  height: 160px;
  object-fit: cover;
  border-radius: 50%;
  border: 6px solid white;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  background: white;
  transition: 0.3s;
}

.profile-img:hover {
  transform: scale(1.05);
}

/* CARD */
.profile-card {
  background: white;
  border-radius: 15px;
  padding: 25px;
  margin-top: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* TITLE */
.title-green {
  color: #1f7a63;
  font-weight: 600;
}

/* SECTION */
.section-box {
  background: white;
  padding: 25px;
  border-radius: 12px;
  margin-top: 20px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.section-box ul {
  padding-left: 20px;
}

.section-box li {
  margin-bottom: 8px;
}
</style>

<!-- HERO -->
<section class="hero-profil">
  <div class="container">
    <h1>Profil Pengasuh</h1>
    <p>Ma’had Al-Jami’ah UNHASY Tebuireng</p>
  </div>
</section>

<div class="container mb-5">

  <!-- FOTO (SUDAH FIX) -->
  <div class="profile-wrapper">
    <img src="https://baytalquran.id/wp-content/uploads/2020/11/Ahmad-Ubaidi-Hasbillah.jpg" class="profile-img">
  </div>

  <!-- NAMA -->
  <div class="profile-card text-center">
    <h3 class="title-green">Dr. K. Ahmad ‘Ubaydi Hasbillah, M.Th.I., M.A.</h3>
    <p class="text-muted">Pengasuh Ma’had Al-Jami’ah UNHASY Tebuireng</p>
  </div>

  <!-- BIO -->
  <div class="section-box">
    <h5 class="title-green">Biografi Singkat</h5>
    <p>
      Dr. K. Ahmad ‘Ubaydi Hasbillah merupakan akademisi dan ulama yang mendalami bidang hadis serta studi keislaman. Beliau dikenal sebagai sosok yang mengintegrasikan keilmuan klasik pesantren dengan pendekatan akademik modern.
    </p>
    <p>
      Selain aktif mengajar, beliau juga berperan dalam pembinaan mahasantri serta pengembangan kajian keislaman di lingkungan kampus dan masyarakat luas.
    </p>
  </div>

  <!-- PENDIDIKAN -->
  <div class="section-box">
    <h5 class="title-green">Riwayat Pendidikan</h5>
    <ul>
      <li>S1 Tafsir Hadis – UIN Syarif Hidayatullah Jakarta</li>
      <li>S2 Pengkajian Islam – UIN Syarif Hidayatullah Jakarta</li>
      <li>S3 Pengkajian Islam – UIN Syarif Hidayatullah Jakarta</li>
    </ul>
  </div>

  <!-- KARIER -->
  <div class="section-box">
    <h5 class="title-green">Karier & Aktivitas</h5>
    <ul>
      <li>Dosen bidang Hadis dan Studi Islam</li>
      <li>Pengasuh Ma’had Al-Jami’ah UNHASY</li>
      <li>Pemateri kajian keislaman</li>
      <li>Pembina kegiatan keagamaan mahasantri</li>
    </ul>
  </div>

  <!-- KARYA -->
  <div class="section-box">
    <h5 class="title-green">Karya Ilmiah</h5>
    <ul>
      <li>Nalar Tekstual Ahli Hadis</li>
      <li>Hakikat Jihad dalam Islam</li>
      <li>Living Qur’an dan Hadis</li>
      <li>Studi Hadis Kontemporer</li>
    </ul>
  </div>

</div>

@endsection