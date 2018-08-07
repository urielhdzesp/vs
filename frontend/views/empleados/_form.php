<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Empleados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleados-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-12">
            <h3>
                Datos Personales
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>          
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'primer_apellido')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'segundo_apellido')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fecha_nac')->widget(DatePicker::classname(), [
                'type' => DatePicker::TYPE_INPUT,
                'options' => ['placeholder' => 'Fecha Nacimiento ...'],
                'removeButton' => false,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'id_sexo')->dropDownList(
                    $items, ['prompt'=>'Seleccionar']
                    ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Domicilio</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'num_ext')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'num_int')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'cp')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'id_municipio')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'id_estado')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Contacto</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Puesto</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'id_puesto')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'id_sucursal')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'status')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success pull-right']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
