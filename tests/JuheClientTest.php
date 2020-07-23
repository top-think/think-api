<?php

namespace think\tests;

use PHPUnit\Framework\TestCase;
use think\api\juhe\Client as JuheClient;

class JuheClientTest extends TestCase
{
    public function testApi()
    {
        $client = new JuheClient('AppCode');

        $result = $client->calendarMonth()
            ->withYearMonth('2015-1')
            ->request();

        var_dump($result);
    }
}
