<?php

class SampleTest extends TestCase {

    public function test()
    {
    	$this->client->call('GET', '/posts');
    }

}