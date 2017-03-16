<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Event;

class EventController extends Controller{
   
    public function actionIndex(){
        $model = new Event();
        return $this->render("/site/event", [
            "model" => $model,
        ]);
    }

    public function actionProses(){
        $model = new Event();
        $model->load(\Yii::$app->request->post());
        return $this->render("/site/detail_event", [
            "model" => $model
        ]);
    }
}


