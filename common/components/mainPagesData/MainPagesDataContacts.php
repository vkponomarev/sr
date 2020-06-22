<?php

namespace common\components\mainPagesData;



use Yii;
use yii\web\NotFoundHttpException;

/**
 * Class MainPagesDataUrlCheck
 * @package common\models\mainPagesData
 *
 *
 * function __construct($givenUrl)
 * При создании этого объека будет инициализированна полная проверка URL
 *
 * function UrlSeparator($givenUrl)
 * Разделяем данный URL на составляющие
 * URL вида:  tekst-url-5646 - стандартные урл для всего сайта.
 * Отделяем 5646 Это id станицы если не получилось то есть в самом конце текста после - не цифры или нет цифр
 * или цифры с вхождением букв то выводим ошибку.
 *
 * function getTruePageUrl($pageId)
 * По выделенному выше ID достаем из базы данных настоящий url данной страницы
 * Если не получилось выдаем 404
 *
 *
 * function pageUrlCheck($givenUrl, $truePageUrl)
 * Сравниваем переданный урл и настоящий урл страницы если они не совпадают выдаем 404
 *
 *
 */

class MainPagesDataContacts
{


    public function contacts()
    {

        Yii::$app->params['phone'] = '8917-358-88-79';
        Yii::$app->params['email'] = 'skladder@gmail.com';

    }




}

