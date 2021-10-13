<?php
class index
{
    function index1()
    {
        $index = file_get_contents("../page/index.html");
        echo $index;
    }
}
