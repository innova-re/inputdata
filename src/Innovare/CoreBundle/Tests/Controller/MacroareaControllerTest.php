<?php

namespace Innovare\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/*
 * Class MacroareaControllerTest
 */
class MacroareaControllerTest extends WebTestCase
{
	/*
	 * Tests Macroareas list
	 */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful(), 'The response was not successful');

    	$this->assertCount(1, $crawler->filter('h2'), 'There should be 1 displayed macroarea');
    }

}
