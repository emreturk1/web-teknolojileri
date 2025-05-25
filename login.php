<?php
// Basit kullanıcı adı ve şifre kontrolü
$dogru_kullanici = "B231210028@sakarya.edu.tr";
$dogru_sifre = "b231210028";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kullanici = trim($_POST["kullanici"]);
  $sifre = trim($_POST["sifre"]);

  if ($kullanici === $dogru_kullanici && $sifre === $dogru_sifre) {
    echo "<html><head><meta charset='UTF-8'><title>Giriş Başarılı</title>
          <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
          </head><body class='bg-light'>
          <div class='container mt-5 text-center'>
            <div class='alert alert-success'>
              <h4 class='alert-heading'>Hoş geldiniz, $kullanici!</h4>
              <p>Başarıyla giriş yaptınız.</p>
              <hr>
              <a href='index.html' class='btn btn-primary'>Ana Sayfaya Git</a>
            </div>
          </div></body></html>";
  } else {
    echo "<html><head><meta charset='UTF-8'><title>Giriş Başarısız</title>
          <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
          </head><body class='bg-light'>
          <div class='container mt-5 text-center'>
            <div class='alert alert-danger'>
              <h4 class='alert-heading'>Hata</h4>
              <p>Kullanıcı adı veya şifre yanlış.</p>
              <hr>
              <a href='login.html' class='btn btn-danger'>Tekrar Dene</a>
            </div>
          </div></body></html>";
  }
} else {
  header("Location: login.html");
  exit();
}
?>
