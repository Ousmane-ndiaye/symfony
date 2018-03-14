<?php

namespace SNT\SoultanaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProprietaireControllerTest extends WebTestCase
{
    public function testInsererbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/insererBien');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

}
