<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Empleados */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'primer_apellido',
            'segundo_apellido',
            'fecha_nac',
            'id_sexo',
            'calle',
            'num_ext',
            'num_int',
            'colonia',
            'cp',
            'id_municipio',
            'id_estado',
            'telefono',
            'celular',
            'email:email',
            'id_puesto',
            'id_sucursal',
            'status',
            'created_at',
            'updated',
        ],
    ]) ?>

</div>
