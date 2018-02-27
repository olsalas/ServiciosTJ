<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factura".
 *
 * @property int $id
 * @property string $fecha_generacion
 * @property string $fecha_corte
 * @property int $Cliente_nit
 * @property string $subtototal
 * @property string $iva
 * @property string $total
 *
 * @property Cliente $clienteNit
 * @property FacturaRemision[] $facturaRemisions
 */
class Factura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fecha_generacion', 'fecha_corte', 'Cliente_nit'], 'required'],
            [['id', 'Cliente_nit'], 'integer'],
            [['fecha_corte'], 'safe'],
            [['subtototal', 'iva', 'total'], 'number'],
            [['fecha_generacion'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['Cliente_nit'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['Cliente_nit' => 'nit']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_generacion' => 'Fecha Generacion',
            'fecha_corte' => 'Fecha Corte',
            'Cliente_nit' => 'Cliente Nit',
            'subtototal' => 'Subtototal',
            'iva' => 'Iva',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteNit()
    {
        return $this->hasOne(Cliente::className(), ['nit' => 'Cliente_nit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturaRemisions()
    {
        return $this->hasMany(FacturaRemision::className(), ['Factura_id' => 'id']);
    }
}
