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
                    array('label' => 'Fakultas','url' => array('admin/fakultas')),
                    array('label' => 'Jurusan','url' => array('admin/jurusan')),
                    array('label' => 'Program Studi','url' => array('admin/programStudi')),
                    array('label' => 'Kabupaten','url' => array('admin/kabupaten')),
                    array('label' => 'Kecamatan','url' => array('admin/kecamatan')),
                    array('label' => 'Program KKN','url' => array('admin/programKkn')),
                ),
                'htmlOptions'=>array('class'=>'menuadmin'),
            ));
            $this->endWidget();
        ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
