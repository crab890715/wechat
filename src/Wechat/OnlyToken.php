<?php
/**
 * AccessToken.php
 *
 * Part of Overtrue\Wechat.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 * @link      https://github.com/overtrue
 * @link      http://overtrue.me
 */

namespace Overtrue\Wechat;

/**
 * 全局通用 AccessToken
 */
class OnlyToken implements IAccessToken
{

    /**
     * token
     *
     * @var string
     */
    protected $token;

    /**
     * constructor
     *
     * @param string $appId
     * @param string $appSecret
     */
    public function __construct($token=null)
    {
        $this->token     = $token;
    }

    /**
     * 获取Token
     *
     * @param bool $forceRefresh
     *
     * @return string
     */
    public function getToken($forceRefresh = false)
    {
        if(is_callable($this->token)){
            return call_user_func_array($this->token,[]);
        }
        return $this->token;
    }
}
