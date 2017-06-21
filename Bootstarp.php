<?php

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
