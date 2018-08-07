<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Empleados;

/**
 * EmpleadosSearch represents the model behind the search form of `frontend\models\Empleados`.
 */
class EmpleadosSearch extends Empleados
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_sexo', 'cp', 'id_municipio', 'id_estado', 'id_puesto', 'id_sucursal', 'status'], 'integer'],
            [['nombre', 'primer_apellido', 'segundo_apellido', 'fecha_nac', 'calle', 'num_ext', 'num_int', 'colonia', 'telefono', 'celular', 'email', 'created_at', 'updated'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Empleados::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_sexo' => $this->id_sexo,
            'cp' => $this->cp,
            'id_municipio' => $this->id_municipio,
            'id_estado' => $this->id_estado,
            'id_puesto' => $this->id_puesto,
            'id_sucursal' => $this->id_sucursal,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'primer_apellido', $this->primer_apellido])
            ->andFilterWhere(['like', 'segundo_apellido', $this->segundo_apellido])
            ->andFilterWhere(['like', 'fecha_nac', $this->fecha_nac])
            ->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'num_ext', $this->num_ext])
            ->andFilterWhere(['like', 'num_int', $this->num_int])
            ->andFilterWhere(['like', 'colonia', $this->colonia])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
