<?php
// home.php
ob_start();
?>

<!-- Welcome / Hero -->
<div class="p-5 mb-4 bg-white border rounded-3 text-center">
    <h1 class="display-4 fw-bold">ClearVoice Audio</h1>
    <p class="lead">Studio-grade condenser microphones for creators, musicians and podcasters.</p>
</div>

<!-- Carousel -->
<div id="homeCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner rounded-3">
        <div class="carousel-item active">
            <img src="images/mic1.jpg" class="d-block w-100" alt="Condenser microphone in studio">
            <div class="carousel-caption d-none d-md-block">
                <h5>Crystal Clear Recording</h5>
                <p>Capture every detail of your voice and instruments.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/mic2.jpg" class="d-block w-100" alt="Podcast setup">
            <div class="carousel-caption d-none d-md-block">
                <h5>Perfect for Podcasts</h5>
                <p>Warm, natural sound for every episode.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/mic3.jpg" class="d-block w-100" alt="Live vocal recording">
            <div class="carousel-caption d-none d-md-block">
                <h5>Built for Musicians</h5>
                <p>Professional vocals and acoustic instruments, at home or in the studio.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Company Description -->
<div class="row mb-4">
    <div class="col-12">
        <h2>Who We Are</h2>
        <p>
            ClearVoice Audio designs and sells high-quality condenser microphones that make
            professional sound affordable. Founded by a team of audio engineers and musicians,
            we believe everyone deserves to be heard clearly, whether you are recording your first
            podcast or your tenth album.
        </p>
    </div>
</div>

<!-- Features -->
<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-mic"></i> Studio-Grade Sound</h5>
                <p class="card-text">Wide frequency response and low self-noise for rich, detailed recordings.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-usb-plug"></i> Plug and Play</h5>
                <p class="card-text">Works with USB and XLR setups, so you can start recording in minutes.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-shield-check"></i> 2-Year Warranty</h5>
                <p class="card-text">Every microphone is tested and backed by our full warranty and support.</p>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';