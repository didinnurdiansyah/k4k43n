<?php

class BeritaController extends AdminController
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
            'berita' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $berita = new Berita;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($berita);

        if (isset($_POST['Berita'])) {
            $berita->attributes=$_POST['Berita'];
            if ($berita->save()) {
                $this->redirect(array('view','id' => $berita->id));
            }
        }

        $this->render('create',array(
            'berita' => $berita,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $berita = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($berita);

        if (isset($_POST['Berita'])) {
            $berita->attributes=$_POST['Berita'];
            if ($berita->save()) {
                $this->redirect(array('view','id' => $berita->id));
            }
        }

        $this->render('update',array(
            'berita' => $berita,
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
     
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Berita');
        $this->render('index',array(
            'dataProvider' => $dataProvider,
        ));
    }
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
        $berita = new Berita('search');
        $berita->unsetAttributes();  // clear any default values
        if (isset($_GET['Berita'])) {
            $berita->attributes = $_GET['Berita'];
        }

        $this->render('admin',array(
            'berita' => $berita,
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
                $this->_model = Berita::model()->findbyPk($_GET['id']);
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
    protected function performAjaxValidation($berita)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'berita-form') { 
            echo CActiveForm::validate($berita);
            Yii::app()->end();
        }
    }
}
