<?php
namespace Cauwelier\BackOff;

use Cauwelier\BackOff\Strategy\Incremental;
use Cauwelier\BackOff\Strategy\None;

class BackoffStrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testItConstructsAStrategy()
    {
        new Incremental(1, 2);
        new None();
    }
}
 