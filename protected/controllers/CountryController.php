<?php

class CountryController extends Controller
{
    public function actionIndex()
    {

            $this->render('index');
            $model = new Country;
            if (isset($_POST['Country'])) {
                $model->attributes = $_POST['Country'];
                $model->save(FALSE);
        }
    }


}