<div class="container is-fluid is-mobile">
	<section class="section">
    <div class="breadcrumbsStyle is-hidden-touch">
        <nav class="breadcrumb is-small" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li class="is-active"><a href="#" aria-current="page">Ujian</a></li>
            </ul>
        </nav>
    </div>
    <div class="tabs is-toggle is-fullwidth is-hidden-desktop">
        <ul>
            <li class="tab is-active" onclick="openTab(event,'latihan')">
            <a><span>Latihan</span></a>
        </li>
        <li class="tab" onclick="openTab(event,'ujian')">
            <a><span>Ujian</span></a>
        </li>
        <li class="tab" onclick="openTab(event,'kalendar')">
        <a><span>Jadwal ujian</span></a>
        </li>
        </ul>
    </div>
    <div class="tile is-ancestor">
        <div class="tile is-parent content-tab" id="latihan">
            <article class="tile is-child box hidden-border">
                <p class="title">Latihan</p>
                <hr class="line">
                <div class="columns is-multiline is-mobile is-size-7">
                    <div class="column is-half-desktop is-one-third-mobile border-latihan">
                        <nav class="level">
                            <div class="level-item">
                                <figure class="image is-32x32">
                                    <img src="<?php echo base_url()  ?>assets/images/icon/matematika.svg">
                                </figure>
                            </div>
                        </nav>
                        <nav class="level">
                            <div class="level-item">
                                <p class="has-text-centered">Matematika</p>       
                            </div>
                        </nav>
                    </div>
                    <div class="column is-half-desktop is-one-third-mobile border-latihan">
                        <nav class="level">
                            <div class="level-item">
                                <figure class="image is-32x32">
                                    <img src="<?php echo base_url()  ?>assets/images/icon/indonesia.svg">
                                </figure>
                            </div>
                        </nav>
                        <nav class="level">
                            <div class="level-item">
                                <p class="has-text-centered">Bahasa Indonesia</p>       
                            </div>
                        </nav>
                    </div>
                    <div class="column is-half-desktop is-one-third-mobile border-latihan">
                        <nav class="level">
                            <div class="level-item">
                                <figure class="image is-32x32">
                                    <img src="<?php echo base_url()  ?>assets/images/icon/kimia.svg">
                                </figure>
                            </div>
                        </nav>
                        <nav class="level">
                            <div class="level-item">
                                <p class="has-text-centered">Kimia</p>       
                            </div>
                        </nav>
                    </div>
                    <div class="column is-half-desktop is-one-third-mobile border-latihan">
                        <nav class="level">
                            <div class="level-item">
                                <figure class="image is-32x32">
                                    <img src="<?php echo base_url()  ?>assets/images/icon/fisika.svg">
                                </figure>
                            </div>
                        </nav>
                        <nav class="level">
                            <div class="level-item">
                                <p class="has-text-centered">Fisika</p>       
                            </div>
                        </nav>
                    </div>
                    <div class="column is-half-desktop is-one-third-mobile border-latihan">
                        <nav class="level">
                            <div class="level-item">
                                <figure class="image is-32x32">
                                    <img src="<?php echo base_url()  ?>assets/images/icon/biologi.svg">
                                </figure>
                            </div>
                        </nav>
                        <nav class="level">
                            <div class="level-item">
                                <p class="has-text-centered">Biologi</p>       
                            </div>
                        </nav>
                    </div>
                </div>
            </article>
        </div>
        <div class="tile is-parent content-tab hidden-mobile" id="ujian">
            <article class="tile is-child box hidden-border">
                <p class="title">Ujian</p>
                <hr class="line">
                <h5 class="title is-6">Senin, 26 November 2018</h5>
                <div class="columns is-multiline">
                    <div class="column is-full">
                        <a class="button is-large is-warning is-fullwidth">1. Ujian Matematika</a>
                    </div>
                    <div class="column is-full">
                        <a class="button is-large is-danger is-fullwidth">2. Ujian Bahasa Indonesia</a>
                    </div>
                </div>
            </article>
        </div>
        <div class="tile is-parent content-tab hidden-mobile" id="kalendar">
            <article class="tile is-child box hidden-border">
                <p class="title">Jadwal ujian</p>
                <hr class="line">
                <div class="columns is-multiline is-mobile">
                    <div class="column is-half-desktop is-half-mobile modal-button" data-target="modal-id">
                        <div class="matpel-style">
                            <nav class="level">
                                <div class="level-item">
                                    <figure class="image is-48x48">
                                        <img src="<?php echo base_url()  ?>assets/images/icon/matematika.svg">
                                    </figure>
                                </div>
                            </nav>
                            <nav class="level">
                                <div class="level-item has-text-centered is-size-7">
                                    <div>
                                    <p>Matematika</p>
                                    <p>Senin, 26 November 2018</p>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="column is-half-desktop is-half-mobile">
                        <div class="matpel-style">
                            <nav class="level">
                                <div class="level-item">
                                    <figure class="image is-48x48">
                                        <img src="<?php echo base_url()  ?>assets/images/icon/indonesia.svg">
                                    </figure>
                                </div>
                            </nav>
                            <nav class="level">
                                <div class="level-item has-text-centered is-size-7">
                                    <div>
                                        <p>Bahasa Indonesia</p>
                                        <p>Senin, 26 November 2018</p>       
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="column is-half-desktop is-half-mobile">
                        <div class="matpel-style">
                            <nav class="level">
                                <div class="level-item">
                                    <figure class="image is-48x48">
                                        <img src="<?php echo base_url()  ?>assets/images/icon/kimia.svg">
                                    </figure>
                                </div>
                            </nav>
                            <nav class="level">
                                <div class="level-item has-text-centered is-size-7">
                                    <div>
                                        <p>Kimia</p>
                                        <p>Senin, 26 November 2018</p>              
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="column is-half-desktop is-half-mobile">
                        <div class="matpel-style">
                            <nav class="level">
                                <div class="level-item">
                                    <figure class="image is-48x48">
                                        <img src="<?php echo base_url()  ?>assets/images/icon/fisika.svg">
                                    </figure>
                                </div>
                            </nav>
                            <nav class="level">
                                <div class="level-item has-text-centered is-size-7">
                                    <div>
                                        <p>Fisika</p>
                                        <p>Senin, 26 November 2018</p>       
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
	</section>
</div>

<div class="modal modal-fx-fadeInScale" id="modal-id">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Ujian Matematika</p>
            <button class="modal-button-close delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <p>Senin, 26 November 2018</p>
            <hr>
            <div class="content">
                <p class="title is-5">
                    Topik: Trigonometri
                    <ol type="1">
                        <li>Pebandingan trigonometri</li>
                        <li>Nilai fungsi trigonometri sudut istimewa</li>
                        <li>Identitas trigonometri</li>
                        <li>Grafik trigonometri</li>
                    </ol>
                </p>
            </div>
            <div class="content">
                <p class="title is-5">
                    Topik: Matriks
                </p>
                <ol type="1">
                    <li>Matriks kolom</li>
                    <li>Matriks persegi</li>
                    <li>Matriks diagonal</li>
                </ol>
            </div>
            <hr>
            <p>Hal: 24 - 64</p>
        </section>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>node_modules/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
<script type="text/javascript">

function openTab(evt, tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("content-tab");
    for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" is-active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " is-active";
}
</script>