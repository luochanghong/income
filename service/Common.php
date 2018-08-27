<?php
    /**
     * 基本的类
     */
    class Common
    {
        /**
        *
        */
        public function curl_get($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//输出结果
            //var_dump(curl_exec($ch));
            $res = json_decode(curl_exec($ch),true);
            curl_close($ch);

            return $res;
        }


        /*
        *获取基本返回信息
        */
        public function fixCoinUnit($unit){
            $unit = strtolower($unit);
            $hu = ['h/s' => pow(10,0),'kh/s' => pow(10,3),'mh/s' => pow(10,6),'gh/s' => pow(10,9),'th/s' => pow(10,12)];
            $su = ['sol/s' => pow(10,0),'ksol/s' => pow(10,3),'msol/s' => pow(10,6),'gsol/s' => pow(10,9),'tsol/s' => pow(10,12)];
            if(!isset($hu[$unit]) && !isset($su[$unit])){
                return ['rate'=>1,'unit'=>$unit];
                // $msg = '不支持的币单位:'.$unit.PHP_EOL;
                // $re = file_put_contents($this->errorLogPath, $msg, FILE_APPEND);
                // throw new Exception('不支持的币单位:'.$unit);
            }
            if(isset($su[$unit])){
                return ['rate'=>$su[$unit],'unit'=>'sol/s'];
            }

            return ['rate'=>$hu[$unit],'unit'=>'h/s'];
        }

        /**
        *处理api_speed参数信息
        *@param 算法算力
        */
        public function formatAlgoParam(array $params){
            //获取参数算法并转化为小写
            $algoSpeedInfo = [];
            foreach ($params as $algo => $speed) {
                // $speedBase = $this->speedInfoExtract(trim($speed));
                $algoSpeedInfo[strtolower($algo)] = $this->speedInfoExtract(trim($speed));
            }
            // var_dump($algoSpeedInfo);die;
            return $algoSpeedInfo;
        }
        /**
        *处理转换算力单位为基本信息值
        *@param 算法算力
        */
        public function speedInfoExtract($speed){
            $pattern = '/(\d+\.{0,1}\d+)(.+)/';
            $s = 0;
            preg_match($pattern,$speed,$info);

            // var_dump($info);die;
            if(count($info)){
                $unitInfo = $this->fixCoinUnit($info[2]);
                $s = $unitInfo['rate'] * $info[1];
            }

            return $s;
        }

        //去除算法中的括号（
        function fixAlgo($algo){
            return strtolower(str_replace([' (',')','(','-'],'',$algo));
        }

        /**
         * 二维数组根据字段进行排序
         * @params array $array 需要排序的数组
         * @params string $field 排序的字段
         * @params string $sort 排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
         */
        function arraySequence($array, $field, $sort = 'SORT_DESC')
        {
            $arrSort = array();
            foreach ($array as $uniqid => $row) {
                foreach ($row as $key => $value) {
                    $arrSort[$key][$uniqid] = $value;
                }
            }

            array_multisort($arrSort[$field], constant($sort), $array);

            return $array;
        }
    }


 ?>
