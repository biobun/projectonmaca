<section class="section">
    <div class="container is-fluid is-mobile">
    <div class="breadcrumbsStyle">
        <nav class="breadcrumb is-small" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Perpustakaan</a></li>
                <li class="is-active"><a href="#" aria-current="page">Matematika Bisnis dan Ekonomi</a></li>
            </ul>
        </nav>
    </div>
    <div class="columns is-multiline is-mobile">
        <div class="column is-one-quarter-desktop is-full-mobile">
            <figure class="image is-2by3">
                <img src="<?php echo base_url()  ?>assets/images/cover-buku/9.jpg">
            </figure>
        </div>
        <div class="column is-full-mobile">
            <h2 class="title">
                Matematika Ekonomi dan Bisnis
            </h2>
            <h2 class="subtitle">
                Josep Bintang Kalangi
            </h2>
            <p>
                <span class="icon is-medium">
                    <i class="fas fa-star fa-2x"></i>
                </span>
                <span class="icon is-medium">
                    <i class="fas fa-star fa-2x"></i>
                </span>
                <span class="icon is-medium">
                    <i class="fas fa-star fa-2x"></i>
                </span>
                <span class="icon is-medium">
                    <i class="fas fa-star fa-2x"></i>
                </span>
                <span class="icon is-medium">
                    <i class="fas fa-star fa-2x"></i>
                </span>
                <span class="title is-3">(50)</span>
            </p>
            <div style="padding-top: 40px">
                <a class="button is-large is-primary">Baca buku</a>
                <a class="button is-large is-primary is-outlined">Baca Nanti</a>
                <a class="button is-large">
                    <span class="icon is-medium">
                        <i class="fas fa-heart"></i>
                    </span>
                    <span>(50)</span>
                </a>
            </div>
            <hr>
            <h5 class="title is-5">Resensi</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr>
            <h5 class="title is-5">Tentang buku</h5>
            <div>
                <a class="button is-medium is-outlined is-rounded">Matematika</a>
                <a class="button is-medium is-outlined is-rounded">Ekonomi</a>
                <a class="button is-medium is-outlined is-rounded">Bisnis</a>
            </div>
            <p style="padding-top: 20px">
                Penerbit: <b>Gramedia</b><br>
                Tanggal terbit: <b>20 Februari 2014</b><br>
                Halaman: <b>200 halaman</b><br>
                ISBN: <b>10292131090123</b><br>
                Bahasa: <b>Indonesia</b><br>
            </p>
        </div>
    </div>
    <hr>
    <h6 class="title is-6">Buku terkait</h6>
        <div class='carousel carousel-animated carousel-animate-slide' data-size="5">
            <div class='carousel-container'>
                <div class='carousel-item is-active'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/7.jpg"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/8.jpg"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/10.jpg"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/4.jpg"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/5.jpg"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/6.jpg"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by3"><img src="<?php echo base_url()  ?>assets/images/cover-buku/7.jpg"></figure>
                </div>
              </div>
              <div class="carousel-navigation is-centered">
                <div class="carousel-nav-left">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="carousel-nav-right">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
              </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url() ?>node_modules/bulma-extensions/dist/js/bulma-carousel.min.js"></script>
<script>
$(document).ready(function(){
         var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
      });
</script>