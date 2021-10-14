<?php
class api extends base
{
    function test()
    {
        var_dump($this->is_login());
    }
    function __construct()
    {
        // echo "构造test " . PHP_EOL;
        // 未登录下，禁止访问、跳转 
        // header('content:application/json;chartset=uft-8');
        header('Content-Type: application/json;charset=utf-8');
        // if (!$this->is_login()) {
        //     //
            // echo "请登录后访问";
        //     exit;
        // }
    }
    function getMsg()
    {
        // echo "this is getMsg( ";
        $data = [
            "title" => "title one",
            "link" => "link one"
        ];
        echo json_encode($data);
    }
    function upDate()
    {
    }
}
