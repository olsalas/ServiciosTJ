<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "remision".
 *
 * @property int $id
 * @property string $tipo
 * @property string $fecha
 * @property int $Cliente_nit
 *
 * @property FacturaRemision[] $facturaRemisions
 * @property MaterialRemision[] $materialRemisions
 * @property Cliente $clienteNit
 */
class Remision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remision';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'fecha', 'Cliente_nit'], 'required'],
            [['fecha'], 'safe'],
            [['Cliente_nit'], 'integer'],
            [['tipo'], 'string', 'max' => 2],
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
            'tipo' => 'Tipo',
            'fecha' => 'Fecha',
            'Cliente_nit' => 'Cliente Nit',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturaRemisions()
    {
        return $this->hasMany(FacturaRemision::className(), ['Remision_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialRemisions()
    {
        return $this->hasMany(MaterialRemision::className(), ['Remision_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteNit()
    {
        return $this->hasOne(Cliente::className(), ['nit' => 'Cliente_nit']);
    }
}
