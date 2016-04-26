<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-header text-center"><?=$title;?></h1>
            <img src='<?=Url::templatePath();?>images/logo.png'  class="img-responsive" alt='<?=SITETITLE;?>'> 

                <!-- Affichage des messages #MUSH -->
                <div class="<?=$_SESSION['yolo_message_type'];?>">
                    <p><?=$_SESSION['yolo_message'];?></p>
                </div>

            <p><?=$welcomeMessage;?></p>
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
                </span>
            </div>
            <a class="btn btn-md btn-success" href="<?=DIR;?>subpage">
                <?php echo Language::show('openSubPage', 'Home'); ?>
            </a>
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
</div>