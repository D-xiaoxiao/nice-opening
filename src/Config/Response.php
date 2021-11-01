<?php

declare(strict_types=1);

namespace NiceOpeningLaravel\Config;

class Response
{

    const Y_CODE_EN = '0';

    const Y_CODE = ['errcode' => 0, 'data' => [], 'message' => 'success'];


    // interface
    const INTERFACE_ERR = ['errcode' => 500001, 'data' => [], 'message' => 'Interface does not exist'];


    // options subscript
    const OPTIONS_MODULE = ['errcode' => 500100, 'data' => [], 'message' => 'options error ：Module name does not exist'];
    const OPTIONS_MODULE_OPERATE = ['errcode' => 500101, 'data' => [], 'message' => 'options error ：Module operate does not exist'];


    // params must
    const PARAMS_MUST_ERR = ['errcode' => 500200, 'data' => [], 'message' => 'parameter error : Required parameters are not filled'];

    // params format
    const PARAMS_FORMAT_ERR = ['errcode' => 500240, 'data' => [], 'message' => 'parameter error : Incorrect parameter format'];


}
