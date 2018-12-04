<section class="section">
<div class="container is-fluid">
    <div class="breadcrumbsStyle is-hidden-touch">
        <nav class="breadcrumb is-small" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li class="is-active"><a href="#" aria-current="page">Perpustakaan</a></li>
            </ul>
        </nav>
    </div>
    <div class="is-hidden-desktop">
        <h1 class="title is-size-2-desktop is-size-4-mobile">Perpustakaan</h1>
        <hr class="line">
        <div class="columns">
            <div class="column">
            <h6 class="title is-size-6">Mata pelajaran</h6>
                <div class='carousel carousel-animated carousel-animate-slide' data-size="5">
                <div class='carousel-container has-text-centered'>
                    <div class='carousel-item'>
                        <figure class="image container container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/matematika.svg"></figure>
                        <p class="subtitle is-size-5-desktop is-size-7-touch" style="padding-top: 10px" style="padding-top: 10px">Matematika</p>
                    </div>
                    <div class='carousel-item'>
                        <figure class="image container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/ekonomi.svg"></figure>
                        <p class="is-size-5-desktop is-size-7-touch" style="padding-top: 10px">Ekonomi</p>
                    </div>
                    <div class='carousel-item'>
                        <figure class="image container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/biologi.svg"></figure>
                        <p class="is-size-5-desktop is-size-7-touch" style="padding-top: 10px">Biologi</p>
                    </div>
                    <div class='carousel-item'>
                        <figure class="image container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/indonesia.svg"></figure>
                        <p class="is-size-5-desktop is-size-7-touch" style="padding-top: 10px">Bhs. Indonesia</p>
                    </div>
                    <div class='carousel-item'>
                        <figure class="image container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/language.svg"></figure>
                        <p class="is-size-5-desktop is-size-7-touch" style="padding-top: 10px">Bhs. Inggris</p>
                    </div>
                    <div class='carousel-item'>
                        <figure class="image container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/fisika.svg"></figure>
                        <p class="is-size-5-desktop is-size-7-touch" style="padding-top: 10px">Fisika</p>
                    </div>
                    <div class='carousel-item'>
                        <figure class="image container is-48x48"><img src="<?php echo base_url()  ?>assets/images/icon/kimia.svg"></figure>
                        <p class="is-size-5-desktop is-size-7-touch" style="padding-top: 10px">Kimia</p>
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
        </div>
    </div>
        <div class="section-library">
    <div class="columns">
        <div class="column is-one-fifth is-hidden-touch">
            <nav class="panel">
                <div class="panel-heading">
                    <h5 class="title is-size-4">Filter</h5>
                </div>
                <div class="panel-block">    
                    <div class="columns is-1 is-multiline has-text-centered" style="padding-top: 10px;padding-bottom: 10px">
                        <div class="column is-half">
                            <figure class="image container is-32x32">
                                <img src="<?php echo base_url()  ?>assets/images/icon/matematika.svg">
                            </figure>
                            <p class="subtitle is-size-7" style="padding-top: 10px">Matematika</p>       
                        </div>
                        <div class="column is-half">
                            <figure class="image container is-32x32">
                                <img src="<?php echo base_url()  ?>assets/images/icon/indonesia.svg">
                            </figure>
                            <p class="subtitle is-size-7" style="padding-top: 10px">Bahasa Indonesia</p>       
                        </div>
                        <div class="column is-half">
                            <figure class="image container is-32x32">
                                <img src="<?php echo base_url()  ?>assets/images/icon/biologi.svg">
                            </figure>
                            <p class="subtitle is-size-7" style="padding-top: 10px">Biologi</p>       
                        </div>
                        <div class="column is-half">
                            <figure class="image container is-32x32">
                                <img src="<?php echo base_url()  ?>assets/images/icon/kimia.svg">
                            </figure>
                            <p class="subtitle is-size-7" style="padding-top: 10px">Kimia</p>       
                        </div>
                    </div>
                </div>
            </nav>
        </div>  
    	<div class="column">
    		<div class="columns is-hidden-touch">
    			<div class="column">
    			</div>
    			<div class="column">
    				<div class="field is-pulled-right">
    					<div class="control">
					    	<div class="select is-primary">
					      		<select>
					        		<option>Urutkan</option>
					        		<option>A-Z</option>
					        		<option>Tanggal rilis</option>
					      		</select>
					    	</div>
					  	</div>
					</div>
    			</div>
    		</div>
    		<div class="columns is-multiline is-mobile" style="margin-left: 1rem">
    			<div class="column is-one-fifth-desktop  is-one-quarter-tablet is-half-mobile">
                    <a href="<?php echo site_url('/detail') ?>">
    				<figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/8.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    			<div class="column is-one-fifth-desktop is-one-quarter-tablet is-half-mobile">
    				<a href="<?php echo site_url('/detail') ?>">
                    <figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/10.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    			<div class="column is-one-fifth-desktop is-one-quarter-tablet is-half-mobile">
    				<a href="<?php echo site_url('/detail') ?>">
                    <figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/8.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    			<div class="column is-one-fifth-desktop is-one-quarter-tablet is-half-mobile">
    				<a href="<?php echo site_url('/detail') ?>">
                    <figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/7.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    			<div class="column is-one-fifth-desktop is-one-quarter-tablet is-half-mobile">
    				<a href="<?php echo site_url('/detail') ?>">
                    <figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/9.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    			<div class="column is-one-fifth-desktop is-one-quarter-tablet is-half-mobile">
    				<a href="<?php echo site_url('/detail') ?>">
                    <figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/7.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    			<div class="column is-one-fifth-desktop is-one-quarter-tablet is-half-mobile">
    				<a href="<?php echo site_url('/detail') ?>">
                    <figure class="image is-3by4">
               			<img src="<?php echo base_url()  ?>assets/images/cover-buku/10.jpg">
            		</figure>
                    </a>
		            <p class="title is-size-6-mobile is-size-6-tablet is-size-6-desktop line-clamp">Matematika Bisnis dan Ekonomi</p>
		            <p class="subtitle is-size-7-mobile is-size-6-tablet is-size-6-desktop line-clamp">Josep Bintang Kalangi</p>
    			</div>
    		</div>
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