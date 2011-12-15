<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->hiddenField($model, "action", array('value' => 'saveEventDetails')); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255,'value'=> $model->title == null ? "Leeg" : $model->title)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>60,'value'=>1)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php 
		//$model->isNewRecord ? 
		echo CHtml::submitButton('Volgende stap: Kies data', array('value'=>'saveEventDetails')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->