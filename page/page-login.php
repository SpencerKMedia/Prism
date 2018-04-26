<?php /* Template Name: Login */?>
<?php get_header('login');?>
<div class="container-fluid login-container">
	<div class="login-area">
		<div class="row">
			<div class="col-md-6">
				<a href="<?php home_url(); ?>"><img src="//www.spencerk.xyz/wp-content/uploads/2017/12/Tagline-Copy.png" class="login-logo img-responsive" /></a>
				<p class="login-desc">
					Sed nisl mauris, convallis ut justo ut, vehicula ullamcorper leo. Praesent vulputate, tortor eu maximus congue, ex risus accumsan diam, a aliquet massa arcu id ipsum. Cras imperdiet in neque eu consectetur. Donec ut magna urna. Nullam consectetur rhoncus ligula eu vulputate. Curabitur consequat felis a mi pulvinar.
				</p>
			</div>
			<div class="col-md-6">
				<?php
				$args = array(
				    'redirect' => home_url(),
				    'id_username' => 'user',
				    'id_password' => 'pass',
				   )
				;?>
				<?php wp_login_form( $args ); ?>
				<?php
				  $login 	= (isset($_GET['login']) ) ? $_GET['login'] : 0;
				    if ( $login === "failed" ) {
				  	echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
				  } elseif ( $login === "empty" ) {
				  	echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
				  } elseif ( $login === "false" ) {
				  	echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
				  }
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer('login');?>
