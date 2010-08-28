<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span-19">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span-5 last">
        <div id="sidebar">
        <?php 
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Menu',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>array(
                    array('label' => Yii::t('app','Profile'),'url' => array('mahasiswa/view')),
                    array('label' => Yii::t('app','Map'),'url' => array('map')),
                    array('label' => Yii::t('app','Download'),'url' => array('download')),
                ),
                'htmlOptions'=>array('class'=>'sidemenu'),
            ));
            $this->endWidget();
        ?>
        
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
