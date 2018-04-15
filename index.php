<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
// SESUAIKAN DENGAN LOKASI CORE YII 2.0 YANG BARU
require(__DIR__ . '/yiishad/vendor/autoload.php');
require(__DIR__ . '/yiishad/vendor/yiisoft/yii2/Yii.php');
// SESUAIKAN DENGAN LOKASI FILE KONFIGURASI
$config = require(__DIR__ . '/yiishad/config/web.php');
(new yii\web\Application($config))->run();