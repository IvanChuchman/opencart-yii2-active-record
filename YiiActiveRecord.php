<?php
namespace blackice\openCart;

require_once (__DIR__. '/../../yiisoft/yii2/Yii.php');

class YiiActiveRecord extends \yii\db\ActiveRecord
{
    static $_db = null;

    public static function getDb()
    {
        if ( !static::$_db )
        {
            static::$_db = new \yii\db\Connection([
                'dsn' => DB_DRIVER.':host='.DB_HOSTNAME.';dbname='.DB_DATABASE,
                'username' => DB_USERNAME,
                'password' => DB_PASSWORD,
                'charset' => 'utf8',
            ]);
        }

        return static::$_db;
    }
}