<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Create',
);
$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<div class="box">
    <?php echo $this->renderPartial('_form', array('user'=>$user)); ?></div>
