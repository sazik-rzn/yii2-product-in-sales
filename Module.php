<?php

namespace sazik\product\inSales;

use Yii;

/**
 * Модуль добавляет фильт по скидкам в категорию.
 */
class Module extends \yii\base\Module {

    /**
     * путь к модели акций 
     * @var string|boolean 
     */
    public $offer_model_class = false;

    const params_path = 'product_in_sales';
    const offer_model_class_param = 'offer_class';

    public function init() {
        parent::init();
        $this->initParams();
        if ($this->offer_model_class) {
            self::AddParam(self::offer_model_class_param, $this->offer_model_class);
        }
    }

    private function initParams() {
        \Yii::$app->params[self::params_path] = [];
    }

    public static function AddParam($name, $val) {
        \Yii::$app->params[self::params_path][$name] = $val;
    }

    public static function GetParam($name) {
        if (isset(\Yii::$app->params[self::params_path][$name])) {
            return \Yii::$app->params[self::params_path][$name];
        }
        return false;
    }

}
