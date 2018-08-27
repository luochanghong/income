<?php
include_once("Common.php") ;
/**
 * 抓取https://api.coinmarketcap.com/v2/ticker/?convert=CNY站上相应信息
 *
 *  获取比价相关信息
 */
class Coinmarketcap extends Common
{
    protected $url = 'https://api.coinmarketcap.com/v2/ticker/?convert=CNY&sort=id';

    /***
    *获取币价基本信息
    */
    public function getCoinPrice(){
        $coinPrince = [];
        $start = 1; //从第几条数据开始获取数据  每次请求最后返回100条数据
        $endId = 0;
        while (true) {
            $url = $this->url."&start=".$start;
            $result = $this->fixData($this->curl_get($url));
            if(!count($result)){//返回结果为空结束循环
                break;
            }
            //获取当前记录的最后一条记录的id
            $coinPrince = array_merge($coinPrince,$result);
            $start = $start+100;
        }
        echo "币价信息已抓取完毕".PHP_EOL;
        echo "https://api.coinmarketcap.com/v2/ticker/?convert=CNY&sort=id: 共抓取".(($start-1)/100)."次".PHP_EOL;
        return $coinPrince;
    }

    /***
    *格式化币价信息
    */
    protected function fixData($result){
        $datas = [];
        if(!is_array($result) && !isset($result['data'])){
            return $datas;
        }
        if(is_array($result['data'])){
            foreach ($result['data'] as $k => $info) {
                if(isset($info['symbol'])){
                    if(isset($info['quotes']) && isset($info['quotes']['USD']) && isset($info['quotes']['CNY']) ){
                        $a = [
                            'id' => trim($info['id']),
                            'symbol' => trim($info['symbol']),
                            'usd' => $info['quotes']['USD']['price'],
                            'cny' => $info['quotes']['CNY']['price'],
                            'change_1h' =>  $info['quotes']['CNY']['percent_change_1h'], //变化趋势各个币类型都是统一的此处选择cny的变化趋势
                            'change_24' => $info['quotes']['CNY']['percent_change_24h'],
                            'change_7d' => $info['quotes']['CNY']['percent_change_7d'],
                        ];
                        $datas[$info['symbol']] = $a;
                    }
                }
            }
        }

        return $datas;
    }
}


 ?>
