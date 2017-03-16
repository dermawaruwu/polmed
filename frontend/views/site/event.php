<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<h2> Masukkan Detail Event: </h2>

<?php $form = ActiveForm::begin([
    "action" => ["event/proses"] //event -> nama Kontroller, proses -> nama action
]);

echo $form->field($model, "nama");
echo $form->field($model, "email_contact");
echo $form->field($model, "jumlah_peserta");
echo Html::submitButton("Proses", ["class" => "btn btn-primary"]);

ActiveForm::end();