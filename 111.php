<?php
/**
 * Created by PhpStorm.
 * User: GYW
 * Date: 2019/3/1
 * Time: 20:19
 */


$phpInput=file_get_contents('php://input');
echo urldecode($phpInput);