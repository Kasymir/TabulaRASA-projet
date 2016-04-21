<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><h1><?=$title;?></h1></h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
    <p><?=$welcomeMessage;?></p>

	<a class="btn btn-md btn-success" href="<?=DIR;?>subpage">
		<?php echo Language::show('openSubPage', 'Home'); ?>
	</a>
</div>