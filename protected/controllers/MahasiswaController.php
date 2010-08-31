<?php

class MahasiswaController extends Controller
{
    private $_mahasiswa;
    
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on 
            //the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
            ),
        );
    }
    
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionRegister()
    {
        $mahasiswa = new Mahasiswa;
        $this->performAjaxValidation($mahasiswa);
        if (isset($_POST['Mahasiswa'])) {
            $mahasiswa = Mahasiswa::model()->findByNIM(trim($_POST['Mahasiswa']['nim']));
            if($mahasiswa !== null && $mahasiswa->registered == 1) {
                Yii::app()->user->setFlash('message',"Mahasiswa dengan "
                    . "NIM <b>{$mahasiswa->nim}</b> sudah terdaftar");
                $this->redirect(array('token'));
            }
            if($mahasiswa === null) {
                Yii::app()->user->setFlash('message',"Mahasiswa dengan "
                    . "NIM <b>{$_POST['Mahasiswa']['nim']}</b> tidak ada dalam sistem "
                    . "silahkan hubungi petugas LPPM");
                $mahasiswa = new Mahasiswa;
            } else if(isset($_POST['Mahasiswa']['namaLengkap'])) {
                $mahasiswa->attributes = $_POST['Mahasiswa'];
                $mahasiswa->registered = 1;
                if($mahasiswa->save()) {
                    $this->redirect(array('registerSuccess'));
                }
            }
        }
        
        $this->render('register',array(
            'mahasiswa' => $mahasiswa,
        ));
    }
    
    public function actionRegisterSuccess()
    {
        $this->render('registerSuccess');
    }
    
    public function actionToken()
    {
        $this->render('token');
    }

    public function actionUpdate()
    {
        $mahasiswa = Mahasiswa::model()->findByUserId(Yii::app()->user->id);
        //$mahasiswa = new Mahasiswa;
        
        if(isset($_POST['Mahasiswa'])){
            unset($_POST['Mahasiswa']['password']);
            $mahasiswa->attributes=$_POST['Mahasiswa'];
            if($mahasiswa->save()){
                $this->redirect('mahasiswa/view');
            }
            //var_dump($_POST['Mahasiswa']);
        }
        $this->render('update',array(
            'mahasiswa'=>$mahasiswa,
        ));
    }
    
    public function actionDependentSelectJurusan()
    {
        echo CHtml::activeDropDownList(Mahasiswa::model(),'jurusanId', 
            CHtml::listData(Jurusan::model()->findAllByFakultasId($_GET['fakultasId']),'id','nama'),
            array('empty' => Yii::t('app','Select Jurusan'))
        );
        Yii::app()->end();
    }
    
    
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax'])) { 
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
     public function actionView()
    {
        $currentMahasiswa = Mahasiswa::model()->findByUserId(Yii::app()->user->id);
        //$this->render('view');
        //$user = new User;
        //$mahasiswa->userId = $user->id;
        $this->render('view',array(
            'mahasiswa'=>$currentMahasiswa,
            ));
    }
}
