<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
//echo $pageText['title'];
?>
<?= $this->render('/partials/sub-domains/_sub-domains', [
    'subDomainsData' => $subDomainsData,
]); ?>
