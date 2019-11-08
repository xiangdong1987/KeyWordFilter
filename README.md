# Trie Tree php关键词过滤
* 使用
```
composer require xdd/keyword-filter
```
## 词库
* 词库格式

```
AV|1
AV 代表关键词
1  代表等级  0 不处理 1 替换 2 禁用词汇
```

* 词库配置
    * 集成到hyperf的server配置中，支持多词库通过配置来实现
    * 匹配关键词使用配置名称，来获取相应的trie tree
    
```angular2html
    'dictionaryPath' => [
        'default' => BASE_PATH . "/vendor/xdd/keyword-filter/src/default.txt"
    ]

```    

