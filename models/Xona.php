<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xona".
 *
 * @property int $id
 * @property string $xnomi
 * @property int $sigim
 */
class Xona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['xnomi', 'sigim'], 'required'],
            [['sigim'], 'integer'],
            [['xnomi'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'xnomi' => 'Xnomi',
            'sigim' => 'Sigim',
        ];
    }
}
