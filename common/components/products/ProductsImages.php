<?php

namespace common\components\products;

use Yii;
use yii\web\NotFoundHttpException;

class ProductsImages
{

    public function images()
    {

        $images[2] = [

            1 => 'cpcd-10-1-(1024x683).jpg',
            2 => 'cpcd-10-2-(1024x683).jpg',
            3 => 'cpcd-10-3-(1024x683).jpg',
        ];

        $images[3] = [

            1 => 'cpcd-10-1-(1024x683).jpg',
            2 => 'cpcd-10-2-(1024x683).jpg',
            3 => 'cpcd-10-3-(1024x683).jpg',
        ];

        $images[4] = [

            1 => 'cpcd-15-1-(1024x683).jpg',
            2 => 'cpcd-15-2-(1024x683).jpg',
            3 => 'cpcd-15-3-(1024x683).jpg',
        ];
        $images[5] = [

            1 => 'cpcd-15-1-(1024x683).jpg',
            2 => 'cpcd-15-2-(1024x683).jpg',
            3 => 'cpcd-15-3-(1024x683).jpg',
        ];

        $images[6] = [

            1 => 'cpcd-18-1-(1024x683).jpg',
            2 => 'cpcd-18-2-(1024x683).jpg',
            3 => 'cpcd-18-3-(1024x683).jpg',
        ];

        $images[7] = [

            1 => 'cpcd-100-1-(1024x683).jpg',
            2 => 'cpcd-100-2-(1024x683).jpg',
            3 => 'cpcd-100-3-(1024x683).jpg',
        ];

        $images[8] = [

            1 => 'cpcd-20-1-(1024x683).jpg',
            2 => 'cpcd-20-2-(1024x683).jpg',
            3 => 'cpcd-20-3-(1024x683).jpg',
        ];


        $images[9] = [

            1 => 'cpcd-20-1-(1024x683).jpg',
            2 => 'cpcd-20-2-(1024x683).jpg',
            3 => 'cpcd-20-3-(1024x683).jpg',
        ];

        $images[10] = [

            1 => 'cpcd-25-1-(1024x683).jpg',
            2 => 'cpcd-25-2-(1024x683).jpg',
            3 => 'cpcd-25-3-(1024x683).jpg',
        ];

        $images[11] = [

            1 => 'cpcd-25-1-(1024x683).jpg',
            2 => 'cpcd-25-2-(1024x683).jpg',
            3 => 'cpcd-25-3-(1024x683).jpg',
        ];


        $images[12] = [

            1 => 'cpcd-30-1-(1024x683).jpg',
            2 => 'cpcd-30-2-(1024x683).jpg',
            3 => 'cpcd-30-3-(1024x683).jpg',
        ];


        $images[13] = [

            1 => 'cpcd-30-1-(1024x683).jpg',
            2 => 'cpcd-30-2-(1024x683).jpg',
            3 => 'cpcd-30-3-(1024x683).jpg',
        ];

        $images[14] = [

            1 => 'cpcd-35-1-(1024x683).jpg',
            2 => 'cpcd-35-2-(1024x683).jpg',
            3 => 'cpcd-35-3-(1024x683).jpg',

        ];

        $images[15] = [

            1 => 'cpcd-35-1-(1024x683).jpg',
            2 => 'cpcd-35-2-(1024x683).jpg',
            3 => 'cpcd-35-3-(1024x683).jpg',

        ];

        $images[16] = [

            1 => 'cpcd-40-1-(1024x683).jpg',
            2 => 'cpcd-40-2-(1024x683).jpg',
            3 => 'cpcd-40-3-(1024x683).jpg',

        ];

        $images[17] = [

            1 => 'cpcd-45-1-(1024x683).jpg',
            2 => 'cpcd-45-2-(1024x683).jpg',
            3 => 'cpcd-45-3-(1024x683).jpg',

        ];

        $images[18] = [

            1 => 'cpcd-50mini-1-(1024x683).jpg',
            2 => 'cpcd-50mini-2-(1024x683).jpg',
            3 => 'cpcd-50mini-3-(1024x683).jpg',

        ];

        $images[19] = [

            1 => 'cpcd-50-1-(1024x683).jpg',
            2 => 'cpcd-50-2-(1024x683).jpg',
            3 => 'cpcd-50-3-(1024x683).jpg',

        ];

        $images[20] = [

            1 => 'cpcd-60-1-(1024x683).jpg',
            2 => 'cpcd-60-2-(1024x683).jpg',
            3 => 'cpcd-60-3-(1024x683).jpg',

        ];


        $images[21] = [

            1 => 'cpcd-70-1-(1024x683).jpg',
            2 => 'cpcd-70-2-(1024x683).jpg',
            3 => 'cpcd-70-3-(1024x683).jpg',

        ];

        $images[22] = [

            1 => 'cpcd-80-1-(1024x683).jpg',
            2 => 'cpcd-80-2-(1024x683).jpg',
            3 => 'cpcd-80-3-(1024x683).jpg',

        ];

        $images[23] = [

            1 => 'cpd-15-1-(1024x683).jpg',
            2 => 'cpd-15-2-(1024x683).jpg',
            3 => 'cpd-15-3-(1024x683).jpg',

        ];

        $images[24] = [

            1 => 'cpd-16-1.jpg',
            2 => 'cpd-16-2.jpg',
            3 => 'cpd-16-3.jpg',

        ];

        $images[25] = [

            1 => 'cpd-20-1-(1024x683).jpg',
            2 => 'cpd-20-2-(1024x683).jpg',
            3 => 'cpd-20-3-(1024x683).jpg',

        ];

        $images[26] = [

            1 => 'cpd-20gt-1-(1024x683).jpg',
            2 => 'cpd-20gt-2-(1024x683).jpg',
            3 => 'cpd-20gt-3-(1024x683).jpg',

        ];


        $images[27] = [

            1 => 'cpd-25-1-(1024x683).jpg',
            2 => 'cpd-25-2-(1024x683).jpg',
            3 => 'cpd-25-3-(1024x683).jpg',

        ];

        $images[28] = [

            1 => 'cpd-25gt-1-(1024x683).jpg',
            2 => 'cpd-25gt-2-(1024x683).jpg',
            3 => 'cpd-25gt-3-(1024x683).jpg',

        ];

        $images[29] = [

            1 => 'cpd-30-1-(1024x683).jpg',
            2 => 'cpd-30-2-(1024x683).jpg',
            3 => 'cpd-30-3-(1024x683).jpg',

        ];


        $images[30] = [

            1 => 'cpd-35-1-(1024x683).jpg',
            2 => 'cpd-35-2-(1024x683).jpg',
            3 => 'cpd-35-3-(1024x683).jpg',

        ];


        $images[31] = [

            1 => 'cbd-15-1206-1.jpg',
            2 => 'cbd-15-1213-1.jpg',
            3 => 'cbd-15-1220-1.jpg',

        ];

        $images[32] = [

            1 => 'cbd-20-1385-1.jpg',
            2 => 'cbd-20-1394-1.jpg',
            3 => 'cbd-20-1397-1.jpg',

        ];

        $images[33] = [

            1 => 'cbd-30-1299-1.jpg',
            2 => 'cbd-30-1307-1.jpg',
            3 => 'cbd-30-1321-1.jpg',

        ];


        $images[34] = [

            1 => 'cdd-10-32-1232-1.jpg',
            2 => 'cdd-10-32-1237-1.jpg',
            3 => 'cdd-10-32-1238-1.jpg',

        ];


        $images[35] = [

            1 => 'cdd-12-25-1344-1.jpg',
            2 => 'cdd-12-25-1352-1.jpg',
            3 => 'cdd-12-25-1358-1.jpg',

        ];


        $images[36] = [

            1 => 'cdd-15-45-1322-1.jpg',
            2 => 'cdd-15-45-1335-1.jpg',
            3 => 'cdd-15-45-1406-1.jpg',

        ];


        $images[37] = [

            1 => 'cdd-15-45-cb-1411-1.jpg',
            2 => 'cdd-15-45-cb-1415-1.jpg',
            3 => 'cdd-15-45-cb-1419-1.jpg',

        ];


        $images[38] = [

            1 => 'cdd-20-30-1364-1.jpg',
            2 => 'cdd-20-30-1372-1.jpg',
            3 => 'cdd-20-30-1379-1.jpg',

        ];


        $images[39] = [

            1 => 'cdd-10-35-1242-1.jpg',
            2 => 'cdd-10-35-1244-1.jpg',
            3 => 'cdd-10-35-1250-1.jpg',

        ];

        $images[40] = [

            1 => 'cdd-10-35-1242-1.jpg',
            2 => 'cdd-10-35-1244-1.jpg',
            3 => 'cdd-10-35-1250-1.jpg',

        ];


        $images[41] = [

            1 => 'cdd-10-35-1242-1.jpg',
            2 => 'cdd-10-35-1244-1.jpg',
            3 => 'cdd-10-35-1250-1.jpg',

        ];

        $images[42] = [

            1 => 'cqd-15-1.jpg',
            2 => 'cqd-15-2.jpg',
            3 => 'cqd-15-3.jpg',

        ];


        $images[43] = [

            1 => 'cqd-15-1.jpg',
            2 => 'cqd-15-2.jpg',
            3 => 'cqd-15-3.jpg',

        ];

        $images[44] = [

            1 => 'cqd-15-1.jpg',
            2 => 'cqd-15-2.jpg',
            3 => 'cqd-15-3.jpg',

        ];

        $images[45] = [

            1 => 'qd-40-1611.jpg',
            2 => 'qd-40-1617.jpg',
            3 => 'qd-40-1620.jpg',

        ];



        $images[46] = [

            1 => 'bdd-20-1442-jac.jpg',
            2 => 'bdd-20-1455-jac.jpg',
            3 => 'bdd-20-cabin-1469-jac.jpg',
            4 => 'bdd-20-cabin-1473-jac.jpg',
        ];

        return $images;
    }

}

