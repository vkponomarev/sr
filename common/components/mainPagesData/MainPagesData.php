<?php

namespace common\components\mainPagesData;


use common\components\subDomain\SubDomain;
use Yii;


/**
 * @param $currentPage
 * @param $pageIsUsingKeys
 *
 *
 * function __construct($currentPage, $pageIsUsingKeys)
 * Данная функция инициализирует основные данные (которые будут загружаться для каждой страницы сайта):
 * 1. Текущий язык.
 * 2. Меню выбора других языков.
 * 3. Сео тексты для страницы title, h1, description, text1, text2
 * 4. Проверка URL
 *
 *
 * function currentLanguage()
 * Вытаскиваем все данные текущего языка
 * languages.id,
 * languages.name,
 * languages.url,
 * languages.active
 * И записываем в глобальную переменную текущий язык текстом
 *
 *
 *
 * function languageSelection()
 * Достаем все активные языки для построения меню выбора языков
 * languages.name,
 * languages.url
 *
 *
 *
 *
 * function pageText($currentPage, $currentLanguage, $pageIsUsingKeys)
 * Вытаскиваем и записываем в глобальные переменные сео текста для текущей страницы сайта
 * pages_text.title,
 * pages_text.h1,
 * pages_text.description,
 * pages_text.text1,
 * pages_text.text2
 *
 *
 */
class MainPagesData
{

    var $languageID;

    function __construct($givenUrl, $tableName)
    {

        $this->currentLanguage = $this->currentLanguage();

        $this->languageSelection();

        if ($givenUrl) {

            $checkResult = new MainPagesDataUrlCheck($givenUrl, $tableName);
            $this->pageId = $checkResult->pageId;

        }

        $this->pageText($checkResult->pageId, $this->currentLanguage['id'], $tableName);

        $subDomain = new SubDomain();
        $subDomainData = $subDomain->data();
        $subDomainCheck = $subDomain->check($subDomainData);
        $subDomain->updatePageText($subDomainCheck);

        /*if ($subDomainCheck)
            $domain = $subDomainCheck;
        else
            $domain = false;*/



        //(new \common\components\dump\Dump())->printR($domain);


        $this->languageID = $this->currentLanguage['id'];

    }

    function currentLanguage()
    {

        $currentLanguage = MainPagesDataLanguage::currentLanguage();
        Yii::$app->params['currentLanguageName'] = $currentLanguage['name'];
        return $currentLanguage;

    }


    function languageSelection()
    {

        $languageSelection = MainPagesDataLanguage::LanguageSelection();
        Yii::$app->params['languageSelection'] = $languageSelection;
        //return $currentLanguage;

    }

    function pageText($currentPageId, $currentLanguageId, $tableName)
    {

        $pageText = MainPagesDataPageText::text($currentPageId, $currentLanguageId, $tableName);
        //return $pageText;
        Yii::$app->params['text']['title'] = $pageText['title'];
        Yii::$app->params['text']['h1'] = $pageText['h1'];
        Yii::$app->params['text']['description'] = $pageText['description'];
        Yii::$app->params['text']['text1'] = $pageText['text1'];
        Yii::$app->params['text']['text2'] = $pageText['text2'];

    }


    function test()
    {

        echo 'test is good';

    }


}
