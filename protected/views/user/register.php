<?php
$this->breadcrumbs=array(
    'User'=>array('/user'),
    'Register',
);?>
<h2><?php echo Yii::t('app','Registrasi Mahasiswa') ?></h2>

<?php if(Yii::app()->user->hasFlash('message')):?>
    <div class="notice">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
<?php endif;?>


<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>
