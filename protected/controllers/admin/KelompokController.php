<?php

class KelompokController extends AdminController
{
    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;
    
    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array(
                    'admin','delete','index','view','create','update',
                    'dependentSelectKecamatan',
                ),
                'users' => array('admin'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     */
    public function actionView()
    {
        $kelompok = $this->loadModel();
        $mahasiswa = new Mahasiswa('search');
        $mahasiswa->unsetAttributes();
        $mahasiswa->kelompokId = $kelompok->id;
        
        if(isset($_GET['Mahasiswa'])){
            $mahasiswa->attributes = $_GET['Mahasiswa'];
        }
        $this->render('view',array(
            'kelompok' => $kelompok,
            'mahasiswa'=>$mahasiswa,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $kelompok = new Kelompok;
        

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($kelompok);

        if (isset($_POST['Kelompok'])) {
            $kelompok->attributes=$_POST['Kelompok'];
            if ($kelompok->save()) {
                $this->redirect(array('view','id' => $kelompok->id));
            }
        } else {
            $kelompok->latitude = -6.906659;
            $kelompok->longitude = 107.605591;
        }

        $this->render('create',array(
            'kelompok' => $kelompok,
        ));
    }
    
    public function actionDependentSelectKecamatan()
    {
        echo CHtml::activeDropDownList(Kelompok::model(),'kecamatanId', 
            CHtml::listData(Kecamatan::model()->findAllByKabupatenId($_GET['kabupatenId']),'id','nama'),
            array('empty' => Yii::t('app','Select Kecamatan'))
        );
        Yii::app()->end();
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $kelompok = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($kelompok);

        if (isset($_POST['Kelompok'])) {
            $kelompok->attributes=$_POST['Kelompok'];
            if ($kelompok->save()) {
                $this->redirect(array('view','id' => $kelompok->id));
            }
        }

        $this->render('update',array(
            'kelompok' => $kelompok,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     */
    public function actionDelete()
    {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel()->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
            }
        } else {
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $this->actionAdmin();
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $kelompok = new Kelompok('search');
        $kelompok->unsetAttributes();  // clear any default values
        if (isset($_GET['Kelompok'])) {
            $kelompok->attributes = $_GET['Kelompok'];
        }

        $this->render('admin',array(
            'kelompok' => $kelompok,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel()
    {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                $this->_model = Kelompok::model()->findbyPk($_GET['id']);
            }
            if ($this->_model === null) {
                throw new CHttpException(404,'The requested page does not exist.');
            }
        }
        return $this->_model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($kelompok)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'kelompok-form') { 
            echo CActiveForm::validate($kelompok);
            Yii::app()->end();
        }
    }
}
