<?php

namespace EmailReplyParser\Tests;

if (class_exists('PHPUnit_Framework_TestCase')) {
    abstract class CompatTestCase extends \PHPUnit_Framework_TestCase
    {
    }
} else {
    abstract class CompatTestCase extends \PHPUnit\Framework\TestCase
    {
    }
}