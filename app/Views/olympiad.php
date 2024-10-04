<!DOCTYPE html>
<html>
<head>
    <title>Olympiad</title>
    <!-- Menautkan CSS yang baru dibuat -->
    <link rel="stylesheet" href="css/stylesolim.css">
</head>
<body>
    <section>
        <h1>Daftar Ekstrakurikuler Olimpiade</h1>
        <div class="program-container">
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
    </section>
</body>
</html>
