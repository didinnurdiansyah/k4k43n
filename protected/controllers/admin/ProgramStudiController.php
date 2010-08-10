<?php

class ProgramStudiController extends AdminController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';

    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;

    /**
     * @return array action filters
     */
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
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('index','view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create','update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin','delete'),
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
        $this->render('view',array(
            'programStudi' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $programStudi = new ProgramStudi;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($programStudi);

        if (isset($_POST['ProgramStudi'])) {
            $programStudi->attributes=$_POST['ProgramStudi'];
            if ($programStudi->save()) {
                $this->redirect(array('view','id' => $programStudi->id));
            }
        }

        $this->render('create',array(
            'programStudi' => $programStudi,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $programStudi = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($programStudi);

        if (isset($_POST['ProgramStudi'])) {
            $programStudi->attributes=$_POST['ProgramStudi'];
            if ($programStudi->save()) {
                $this->redirect(array('view','id' => $programStudi->id));
            }
        }

        $this->render('update',array(
            'programStudi' => $programStudi,
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
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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
        $dataProvider = new CActiveDataProvider('ProgramStudi');
        $this->render('index',array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $programStudi = new ProgramStudi('search');
        $programStudi->unsetAttributes();  // clear any default values
        if (isset($_GET['ProgramStudi'])) {
            $programStudi->attributes = $_GET['ProgramStudi'];
        }

        $this->render('admin',array(
            'programStudi' => $programStudi,
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
                $this->_model = ProgramStudi::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($programStudi)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'program-studi-form') { 
            echo CActiveForm::validate($programStudi);
            Yii::app()->end();
        }
    }
}
