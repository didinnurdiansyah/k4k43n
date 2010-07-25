<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    $fakultas->id=>array('view','id'=>$fakultas->id),
    'Update',
);
$this->menu=array(
    array('label'=>'List Fakultas', 'url'=>array('index')),
    array('label'=>'Create Fakultas', 'url'=>array('create')),
    array('label'=>'View Fakultas', 'url'=>array('view', 'id' => $fakultas->id)),
    array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Fakultas')?></h2>

<?php echo $this->renderPartial('_form', array('fakultas'=>$fakultas)); ?>