<?php include('../perch/runtime.php'); ?>
<?php perch_layout('global.header', array(
	'title'=>'Upcoming events and races'
)); ?>
	
		<div class="primary-content">
			<h1>My races</h1>
			<p>Listing upcoming races and other events - let me know if you will be at any of these!</p>
			<?php 
				perch_events_custom(array(
					'template'=>'events/listing/custom-listing-day.html',
					'sort'=>'eventDateTime',
					'sort-order'=>'ASC'
				));
			?>		
		</div>

		<div class="sidebar">
			<?php perch_layout('global.ads'); ?>
		</div>

<?php perch_layout('global.footer'); ?>