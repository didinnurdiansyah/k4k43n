<?php
$this->breadcrumbs=array(
    'Users',
);
$this->menu=array(
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="box">
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
    )); ?>
</div>
