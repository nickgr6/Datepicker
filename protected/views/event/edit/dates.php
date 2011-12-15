<div id="event_dates">
	<h2>Mogelijke data</h2>
	
	<div class="form">
	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'event-form-dates',
		'enableAjaxValidation'=>true,
	)); ?>
	
		<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
			<?php echo $form->labelEx($model,'user_id'); ?>
			<?php echo $form->textField($model,'user_id',array('size'=>60,'value'=>$model->user->email)); ?>
			<?php echo $form->error($model,'user_id'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model,'recipients'); ?>
			
			<ul>
			<?php foreach ($model->recipients as $recipient) : ?>
			<li>Email: <?php echo $recipient->email; ?></li>
			<?php endforeach; ?>
			</ul>
			
			<?php echo $form->error($model,'recipients'); ?>
		</div>
		
		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
			<?php echo CHtml::link('&laquo; vorige', array('event/update',
	                                         'id'=> $model->id)); ?>
		</div>
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->
	
</div>