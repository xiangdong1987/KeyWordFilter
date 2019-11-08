<?php
/**
 * Created by PhpStorm.
 * User: xiangdongdong
 * Date: 2019/11/8
 * Time: 14:00
 */

namespace KeyWordFilter;

class KeyWordFilter
{
    /**
     * @var TrieTree
     */
    public $trieTreeList;
    public $config;

    function __construct($config)
    {
        $this->config = $config;
        //初始化词库
        $dictionaryPath = $this->config['dictionaryPath'];
        if ($dictionaryPath) {
            foreach ($dictionaryPath as $name => $path) {
                $this->trieTreeList[$name] = new TrieTree($path);
            }
        } else {
            $message = "dictionary path didn't set !";
            $code = '404';
            throw new \Exception($message, $code);
        }
    }

    public function search($dic, $str)
    {
        if (isset($this->trieTreeList[$dic])) {
            $tree = $this->trieTreeList[$dic];
            return $tree->search($str);
        } else {
            $message = "dictionary is not exist!";
            $code = '404';
            throw new \Exception($message, $code);
        }
    }
}
