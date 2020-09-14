<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Producto;

/**
 * ProductoSearch represents the model behind the search form of `app\models\Producto`.
 */
class ProductoSearch extends Producto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_producto'], 'integer'],
            [['producto', 'descripcion', 'id_prove', 'existencia', 'precio_venta', 'autorizado', 'IVA'], 'safe'],
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
        $query = Producto::find();

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
            'id_producto' => $this->id_producto,
        ]);

        $query->andFilterWhere(['like', 'producto', $this->producto])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'id_prove', $this->id_prove])
            ->andFilterWhere(['like', 'existencia', $this->existencia])
            ->andFilterWhere(['like', 'precio_venta', $this->precio_venta])
            ->andFilterWhere(['like', 'autorizado', $this->autorizado])
            ->andFilterWhere(['like', 'IVA', $this->IVA]);

        return $dataProvider;
    }
}
