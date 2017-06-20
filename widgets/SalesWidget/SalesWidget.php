<?php

namespace sazik\product\inSales\widgets\SalesWidget;

use Yii;

class SalesWidget extends \yii\base\Widget {

    public $products_ids;

    public function run() {
        parent::run();
        return $this->render('view', ['ids' => implode(',', $this->products_ids)]);
    }

}
