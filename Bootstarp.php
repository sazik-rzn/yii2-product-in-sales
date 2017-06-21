<?php

namespace sazik\product\inSales;

use yii\base\BootstrapInterface;
use yii\base\Application;

class Bootstrap implements \yii\base\BootstrapInterface {

    public function bootstrap($app) {
        $app->getUrlManager()->addRules([
            [
                'class' => 'yii\web\UrlRule',
                'route' => 'insales/default/filter',
                'pattern' => 'insales',
            ]
                ], false);
    }

}
