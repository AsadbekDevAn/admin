<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakaz".
 *
 * @property int $id
 * @property int $tnomi_id
 * @property int $soni
 * @property int $narx
 * @property int $xona_id
 * @property float $umumiy
 *
 * @property Menu $tnomi
 * @property Xona $xona
 */
class Zakaz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakaz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnomi_id', 'soni', 'narx',  'umumiy'], 'required'],
            [['tnomi_id', 'soni', 'narx','xona_id'], 'integer'],
            [['umumiy'], 'number'],
            [['tnomi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['tnomi_id' => 'id']],
            [['xona_id'], 'exist', 'skipOnError' => true, 'targetClass' => Xona::className(), 'targetAttribute' => ['xona_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'b_id'=>'B_ID',
            'id' => 'ID',
            'tnomi_id' => 'Tnomi ID',
            'soni' => 'Soni',
            'narx' => 'Narx',
            'xona_id' => 'Xona ID',
            'umumiy' => 'Umumiy',
        ];
    }

    /**
     * Gets query for [[Tnomi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTnomi()
    {
        return $this->hasOne(Menu::className(), ['id' => 'tnomi_id']);
    }

    /**
     * Gets query for [[Xona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getXona()
    {
        return $this->hasOne(Xona::className(), ['id' => 'xona_id']);
    }
    public function getBuyurtma()
    {
        return $this->hasOne(Buyurtma::className(),['id'=>'b_id']);
    }
}
