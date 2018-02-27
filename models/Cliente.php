<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $nit
 * @property string $nombre
 *
 * @property Factura[] $facturas
 * @property Remision[] $remisions
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nit', 'nombre'], 'required'],
            [['nit'], 'integer'],
            [['nombre'], 'string', 'max' => 80],
            [['nit'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nit' => 'Nit',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Factura::className(), ['Cliente_nit' => 'nit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemisions()
    {
        return $this->hasMany(Remision::className(), ['Cliente_nit' => 'nit']);
    }
}
