<?php $this->beginContent('//layouts/main'); ?>

<div class="grid_12">
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>

<div class="grid_4">
    <div class="box">
        <h2>
            <a href="#" id="toggle-operations"><?php echo Yii::t('app','Operasi')?></a>
        </h2>
        <div class="block" id="operations">
        <?php
        $this->widget('zii.widgets.CMenu', array(
            'items'=>$this->menu,
            'htmlOptions'=>array('class'=>'menu'),
        ));
        ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
