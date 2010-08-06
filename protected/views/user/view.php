<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $user->id,
);
$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'Update User', 'url'=>array('update', 'id'=>$user->id)),
    array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$user->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>


<div class="box">
    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$user,
        'attributes'=>array(
    		'id',
		'username',
		'password',
		'email',
		'created',
		'modified',
        ),
    )); ?>
</div>
