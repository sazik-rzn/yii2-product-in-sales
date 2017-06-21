<?php

namespace sazik\product\InSales\ifaces;

interface IOffer extends \yii\db\ActiveRecordInterface {

    public static function getProductsIDsInActual();    
}
