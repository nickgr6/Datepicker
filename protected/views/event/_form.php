<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255,'value'=>"test-afspraak")); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>60,'value'=>1)); ?>
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
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->