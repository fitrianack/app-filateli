@extends('layouts/main')

@section('title', 'Filateli.com')

@section ('container')

<!-- About -->
<section class="content-section bg-light" id="about">
  <div class="container">
    <h2 style="text-align: center; font-size:50px">Profil Museum Perangko</h2>
    <br>
    <div class="form-row align-items-justify">
      <div class="col-lg-6">
        <img src="img/portfolio-1.jpg" style="width: 500px; height:500px">
      </div>
      <div class="col-lg-6">
        <p style="text-align: justify; font-family:'Lucida Sans'; font-size:25px">
          Museum perangko dibangun dengan bentuk bangunan bergaya Jawa Bali di atas lahan seluas 9.590 m2 dan
          diresmikan oleh Presiden Soeharto pada tanggal 29 September 1983. Museum ini memamerkan koleksi perangko
          asal Indonesia dan luar negeri. Adapula sepeda pos antik merk Falter buatan Jerman Barat tahun 1950 diletakkan
          di serambi museum. Halaman depan ada bola dunia dengan merpati yang membawa sebuah surat yang melambangkan
          bahwa tugas Perum Pos dan Giro menjangkau seluruh dunia.
        </p>
      </div>
    </div>
    <br>
    <div class="form-row align-items-justify">
      <div class="col-lg-12">
        <p style="text-align: justify; font-family:'Lucida Sans'; font-size:25px"> Terdapat 6 ruang pamer dimuseum ini yang masing-masing menyajikan informasi tentang perangko itu sendiri.
          Ruang pamer I Museum Perangko Indonesia TMII yang berisikan sejarah perangko, termasuk bagaimana pengiriman kabar dilakukan pada jaman dahulu yang menggunakan daun lontar.
          Ruang pamer II Museum Perangko Indonesia diperlihatkan proses pembuatan perangko.
          Pada ruang pamer III terdapat sejumlah perangko yang terbit tahun 1864-1950 pada masa pemerintahan Belanda, Jepang, dan masa perang kemerdekaan.
          Ruang penyajian IV menampilkan perangko dan souvenir sheet yang diterbitkan sejak tahun 1950-1993.
          Ruang pamer V terdapat prangko yang disusun berdasarkan periode dan tema tertentu.
          Dan yang terakhir ruang pamer VI yang memperagakan prangko tematik, khususnya kepramukaan dan olahraga.

          Untuk yang senang filateli, tempat ini menjadi salah satu yang wajib dikunjungi.

          Harga Tiket Masuk: Rp. 5000
          Jam Oprasional: 08.00 - 16.00 WIB</p>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
  <div class="container">
    <div class="content-section-heading">
      <h2 class="text-secondary mb-0">Servis</h2>
      <h2 class="mb-5"></h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-screen-smartphone"></i>
        </span>
        <h4>
          <strong><a href="{{url('/kategori')}}" style="color: white;">Kategori Lomba</a></strong>
        </h4>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-pencil"></i>
        </span>
        <h4>
          <strong><a href="{{url('/periode_range')}}" style="color: white;">Periode Perlombaan</a></strong>
        </h4>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-like"></i>
        </span>
        <h4>
          <strong><a href="{{url('/paket_perlombaan')}}" style="color: white;">Paket Perlombaan</a></strong>
        </h4>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-mustache"></i>
        </span>
        <h4>
          <strong><a href="{{url('/pembayaran')}}" style="color: white;">Pembayaran</a></strong>
        </h4>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-screen-smartphone"></i>
        </span>
        <h4>
          <strong><a href="{{url('/donasi')}}" style="color: white;">Donasi</a></strong>
        </h4>
      </div>

      <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-pencil"></i>
        </span>
        <h4>
          <strong><a href="{{url('/pndaftaran')}}" style="color: white;">Pendaftaran</a></strong>
        </h4>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio -->
<section class="content-section" id="portfolio">
  <div class="container">
    <div class="content-section-heading text-center">
      <h3 class="text-secondary mb-0">Servis</h3>
      <h2 class="mb-5" id="kategorilomba">Kategori Lomba</h2>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">5 KM</div>
              <p class="mb-0">5 KM</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">10 KM</div>
              <p class="mb-0">10 KM</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">5 KM</div>
              <p class="mb-0">5 KM</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">10 KM</div>
              <p class="mb-0">10 KM</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
        </a>
      </div>
    </div>
</section>

<!-- Map -->
<div id="contact" class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.98363573067!2d110.33982522910748!3d-7.803163972536023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1611543512568!5m2!1sid!2sid"></iframe>
</div>

@endsection