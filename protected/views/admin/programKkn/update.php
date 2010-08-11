<?php
$this->breadcrumbs=array(
    'Program Kkns'=>array('index'),
    $programKkn->id=>array('view','id'=>$programKkn->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Program Kkn'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Program Kkn'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Program Kkn'), 'url'=>array('view', 'id'=>$programKkn->id)),
    array('label'=>Yii::t('app','Manage Program Kkn'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Program Kkn') ?></h2>

<?php echo $this->renderPartial('_form', array('programKkn'=>$programKkn)); ?>