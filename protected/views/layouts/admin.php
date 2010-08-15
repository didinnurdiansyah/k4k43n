<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span-19">
        <div id="content">
            <?php echo $content; ?>
            <div class="operations">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'operations'),
                ));
            ?>
            </div>
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
                    array('label' => 'Barita','url' => array('admin/berita/index')),
                    array('label' => 'Fakultas','url' => array('admin/fakultas/index')),
                    array('label' => 'Jurusan / Program Studi','url' => array('admin/jurusan/index')),
                    array('label' => 'Jenjang Studi','url' => array('admin/jenjang/index')),
                    //array('label' => 'Program Studi','url' => array('admin/programStudi/index')),
                    array('label' => 'Kabupaten','url' => array('admin/kabupaten/index')),
                    array('label' => 'Kecamatan','url' => array('admin/kecamatan/index')),
                    array('label' => 'Program KKN','url' => array('admin/programKkn/index')),
                    array('label' => 'Kelompok','url' => array('admin/kelompok/index')),
                    array('label' => 'Mahasiswa','url' => array('admin/mahasiswa/index')),
                ),
                'htmlOptions'=>array('class'=>'sidemenu'),
            ));
            $this->endWidget();
        ?>
        
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
