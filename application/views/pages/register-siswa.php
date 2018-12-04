<section class="section">
	<div class="container">
		<div class="columns is-mobile is-centered">
			<div class="column is-half-desktop is-half-tablet is-fullwidth-mobile" style="border: 1px #C1C7D0 solid" >
				<div class="has-text-centered" style="padding-top: 20px
				">
					<h4 class="title is-size-4">Daftar untuk siswa</h4>
				</div>
				<hr>
				<div class="columns is-centered">
					<div class="column is-four-fifths">
						<div class="content-tab">
							<div class="field">
			  					<label class="label">Nama</label>
			  					<div class="control">
			    					<input class="input" type="text">
			  					</div>
	   							<p class="help">Minimal 3 huruf dan tidak boleh mengandung angka</p>
							</div>
							<div class="field">
			  					<label class="label">Username</label>
			  					<div class="control">
			    					<input class="input" type="text">
			  					</div>
					   			<p class="help">Minimal 5 karakter</p>
							</div>
							<div class="field">
			  					<label class="label">Password</label>
			  					<div class="control">
			    					<input class="input" type="password">
					   				<p class="help">Minimal 6 karakter</p>
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
			    					<a class="button is-primary is-fullwidth is-medium" onclick="openTab(event,'formlanjut')" style="display: inline-block;">Lanjut</a>
			  					</div>
							</div>
							<p style="padding-top: 20px">By signing up, you agree to our Terms, 
							Data Policy and Cookies Policy.</p>
							<p class="has-text-centered" style="padding-top: 40px;padding-bottom: 40px">Sudah punya akun? <a class="tab" href="<?php echo site_url('login') ?>">Login</a></p>
						</div>
						<div class="content-tab" id="formlanjut" style="display: none">
							<div class="field">
				  				<label class="label">Handphone</label>
				  				<div class="control">
				    				<input class="input" type="text" value="+62">
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
				    				<input class="input" type="text" value="+62">
				  				</div>
							</div>
							<div class="field">
				  				<label class="label">Nama ibu</label>
				  				<div class="control">
				    				<input class="input" type="text">
				  				</div>
							</div>
							<div class="field">
				  				<label class="label">Handphone ibu</label>
				  				<div class="control">
				    				<input class="input" type="text" value="+62">
				  				</div>
							</div>
							<div class="field">
								<div class="control">
			    					<button class="button is-link is-fullwidth is-medium" style="display: inline-block;">Daftar</button>
			  					</div>
							</div>
							<p style="padding-top: 20px">By signing up, you agree to our Terms, Data Policy and Cookies Policy.</p>
							<p class="has-text-centered" style="padding-top: 40px;padding-bottom: 40px">Sudah punya akun? <a class="tab" href="<?php echo site_url('login') ?>">Login</a></p>
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