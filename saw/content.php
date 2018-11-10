 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>

 				<div class="container jumbotron" style="height: 100%;min-height: 624px;">
 					<p class="float-right">
 						<a class="btn btn-success btn-lg" href="#" role="button">Proses SAW</a>
 					</p>
 					<h1 class="display-3"><?= !empty($content_title)?$content_title:'Judul';  ?></h1>
 					<?php include('bobot/bobot.php') ?>
 					<p class="lead">
 						<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
 					</p>
 				</div>

