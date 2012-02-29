<?php

namespace Veml\HelloBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("Üdvözöllek a Pápai várostörténeti helyrajzi feltárás oldalán!")')->count() > 0);
    }
}
