<?php

namespace common\components\mainPagesData;



use Yii;

class MainPagesDataLanguage
{

    public function currentLanguage(){

        $currentLanguage = Yii::$app->db
            ->createCommand('
            select
            languages.id,
            languages.name,
            languages.url,
            languages.active
            from
            languages
            where languages.url = "' . Yii::$app->language . '"'
            )
            ->queryOne();

        //(new \common\components\dump\Dump())->printR(Yii::$app->language);

        return $currentLanguage;

    }


    public function LanguageSelection(){

        $currentLanguage = Yii::$app->db
            ->createCommand('
            select
            languages.name,
            languages.url
            from
            languages
            where languages.active = 1'
            )
            ->queryAll();

        //echo '<pre>';
        //var_dump($texts);
        //print_r($languageId);
        //echo '</pre>';

        return $currentLanguage;

    }





}

