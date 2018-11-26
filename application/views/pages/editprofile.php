<section class="section">
    <div class="container is-fluid is-mobile">
        <h1 class="title">
            Ubah profil
        </h1>
        <hr class="line">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <div class="tabs is-centered is-boxed">
                    <ul>
                        <li class="tab is-active" onclick="openTab(event,'ubahProfil')">
                            <a class="">
                                <span>Ubah Profil</span>
                            </a>
                        </li>
                        <li class="tab " onclick="openTab(event,'ubahPassword')">
                            <a class="">
                                <span>Ganti Password</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="content-tab" id="ubahProfil">
                <form>
                    <div class="field is-grouped">
                        <div class="control">
                            <figure class="image is-64x64">
                                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                            </figure>
                        </div>
                        <div class="control">
                            <p><strong>Bio Abidzar</strong></p>
                            <div class="file">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Ganti foto profil
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nama</label>
                        <div class="control">
                            <input class="input" type="text" value="Bio Abidzar">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" value="biobun">
                        </div>
                    </div>
                    <div class="is-divider" data-content="Informasi Pribadi"></div>
                    <div class="field">
                        <label class="label">Jenis Kelamin</label>
                        <div class="select">
                            <select>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <label class="label">Sekolah</label> 
                                        <input type="text" name="" value="SMAN 1 Ciputat" class="input">
                                    </p>
                                </div> 
                                <div class="field is-grouped">
                                    <p class="control">
                                        <label class="label">Kelas</label>
                                        <input type="text" name="kelas" value="10 A" class="input">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="text" value="biobun@gmail.com">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nomor Telepon</label>
                        <div class="control">
                            <input class="input" type="text" value="081806084661">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                        <div class="control">
                            <a class="button is-text" href="<?php echo site_url('/profil') ?>">Cancel</a>
                        </div>
                    </div>
                </form>  
                </div>
                <div class="content-tab" id="ubahPassword" style="display: none">
                    <div class="field is-grouped">
                        <div class="control">
                            <figure class="image is-64x64">
                                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                            </figure>
                        </div>
                        <div class="control">
                            <h5 class="title is-5" style="padding-top: 15px">Bio Abidzar</h5>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Password Lama</label>
                        <div class="control">
                            <input class="input" type="password">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Password Baru</label>
                        <div class="control">
                            <input class="input" type="password">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Konfirmasi Password Baru</label>
                        <div class="control">
                            <input class="input" type="password">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Ganti Password</button>
                        </div>
                        <div class="control">
                            <a class="button is-text" href="<?php echo site_url('/profil') ?>">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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