<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $id
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property integer $jurusan_id
 * @property string $email
 *
 * @property Jurusan $jurusan
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'alamat', 'jurusan_id', 'email'], 'required'],
            [['alamat'], 'string'],
            [['jurusan_id'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['jurusan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jurusan::className(), 'targetAttribute' => ['jurusan_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nim' => Yii::t('app', 'Nim'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
            'jurusan_id' => Yii::t('app', 'Jurusan ID'),
            'email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJurusan()
    {
        return $this->hasOne(Jurusan::className(), ['id' => 'jurusan_id']);
    }
}
