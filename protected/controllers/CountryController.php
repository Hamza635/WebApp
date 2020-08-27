<?php

class CountryController extends Controller
{

    public function actionIndex()
    {
        $model = new Country;
        $this->performAjaxValidation($model);
        if (isset($_POST['Country'])) {
            $model->attributes = $_POST['Country'];

            if ($model->save()) {
                Yii::app()->user->setFlash('Success','Data Added Successfully.');
                $this->actionview();
                exit;
            }
        }
            $this->render('index', array(
                'model' => $model,
            ));


        }
   public function actionview()
     {
          $model=new Country('search');
         $model->unsetAttributes();  // clear any default values
         if(isset($_GET['Country']))
             $model->attributes=$_GET['Country'];

         $this->render('view',array(
             'model'=>$model,


         ));
     }
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Country']))
        {
            $model->attributes=$_POST['Country'];

            if ($model->save()) {
                Yii::app()->user->setFlash('Success','Data Added Successfully.');
                $this->actionview();
                exit;
            }

        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }
    public function loadModel($id)
    {
        $model=Country::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    public function actionDelete($id)
    {

        $this->loadModel($id)->delete();

    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='country_form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}