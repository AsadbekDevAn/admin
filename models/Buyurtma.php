<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buyurtma".
 *
 * @property int $id
 * @property string $ism
 * @property string $tel
 * @property string $kun
 * @property int $xona_id
 *
 * @property Xona $xona
 */
class Buyurtma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buyurtma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ism', 'tel', 'kun', 'xona_id'], 'required'],
            [['kun'], 'safe'],
            [['xona_id','active'], 'integer'],
            [['ism'], 'string', 'max' => 200],
            [['tel'], 'string', 'max' => 255],
            [['xona_id'], 'exist', 'skipOnError' => true, 'targetClass' => Xona::className(), 'targetAttribute' => ['xona_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ism',
            'tel' => 'Tel',
            'kun' => 'Kun',
            'xona_id' => 'Xona ID',
        ];
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
    
}
