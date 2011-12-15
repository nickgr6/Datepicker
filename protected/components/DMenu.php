<?php

Yii::import('zii.widgets.CMenu');

class DMenu extends CMenu
{
	public $class;
	
	public function init() {
		if (!empty($this->class)) {
			$this->htmlOptions['class'] = $this->class;
		}
		parent::init();
	}
	
}
?>