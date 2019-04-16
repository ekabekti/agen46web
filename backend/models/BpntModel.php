<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpnt".
 *
 * @property string $id_bpnt
 * @property string $nama
 * @property string $nik
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kelurahan
 * @property int $tahun
 */
class BpntModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpnt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bpnt', 'nama', 'nik', 'alamat', 'kecamatan', 'kelurahan', 'tahun'], 'required'],
            [['tahun'], 'integer'],
            [['id_bpnt', 'nama', 'alamat', 'kecamatan', 'kelurahan'], 'string', 'max' => 99],
            [['nik'], 'string', 'max' => 16],
            [['id_bpnt'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bpnt' => 'Id Bpnt',
            'nama' => 'Nama',
            'nik' => 'Nik',
            'alamat' => 'Alamat',
            'kecamatan' => 'Kecamatan',
            'kelurahan' => 'Kelurahan',
            'tahun' => 'Tahun',
        ];
    }
}
