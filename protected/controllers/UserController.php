<?php

class UserController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionRegister()
    {
        if (isset($_GET['nim'])) {
            $mahasiswa = Mahasiswa::model()->findByNIM($_GET['nim']);
            if($mahasiswa === null) {
                Yii::app()->user->setFlash('message',"Mahasiswa dengan NIM <b>{$_GET['nim']}</b> tidak tersedia");
            }
        } else {
            throw new CHttpException(404,'The requested page does not exist.');
        }
        $this->render('register');
    }

    public function actionUpdate()
    {
        $this->render('update');
    }
}
