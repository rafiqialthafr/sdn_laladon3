<style>
    footer {
        background-color: #1a237e; /* Biru gelap yang lebih elegan */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .social-icon-btn {
        transition: all 0.3s ease;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px !important; /* Kotak membulat modern */
    }
    .social-icon-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    .map-container {
        border: 4px solid rgba(255, 255, 255, 0.1);
        transition: 0.3s;
    }
    .map-container:hover {
        border-color: #ffc107; /* Warna kuning warning saat hover */
    }
    .hover-link {
        position: relative;
        transition: 0.3s;
    }
    .hover-link:hover {
        color: #ffc107 !important;
    }
    .back-to-top {
        background: #ffc107;
        color: #000 !important;
        width: 35px;
        height: 35px;
        line-height: 35px;
        border-radius: 50%;
        text-align: center;
        transition: 0.3s;
    }
    .back-to-top:hover {
        background: #fff;
        transform: scale(1.1);
    }
</style>

<footer class="text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <h4 class="text-uppercase mb-4 fw-bold" style="color: #ffc107;">Hubungi Kami</h4>
                <div class="contact-info mb-4">
                    <p class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt me-3 mt-1 text-warning"></i> 
                        <span>Gg. Amil No.1, Laladon, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610</span>
                    </p>
                    <p class="d-flex align-items-center mb-3">
                        <i class="fas fa-phone-alt me-3 text-warning"></i> 
                        <span>(0251) 1234567</span>
                    </p>
                    <p class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope me-3 text-warning"></i> 
                        <span>info@sdnlaladon03.sch.id</span> </p>
                </div>

                <div class="social-buttons d-flex gap-2">
                    <a href="#" class="btn btn-light social-icon-btn" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-danger social-icon-btn" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="btn btn-dark social-icon-btn" title="TikTok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h4 class="text-uppercase mb-4 fw-bold" style="color: #ffc107;">Link</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.php" class="text-white text-decoration-none small hover-link">Beranda</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none small hover-link">Profil Guru</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none small hover-link">Berita Sekolah</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none small hover-link">PPDB</a></li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <div class="map-container shadow rounded-4 overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5034889805406!2d106.75638967355988!3d-6.5841596643603735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4fcb2dbba71%3A0xddc59b73fb7e05da!2sSDN%20Laladon%2003!5e0!3m2!1sid!2sid!4v1771216995269!5m2!1sid!2sid" 
                        width="100%" 
                        height="220" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>

        <hr class="my-4" style="opacity: 0.1; border-color: #fff;">

        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start">
                <p class="mb-0 small opacity-75">
                    © 2026 <strong>SDN Laladon 03</strong>, All Right Reserved.
                </p>
            </div>
            <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
                <a href="#" class="back-to-top d-inline-block" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>