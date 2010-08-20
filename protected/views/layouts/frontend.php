<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="span-19">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span-5 last">
        <div id="sidebar">
        <?php $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Registrasi',
            'id' => 'portlet-register'
        ))?>
        
        <form action=<?php echo $this->createUrl('user/register')?>>
            <div class="row">
                <label>NIM</label>
                <input type="text" name="nim"/>
            </div>
            <div class="row buttons">
                <input type="submit" value="Daftar"/>
            </div>
        </form>
        
        <?php $this->endWidget()?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>
