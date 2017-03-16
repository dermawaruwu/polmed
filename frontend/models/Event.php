<?php

namespace frontend\models;

use yii\base\Model;

class Event extends Model {
    public $nama;
    public $email_contact;
    public $jumlah_peserta;

    public function rules(){
        return [
            [["nama", "email_contact", "jumlah_peserta"], "required", "message" => "{attribute} tidak boleh kosong"],
            ["email_contact", "email", "message" => "Format {attribute} harus sesuai"],
            ["jumlah_peserta", "integer", "message" => "{attribute} harus bersifat integer atau satuan"]
        ];
    }
}
