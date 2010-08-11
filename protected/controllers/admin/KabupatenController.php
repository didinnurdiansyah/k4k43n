<?php

class KabupatenController extends AdminController
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
            'kabupaten' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $kabupaten = new Kabupaten;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($kabupaten);

        if (isset($_POST['Kabupaten'])) {
            $kabupaten->attributes=$_POST['Kabupaten'];
            if ($kabupaten->save()) {
                $this->redirect(array('view','id' => $kabupaten->id));
            }
        }

        $this->render('create',array(
            'kabupaten' => $kabupaten,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $kabupaten = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($kabupaten);

        if (isset($_POST['Kabupaten'])) {
            $kabupaten->attributes=$_POST['Kabupaten'];
            if ($kabupaten->save()) {
                $this->redirect(array('view','id' => $kabupaten->id));
            }
        }

        $this->render('update',array(
            'kabupaten' => $kabupaten,
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
        $dataProvider = new CActiveDataProvider('Kabupaten');
        $this->render('index',array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $kabupaten = new Kabupaten('search');
        $kabupaten->unsetAttributes();  // clear any default values
        if (isset($_GET['Kabupaten'])) {
            $kabupaten->attributes = $_GET['Kabupaten'];
        }

        $this->render('admin',array(
            'kabupaten' => $kabupaten,
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
                $this->_model = Kabupaten::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($kabupaten)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'kabupaten-form') { 
            echo CActiveForm::validate($kabupaten);
            Yii::app()->end();
        }
    }
}
