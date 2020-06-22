<?php

namespace common\components\feedBack;

use Yii;
use yii\base\Widget;
use yii\widgets\ActiveForm;

class FBFWidget extends Widget
{

    public function run()
    {
        $model = new \frontend\models\ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
        }
        return $this->render('fbfWidget', [
            'model' => $model,
        ]);

    }

}