<?php
/**
 * 抓取https://whattomine.com站上相应信息
 */
include_once("Common.php") ;
class Whattominel extends Common
{
    protected $baseUrl = 'https://whattomine.com/';
    protected $coinRewardUrl = 'https://whattomine.com/coins/';
    protected $cardCoinUrl = 'https://whattomine.com/coins.json';

    public function getAllCoins(){
        //$url = $this->baseUrl.'calculators.json';
        $result = $this->curl_get($this->baseUrl.'calculators.json');
        return $this->fixData($result);
    }

    /*
    * 获取显卡的币信息
    */
    public function getCardCoinInfo($param){
        $result = $this->curl_get($this->cardCoinUrl.'?'.$param);
        return $this->fixCardCoinInfo($result);
    }

    public function getCoinInfoRewards($coinId,$hr){
        $url = $this->coinRewardUrl.$coinId.'.json?utf8=✓&hr='.$hr.'&commit=Calculate';
        // var_dump($url);die;
        $res =$this->curl_get($url);
        if(!is_array($res) || isset($res['errors'])){
            return [];
        }
        // $res['estimated_rewards'] = number_format(trim($res['estimated_rewards']),5,'.','');
        // $res['btc_revenue'] = number_format(trim($res['btc_revenue']),5,'.','');
        $res['estimated_rewards'] = str_replace(',','',trim($res['estimated_rewards']));
        $res['btc_revenue'] = str_replace(',','',trim($res['btc_revenue']));
        return $res;
    }
    /**
    * 格式化并检测请求数据是否成功
    *筛选币status="active"的有效信息
    *只能获取status="active"的单位产量信息
    */
    protected function fixData($result){
        $coins = [];
        if(!is_array($result) || !isset($result['coins'])){
            return $coins;
        }
        foreach ($result['coins'] as $coinName => $info) {
            if(isset($info['status']) && trim($info['status']) == 'Active'){
                $c = [
                    'en_name' => $coinName,
                    'whattominel_coin_id' => trim($info['id']),
                    'symbol' => trim($info['tag']),
                    'algo' => trim($info['algorithm']),
                    'source' => 'whattominel',
                ];
                $coins[] = $c;
            }
        }
        return $coins;
    }

    /*
    * 格式化卡下面的币数据
    */
    public function fixCardCoinInfo($data){
        $arr = [];
        if(empty($data) || $data == 'NULL' || !is_array($data)){
            return $arr;
        }
        if(isset($data['coins'])){
            foreach ($data['coins'] as $k => $info) {
                $in = [
                    'symbol' => trim($info['tag']),
                    'block_time' => trim($info['block_time']),
                    'last_block' => trim($info['last_block']),
                    'nethash' => trim($info['nethash']),
                    'exchange_rate_vol' => trim($info['exchange_rate_vol']),
                    'block_reward' => trim($info['block_reward']),
                    'estimated_rewards24' => number_format(trim($info['estimated_rewards24']),5,'.',''),
                    'estimated_rewards' => number_format(trim($info['estimated_rewards']),5,'.',''),
                    'algo' => trim($info['algorithm']),
                    'difficulty' => trim($info['difficulty']),
                    'change_1h' => '',
                    'usd' => '',
                    'cny' => '',
                ];
                $arr[trim($info['tag'])] = $in;
            }
        }

        return $arr;
    }
    /**
    *   获取插入基本数据的sql
    */
    public function getBaseInsertCoinInfoSql($data){
        $filed = array_keys($data);
        $value = array_map(function($param){
            return '"'.$param.'"';
        },array_values($data));

        return 'insert into coin ('.implode(',', $filed).') VALUES ('.implode(',', $value).')';
    }
}



 ?>
