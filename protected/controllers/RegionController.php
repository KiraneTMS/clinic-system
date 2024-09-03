<?php

class RegionController extends Controller
{
    // Define access control rules
    public function filters()
    {
        return array(
            'accessControl', // Perform access control
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index', 'view', 'create', 'update', 'delete'),
                'roles'=>array('admin', 'manager'), // Allow admin and manager roles
            ),
            array('deny',
                'actions'=>array('index', 'view', 'create', 'update', 'delete'),
                'users'=>array('*'), // Deny all other users
            ),
        );
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Region');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $this->render('view', array('model' => $model));
    }

    public function actionCreate()
    {
        $model = new Region;

        if (isset($_POST['Region'])) {
            $model->attributes = $_POST['Region'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        if (isset($_POST['Region'])) {
            $model->attributes = $_POST['Region'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        if (!isset($_GET['ajax'])) {
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        }
    }

    protected function loadModel($id)
    {
        $model = Region::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }
}
