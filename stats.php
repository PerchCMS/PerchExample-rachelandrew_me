<?php include('perch/runtime.php'); ?>
<?php perch_layout('global.header', array(
	'title'=>'Stats and Personal Bests - trying not to come last'
)); ?>
	
		
		<div class="primary-content">		
	 		<h1><?php perch_content('Heading');?></h1>

    		<?php perch_content('Content');?>
		</div>

		<div class="sidebar">
			<?php perch_layout('global.ads'); ?>
		</div>

	
	
<?php perch_layout('global.footer'); ?>