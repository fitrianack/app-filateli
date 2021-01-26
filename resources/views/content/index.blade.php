@extends('layouts/main')

@section('title', 'Filateli.com')

@section ('container')

<!-- About -->
<section class="content-section bg-light" id="about">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h2>Profil Museum Perangko</h2>
        <!-- <div class="text-center">
          <img src="{{asset('img/museum perangko.jpg')}}" class="rounded" alt="Museum Perangko TMII">
        </div> -->
        <p class="lead mb-5">Meseum perangko adalah wahana untuk menyelenggarakan pameran perangko secara tetap yang didirikan atas gagasan Ibu Tien Soeharto. Gagasan itu dicetuskan ketika Ibu Tien mengunjungi pameran perangko yang diadakan oleh PT. Pos Indonesia (Persero) pada acara Jambore Pramuka Asia Pasifik ke VI di Cibubur pada bulan Juni tahun 1981. Kemudian, dibangun museum perangko dengan bentuk bangunan bergaya Bali di atas lahan seluas 9.590 m2 dan diresmikan oleh Presiden Soeharto pada tanggal 29 September 1983.</p>
        <p class="lead mb-5">Di sayap kanan dan kiri terdapat dua bangunan. Sayap kanan digunakan kantor pengelolaan dan tempat pertemua, sedangkan sayap kiri untuk kantor pos tambahan yang berfungsi memberikan layanan jasa PT Pos Indonesia (Persero). Museum ini memamerkan koleksi perangko asal Indonesia dan luar negeri. Kompleks bangunan gedung dihiasi sejumlah ukiran dan patung gaya Bali dan Jawa, dikelilingi pagar tembok dengan dua pintu gerbang yang mengambil model dasar candi Bentar, selain berfungsi sebagai pintu, pagar ini juga menjadi pemisah antara halaman luar dan halaman kompleks bangunan. Di halaman depan terdapat bola dunia dengan burung merpati membawa surat di paruhnya, lambing tugas PT Pos Indonesia (Persero) telah menjangkau seluruh dunia. Di depan pintu masuk gedung, berdiri patung Hanoman, yang dalam pewayangan dikenal sebagai Dhuta Dharma pembawa berita, misinya sama dengan PT Pos Indonesia (Persero). Di samping kiri dan kanan pintu masuk, ada dua lukisan gaya Bali karya pelukis Drs. Wayan Sutha S yang merupakan cuplikan cerita pewayangan versi Bali, menggambarkan bahwa pada masa sebelum kertas dikenal seperti sekarang, surat-menyurat menggunakan Ron 'daun' tal.</p>
        <p class="lead mb-5">Pameran dalam ruang penyajian II menampilkan materi berupa patung seorang perancang perangko, sejumlah slide proses pembuatan perangko dan proses melukis hingga menjadi perangko. Silinder cetak yang digunakan untuk mencetak perangko seri lukis Raden Saleh dan penampang fiber glass mesin cetak perangko lima warna yang digunakan oleh Perum Peruri dilengkapi motor penggerak.</p>
        <p class="lead mb-5">Pada ruang penyajian III terdapat sejumlah perangko yang terbit tahun 1864-1950 pada masa pemerintahan Belanda, Jepang, dan masa perang kemerdekaan, Slide perangko Belanda dan Jepang bertema kebudayaan dan pariwisata, slide perangko peringatan 10 tahun Kemerdekaan RI, dan foto perangko bergambar Bung Karno dan Bung Hatta sebagai latar belakang perangko perjuangan yang dicetak di luar negeri.</p>
        <p class="lead mb-5">Ruang penyajian IV menampilkan perangko dan souvenir sheet 'cari kenangan' yang diterbitkan sejak tahun 1950 dengan lima masa penerbitan: 1950-1959, tahun 1959-1966, tahun 1966-1973, tahun 1973-1983 dan tahun 1983-1993.</p>
        <p class="lead mb-5">Ruang penyajian V menampilkan perangko yang disusun berdasarkan periode dan tema tertentu. Dalam ruang ini disajikan perangko bertema social, pariwisata, taru dan satwa, lingkungan hidup dan kemanusiaan.</p>
        <p class="lead mb-5">
Ruang penyajian VI menampilkan perangko tematik, khususnya Kepramukaan dan olahraga, di dalam beberapa kotak penyajian, termasuk slide Ibu Tien Soeharto dengan seragam Pramuka ketika menandatangani Sampul Hari Pertama Perangko Internasional ke-VI di Cibubur.</p>
        <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="services">
  <div class="container">
    <div class="content-section-heading">
      <h3 class="text-secondary mb-0">Services</h3>
      <h2 class="mb-5">What We Offer</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-screen-smartphone"></i>
        </span>
        <h4>
          <strong>Responsive</strong>
        </h4>
        <p class="text-faded mb-0">Looks great on any screen size!</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-pencil"></i>
        </span>
        <h4>
          <strong>Redesigned</strong>
        </h4>
        <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-like"></i>
        </span>
        <h4>
          <strong>Favorited</strong>
        </h4>
        <p class="text-faded mb-0">Millions of users
          <i class="fas fa-heart"></i>
          Start Bootstrap!
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-mustache"></i>
        </span>
        <h4>
          <strong>Question</strong>
        </h4>
        <p class="text-faded mb-0">I mustache you a question...</p>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio -->
<section class="content-section" id="portfolio">
  <div class="container">
    <div class="content-section-heading text-center">
      <h3 class="text-secondary mb-0">Portfolio</h3>
      <h2 class="mb-5">Recent Projects</h2>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">Stationary</div>
              <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">Ice Cream</div>
              <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">Strawberries</div>
              <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="#!">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">Workspace</div>
              <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="content-section bg-primary text-white">
  <div class="container text-center">
    <h2 class="mb-4">The buttons below are impossible to resist...</h2>
    <a href="#!" class="btn btn-xl btn-light mr-4">Click Me!</a>
    <a href="#!" class="btn btn-xl btn-dark">Look at Me!</a>
  </div>
</section>

<!-- Map -->
<div id="contact" class="map">
  <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
  <br />
  <small>
    <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
  </small>
</div>

@endsection