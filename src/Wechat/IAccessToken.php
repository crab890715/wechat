<?php
/**
 * Created by PhpStorm.
 * User: liuwanjie
 * Date: 2015/11/23
 * Time: 13:56
 */

namespace Overtrue\Wechat;


interface IAccessToken
{
function getToken($forceRefresh = false);
}