<?php
/**
 * This is the template for generating the controller class file for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $controllerClass: the controller class name
 * - $modelClass: the model class name
 */
?>
<?php echo "<?php\n"; ?>

class <?php echo $controllerClass; ?> extends Controller
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
          '<?php echo lcfirst($modelClass)?>' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $<?php echo lcfirst($modelClass)?> = new <?php echo $modelClass; ?>;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($<?php echo lcfirst($modelClass)?>);

        if (isset($_POST['<?php echo $modelClass; ?>'])) {
            $<?php echo lcfirst($modelClass)?>->attributes = $_POST['<?php echo $modelClass; ?>'];
            if ($<?php echo lcfirst($modelClass)?>->save()) {
                $this->redirect(array('view','id' => $<?php echo lcfirst($modelClass)?>-><?php echo $ID; ?>));
            }
        }

        $this->render('create',array(
          '<?php echo lcfirst($modelClass)?>' => $<?php echo lcfirst($modelClass)?>,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $<?php echo lcfirst($modelClass)?> = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($<?php echo lcfirst($modelClass)?>);

        if (isset($_POST['<?php echo $modelClass; ?>'])) {
            $<?php echo lcfirst($modelClass)?>->attributes = $_POST['<?php echo $modelClass; ?>'];
            if($<?php echo lcfirst($modelClass)?>->save()){
                $this->redirect(array(
                  'view',
                  'id' => $<?php echo lcfirst($modelClass)?>-><?php echo $ID; ?>
                ));
            }
        }

        $this->render('update',array(
          '<?php echo lcfirst($modelClass)?>'=>$<?php echo lcfirst($modelClass)?>,
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
        $dataProvider=new CActiveDataProvider('<?php echo $modelClass; ?>');
        $this->render('index',array(
          'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $<?php echo lcfirst($modelClass)?>=new <?php echo $modelClass; ?>('search');
        if (isset($_GET['<?php echo $modelClass; ?>'])) {
            $<?php echo lcfirst($modelClass)?>->attributes=$_GET['<?php echo $modelClass; ?>'];
        }
        
        $this->render('admin',array(
          '<?php echo lcfirst($modelClass)?>'=>$<?php echo lcfirst($modelClass)?>,
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
                $this->_model=<?php echo $modelClass; ?>::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($<?php echo lcfirst($modelClass)?>)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === '<?php echo $this->class2id($modelClass); ?>-form') {
            echo CActiveForm::validate($<?php echo lcfirst($modelClass)?>);
            Yii::app()->end();
        }
    }
}
