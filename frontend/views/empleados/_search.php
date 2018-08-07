<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EmpleadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'primer_apellido') ?>

    <?= $form->field($model, 'segundo_apellido') ?>

    <?= $form->field($model, 'fecha_nac') ?>

    <?php // echo $form->field($model, 'id_sexo') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'num_ext') ?>

    <?php // echo $form->field($model, 'num_int') ?>

    <?php // echo $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'id_municipio') ?>

    <?php // echo $form->field($model, 'id_estado') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'id_puesto') ?>

    <?php // echo $form->field($model, 'id_sucursal') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
