<?php

class KecamatanController extends AdminController
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
            'kecamatan' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $kecamatan = new Kecamatan;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($kecamatan);

        if (isset($_POST['Kecamatan'])) {
            $kecamatan->attributes=$_POST['Kecamatan'];
            if ($kecamatan->save()) {
                $this->redirect(array('view','id' => $kecamatan->id));
            }
        }

        $this->render('create',array(
            'kecamatan' => $kecamatan,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $kecamatan = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($kecamatan);

        if (isset($_POST['Kecamatan'])) {
            $kecamatan->attributes=$_POST['Kecamatan'];
            if ($kecamatan->save()) {
                $this->redirect(array('view','id' => $kecamatan->id));
            }
        }

        $this->render('update',array(
            'kecamatan' => $kecamatan,
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
        $dataProvider = new CActiveDataProvider('Kecamatan');
        $this->render('index',array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $kecamatan = new Kecamatan('search');
        $kecamatan->unsetAttributes();  // clear any default values
        if (isset($_GET['Kecamatan'])) {
            $kecamatan->attributes = $_GET['Kecamatan'];
        }

        $this->render('admin',array(
            'kecamatan' => $kecamatan,
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
                $this->_model = Kecamatan::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($kecamatan)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'kecamatan-form') { 
            echo CActiveForm::validate($kecamatan);
            Yii::app()->end();
        }
    }
}
