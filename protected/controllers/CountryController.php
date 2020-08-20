<?php

class CountryController extends Controller
{

    public function actionIndex()
    {
        $model = new Country;
        $this->performAjaxValidation($model);
        if (isset($_POST['Country'])) {
            $model->attributes = $_POST['Country'];
           $model->save();

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


    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='country_form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}