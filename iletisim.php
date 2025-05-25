<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $adsoyad = htmlspecialchars(trim($_POST["adsoyad"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $konu = htmlspecialchars(trim($_POST["konu"]));
    $mesaj = htmlspecialchars(trim($_POST["mesaj"]));

    if ($adsoyad && $email && $konu && $mesaj) {
        echo "<html><head><meta charset='UTF-8'><title>İletişim Yanıtı</title>
              <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'></head><body class='bg-light'>
              <div class='container mt-5 text-center'>
              <div class='alert alert-success'>
              <h4 class='alert-heading'>Teşekkürler, $adsoyad!</h4>
              <p>Mesajınız başarıyla gönderildi.</p>
              <hr>
              <a href='iletisim.html' class='btn btn-primary mt-2'>Geri Dön</a>
              </div></div></body></html>";
    } else {
        echo "<p>Lütfen tüm alanları doldurunuz.</p>";
    }
} else {
    header("Location: iletisim.html");
    exit();
}
?>
