<div id="page-wrapper"> 
	<div class="row"> 
		<div class="col-lg-12 text-center">
		 <h1 class="page-header text-center"><?=$title;?></h1>
<form method='post' action="<?php echo DIR;?>utilisateur/login">
    <label>Login</label><input type='text' name="login" placeholder="Votre login" required /><br />
    <label>Mot de passe</label><input type='password' name="password" placeholder="Votre mot de passe" required /><br />
    <label>Rester connecté</label><input type='checkbox' name="remember"/><br />
    <input type="submit" value="Valider" />
</form>
		</div> 
			<!-- /.col-lg-12 -->
	</div> 
		<!-- /.row -->
</div>