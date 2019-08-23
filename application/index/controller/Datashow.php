<?php
/**
 * @author yupoxiong<i@yufuping.com>
 * 前台基础控制器
 */
namespace app\index\controller;
use think\Db;
class Datashow extends Controller
{

	public function index(){
    	$list = Db::table('tz_banner')->where('type=2')->select();
        $this->assign('list',$list);  
    	$this->assign('title','数据排名订阅区');
		return $this->fetch();
	}

	public function info(){

		$info = '{
		  "isOp": false, 	
		  "name": "先锋81331531", 		
		  "brokerID": "6050", 			
		  "userID": "81331531", 		
		  "periodType": "all", 			
		  "periodBegin": 20180613, 		
		  "initialFund": 54933.77, 		
		  "equitySeries": { 			
		    "20180613": 54793.5,
		    "20180625": 55387.35,
		    "20180626": 54235.41,
		    "20180627": 990.94,
		    "20181009": 15990.94,
		    "20181011": 66144.81,
		    "20181012": 67365.89,
		    "20181015": 66475.21,
		    "20181016": 67483.35,
		    "20181017": 68032.05,
		    "20181018": 68505.16,
		    "20181019": 68602.04,
		    "20181023": 68748.92,
		    "20181024": 68346.35,
		    "20181025": 67038.46,
		    "20181026": 67136.24,
		    "20181030": 64136.24,
		    "20181107": 61136.24,
		    "20181112": 60602.76,
		    "20181113": 60709.23,
		    "20181114": 60851.18,
		    "20181115": 60045.93,
		    "20181116": 59962.58,
		    "20181119": 60389.54,
		    "20181120": 60397.66,
		    "20181121": 60859.31,
		    "20181122": 61249.95,
		    "20181123": 61172.21,
		    "20181127": 61049.31,
		    "20181218": 61094.99,
		    "20181219": 60243.24,
		    "20181220": 61352.45,
		    "20181227": 61436.05,
		    "20190103": 61353.84,
		    "20190104": 62096.73,
		    "20190107": 61970.33,
		    "20190108": 61754.13,
		    "20190109": 60953.37,
		    "20190110": 61177.17,
		    "20190111": 61442.17,
		    "20190114": 59407.81,
		    "20190115": 59395.59,
		    "20190116": 59804.46,
		    "20190117": 59807.04,
		    "20190122": 59614.8,
		    "20190123": 57617.01,
		    "20190124": 56765.17,
		    "20190125": 59499.67,
		    "20190227": 59345.77,
		    "20190228": 59361.86,
		    "20190311": 51361.86,
		    "20190313": 31361.86,
		    "20190314": 1361.86,
		    "20190613": 6361.86
		  },
		  "netProfit": 4652.35, 		
		  "fee": 872.65, 			
		  "efficiency": "6.3", 			
		  "deals": 224, 			
		  "winRate": "54.0%", 			
		  "maxSucWinDeals": 12, 		
		  "maxSucLossDeals": 8, 		
		  "dealDays": 54, 			
		  "dealFrequency": "4.1", 		
		  "deposit": 70000.0, 			
		  "withdraw": 120266.2, 		
		  "rewardRatio": "1.0", 		
		  "totalWinLossRatio": "1.2", 		
		  "winLossRatio": "1.0", 		
		  "mulNetValue": "1.05", 		
		  "mulProfitRatio": "4.8%", 		
		  "mulProfitRatioPerYear": "21.9%", 	
		  "maxReduceRatio": "8.3%", 		
		  "score": "0.07", 			
		  "kamaRatio": "2.64", 			
		  "sharpRatio": "0.40", 		
		  "netProfitSeries": { 			
		    "20180613": "-112.62",
		    "20180625": "600",
		    "20180626": "-1097.8",
		    "20180627": "384.05",
		    "20181009": "0",
		    "20181011": "193.54",
		    "20181012": "1221.09",
		    "20181015": "-381.1",
		    "20181016": "1016.58",
		    "20181017": "569.29",
		    "20181018": "481.58",
		    "20181019": "100",
		    "20181023": "150",
		    "20181024": "-391.1",
		    "20181025": "200.86",
		    "20181026": "103.9",
		    "20181030": "0",
		    "20181107": "0",
		    "20181112": "-500.7",
		    "20181113": "152.47",
		    "20181114": "195.23",
		    "20181115": "-755.37",
		    "20181116": "-18.87",
		    "20181119": "470.5",
		    "20181120": "29.74",
		    "20181121": "503.97",
		    "20181122": "400",
		    "20181123": "-55.73",
		    "20181127": "601.7",
		    "20181218": "60",
		    "20181219": "-839.4",
		    "20181220": "1121.6",
		    "20181227": "89.8",
		    "20190103": "-65",
		    "20190104": "747.83",
		    "20190107": "-120.2",
		    "20190108": "-210",
		    "20190109": "-777.64",
		    "20190110": "230",
		    "20190111": "265",
		    "20190114": "-2015.82",
		    "20190115": "-7.30",
		    "20190116": "408.87",
		    "20190117": "6.29",
		    "20190122": "-138.65",
		    "20190123": "-1948.2",
		    "20190124": "-820.89",
		    "20190125": "2743.76",
		    "20190227": "-150",
		    "20190228": "16.09",
		    "20190311": "0",
		    "20190313": "0",
		    "20190314": "0",
		    "20190613": "0"
		  },
		  "monthProfitSeries": { 			
		    "201806": "-226.37",
		    "201810": "3264.64",
		    "201811": "1022.94",
		    "201812": "432",
		    "201901": "-1701.95",
		    "201902": "-133.91",
		    "201903": "0",
		    "201906": "0"
		  },
		  "riskRatioSeries": { 				
		    "20180613": "0%",
		    "20180625": "9.2%",
		    "20180626": "36.4%",
		    "20180627": "0%",
		    "20181009": "0%",
		    "20181011": "26.7%",
		    "20181012": "0%",
		    "20181015": "15.2%",
		    "20181016": "14.8%",
		    "20181017": "0%",
		    "20181018": "0%",
		    "20181019": "0%",
		    "20181023": "0%",
		    "20181024": "9.7%",
		    "20181025": "0%",
		    "20181026": "0%",
		    "20181030": "0%",
		    "20181107": "0%",
		    "20181112": "0%",
		    "20181113": "7.6%",
		    "20181114": "0%",
		    "20181115": "7.8%",
		    "20181116": "10.0%",
		    "20181119": "0%",
		    "20181120": "0%",
		    "20181121": "0%",
		    "20181122": "0%",
		    "20181123": "0%",
		    "20181127": "0%",
		    "20181218": "21.3%",
		    "20181219": "38.1%",
		    "20181220": "0%",
		    "20181227": "0%",
		    "20190103": "48.6%",
		    "20190104": "5.5%",
		    "20190107": "5.6%",
		    "20190108": "17.1%",
		    "20190109": "27.4%",
		    "20190110": "38.8%",
		    "20190111": "38.6%",
		    "20190114": "57.5%",
		    "20190115": "17.8%",
		    "20190116": "0%",
		    "20190117": "0%",
		    "20190122": "34.7%",
		    "20190123": "58.2%",
		    "20190124": "59.2%",
		    "20190125": "0%",
		    "20190227": "7.5%",
		    "20190228": "0%",
		    "20190311": "0%",
		    "20190313": "0%",
		    "20190314": "0%",
		    "20190613": "0%"
		  },
		  "nightDealDays": 24, 				
		  "dayinDealDays": 30, 			
		  "prdID_netProfit": { 				
		    "pp": "-408.94",
		    "rb": "-1911.31",
		    "ni": "4421.6",
		    "hc": "1.14",
		    "i": "-58.84",
		    "zn": "2081.4",
		    "ZC": "-582.5",
		    "MA": "-178",
		    "al": "265.7",
		    "l": "-33.4",
		    "eg": "-654.1",
		    "AP": "1709.6"
		  },
		  "prdID_totalWinLossRatio": { 			
		    "pp": "0.8",
		    "rb": "0.7",
		    "ni": "2.3",
		    "hc": "1.0",
		    "i": "0.8",
		    "zn": "1.5",
		    "ZC": "0.8",
		    "MA": "0.9",
		    "al": "2.7",
		    "l": "0.9",
		    "eg": "0",
		    "AP": "2.2"
		  },
		  "prdID_winLossRatio": { 			
		    "pp": "0.8",
		    "rb": "0.9",
		    "ni": "1.6",
		    "hc": "3.0",
		    "i": "0.8",
		    "zn": "0.9",
		    "ZC": "0.6",
		    "MA": "0.7",
		    "al": "2.7",
		    "l": "0.2",
		    "eg": "0",
		    "AP": "2.2"
		  },
		  "prdID_fee": { 				
		    "pp": "63.94",
		    "rb": "171.31",
		    "ni": "268.4",
		    "hc": "38.86",
		    "i": "8.84",
		    "zn": "18.6",
		    "ZC": "102.5",
		    "MA": "98",
		    "al": "9.3",
		    "l": "8.4",
		    "eg": "4.1",
		    "AP": "80.4"
		  },
		  "prdID_deals": { 				
		    "pp": 24,
		    "rb": 38,
		    "ni": 43,
		    "hc": 8,
		    "i": 2,
		    "zn": 50,
		    "ZC": 25,
		    "MA": 20,
		    "al": 4,
		    "l": 5,
		    "eg": 1,
		    "AP": 4
		  },
		  "prdID_winRate": { 			
		    "pp": "50%",
		    "rb": "42.1%",
		    "ni": "58.1%",
		    "hc": "25%",
		    "i": "50%",
		    "zn": "62%",
		    "ZC": "60%",
		    "MA": "55%",
		    "al": "50%",
		    "l": "80%",
		    "eg": "0%",
		    "AP": "50%"
		  },
		  "prdID_trdRatio": { 			
		    "pp": "7.4%",
		    "rb": "10.1%",
		    "ni": "26.8%",
		    "hc": "2.3%",
		    "i": "0.6%",
		    "zn": "34.0%",
		    "ZC": "9.5%",
		    "MA": "3.5%",
		    "al": "1.7%",
		    "l": "1.3%",
		    "eg": "0.3%",
		    "AP": "2.7%"
		  }
		}';
		$info = get_object_vars(json_decode($info));
		$arr[0] = $info;
		$arr[1] = $info;

		if(input('get.pagenum')){
			$pagenum = input('get.pagenum');
	        $this->assign('pagenum',$pagenum);
		}

		$type='equitySeries';// 每日权益
		foreach ($arr as $key => $value) {
			$arr[$key]['x'] = json_encode(array_keys(get_object_vars($value[$type])));
			$arr[$key]['y'] = json_encode(array_values(get_object_vars($value[$type])));
			unset($arr[$key][$type]);
		}

  		$count = 21;
        $this->assign('count',$count);  
        $this->assign('arr',$arr);  
		return $this->fetch();


	}
}