
<h1>Users</h1>
<?php if(Yii::app()->user->hasFlash('Success')): ?>
<div class="flash-success">
    <?php echo Yii::app()->user->getFlash('Success'); ?>
</div>
<?php endif; ?>
    <?php

    $dataProvider=new CActiveDataProvider('Country');
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'countryname',
            'cityname',
            'population',
            array(
                'class'=>'CButtonColumn',

            ),
        ),


    ));

    ?>

