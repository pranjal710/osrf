<?php
namespace OpenSrf\Tests;

use \OpenSrf\OsrfSession;
use \OpenSrf\OsrfFieldmapper;

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
    public $testServer = 'demo.evergreencatalog.com';

    /**
     * Session instance.
     */
    public $osrfSession;

    public function setup()
    {
        $this->osrfSession = new OsrfSession($this->testServer);
    }

    public function testConstruct()
    {
        $this->assertEquals($this->testServer, $this->osrfSession->server);
    }

    public function testCheckhost()
    {
        $this->assertEquals(
            200,
            $this->osrfSession->checkhost(),
            'demo Evergreen server may be unavailable'
        );
    }

    public function testFieldMapper()
    {
        //Clear and re-generate fieldMapper.
        $this->osrfSession->clearFieldmapper();
        //An exception is thrown on failure.
        $this->osrfSession->loadFieldmapper();
        //Verify Fieldmapper contents are sane, with an auto-generated class
        $foo = new \Opensrf\mups();
        $this->assertInstanceOf('\Opensrf\OsrfFieldmapper', $foo);
    }
}
