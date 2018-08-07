<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cat_generos".
 *
 * @property int $id
 * @property string $texto
 *
 * @property Empleados[] $empleados
 */
class CatGeneros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat_generos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['texto'], 'required'],
            [['texto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto' => 'Texto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleados::className(), ['id_sexo' => 'id']);
    }
}
