<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympiad</title>
    <!-- Menautkan CSS -->
    <link rel="stylesheet" href="css/stylesolim.css">
</head>
<body>

    <!-- Tombol Back di pojok kiri atas -->
    <a href="javascript:history.back()" class="back-button">Back</a>

    <!-- Tombol Home, Jadwal, Berita di atas -->
    <div class="button-container">
        <a href="/">Home</a>
        <a href="/jadwal">Jadwal</a>
        <a href="/berita">Berita</a>
    </div>

    <section>
        <h1>Daftar Ekstrakurikuler Olimpiade</h1>
        <div class="program-container">
        <div class="outer-container">
            <?php if (!empty($ekstra_olim)): ?>
                <?php foreach ($ekstra_olim as $ekstra): ?>
                    <div class="program-box">
                        <h3><?= esc($ekstra['Nama']) ?></h3>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="program-box">
                    <p>Tidak ada ekstrakurikuler olimpiade yang ditemukan.</p>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="logo">
                <img src="images/pondok.png" alt="Logo">
            </div>
            <div class="social-icons">
                <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
                <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="images/whatsapp.png" alt="WhatsApp"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Torhuja © copyright 2024</p>
        </div>
    </footer>

</body>
</html>
