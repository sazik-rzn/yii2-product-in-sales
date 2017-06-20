<?php

namespace sazik\product\inSales\ifaces;

interface IOffer extends \yii\db\ActiveRecordInterface {

    public static function getProductsIDsInActual();    
}
