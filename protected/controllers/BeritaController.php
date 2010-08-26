<?php

class BeritaController extends Controller
{
    public $layout='//layouts/frontend';
    
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Berita');
        $this->render('index',array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionView()
    {
        if (!isset($_GET['id'])) {
            throw new CHttpException(404,'The requested page does not exist.');
        }
        $berita = Berita::model()->findByPk($_GET['id']);
        $this->render('view',array(
            'berita' => $berita
        ));
    }
}
