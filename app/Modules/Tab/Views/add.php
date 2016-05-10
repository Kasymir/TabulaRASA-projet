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

                <!-- Affichage des erreurs #MUSH -->
                <?= \Core\Error::display($_SESSION['yolo_error']); ?>
                <?php unset($_SESSION['yolo_error']); ?>

				<form method='post' action="<?php echo DIR;?>tablature/ajouter">
				    <label>Titre</label><input type='text' name="Titre" placeholder="Titre du morceau" required /><br />
				    <label>Album</label><input type='text' name="Album" placeholder="Album" required /><br />
				    <label>Artiste</label><input type='text' name="Artiste" placeholder="Artiste" required /><br />
				    <label>Genre</label><input type='text' name="Genre" placeholder="Genre" required /><br />
				    <label>Instrument</label><input type='text' name="Instrument" placeholder="Instrument" required /><br />
					<label>Post your tab !</label><input type='file' name="tab" required /><br />
				    <input type="submit" class="btn btn-default" value="Valider" />
				</form>

		</div> 
			<!-- /.col-lg-12 -->
	</div> 
		<!-- /.row -->
</div>