<?php

namespace Phive\Twig\Extensions\Tests\Deferred;

class TestExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    public function getGlobals()
    {
        return array('data' => new \ArrayObject());
    }

    public function getNodeVisitors()
    {
        return array(new TestNodeVisitor());
    }

    public function getName()
    {
        return 'test';
    }
}
