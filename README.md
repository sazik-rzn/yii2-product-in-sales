Модуль для добавления фильтра по скидкам в категории для сайтов на базе Yii2
======================================================


Установка:
----------

добавить в composer.json в секцию require 
 * "sazik-rzn/yii2-product-in-sales": "*"

Так же необходимо реализвоать интерфейс:
 * IOffer - для модели акций

 В файле конфига приложения должно появиться примерно следующее: 

    'modules' => [
        'имя_модуля' => [
            'class'=> \sazik\product\inSales\Module::::className(),
            'offer_model_class' => путь_к_классу_акций::className(),
        ],
    ],
    'bootstrap' => [
        'имя_модуля',
    ],
       
----------
    

Использование:
--------------

Первое вхождение на странице

    \sazik\product\inSales\widgets\SalesWidget\SalesWidget::::widget(['products_ids'=>массив_с_адишниками_продуктов_в_категории]);

Последующие вхождения на странице

    \sazik\product\inSales\widgets\SalesWidget\SalesWidget::::widget(['js'=>false]);

