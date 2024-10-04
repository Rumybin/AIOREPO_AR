<!DOCTYPE html>
<html>
<head>
    <title>Olympiad</title>
</head>
<body>
    <h1>Daftar Ekstrakurikuler Olimpiade</h1>
    <ul>
        <?php if (!empty($ekstra_olim)): ?>
            <?php foreach ($ekstra_olim as $ekstra): ?>
                <li><?= esc($ekstra['Nama']) ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Tidak ada ekstrakurikuler olimpiade yang ditemukan.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
