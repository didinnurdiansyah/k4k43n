<?php

class ProgramKknController extends AdminController
{
    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;

    /**
     * Displays a particular model.
     */
    public function actionView()
    {
        $programKkn = $this->loadModel();
        $prioritas = new Prioritas;
        $prioritas->programKknId = $programKkn->id;
        $this->performAjaxValidation($prioritas);
        if (isset($_POST['Prioritas'])) { 
            //$prioritas->jurusanId = $_POST['Prioritas']['jurusanId'];
            $prioritas->attributes = $_POST['Prioritas'];
            $prioritas->save();
            $this->refresh();
        }
        $this->render('view',array(
            'prioritas' => $prioritas,
            'programKkn' => $programKkn,
        ));
    }


    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $programKkn = new ProgramKkn;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($programKkn);

        if (isset($_POST['ProgramKkn'])) {
            $programKkn->attributes=$_POST['ProgramKkn'];
            if ($programKkn->save()) {
                $this->redirect(array('view','id' => $programKkn->id));
            }
        }

        $this->render('create',array(
            'programKkn' => $programKkn,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $programKkn = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($programKkn);

        if (isset($_POST['ProgramKkn'])) {
            $programKkn->attributes=$_POST['ProgramKkn'];
            if ($programKkn->save()) {
                $this->redirect(array('view','id' => $programKkn->id));
            }
        }

        $this->render('update',array(
            'programKkn' => $programKkn,
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
    
    public function actionDeletePrioritas()
    {
        if (Yii::app()->request->isPostRequest) {
            $prioritas = Prioritas::model()->findByPk($_GET['prioritas_id']);
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            $prioritas->delete();
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','id' => $_GET['id']));
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
        $programKkn = new ProgramKkn('search');
        $programKkn->unsetAttributes();  // clear any default values
        if (isset($_GET['ProgramKkn'])) {
            $programKkn->attributes = $_GET['ProgramKkn'];
        }

        $this->render('admin',array(
            'programKkn' => $programKkn,
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
                $this->_model = ProgramKkn::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($programKkn)
    {
        if (isset($_POST['ajax'])) { 
            echo CActiveForm::validate($programKkn);
            Yii::app()->end();
        }
    }
}
