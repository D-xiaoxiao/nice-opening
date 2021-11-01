<?php

namespace NiceOpeningLaravel\Tests;

use NiceOpeningLaravel\NiceExternal;
use PHPUnit\Framework\TestCase;
class NiceTest extends TestCase
{
    private $accessKeyId;
    private $accessKeySecret;
    private $niceExternal;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->accessKeyId = "N991808258";
        $this->accessKeySecret = "KkAGXHxEIRQ7sKWGgM8D";

        $this->niceExternal = new NiceExternal($this->accessKeyId, $this->accessKeySecret);
    }

    public function test()
    {
        //$res = $this->niceExternal->dealRequest('project_list', []);
        $res = $this->niceExternal->dealRequest('project_kpiCreate', ['kpi2'=>'','group_key'=>'一测试','type'=>1,'description'=>'']);
        //$res = $this->niceExternal->dealRequest('task_getResult', ['task_no'=>'123']);
        var_dump($res);die;
    }
}