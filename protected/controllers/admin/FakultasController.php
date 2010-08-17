<?php

class FakultasController extends AdminController
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
            $fakultas->attributes=$_POST['Fakultas'];
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
            $fakultas->attributes=$_POST['Fakultas'];
            if ($fakultas->save()) {
                $this->redirect(array('view','id' => $fakultas->id));
            }
        }

        $this->render('update',array(
            'fakultas' => $fakultas,
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
        $fakultas = new Fakultas('search');
        $fakultas->unsetAttributes();  // clear any default values
        if (isset($_GET['Fakultas'])) {
            $fakultas->attributes = $_GET['Fakultas'];
        }

        $this->render('admin',array(
            'fakultas' => $fakultas,
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
                $this->_model = Fakultas::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($fakultas)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'fakultas-form') { 
            echo CActiveForm::validate($fakultas);
            Yii::app()->end();
        }
    }
}
