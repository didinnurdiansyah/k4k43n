<?php
$this->breadcrumbs=array(
    'Berita',
);?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>

