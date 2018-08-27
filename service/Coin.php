<?php
/**
 * 格式化处理miner信息
 */
include_once("Common.php");

class Coin extends Common
{
    protected $errorLogPath = 'error.log';
    /*
    *获取币的基本收益
    */
    public function getCoinBaseRewardsAndUnit($coin){
        // var_dump($coin);
      $info = $this->getBaseInfo();
        if(!is_array($coin)){
            return $info;
        }
        $info = $this->getBaseInfo();
        if(empty($coin['unit']) || empty($coin['estimated_rewards']) && empty($coin['btc_revenue']) || !$coin['text_speed']){//信息不完整的没有想好怎么处理
        }else{
            $rateInfo = $this->fixCoinUnit($coin['unit']);
            $cell = bcmul($coin['text_speed'],$rateInfo['rate']);//保留整数,多少份基础值
            $info['unit'] =$rateInfo['unit'];
            $info['estimated_rewards'] = rtrim(rtrim(bcdiv($coin['estimated_rewards'],$cell,22),0),'.');
            $info['btc_revenue'] = rtrim(rtrim(bcdiv($coin['btc_revenue'],$cell,22),0),'.');
        }

        return $info;
    }

    /*
    *获取基本返回信息
    */
    protected function getBaseInfo(){
        return ['estimated_rewards'=>0,'btc_revenue'=>0,'unit'=>'h/s'];
    }
}
