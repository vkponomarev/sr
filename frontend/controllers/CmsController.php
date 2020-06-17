<?php
namespace frontend\controllers;

use common\components\subDomains\SubDomains;
use common\models\components\WomanCalendars;
use common\models\Mail;
use common\components\mainPagesData\MainPagesData;
use common\models\Pages;
use common\models\Advertising;
use common\models\components\WomanCalculators;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Main controller
 * pageText($currentPage,$pageUsingKeys)
 *
 *
 *
 *
 */
class CmsController extends Controller
{


    public function actionCookieInfo()
    {

        $mainPagesData = new MainPagesData('cookie-3','pages');


        return $this->render('cookie-info', [

        ]);

    }

    public function actionPolicy()
    {

        $mainPagesData = new MainPagesData('policy-5830', 'pages');

        return $this->render('policy', [

        ]);

    }


    public function actionCompany()
    {

        $mainPagesData = new MainPagesData('company-4','pages');

        return $this->render('company', [

        ]);

    }

    public function actionContacts()
    {

        $mainPagesData = new MainPagesData('contacts-5831', 'pages');

        return $this->render('contacts', [

        ]);

    }



    public function actionRegions()
    {

        $mainPagesData = new MainPagesData('regions-5832', 'pages');

        $subDomains = new SubDomains();
        $subDomainsData = $subDomains->data();

        return $this->render('regions', [
            'subDomainsData' => $subDomainsData,
        ]);

    }


}
