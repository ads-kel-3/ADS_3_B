<?php 
  session_start();

  if(isset($_SESSION['id'])) {
    $status = null;
    $ref = 'logout.php';
    if($_SESSION['username'] == 'admin') {$admin = 'Admin Page';}
    else {$admin = null;}
  }
  else {
    $_SESSION['username'] = null;
    $status = 'Login';
    $ref = 'login.php';
    $admin = null;
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skriptor Product</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Skriptor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php"><?php echo($_SESSION['username'])?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo($ref)?>"><?php echo($status)?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4"><?php echo($_SESSION['username'])?>'s Shop</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Media Pembelajaran</a>
            <a href="#" class="list-group-item">Modul</a>
            <a href="#" class="list-group-item">Multimedia</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="item1.png" alt="">
            <div class="card-body">
              <h5 class="card-title">Media Pembelajaran Sistem Informasi Manajemen Berbasis Multimedia Interaktif</h5>
              <h4>Rp. 50.000,-</h4>
              <p class="card-text">Pengembangan Media Pembeljaran Berbasis Multimedia Interaktif Menggunakan Adobe Flash CS5 untuk SMK Kelas XI Kompetensi Keahlian Administrasi Perkantoran Pada Kompetensi Dasar Menguraikan Sistem Informasi Manajemen [Nurul Anggraeni]</p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-body"> <center>
              <a href="#" class="btn btn-success">Buy</a>
              <a href="#" class="btn btn-success">Discuss</a>
              <a href="#" class="btn btn-success">Review</a>
              </center>
            </div>
            <div class="card-header">
              Abstract
            </div>
            <div class="card-body">
              <p class="card-text">Penelitian pengembangan ini bertujuan untuk (1) mengembangkan media pembelajaran berbasis multimedia interaktif untuk SMK kelas XI Administrasi Perkantoran pada Kompetensi Dasar Menguraikan Sistem Informasi Manajemen, (2) mengetahui penilaian ahli media dan ahli materi terhadap media pembelajaran, (3) mengetahui penilaian siswa kelas XI Administrasi Perkantoran terhadap media pembelajaran, dan (4) mengetahui kelayakan media pembelajaran berdasarkan penilaian ahli media, ahli materi dan siswa. 
                <br>
              Metode yang digunakan pada penelitian ini adalah penelitian pengembangan (Research and Development). Penelitian ini dilakukan di SMK Batik Perbaik Purworejo. Metode yang digunakan dalam pengumpulan data yaitu angket. Hasil penelitian dan pengembangan: (1) Proses penelitian pengembangan ini dilaksanakan dengan beberapa tahapan yang diadaptasi dari model penelitian pengembangan versi ADDIE. Adapun tahapan tersebut yaitu: Analysis, Design, Development, dan Implementation. Tahap analysis meliputi studi lapangan dan studi literatur. Tahap design melitputi pembuatan flowchart dan storyboard. Tahap development meliputi pembuatan produk media pembelajaran berbasis multimedia interaktif, validasi ahli materi dan validasi ahli media, serta revisi media pembelajaran dari ahli materi dan ahli media. Tahap implementation dilakukan dua siklus yaitu uji coba produk kelompok kecil yang melibatkan 4 orang siswa dan uji coba produk kelompok besar yang melibatkan 27 orang siswa, (2) hasil penilaian ahli materi pada aspek pembelajaran mendapatkan skor 3,7 dengan kategori baik dan aspek isi mendapatkan skor 4 dengan kategori baik. Hasil penilaian ahli media pada aspek tampilan mendapat skor rata-rata 4,3 dengan kategori sangat baik dan aspek pemograman mendapat skor rata-rata 4,5 dengan kategori sangat baik, (3) hasil uji coba pada peserta didik mendapatkan skor rata-rata 4,6 dengan kategori sangat baik, dan (4) kelayakan media pembelajaran berdasarkan ahli materi adalah 3,8 dengan kategori baik, ahli media adalah 4,4 dengan kategori sangat baik dan siswa dengan kategori 4,6 dengan kategori sangat baik. Dengan demikian, media pembelajaran berbasis multimedia interaktif layak digunakan sebagai media pembelajaran untuk kelas XI Administrasi Perkantoran.</p>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; ADS 3 B - 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
