<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pkh".
 *
 * @property string $id_pkh
 * @property string $nama
 * @property string $nik
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kelurahan
 * @property int $tahun
 */
class PkhModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pkh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pkh', 'nama', 'nik', 'alamat', 'kecamatan', 'kelurahan', 'tahun'], 'required'],
            [['tahun'], 'integer'],
            [['id_pkh', 'nama', 'alamat', 'kecamatan', 'kelurahan'], 'string', 'max' => 99],
            [['nik'], 'string', 'max' => 16],
            [['id_pkh'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pkh' => 'Id Pkh',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'alamat' => 'Alamat',
            'kecamatan' => 'Kecamatan',
            'kelurahan' => 'Kelurahan',
            'tahun' => 'Tahun',
        ];
    }
}
