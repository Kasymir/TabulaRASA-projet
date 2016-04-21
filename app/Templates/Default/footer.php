    </div>
    <!-- /#wrapper -->

	<?php
	Assets::js([
		Url::templatePath().'bower_components/jquery/dist/jquery.min.js',
		Url::templatePath().'bower_components/bootstrap/dist/js/bootstrap.min.js',
		Url::templatePath().'bower_components/metisMenu/dist/metisMenu.min.js',
		Url::templatePath().'bower_components/raphael/raphael-min.js',
		Url::templatePath().'bower_components/morrisjs/morris.min.js',
		//Url::templatePath().'js/morris-data.js',
		Url::templatePath().'dist/js/sb-admin-2.js',

	]);
	echo $js; //place to pass data / plugable hook zone
	echo $footer; //place to pass data / plugable hook zone
	?>
</body>

</html>