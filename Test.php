<?php
namespace Test;

/**
 * Plugin Name: test
 * Description: A plugin to test.
 * Version: 1.0
 * Author: BL
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}



class Test
{
    //make 2 variables
    public $var1;
    public $var2;
    public function __construct()
    {
        echo 'Test class is loaded';
    }

    // function to add 2 numbers
    function add($a, $b)
    {
        return $a + $b;
    }

    // function to subtract 2 numbers
    function subtract($a, $b)
    {
        return $a - $b;
    }
}
//instantiate the class
$test = new Test();


