<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sotty
 * Date: 06.12.12
 * Time: 9:46
 * To change this template use File | Settings | File Templates.
 */

Cfg::$idSystem = 3;
Cfg::$baseUrl = 'http://comp59.ru/';
Cfg::$plainBaseUrl = 'comp59.ru';
Cfg::$sysBase = 'http://u5028551.plsk.regruhosting.ru/';
Cfg::$defPath = 'catalog/list';

Cfg::$dbConnStr = 'mysql:dbname=u5028551_main;host=localhost;charset=utf8';
Cfg::$dbUser = 'u5028_main';
Cfg::$ddPass = 't5r4e3w2q1';
Cfg::$dbCache = false;

Cfg::$siteName = 'Всё для рукоделия';
Cfg::$favicon = '1355465572_gift-o.ico';
Cfg::$descript1 = 'Всё для рукоделия';
Cfg::$descript2 = 'Интернет-магазин товаров для рукоделия. Доставка по РФ';

if (!IS_PRODUCTION)
{
  Cfg::$baseUrl = 'http://localhost/comp59/';
  Cfg::$sysBase = 'http://localhost/nezdalida.myjino.ru/';
  Cfg::$dbConnStr = 'mysql:dbname=m2;host=localhost;charset=utf8';
  Cfg::$dbUser = 'root';
  Cfg::$ddPass = 't5r4e3w2q1';
}