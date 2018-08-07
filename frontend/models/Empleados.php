<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property int $id
 * @property string $nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $fecha_nac
 * @property int $id_sexo
 * @property string $calle
 * @property string $num_ext
 * @property string $num_int
 * @property string $colonia
 * @property int $cp
 * @property int $id_municipio
 * @property int $id_estado
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property int $id_puesto
 * @property int $id_sucursal
 * @property int $status 1 = activo, 2 = no activo
 * @property string $created_at
 * @property string $updated
 * @property int $deleted
 *
 * @property CatGeneros $sexo
 */
class Empleados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'primer_apellido', 'id_sexo', 'id_puesto', 'id_sucursal', 'status'], 'required'],
            [['id_sexo', 'cp', 'id_municipio', 'id_estado', 'id_puesto', 'id_sucursal', 'status', 'deleted'], 'integer'],
            [['created_at', 'updated'], 'safe'],
            [['nombre', 'primer_apellido', 'segundo_apellido', 'telefono', 'celular', 'email'], 'string', 'max' => 100],
            [['fecha_nac', 'num_ext', 'num_int'], 'string', 'max' => 50],
            [['calle', 'colonia'], 'string', 'max' => 200],
            [['id_sexo'], 'exist', 'skipOnError' => true, 'targetClass' => CatGeneros::className(), 'targetAttribute' => ['id_sexo' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'primer_apellido' => 'Primer Apellido',
            'segundo_apellido' => 'Segundo Apellido',
            'fecha_nac' => 'Fecha Nac',
            'id_sexo' => 'Id Sexo',
            'calle' => 'Calle',
            'num_ext' => 'Num Ext',
            'num_int' => 'Num Int',
            'colonia' => 'Colonia',
            'cp' => 'Cp',
            'id_municipio' => 'Id Municipio',
            'id_estado' => 'Id Estado',
            'telefono' => 'Telefono',
            'celular' => 'Celular',
            'email' => 'Email',
            'id_puesto' => 'Id Puesto',
            'id_sucursal' => 'Id Sucursal',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated' => 'Updated',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSexo()
    {
        return $this->hasOne(CatGeneros::className(), ['id' => 'id_sexo']);
    }
}
