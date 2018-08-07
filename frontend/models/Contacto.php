<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property int $id id de la tabla
 * @property string $nombre
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $timestamp
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'email', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            [['email'], 'email'],
            [['timestamp'], 'safe'],
            [['nombre'], 'string', 'max' => 100],
            [['email', 'subject'], 'string', 'max' => 200],
            [['nombre','subject','body'], 'filter', 'filter' => 'ucfirst']
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
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
            'timestamp' => 'Timestamp',
        ];
    }
    
    public function mayus($model){
        $model->nombre = ucfirst($model->nombre);
        $model->subject = ucfirst($model->subject);
        $model->body = ucfirst($model->body);
        return $model;
    }
}
