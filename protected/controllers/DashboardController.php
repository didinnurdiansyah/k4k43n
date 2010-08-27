<?php

class DashboardController extends Controller
{
    
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index'),
                'users' => array('@'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }
    public function actionIndex()
    {
        $mahasiswa = Mahasiswa::model()->findByUserId(Yii::()->user->id);
        if($mahasiswa === null) {
            throw CHttpException(404,Yii::t('app','Halaman Tidak ditemukan');
        }
        $this->render('index',array(
            'mahasiswa' => $mahasiswa,
        ));
    }
}
