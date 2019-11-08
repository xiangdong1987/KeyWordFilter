<?php
/**
 * Created by PhpStorm.
 * User: xiangdongdong
 * Date: 2019/11/8
 * Time: 14:00
 */

namespace KeyWordFilter;

use Psr\Container\ContainerInterface;
use Hyperf\Contract\ConfigInterface;

class KeyWordFilterFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);
        $config = $config->get('server.keywordFilter');
        if (!$config) {
            $config = [
                'dictionaryPath' => [
                    'default' => BASE_PATH . "/vendor/xdd/keyword-filter/src/default.txt"
                ]
            ];
        }
        return new KeyWordFilter($config);
    }
}
