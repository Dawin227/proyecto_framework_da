<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $id_producto
 * @property string $producto
 * @property string $descripcion
 * @property string $id_prove
 * @property string $existencia
 * @property string $precio_venta
 * @property string $autorizado
 * @property string $IVA
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producto', 'descripcion', 'id_prove', 'existencia', 'precio_venta', 'autorizado', 'IVA'], 'required'],
            [['producto'], 'string', 'max' => 50],
            [['descripcion', 'precio_venta'], 'string', 'max' => 60],
            [['id_prove', 'IVA'], 'string', 'max' => 20],
            [['existencia', 'autorizado'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => Yii::t('app', 'Id Producto'),
            'producto' => Yii::t('app', 'Producto'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'id_prove' => Yii::t('app', 'Id Prove'),
            'existencia' => Yii::t('app', 'Existencia'),
            'precio_venta' => Yii::t('app', 'Precio Venta'),
            'autorizado' => Yii::t('app', 'Autorizado'),
            'IVA' => Yii::t('app', 'Iva'),
        ];
    }
}
