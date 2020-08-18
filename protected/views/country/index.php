<?php
/* @var $this CountryController */
$this->breadcrumbs = array('Country' => array('index'), 'Create',);
$this->menu = array(array('label' => 'View Countries', 'url' => array('view')),
    );
?>
<h1>Create Country</h1>

<?php
/*$model = new Country;
*/?>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array('id' => 'country-Country-form',
// Please note: When you enable ajax validation, make sure the corresponding
// controller action is handling ajax validation correctly.
// See class documentation of CActiveForm for details on this,
// you need to use the performAjaxValidation()-method described there.
        'enableAjaxValidation'=>FALSE,
       ));
    ?>
    <p class="note">Fields with <span class="required">*</span> are required.
    </p>

    <?php echo $form->errorSummary($model);


    ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'countryname'); ?>
        <?php echo $form->textField($model, 'countryname'); ?>
        <?php echo $form->error($model, 'countryname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cityname'); ?>
        <?php echo $form->textField($model, 'cityname'); ?>
        <?php echo $form->error($model, 'cityname'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'population'); ?>
        <?php echo $form->textField($model, 'population'); ?>
        <?php echo $form->error($model, 'population'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>
</div>