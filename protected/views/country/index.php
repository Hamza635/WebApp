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
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'country_form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    ));
    ?>
    <p class="note">Fields with <span class="required">*</span> are required.
    </p>


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
        <?php echo CHtml::submitButton('Submit');

        /*<?php echo CHtml::ajaxSubmitButton( 'Send',
            CHtml::normalizeUrl(array('Country/Index'))
             );
        */?>
    </div>

<?php $this->endWidget(); ?>
</div>
