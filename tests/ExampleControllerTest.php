<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ExampleControllerTest extends WebTestCase
{
    /**
     * @test simple <i> functional test </i> for example controller
     * @author ajyanreyu <https://github.com/ajyanreyu>
     */
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/example');

        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
        $this->assertSame('{"message":"Hello Symfony 4"}', $client->getResponse()->getContent());
    }

}
