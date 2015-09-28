<?php
namespace OpenSrf\Tests;

use \OpenSrf\OsrfSession;

/**
* OsrfSessionTest
*
*/
class OsrfSessionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Evergreen kindly host a demo server, so rather than use mocks,
     * test directly against that.
     *
     * @todo Is this sustainable?
     *
     * @var string
     */
    public $testServer = 'http://demo.evergreencatalog.com';

    public function testConstruct()
    {
        $session = new OsrfSession($this->testServer);
        $this->assertEquals($this->testServer, $session->server);
    }
}
