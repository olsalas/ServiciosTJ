<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property string $codigo
 * @property string $descripcion
 * @property string $precio_unitario
 * @property string $peso
 *
 * @property MaterialRemision[] $materialRemisions
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'descripcion', 'precio_unitario'], 'required'],
            [['precio_unitario', 'peso'], 'number'],
            [['codigo'], 'string', 'max' => 15],
            [['descripcion'], 'string', 'max' => 45],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'precio_unitario' => 'Precio Unitario',
            'peso' => 'Peso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialRemisions()
    {
        return $this->hasMany(MaterialRemision::className(), ['Material_codigo' => 'codigo']);
    }
}
