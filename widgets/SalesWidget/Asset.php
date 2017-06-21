<?php

namespace sazik\product\InSales\widgets\SalesWidget;

use Yii;

class Asset extends \yii\web\AssetBundle {

    public $sourcePath = '@sazik/product/InSales/widgets/SalesWidget';
    public $css = [
    ];
    public $js = [
        'js/widget.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public function getFilePath($path) {
        return $this->baseUrl . $path;
    }

}
