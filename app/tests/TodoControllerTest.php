<?php

class TodoControllerTest extends TestCase {

    public function test()
    {
		$crawler = $this->client->call('GET', '/');

    	$this->assertTrue(true);
    	$this->assertTrue(false);
    }
}