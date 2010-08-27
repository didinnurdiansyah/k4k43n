<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span-19">
        <div id="content">
            <?php echo $content; ?>
            <?php /*
            <div class="operations">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'operations'),
                ));
            ?>
            </div>
            */?>
        </div><!-- content -->
    </div>
    <div class="span-5 last">
        <div id="sidebar">
        <?php 
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Admin Menu',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>array(
                    array('label' => Yii::t('app','Profile'),'url' => array('admin/berita/index')),
                    array('label' => Yii::t('app','Map'),'url' => array('admin/berita/index')),
                ),
                'htmlOptions'=>array('class'=>'sidemenu'),
            ));
            $this->endWidget();
        ?>
        
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
