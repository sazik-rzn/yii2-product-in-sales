<?php

namespace sazik\product\InSales;

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
    public $params_preload_method_name = false;
    public $params_model_class = false;

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
        if($this->params_model_class && $this->params_preload_method_name){
            $class = $this->params_model_class;
            $func = $this->params_preload_method_name;
            $class::$func();
        }
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
