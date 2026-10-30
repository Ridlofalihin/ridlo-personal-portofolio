<?php
// Contoh backend sederhana. Jalankan dengan server PHP untuk menguji.
// Jangan menyimpan data sensitif dari formulir tanpa perlindungan yang sesuai.
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $body = trim($_POST['message'] ?? '');

    if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $body === '') {
        $message = 'Mohon isi nama, email yang valid, dan pesan.';
    } else {
        // Demo: data belum dikirim atau disimpan. Integrasikan email/database
        // dengan konfigurasi aman sebelum digunakan secara nyata.
        $message = 'Validasi berhasil. Backend PHP menerima data formulir (mode demo).';
    }
}
?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Demo Form Kontak PHP</title><link rel="stylesheet" href="style.css"></head>
<body>
  <main class="container section">
    <p class="eyebrow">PHP BACKEND DEMO</p>
    <h1 class="section-title">Formulir Kontak</h1>
    <div class="about-panel">
      <?php if ($message !== ''): ?><p role="status"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
      <form method="post" action="contact.php">
        <p><label>Nama<br><input name="name" required maxlength="100"></label></p>
        <p><label>Email<br><input name="email" type="email" required maxlength="254"></label></p>
        <p><label>Pesan<br><textarea name="message" required maxlength="2000" rows="5"></textarea></label></p>
        <button class="button primary" type="submit">Kirim (Demo)</button>
      </form>
      <p><a href="index.html">← Kembali ke portofolio</a></p>
    </div>
  </main>
</body>
</html>
