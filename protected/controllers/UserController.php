<?php

class UserController extends Controller
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
          'user' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $user = new User;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($user);

        if (isset($_POST['User'])) {
            $user->attributes = $_POST['User'];
            if ($user->save()) {
                $this->redirect(array('view','id' => $user->id));
            }
        }

        $this->render('create',array(
          'user' => $user,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $user = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($user);

        if (isset($_POST['User'])) {
            $user->attributes = $_POST['User'];
            if($user->save()){
                $this->redirect(array('view','id' => $user->id));
            }
        }

        $this->render('update',array(
          'user'=>$user,
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
        $dataProvider=new CActiveDataProvider('User');
        $this->render('index',array(
          'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $user=new User('search');
        if (isset($_GET['User'])) {
            $user->attributes=$_GET['User'];
        }
        
        $this->render('admin',array(
          'user'=>$user,
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
                $this->_model=User::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($user)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($user);
            Yii::app()->end();
        }
    }
}
