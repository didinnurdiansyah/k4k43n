<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <?php Yii::app()->getClientScript()->registerCoreScript('jquery')?>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/text.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/nav.css" media="screen" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie6.css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen" /><![endif]-->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div class="container_16">
            <div class="grid_16">
                <h1 id="branding"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
            </div>

            <div class="clear"></div>

            <div class="grid_16" >
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array('class' => 'nav main'),
                ))?>
            </div>

            <div class="clear"></div>
            
            <div class="grid_16">
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?>
            </div>
            
            <div class="grid_16">
                <h2 id="page-heading"><?php echo $this->pageTitle ?></h2>
            </div>
            <div class="clear"></div>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div class="grid_16" id="site_info">
                <div class="box">
                Copyright &copy; <?php echo date('Y'); ?> by Nevisa IT<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div>
            
            </div><!-- #site_info -->
            <div class="clear"></div>
        </div><!-- .container_16 -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-fluid16.js"></script>
    </body>
</html>
