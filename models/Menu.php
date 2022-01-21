<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $tnomi
 * @property int $narx
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnomi', 'narx'], 'required'],
            [['narx'], 'integer'],
            [['tnomi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tnomi' => 'Tnomi',
            'narx' => 'Narx',
        ];
    }
}
