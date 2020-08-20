
<h1>Users</h1>


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

