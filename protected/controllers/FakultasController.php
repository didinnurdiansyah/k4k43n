<?php

class FakultasController extends Controller
{

    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;
    public $layout = 'column2';

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
          'fakultas' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $fakultas = new Fakultas;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($fakultas);

        if (isset($_POST['Fakultas'])) {
            $fakultas->attributes = $_POST['Fakultas'];
            if ($fakultas->save()) {
                $this->redirect(array('view','id' => $fakultas->id));
            }
        }

        $this->render('create',array(
          'fakultas' => $fakultas,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $fakultas = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($fakultas);

        if (isset($_POST['Fakultas'])) {
            $fakultas->attributes = $_POST['Fakultas'];
            if($fakultas->save()){
                $this->redirect(array(
                  'view',
                  'id' => $fakultas->id                ));
            }
        }

        $this->render('update',array(
          'fakultas'=>$fakultas,
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
                $this->redirect(array('index'));
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
        $dataProvider=new CActiveDataProvider('Fakultas');
        $this->render('index',array(
          'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $fakultas=new Fakultas('search');
        if (isset($_GET['Fakultas'])) {
            $fakultas->attributes=$_GET['Fakultas'];
        }
        
        $this->render('admin',array(
          'fakultas'=>$fakultas,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel()
    {
        if ($this->_model===null) {
            if(isset($_GET['id'])) {
                $this->_model=Fakultas::model()->findbyPk($_GET['id']);
            }
            if($this->_model===null) {
                throw new CHttpException(404,'The requested page does not exist.');
            }
        }
        return $this->_model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($fakultas)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'fakultas-form') {
            echo CActiveForm::validate($fakultas);
            Yii::app()->end();
        }
    }
}
