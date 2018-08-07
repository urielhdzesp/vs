<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\Contacto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacto-form">

    <?php $form = ActiveForm::begin(); ?> 
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>
            </div>
        </div>
    
    
    
        
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
