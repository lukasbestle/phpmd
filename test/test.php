<?php

class Test
{
    public function test()
    {
        $a = 1;
        $thisIsAWayTooLongVariable = 0;

        if ($a === 1) {
            echo $a;
        } elseif ($b = 1) {
            echo 2;
        } else {
            echo 3;
        }
    }
}
