<div class="view">
    
    <h2><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?></h2>
    <p><?php echo nl2br(CHtml::encode($data->body))?></p>

</div>
