<?php

namespace sazik\product\inSales\controllers;

use Yii;

class DefaultController extends \yii\web\Controller {

    /**
     * Filter product`s ids. 
     * @return int|string int(0) - no matches, string - matched ids
     */
    public function actionFilter() {
        $ids = \Yii::$app->request->post('ids', false);
        $offer_class = \sazik\product\inSales\Module::GetParam(\sazik\product\inSales\Module::offer_model_class_param);
        $checker = \Yii::createObject($offer_class);
        if($ids && $checker instanceof \sazik\product\inSales\ifaces\IOffer){
            $actual = $offer_class::getProductsIDsInActual();
            $ids = explode(',', trim($ids));
            $result = [];
            foreach ($actual as $id){
                if(in_array($id, $ids) && !in_array($id, $result)){
                    $result[] = $id;
                }
            }
            if(count($result)>0){
                return implode(',', $result);                
            }
        }
        return 0;
    }

}
