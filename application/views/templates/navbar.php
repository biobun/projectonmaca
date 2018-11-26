<nav class="navbar is-link " role="navigation" aria-label="main navigation">  
    <div class="container"> 
        <div class="navbar-brand">
            <a class="navbar-item is-logo" href="<?php echo site_url('/home') ?>">
                <!-- <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> -->
                <img src="<?php echo base_url()  ?>assets/images/white-logo-siswa.png">
            </a>
            <div class="search">
                <div class="navbar-item field">
                    <p class="control has-icons-left">
                        <input class="input search-bar" type="search" placeholder="Cari buku mata pelajaran">
                         <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>    
                </div>
            </div>
        </div>
        <div class="navbar-end is-hidden-touch">
            <a href="<?php echo site_url('/perpustakaan') ?>" class="navbar-item">
                Perpustakaan
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    <span class="icon is-large">
                        <span class="fa-stack">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </span>
                    <span>Bio Abidzar</span>
                </a>
                <div class="navbar-dropdown">
                    <div class="navbar-item">
                        <b>Halo Bio Abidzar</b>
                    </div>
                    <a class="navbar-item" href="<?php echo site_url('/profil') ?>">
                        Informasi Akun
                    </a>
                    <a class="navbar-item" href="<?php echo site_url('/home') ?>">
                        Buku Saya
                    </a>
                    <a class="navbar-item" href="<?php echo site_url('ujian') ?>">
                        Ujian
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="<?php echo site_url('login') ?>">
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar is-fixed-bottom is-hidden-desktop" role="navigation" aria-label="main navigation" style="border-top: solid #C1C7D0 1px">
    <div class="navbar-brand">
        <a href="<?php echo site_url('/home') ?>" class="navbar-item is-expanded is-block has-text-centered is-tab is-active">
            <i class="fas fa-home""></i>
            <p class="is-size-7">Buku saya</p>
        </a>
        <a href="<?php echo site_url('/perpustakaan') ?>" class="navbar-item is-expanded is-block has-text-centered">
            <i class="fas fa-book-open"></i>
            <p class="is-size-7">Perpustakaan</p>
        </a>
        <a href="<?php echo site_url('/ujian') ?>" class="navbar-item is-expanded is-block has-text-centered">
            <i class="far fa-list-alt"></i>
            <p class="is-size-7">Ujian</p>
        </a>
        <a href="<?php echo site_url('/profil') ?>" class="navbar-item is-expanded is-block has-text-centered">
            <i class="fa fa-user"></i>
            <p class="is-size-7">Profil</p>
        </a>
    </div>
</nav>
