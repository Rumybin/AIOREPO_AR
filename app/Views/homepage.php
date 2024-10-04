<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INI COBA</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body>
    <header>
        <h1>INI COBA</h1>
    </header>

    <div class="main-content">
        <h2>INI EKSTRA</h2>

         <!-- Slideshow section -->
        <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="<?= base_url('images/ichi.png'); ?>" alt="Slide 1">
                </div>

                <div class="mySlides fade">
                    <img src="<?= base_url('images/ni.png'); ?>" alt="Slide 2">
                </div>

                <div class="mySlides fade">
                    <img src="<?= base_url('images/san.png'); ?>" alt="Slide 3">
                </div>
            </div>

            <!-- Dot indicators -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        <!-- Container for slideshow and boxes -->
        <div class="container">
           

            <!-- Large box -->
            <a href="/olim">
                <div class="box large-box">
                    <img src="/images/olim.png" alt="Olimpiad Image">
                    <div class="overlay-text">OLYMPIAD</div>
                </div>
            </a>

            <!-- Small boxes -->
            <div class="small-box-container">
                <div class="box small-box">INI 1</div>
                <div class="box small-box">INI 2</div>
            </div>
        </div>
    </div>

    <!-- Memuat file JS -->
    <script src="<?= base_url('js/slideshow.js'); ?>"></script>
</body>
</html>
