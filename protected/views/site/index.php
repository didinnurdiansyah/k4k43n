<?php
$this->breadcrumbs=array(
    'Home',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Berita'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Berita'), 'url' => array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
