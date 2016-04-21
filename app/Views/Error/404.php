<?php

use Core\Error;

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><h1><?=$title;?></h1></h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
			<?php echo $data['error'];?>

			<hr />

			<h3>The page you were looking for could not be found</h3>
			<p>This could be the result of the page being removed, the name being changed or the page being temporarily unavailable</p>
			<h3>Troubleshooting</h3>

			<ul>
			  <li>If you spelled the URL manually, double check the spelling</li>
			  <li>Go to our website's home page, and navigate to the content in question</li>
			</ul>
</div>
