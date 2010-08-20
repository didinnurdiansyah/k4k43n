<?php

class StatistikController extends AdminController
{
    public function actionIndex()
    {
        $this->render('index',array(
            'listKodeFakultas' => str_replace('"','\'',json_encode(array_keys(Fakultas::model()->staticMahasiswa))),
            'listCountMahasiswa' => str_replace('"','',json_encode(array_values(Fakultas::model()->staticMahasiswa))),
        ));
    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
}
