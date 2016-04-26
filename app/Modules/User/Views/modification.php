<div id="page-wrapper"> 
	<div class="row"> 
		<div class="col-lg-12 text-center">
		 <h1 class="page-header text-center"><?=$title;?></h1>

		        <!-- Affichage des messages #MUSH -->
                <div class="<?=$_SESSION['yolo_message_type'];?>">
                    <p><?=$_SESSION['yolo_message'];?></p>
                </div>
                <!-- On vide le message une fois affiché une fois -->
                <?php unset($_SESSION['yolo_message']); ?>

				<form method='post' action="<?php echo DIR;?>utilisateur/modification">
				    <label>Mot de passe courant</label><input type='password' name="current_password" placeholder="Votre mot de passe courant" required /><br />
				    <label>Mot de passe</label><input type='password' name="password" placeholder="Votre nouveau mot de passe" required /><br />
				    <label>Mot de passe</label><input type='password' name="password-again" placeholder="Votre nouveau mot de passe" required /><br />
				    <input type="submit" value="Valider" />
				</form>

		</div> 
			<!-- /.col-lg-12 -->
	</div> 
		<!-- /.row -->
</div>