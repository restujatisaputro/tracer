<?php

namespace app\modules\ts\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property string|null $jurusan
 * @property string|null $prodi
 * @property string|null $jenjang
 * @property string|null $prodi_p
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jurusan', 'prodi', 'jenjang', 'prodi_p'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'jurusan' => 'Jurusan',
            'prodi' => 'Prodi',
            'jenjang' => 'Jenjang',
            'prodi_p' => 'Prodi P',
        ];
    }
}
