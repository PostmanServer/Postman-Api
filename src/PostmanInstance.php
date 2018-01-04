<?php

namespace Postman;

class PostmanInstance
{
    private static $instance = null;
    private static $app_id = '';
    private static $secret = '';
    private static $api_key = '';

    public static function get_postman()
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        self::$instance = new Postman(
            self::$api_key,
            self::$secret,
            self::$app_id
        );

        return self::$instance;
    }
}
