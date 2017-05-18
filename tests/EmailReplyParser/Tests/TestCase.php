<?php

namespace EmailReplyParser\Tests;

abstract class TestCase extends CompatTestCase
{
    /**
     * @param string $file
     */
    protected function getFixtures($file)
    {
        return file_get_contents(__DIR__ . '/../../Fixtures/' . $file);
    }
}
