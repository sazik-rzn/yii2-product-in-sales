<?php

namespace sazik\product\inSales\widgets\SalesWidget;

use Yii;

class SalesWidget extends \yii\base\Widget {

    public $products_ids;
    public $js = true;

    public function run() {
        parent::run();
        if(!$this->js){
            return $this->render('view', ['ids' => '', 'js' => $this->js]);
        }
        return $this->render('view', ['ids' => implode(',', $this->products_ids), 'js' => $this->js]);
    }

}
