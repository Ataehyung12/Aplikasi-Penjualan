<?php $site = $this->konfigurasi_model->get_all() ?>
<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(<?= base_url('assets/img/'.$site->banner) ?>); position: relative;">
                
                <!-- Overlay Hitam Transparan -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170" style="position: relative; z-index: 1;">
                    
                    <!-- Teks Welcome to Korea Style dengan shadow -->
                    <h2 class="m-text1 t-center" style="color: white; font-size: 36px; font-weight: bold; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);">
                        WELCOME TO KOREA STYLE
                    </h2>
                    
                    <div class="wrap-btn-slide1 w-size1 animated" data-appear="zoomIn" style="width: 100%; max-width: 500px;">
                        <!-- Button dengan lebar penuh dengan warna oranye dan hover -->
                        <a href="<?= base_url('produk') ?>" class="flex-c-m size2 bo-rad-23 s-text2 trans-0-4 btn-belanja" style="width: 100%; padding: 15px 0;">
                            Belanja Sekarang
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS untuk Button dan Responsive Design -->
<style>
    /* Button Background Oranye */
    .btn-belanja {
        background-color: #FF9800; /* Warna oranye */
        color: white;
        text-align: center;
        font-weight: bold;
    }

    /* Hover Effect */
    .btn-belanja:hover {
        background-color: #FF5722; /* Warna oranye lebih gelap saat hover */
        color: white;
    }

    /* Responsive untuk Mobile */
    @media (max-width: 768px) {
        .wrap-content-slide1 {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .m-text1 {
            font-size: 24px;
        }
    }
</style>
