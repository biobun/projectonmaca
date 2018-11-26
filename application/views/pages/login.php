<section class="section">
	<div class="container">
		<div class="columns is-mobile is-centered">
			<div class="column is-three-fifths is-hidden-touch">
				<div class="columns is-6">
					<div class="column">
						<figure class='image is-256x256 has-image-centered'>
							<img src="<?php echo base_url()  ?>assets/images/contoh1.svg">				
						</figure>
					</div>
				</div>
			</div>
			<div class="column is-one-third-desktop is-fullwidth-mobile is-half-tablet" style="border: 1px #C1C7D0 solid" >
				<div class="columns is-centered">
					<div class="column is-four-fifths">
						<figure class="image container is-64x64" style="margin-bottom: 30px;margin-top: 30px">
			  				<img src="https://bulma.io/images/placeholders/128x128.png">
						</figure>
						<div class="content-tab" id="WebDev">
							<div class="has-text-centered">
								<h2 class="title">Masuk</h2>
								<h3 class="subtitle">Lanjutkan ke akun Siswaid</h3>
							</div>
							<hr class="line" style="margin-left: 40%">
							<form action="<?php echo site_url('home') ?>">
								<div class="field">
			  						<label class="label">Username atau ponsel</label>
			  						<div class="control">
			    						<input class="input" type="text">
			  						</div>
								</div>
								<div class="field">
			  						<label class="label">Password</label>
			  						<div class="control">
			    						<input class="input" type="password">
			  						</div>
								</div>
								<div class="field">
									<div class="control">
			    						<a class="button is-link is-fullwidth is-medium" href="<?php echo site_url('home') ?>">Login</a>
			  						</div>
								</div>
							</form>
							<p style="padding-top: 20px"><a href="">Lupa Password?</a></p>
							<p class="has-text-centered" style="padding-top: 40px;padding-bottom: 40px">Belum punya akun? <a class="tab is-active" onclick="openTab(event,'WebAud')">Daftar</a></p>
						</div>
						<div class="content-tab" id="WebAud" style="display: none">
							<div class="has-text-centered">
								<h3 class="subtitle">Daftar dan bisa baca buku mata 
								pelajaran kesukaanmu</h3>
							</div>
							<hr class="line" style="margin-left: 40%">
							<form>
							<div class="field">
			  					<label class="label">Nama</label>
			  					<div class="control">
			    					<input class="input" type="text">
			  					</div>
							</div>
							<div class="field">
			  					<label class="label">Username</label>
			  					<div class="control">
			    					<input class="input" type="text">
			  					</div>
							</div>
							<div class="field">
			  					<label class="label">Password</label>
			  					<div class="control">
			    					<input class="input" type="password">
			  					</div>
							</div>
							<div class="field">
			  					<label class="label">Confirm Password</label>
			  					<div class="control">
			    					<input class="input" type="password">
			  					</div>
							</div>
							<div class="field">
								<div class="control">
			    					<a class="button is-primary is-fullwidth is-medium" onclick="openTab(event,'formlanjut')">Lanjut</a>
			  					</div>
							</div>
							<p style="padding-top: 20px">By signing up, you agree to our Terms, 
							Data Policy and Cookies Policy.</p>
							<p class="has-text-centered" style="padding-top: 40px;padding-bottom: 40px">Sudah punya akun? <a class="tab" onclick="openTab(event,'WebDev')">Login</a></p>
						</div>
						<div class="content-tab" id="formlanjut" style="display: none">
							<div class="has-text-centered">
								<h3 class="subtitle">Daftar dan bisa baca buku mata pelajaran kesukaanmu</h3>
							</div>
							<hr class="line" style="margin-left: 40%">
							<div class="field">
				  				<label class="label">Handphone</label>
				  				<div class="control">
				    				<input class="input" type="text">
				  				</div>
							</div>
							<div class="field">
				  				<label class="label">Nama ayah</label>
				  				<div class="control">
				    				<input class="input" type="text">
				  				</div>
							</div>
							<div class="field">
				  				<label class="label">Handphone ayah</label>
				  				<div class="control">
				    				<input class="input" type="password">
				  				</div>
							</div>
							<div class="field">
				  				<label class="label">Nama ibu</label>
				  				<div class="control">
				    				<input class="input" type="password">
				  				</div>
							</div>
							<div class="field">
				  				<label class="label">Handphone ibu</label>
				  				<div class="control">
				    				<input class="input" type="password">
				  				</div>
							</div>
							<div class="field">
								<div class="control">
			    					<button class="button is-link is-fullwidth is-medium">Daftar</button>
			  					</div>
							</div>
							</form>
							<p style="padding-top: 20px">By signing up, you agree to our Terms, Data Policy and Cookies Policy.</p>
							<p class="has-text-centered" style="padding-top: 40px;padding-bottom: 40px">Sudah punya akun? <a class="tab" onclick="openTab(event,'WebDev')">Login</a></p>
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