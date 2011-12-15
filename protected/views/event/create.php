<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Event', 'url'=>array('index')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>

<h1>Maak afspraak</h1>
<p class="note">Fields with <span class="required">*</span> are required.</p>

<div id="event_details">
	<h2>Afspraakgegevens</h2>
	<?php echo $this->renderPartial('edit/event', array('model'=>$model)); ?>
</div>