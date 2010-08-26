<?php
$this->breadcrumbs=array(
    'Berita'=>array('/berita'),
    $berita->id,
);?>
<h2><?php echo CHtml::link(CHtml::encode($berita->title), array('view', 'id'=>$berita->id)); ?></h2>
<p><?php echo nl2br(CHtml::encode($berita->body))?></p>
