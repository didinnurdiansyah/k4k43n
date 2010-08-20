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
                    array('label' => Yii::t('app','Barita'),'url' => array('admin/berita/index')),
                    array('label' => Yii::t('app','Fakultas'),'url' => array('admin/fakultas/index')),
                    array('label' => Yii::t('app','Jurusan / Program Studi'),'url' => array('admin/jurusan/index')),
                    array('label' => Yii::t('app','Jenjang Studi'),'url' => array('admin/jenjang/index')),
                    array('label' => Yii::t('app','Kabupaten'),'url' => array('admin/kabupaten/index')),
                    array('label' => Yii::t('app','Kecamatan'),'url' => array('admin/kecamatan/index')),
                    array('label' => Yii::t('app','Program KKN'),'url' => array('admin/programKkn/index')),
                    array('label' => Yii::t('app','Kelompok'),'url' => array('admin/kelompok/index')),
                    array('label' => Yii::t('app','Mahasiswa'),'url' => array('admin/mahasiswa/index')),
                    //array('label'=>Yii::t('app','Statistik'),'url'=>array('admin/statistik/index')),
                ),
                'htmlOptions'=>array('class'=>'sidemenu'),
            ));
            $this->endWidget();
        ?>
        
        <?php 
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operation',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'sidemenu'),
            ));
            $this->endWidget();
        ?>
        
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
