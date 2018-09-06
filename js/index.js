$(function() {
	//数据切换
	tab.click(function(){
			var n=$(this).index();
			if(n==1){
				getData();
				//console.log(data)
				getApiInfo()
			}else{
				data=getUrl;
				getInfo()
			}
			$(this).addClass('active').siblings().removeClass('active');
			tabInfo.eq(n).addClass('active').siblings('.activeInfo').removeClass('active');
		  });
	var DONT_ENUM =  "propertyIsEnumerable,isPrototypeOf,hasOwnProperty,toLocaleString,toString,valueOf,constructor".split(","),
    hasOwn = ({}).hasOwnProperty;
    for (var i in {
        toString: 1
    }){
        DONT_ENUM = false;
    }

    Object.keys = Object.keys || function(obj){//ecma262v5 15.2.3.14
            var result = [];
            for(var key in obj ) if(hasOwn.call(obj,key)){
                result.push(key) ;
            }
            if(DONT_ENUM && obj){
                for(var i = 0 ;key = DONT_ENUM[i++]; ){
                    if(hasOwn.call(obj,key)){
                        result.push(key);
                    }
                }
            }
            return result;
        };
		var e, t, n, r, i, o, s, a, l, c, u, f, h, d, p, _, m, g, v, y, b, E;
		for (u = {
			//280x
			"#factor_bk2b_hr": 960,
			"#factor_phi_hr": 0,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 0,
			"#factor_ns_hr": 490,
			"#factor_lrev2_hr": 23e3,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 0,
			"#factor_eq_hr": 290,
			"#factor_eth_hr": 11,
			"#factor_cn7_hr": 490,
			"#factor_bk2b_p": 250,
			"#factor_phi_p": 0,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 0,
			"#factor_ns_p": 250,
			"#factor_lrev2_p": 220,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 0,
			"#factor_eq_p": 230,
			"#factor_eth_p": 220,
			"#factor_cn7_p": 220,
			"#factor_x16r_hr": 0,
			"#factor_x16r_p": 0,
			"#factor_l2z_hr": 0,
			"#factor_l2z_p": 0,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, f = {
			//380
			"#factor_bk2b_hr": 760,
			"#factor_phi_hr": 0,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 510,
			"#factor_ns_hr": 580,
			"#factor_lrev2_hr": 2e4,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 4.5,
			"#factor_eq_hr": 205,
			"#factor_eth_hr": 20.2,
			"#factor_cn7_hr": 530,
			"#factor_bk2b_p": 150,
			"#factor_phi_p": 0,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 120,
			"#factor_ns_p": 140,
			"#factor_lrev2_p": 130,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 120,
			"#factor_eq_p": 130,
			"#factor_eth_p": 145,
			"#factor_cn7_p": 120,
			"#factor_x16r_hr": 0,
			"#factor_x16r_p": 0,
			"#factor_l2z_hr": .25,
			"#factor_l2z_p": 120,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, g = {
			//fury
			"#factor_bk2b_hr": 1400,
			"#factor_phi_hr": 0,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 400,
			"#factor_ns_hr": 1250,
			"#factor_lrev2_hr": 48500,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 0,
			"#factor_eq_hr": 455,
			"#factor_eth_hr": 28.2,
			"#factor_cn7_hr": 800,
			"#factor_bk2b_p": 260,
			"#factor_phi_p": 0,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 120,
			"#factor_ns_p": 270,
			"#factor_lrev2_p": 220,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 0,
			"#factor_eq_p": 200,
			"#factor_eth_p": 180,
			"#factor_cn7_p": 120,
			"#factor_x16r_hr": 0,
			"#factor_x16r_p": 0,
			"#factor_l2z_hr": 0,
			"#factor_l2z_p": 0,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, h = {
			//470
			"#factor_bk2b_hr": 800,
			"#factor_phi_hr": 10,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 600,
			"#factor_ns_hr": 680,
			"#factor_lrev2_hr": 28e3,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 7.5,
			"#factor_eq_hr": 260,
			"#factor_eth_hr": 26,
			"#factor_cn7_hr": 730,
			"#factor_bk2b_p": 120,
			"#factor_phi_p": 120,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 100,
			"#factor_ns_p": 140,
			"#factor_lrev2_p": 130,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 120,
			"#factor_eq_p": 110,
			"#factor_eth_p": 120,
			"#factor_cn7_p": 100,
			"#factor_x16r_hr": 5.7,
			"#factor_x16r_p": 90,
			"#factor_l2z_hr": .4,
			"#factor_l2z_p": 105,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, d = {
			//480
			"#factor_bk2b_hr": 990,
			"#factor_phi_hr": 15,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 950,
			"#factor_ns_hr": 820,
			"#factor_lrev2_hr": 35500,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 9,
			"#factor_eq_hr": 290,
			"#factor_eth_hr": 29.5,
			"#factor_cn7_hr": 860,
			"#factor_bk2b_p": 150,
			"#factor_phi_p": 130,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 110,
			"#factor_ns_p": 150,
			"#factor_lrev2_p": 140,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 150,
			"#factor_eq_p": 120,
			"#factor_eth_p": 135,
			"#factor_cn7_p": 110,
			"#factor_x16r_hr": 7,
			"#factor_x16r_p": 120,
			"#factor_l2z_hr": .45,
			"#factor_l2z_p": 120,
			"#factor_xn_hr": 1.6,
			"#factor_xn_p": 120,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, p = {
			//570
			"#factor_bk2b_hr": 840,
			"#factor_phi_hr": 13,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 630,
			"#factor_ns_hr": 700,
			"#factor_lrev2_hr": 29500,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 8,
			"#factor_eq_hr": 260,
			"#factor_eth_hr": 27.9,
			"#factor_cn7_hr": 830,
			"#factor_bk2b_p": 115,
			"#factor_phi_p": 120,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 110,
			"#factor_ns_p": 140,
			"#factor_lrev2_p": 120,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 115,
			"#factor_eq_p": 110,
			"#factor_eth_p": 120,
			"#factor_cn7_p": 110,
			"#factor_x16r_hr": 6.2,
			"#factor_x16r_p": 100,
			"#factor_l2z_hr": .42,
			"#factor_l2z_p": 110,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0.54,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, _ = {
			//580
			"#factor_bk2b_hr": 990,
			"#factor_phi_hr": 15,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 900,
			"#factor_ns_hr": 820,
			"#factor_lrev2_hr": 35500,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 8.2,
			"#factor_eq_hr": 290,
			"#factor_eth_hr": 30.2,
			"#factor_cn7_hr": 860,
			"#factor_bk2b_p": 150,
			"#factor_phi_p": 130,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 115,
			"#factor_ns_p": 150,
			"#factor_lrev2_p": 130,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 130,
			"#factor_eq_p": 120,
			"#factor_eth_p": 135,
			"#factor_cn7_p": 115,
			"#factor_x16r_hr": 7,
			"#factor_x16r_p": 140,
			"#factor_l2z_hr": .45,
			"#factor_l2z_p": 120,
			"#factor_xn_hr": 1.6,
			"#factor_xn_p": 120,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0.63,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, v = {
			//vega56
			"#factor_bk2b_hr": 1900,
			"#factor_phi_hr": 0,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 1200,
			"#factor_ns_hr": 1600,
			"#factor_lrev2_hr": 61500,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 14,
			"#factor_eq_hr": 440,
			"#factor_eth_hr": 36.5,
			"#factor_cn7_hr": 1850,
			"#factor_bk2b_p": 230,
			"#factor_phi_p": 0,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 190,
			"#factor_ns_p": 230,
			"#factor_lrev2_p": 230,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 210,
			"#factor_eq_p": 190,
			"#factor_eth_p": 210,
			"#factor_cn7_p": 190,
			"#factor_x16r_hr": 11,
			"#factor_x16r_p": 180,
			"#factor_l2z_hr": 1,
			"#factor_l2z_p": 190,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, y = {
			//vega64
			"#factor_bk2b_hr": 2200,
			"#factor_phi_hr": 0,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 1250,
			"#factor_ns_hr": 2e3,
			"#factor_lrev2_hr": 75e3,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 16.5,
			"#factor_eq_hr": 450,
			"#factor_eth_hr": 40,
			"#factor_cn7_hr": 1850,
			"#factor_bk2b_p": 250,
			"#factor_phi_p": 0,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 200,
			"#factor_ns_p": 250,
			"#factor_lrev2_p": 270,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 230,
			"#factor_eq_p": 200,
			"#factor_eth_p": 230,
			"#factor_cn7_p": 200,
			"#factor_x16r_hr": 13,
			"#factor_x16r_p": 230,
			"#factor_l2z_hr": 1.05,
			"#factor_l2z_p": 200,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 0,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, m = {
			//750ti
			"#factor_bk2b_hr": 350,
			"#factor_phi_hr": 0,
			"#factor_zh_hr": 0,
			"#factor_cnh_hr": 0,
			"#factor_ns_hr": 220,
			"#factor_lrev2_hr": 6640,
			"#factor_phi2_hr": 0,
			"#factor_tt10_hr": 0,
			"#factor_eq_hr": 75,
			"#factor_eth_hr": .46,
			"#factor_cn7_hr": 250,
			"#factor_bk2b_p": 75,
			"#factor_phi_p": 0,
			"#factor_zh_p": 0,
			"#factor_cnh_p": 0,
			"#factor_ns_p": 75,
			"#factor_lrev2_p": 70,
			"#factor_phi2_p": 0,
			"#factor_tt10_p": 0,
			"#factor_eq_p": 55,
			"#factor_eth_p": 45,
			"#factor_cn7_p": 55,
			"#factor_x16r_hr": 0,
			"#factor_x16r_p": 0,
			"#factor_l2z_hr": 0,
			"#factor_l2z_p": 0,
			"#factor_xn_hr": 0,
			"#factor_xn_p": 0,
			"#factor_tensority_hr": 0,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 2.5,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, i = {
			//1050ti
			"#factor_bk2b_hr": 700,
			"#factor_phi_hr": 6,
			"#factor_zh_hr": 15,
			"#factor_cnh_hr": 320,
			"#factor_ns_hr": 420,
			"#factor_lrev2_hr": 14500,
			"#factor_phi2_hr": 1.2,
			"#factor_tt10_hr": 7,
			"#factor_eq_hr": 180,
			"#factor_eth_hr": 13.9,
			"#factor_cn7_hr": 300,
			"#factor_bk2b_p": 75,
			"#factor_phi_p": 75,
			"#factor_zh_p": 75,
			"#factor_cnh_p": 50,
			"#factor_ns_p": 75,
			"#factor_lrev2_p": 75,
			"#factor_phi2_p": 75,
			"#factor_tt10_p": 75,
			"#factor_eq_p": 75,
			"#factor_eth_p": 70,
			"#factor_cn7_p": 50,
			"#factor_x16r_hr": 6,
			"#factor_x16r_p": 50,
			"#factor_l2z_hr": .6,
			"#factor_l2z_p": 70,
			"#factor_xn_hr": 1,
			"#factor_xn_p": 75,
			"#factor_tensority_hr": 630,
			"#factor_sha256_hr": 0,
			"#factor_x13_hr": 5.7,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, o = {
			//1060
			"#factor_bk2b_hr": 990,
			"#factor_phi_hr": 12,
			"#factor_zh_hr": 23,
			"#factor_cnh_hr": 450,
			"#factor_ns_hr": 620,
			"#factor_lrev2_hr": 20300,
			"#factor_phi2_hr": 2.3,
			"#factor_tt10_hr": 11,
			"#factor_eq_hr": 270,
			"#factor_eth_hr": 22.5,
			"#factor_cn7_hr": 430,
			"#factor_bk2b_p": 80,
			"#factor_phi_p": 90,
			"#factor_zh_p": 90,
			"#factor_cnh_p": 70,
			"#factor_ns_p": 90,
			"#factor_lrev2_p": 90,
			"#factor_phi2_p": 90,
			"#factor_tt10_p": 90,
			"#factor_eq_p": 90,
			"#factor_eth_p": 90,
			"#factor_cn7_p": 70,
			"#factor_x16r_hr": 9.5,
			"#factor_x16r_p": 80,
			"#factor_l2z_hr": 1.1,
			"#factor_l2z_p": 80,
			"#factor_xn_hr": 2.1,
			"#factor_xn_p": 90,
			"#factor_tensority_hr": 1350,//btm内核
			"#factor_sha256_hr": 0.58,
			"#factor_x13_hr": 8.5,
			"#factor_x17_hr": 7.5,
			"#factor_equihashaion_hr":130
		}, s = {
			//1070
			"#factor_bk2b_hr": 1600,
			"#factor_phi_hr": 19,
			"#factor_zh_hr": 38,
			"#factor_cnh_hr": 700,
			"#factor_ns_hr": 1e3,
			"#factor_lrev2_hr": 35500,
			"#factor_phi2_hr": 3.3,
			"#factor_tt10_hr": 18.5,
			"#factor_eq_hr": 430,
			"#factor_eth_hr": 30,
			"#factor_cn7_hr": 690,
			"#factor_bk2b_p": 120,
			"#factor_phi_p": 130,
			"#factor_zh_p": 130,
			"#factor_cnh_p": 100,
			"#factor_ns_p": 130,
			"#factor_lrev2_p": 130,
			"#factor_phi2_p": 130,
			"#factor_tt10_p": 120,
			"#factor_eq_p": 120,
			"#factor_eth_p": 120,
			"#factor_cn7_p": 100,
			"#factor_x16r_hr": 12.5,
			"#factor_x16r_p": 130,
			"#factor_l2z_hr": 1.65,
			"#factor_l2z_p": 100,
			"#factor_xn_hr": 3,
			"#factor_xn_p": 120,
			"#factor_tensority_hr": 2300,
			"#factor_sha256_hr": 0.84,
			"#factor_x13_hr": 12.5,
			"#factor_x17_hr": 11,
			"#factor_equihashaion_hr":200
		}, a = {
			//1070ti
			"#factor_bk2b_hr": 1800,
			"#factor_phi_hr": 22,
			"#factor_zh_hr": 39,
			"#factor_cnh_hr": 740,
			"#factor_ns_hr": 1050,
			"#factor_lrev2_hr": 41e3,
			"#factor_phi2_hr": 3.9,
			"#factor_tt10_hr": 19.5,
			"#factor_eq_hr": 470,
			"#factor_eth_hr": 30.5,
			"#factor_cn7_hr": 710,
			"#factor_bk2b_p": 120,
			"#factor_phi_p": 130,
			"#factor_zh_p": 130,
			"#factor_cnh_p": 90,
			"#factor_ns_p": 120,
			"#factor_lrev2_p": 120,
			"#factor_phi2_p": 130,
			"#factor_tt10_p": 120,
			"#factor_eq_p": 120,
			"#factor_eth_p": 135,
			"#factor_cn7_p": 90,
			"#factor_x16r_hr": 14.5,
			"#factor_x16r_p": 125,
			"#factor_l2z_hr": 2,
			"#factor_l2z_p": 110,
			"#factor_xn_hr": 3.6,
			"#factor_xn_p": 120,
			"#factor_tensority_hr": 2650,
			"#factor_sha256_hr": 1.05,
			"#factor_x13_hr": 15,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, l = {
			//1080
			"#factor_bk2b_hr": 2150,
			"#factor_phi_hr": 24,
			"#factor_zh_hr": 40,
			"#factor_cnh_hr": 640,
			"#factor_ns_hr": 1060,
			"#factor_lrev2_hr": 46500,
			"#factor_phi2_hr": 4.3,
			"#factor_tt10_hr": 21.8,
			"#factor_eq_hr": 550,
			"#factor_eth_hr": 36,
			"#factor_cn7_hr": 590,
			"#factor_bk2b_p": 150,
			"#factor_phi_p": 160,
			"#factor_zh_p": 150,
			"#factor_cnh_p": 100,
			"#factor_ns_p": 150,
			"#factor_lrev2_p": 150,
			"#factor_phi2_p": 160,
			"#factor_tt10_p": 150,
			"#factor_eq_p": 130,
			"#factor_eth_p": 140,
			"#factor_cn7_p": 100,
			"#factor_x16r_hr": 18,
			"#factor_x16r_p": 150,
			"#factor_l2z_hr": 2.2,
			"#factor_l2z_p": 120,
			"#factor_xn_hr": 3.8,
			"#factor_xn_p": 130,
			"#factor_tensority_hr": 2900,
			"#factor_sha256_hr": 1.1,
			"#factor_x13_hr": 17,
			"#factor_x17_hr": 0,
			"#factor_equihashaion_hr":0
		}, c = {
			//1080ti
			"#factor_bk2b_hr": 2800,
			"#factor_phi_hr": 33,
			"#factor_zh_hr": 56,
			"#factor_cnh_hr": 960,
			"#factor_ns_hr": 1400,
			"#factor_lrev2_hr": 64e3,
			"#factor_phi2_hr": 6,
			"#factor_tt10_hr": 30,
			"#factor_eq_hr": 685,
			"#factor_eth_hr": 52.5,
			"#factor_cn7_hr": 850,
			"#factor_bk2b_p": 190,
			"#factor_phi_p": 200,
			"#factor_zh_p": 200,
			"#factor_cnh_p": 140,
			"#factor_ns_p": 190,
			"#factor_lrev2_p": 190,
			"#factor_phi2_p": 200,
			"#factor_tt10_p": 200,
			"#factor_eq_p": 190,
			"#factor_eth_p": 140,
			"#factor_cn7_p": 140,
			"#factor_x16r_hr": 22,
			"#factor_x16r_p": 190,
			"#factor_l2z_hr": 3,
			"#factor_l2z_p": 170,
			"#factor_xn_hr": 5.3,
			"#factor_xn_p": 190,
			"#factor_tensority_hr": 3800,
			"#factor_sha256_hr": 1.55,
			"#factor_x13_hr": 23.5,
			"#factor_x17_hr": 20,
			"#factor_equihashaion_hr":335
		}, r = Object.keys(u), e = function() {
			var e, t, n, b, E, w, T, x, C, S, A, k, D, O, I, N, j, P, L, H, R, M, q, W, F, U, B, V, z, G, K, Y, Q, X, J, Z;
			for (S = $("#adapt_280x")[0].checked ? $("#adapt_q_280x").val() : 0, A = $("#adapt_380")[0].checked ? $("#adapt_q_380").val() : 0, j = $("#adapt_fury")[0].checked ? $("#adapt_q_fury").val() : 0, k = $("#adapt_470")[0].checked ? $("#adapt_q_470").val() : 0, D = $("#adapt_480")[0].checked ? $("#adapt_q_480").val() : 0, O = $("#adapt_570")[0].checked ? $("#adapt_q_570").val() : 0, I = $("#adapt_580")[0].checked ? $("#adapt_q_580").val() : 0, P = $("#adapt_vega56")[0].checked ? $("#adapt_q_vega56").val() : 0, L = $("#adapt_vega64")[0].checked ? $("#adapt_q_vega64").val() : 0, N = $("#adapt_750Ti")[0].checked ? $("#adapt_q_750Ti").val() : 0, b = $("#adapt_1050Ti")[0].checked ? $("#adapt_q_1050Ti").val() : 0, E = $("#adapt_10606")[0].checked ? $("#adapt_q_10606").val() : 0, w = $("#adapt_1070")[0].checked ? $("#adapt_q_1070").val() : 0, T = $("#adapt_1070Ti")[0].checked ? $("#adapt_q_1070Ti").val() : 0, x = $("#adapt_1080")[0].checked ? $("#adapt_q_1080").val() : 0, C = $("#adapt_1080Ti")[0].checked ? $("#adapt_q_1080Ti").val() : 0, H = [], t = 0, n = r.length; t < n; t++) e = r[t], B = S * u[e], V = A * f[e], X = j * g[e], z = k * h[e], G = D * d[e], K = O * p[e], Y = I * _[e], J = P * v[e], Z = L * y[e], Q = N * m[e], R = b * i[e], M = E * o[e], q = w * s[e], W = T * a[e], F = x * l[e], U = C * c[e], H.push($(e).val((B + V + X + z + G + K + Y + J + Z + Q + R + M + q + W + F + U).toFixed(2)));
			return H
		}, $(".adapt").change(function() {
			return e()
		}), $(".adapt-quantity").keyup(function() {
			return e()
		}), b = 0, E = r.length; b < E; b++) n = r[b], $(n).keydown(function() {
			return t()
		});
		return t = function() {
			return $(".adapt").prop("checked", !1)
		}
	})
	function getH(currentSpeed,unit){
		if (parseInt(currentSpeed) / 1000000000000 >= 1) {
		    return Number(currentSpeed / 1000000000000).toFixed(2)+'T'+unit;
		} else if (parseInt(currentSpeed) / 1000000000 >= 1) {
		    return Number(currentSpeed / 1000000000).toFixed(2)+'G'+unit;
		} else if (parseInt(currentSpeed) / 1000000 >= 1) {
		    return Number(currentSpeed / 1000000).toFixed(2)+'M'+unit;
		}else if (parseInt(currentSpeed) / 1000 >= 1) {
		    return Number(currentSpeed / 1000).toFixed(2)+'K'+unit;
		}  else {
	    return Number(currentSpeed).toFixed(2)+unit;
	   }
	}
    Number.prototype.formatMoney = function (places, symbol, thousand, decimal) {
        places = !isNaN(places = Math.abs(places)) ? places : 2;
        symbol = symbol !== undefined ? symbol : "";
        thousand = thousand || ",";
        decimal = decimal || ".";
        var number = this,
            negative = number < 0 ? "-" : "",
            i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
        return symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
    };
    var url=window.location.href;
    var getUrl={};
    var obj={};
    var data={};
    var dataTwo={};
    var info='';
    var tabChange=true;
    //console.log(url);
    //获取url参数
    var str=url.replace(/([^?&]+)=([^?&]+)/g,function(){
        obj[arguments[1]]=arguments[2]
     });
	/*var item=document.getElementsByClassName('main')[0];
	    isResize();
		window.onresize=function(){
          isResize()

	    }
        function isResize(){
        	if(document.documentElement.clientWidth<1050){
		    	var n=document.documentElement.clientWidth/1050;
		    	item.style.WebkitTransform="scale("+n+")"
		    }else{
		    	item.style.WebkitTransform="scale(1)"
		    }
        }*/
       //自定义算法点击变色
       $(".nextInput label span").click(function(){
       	  if($(this).siblings('input')[0].checked){
       	  	$(this).css({"background-color":"","color":""})
       	  }else{
       	  	$(this).css({"background-color":"#5f8ef9","color":"#fff"})
       	  }
       	/*if(tabChange){
       	  	$(".nextInput label span").siblings('input').prop("checked",false)
       	  	$(".nextInput label span").css({"background-color":"","color":""});
       		$(this).css({"background-color":"#5f8ef9","color":"#fff"});
       		$(this)[0].checked=true;
       	}else{

       	}*/
       })
       //自定义数据修改点击变色
       $(".nextTop .input-group-append span").click(function(){


       	if($(this).siblings('input')[0].checked){
       	  	$(this).css({"background-color":"","color":""})
       	 }else{
       	  	$(this).css({"background-color":"#5f8ef9","color":"#fff"})
       	 }
       	 tabChange=true;
       	 $(".nextInput label input").siblings('input').prop("checked",false)
       	 $(".nextInput label span").siblings('input').prop("checked",false)
       	 $(".nextInput label span").css({"background-color":"","color":""})
       	 $.each($(".nextTop .input-group-append span"),function(){
       	  if($(this).attr("style")){
       	  	tabChange=false;
       	  	$.each($(".nextInput label input"),function(){
       		  $(this)[0].checked=true
       	    })
       	  	$.each($(".nextInput label span"),function(){
       		  $(this).css({"background-color":"#5f8ef9","color":"#fff"})
       	   })
       	  	return false;
       	  }


       	})
       })
        //获取选中数据
        function getData(){
        	dataTwo={};
        	data=dataTwo;
        	$.each($('.nextInput label input'),function(index,item){
					if($(this)[0].checked){
					 var x=$(this).parent('label').parent('div').siblings('div').find('input').val();
					 var y=$(this).parent('label').parent('div').siblings('div').find('div span').html();
					 dataTwo[$(this).siblings('span').html()]=x+y;
					}
				})
        }
         //本机
       /*  getMeData();
        function getMeData(){
        	$.each($('.listOne input'),function(index,item){
					 var x=$(this).prop('className');
					 //console.log(x)
					 getUrl[x]=$(this).val();

				})
        	data=getUrl;
        	getInfo()
        }*/
       //本机接口
	    function getInfo(){
	    	$.ajax({
					 url: 'api.php',
				     type:'GET',
					 dataType:'json',
					 data: data,
				     success:function(data){
						 // console.log(data);
                       info=data;
				       getHtml();

					   //开始加载图标
					   $('table img').each(function(){
						   // console.log($(this).data('imgUrl'));
						   $(this).attr('src',$(this).data('imgUrl'));
					   })
				     },
				     error:function(error) {
				       //console.log(error)
				     }});
	    }
	    //算力接口
	    function getApiInfo(){
	    	$.ajax({
					 url: 'api_speed.php',
				     type:'GET',
					 dataType:'json',
					 data: data,
				     success:function(data){
						 // console.log(data);
                       info=data;
				       getHtml();

					   //开始加载图标
					   $('table img').each(function(){
						   // console.log($(this).data('imgUrl'));
						   $(this).attr('src',$(this).data('imgUrl'));
					   })
				     },
				     error:function(error) {
				       //console.log(error)
				     }});
	    }
	    //算力
	    function cfOne(item){
	    	return new RegExp("(.*[^\\.])\\.*").exec((Number(item).formatMoney()).substr(0,11))[1]
	    }
	    //币价——保留两位
	    function priceNub(item){
	    	if(item){
	    	  return parseFloat(item).toFixed(2);
	    	}
	    	return '---'
	    }
	    //涨幅
	    function riseNub(item){
	    	if(item){
	    		if(item>0){
					return '<span style="color:#009e73">'+item+'%</span>';
				}else{
					return '<span style="color:#d94040">'+item+'%</span>';
				}
	    	}
	    	return '---'
	    }
	    //保留两位
	    function fixed(item){
	    	return "￥"+parseFloat(item).toFixed(2);
	    }
		function getCoinImg(imgUrl){
			if(imgUrl){
				// var frameid = 'frameimg' + Math.random();
   					// window.img = '<img id="img" style="width: 100%;height: auto" src=\'' + imgUrl + '?' + Math.random() + '\' /><script>window.onload = function() { parent.document.getElementById(\'' + frameid + '\').height = document.getElementById(\'img\').height+\'px\'; }<' + '/script>';
   					// document.write('<iframe id="' + frameid + '" src="javascript:parent.img;" frameBorder="0" scrolling="no" width="100%"></iframe>');
				return '<img width="40px" data-img-url="'+imgUrl+'" height="40px" src="">';
			}
			return '--';
		}
	    function getHtml(){
	    	var str = "";
                $.each(info, function (i, cur) {
                    str += "<tr>"
						+"<td>"
						 + (i*1 + 1)+""
						+"</td>"
						+"<td>"
						  +"<div class='float-left'>"+getCoinImg(cur.img_url)+"</div>"
		                +"</td>"
					    +"<td>"
					     + cur.symbol+"<br><small>"+cur.algo
		                +"</small></td>"
					    // +"<td>"
					    //   +"<div style='font-size: 8pt'>"
                        //       +"BT:"+cur.block_time+"s"
                        //      +"<br /> BR:" +cur.block_reward
                        //      +"<br /> LB:" +cur.last_block
                        //     +"</div>"
		                // +"</td>"
					    +"<td>"
					     // + cfOne(cur.difficulty)+"M"+"<br>"+getH(cur.nethash)
						  +getH(cur.speed,cur.unit)
		                +"</td>"
					    +"<td>"
					     +"<div class='text-center'>"
                              +cur.estimated_rewards
                            // +"<br />"+cur.estimated_rewards24
                            +"</div>"
		                +"</td>"
					   +"<td>"
					     + priceNub(cur.cny)
		                +"</td>"
		                // +"<td>"
					    //  + priceNub(cur.exchange_rate_vol)
		                // +" BTC</td>"
		                +"<td>"
					     + riseNub(cur.change_1h)
		                +"</td>"
		                +"<td>"
					     + fixed(cur.estimated_rewards*cur.cny)+"<br>"
						 // +fixed(cur.estimated_rewards24*cur.cny)+"</strong>"
		                +"</td>"
		                +"</tr>"


                });
		    $('.table tbody').html(str);
	    }
	    var tab=$('.tab span');
	    var tabInfo=$('.tabInfo .activeInfo');
		$(function(){
			var url=window.location.href;
			url.replace(/([^?@&]+)=([^?@&]+)/g,function(){
				getUrl[arguments[1]]=arguments[2]
			})
			//console.log(getUrl)
			$('.new_pic span').click(function(){
				getData();
				getApiInfo();
			})
            /*$('.tab span:nth-child(2)').click(function(){
            	data={};
                getInfo();
            })*/
            //console.log($('.listOne p:nth-child(1) input').val());
            //按地址请求开始
            isInfo();
			function isInfo(){
				$.each(getUrl, function(item,name) {
					$(".listOne").find('.'+item).val(name)
			   });
				$.each($('.listOne input'), function(item,name) {
					var x=parseInt($(this).val());
					//console.log(x)
					if(x){
						$(this).parent().slideDown("slow")

					}

			   });
			   data=getUrl;
						//console.log(data)
						getInfo()
			}
			//按地址请求结束
		})
//后台运行php程序获取json数据 每隔60秒刷新一次
setTimeout(function(){
	// updateCoinInfo();
	// getInfo();
	// getApiInfo();
    setTimeout(arguments.callee,600000);
},600000)

function updateCoinInfo(){
	$.ajax({
	 url: "coin_json.php",
	 type:'GET',
	 data:data,
	 success:function(data){
	   //console.log(data);
	 },
	 error:function(error) {
	 }
 });
}
