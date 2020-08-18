<?php

class CountryController extends Controller
{

    public function actionIndex()
    {
        $model = new Country;
        if (isset($_POST['Country'])) {
               $model->attributes = $_POST['Country'];
               if ($model->save())
                   var_dump("Saved");

           }

        $this->render('index',array(
            'model'=>$model,
        ));

                    }


     public function actionview()
     {
          $dataProvider=new CActiveDataProvider('Country');
         $this->render('view',array(
             'dataProvider'=>$dataProvider,
         ));
     }


    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='country-Country-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}