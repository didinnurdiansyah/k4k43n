<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $user->id=>array('view','id'=>$user->id),
    'Update',
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'View User', 'url'=>array('view', 'id'=>$user->id)),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Perbaharui User') ?></h2>

<?php echo $this->renderPartial('_form', array('user'=>$user)); ?>