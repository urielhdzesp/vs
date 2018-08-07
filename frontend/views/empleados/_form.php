<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Empleados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primer_apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'segundo_apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_nac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sexo')->textInput() ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_ext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_int')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp')->textInput() ?>

    <?= $form->field($model, 'id_municipio')->textInput() ?>

    <?= $form->field($model, 'id_estado')->textInput() ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_puesto')->textInput() ?>

    <?= $form->field($model, 'id_sucursal')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
