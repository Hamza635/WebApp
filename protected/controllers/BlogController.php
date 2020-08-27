<?php

class BlogController extends Controller
{

    public function actionIndex()
    {
        if(!isset(Yii::app()->session['user']))
        {
            $this->redirect(array('login'));
        }
        $this->render('index');
    }

    public function actionCreate()
    {
        $model = new Blog;
        if (isset($_POST['Blog'])) {
            $model->created_at = date("20y-m-d");
            $model->user_id=Yii::app()->user->getId();
            $model->attributes = $_POST['Blog'];
            $uploadedFile = CUploadedFile::getInstance($model, 'image');
            $fileName = "{$uploadedFile}";
            $model->image = $fileName;
            if ($model->validate()) {
/*                  $uploadedFile->saveAs(Yii::app()->basePath .'\uploads\blogs\ '.$fileName);*/
/*               $uploadedFile->saveAs(Yii::app()->baseUrl . '/upload/blogs/'.$fileName);*/
                $uploadedFile->saveAs( 'C:\wamp64\www\webapp\uploads\blogs' .$fileName);
                if ($model->save()) {
                    Yii::app()->user->setFlash('Success','Data Added Successfully.');
                    $this->actionview($model);
                    exit;
                }

            }
        }
        $this->render('Create', array('model' => $model));
    }

    public function actionview($model)
    {
       $this->render('view',array('model'=>$model,


        ));
    }
    public function actionblogs()
    {
        $model=new Blog();
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['BLog']))
            $model->attributes=$_GET['blogs'];

        $this->render('blogs',array(
            'model'=>$model,
        ));
    }

}
