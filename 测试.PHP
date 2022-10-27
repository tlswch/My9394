{
  "sites": [
{
			"key": "4K",
			"name": "4K影视(爬虫)",
			"type": 3,
			"api": "csp_xBPQ",
			"filterable": 1,
			"quickSearch": 1,
			"searchable": 1,
			"playerType": "1",
			"jar": "https://notabug.org/qizhen15800/My9394/raw/master/jar/XbPQ350.jar",
			"ext": "https://notabug.org/qizhen15800/My9394/raw/master/xBPQ/4K%e5%bd%b1%e9%99%a2.json"
		},







{"key": "T4_douban","name": "影视推荐(首页)","type": 4,"api": "https://service-la7b1xlw-1308372858.gz.apigw.tencentcs.com/release/vod","searchable": 1,"quickSearch": 1,"filterable": 0}],
{"spider": "./jar/top97.jar","lives": [{"group": "redirect","channels": [{"name": "live","urls": ["proxy://do=live&type=txt&ext=aHR0cDovL2hvbWUuanVuZGllLnRvcDo4MS9DYXQvdHYvbGl2ZS50eHQ="]}]}],
"rules" : [{"host" : "*","rule" : ["douyinvod.com","/video/tos/cn/"]},{"host" : "*","rule" : ["default.365yg.com","/video/tos/cn/"]},{"host" : "*","rule" : ["/m3u8.php","path="]},{"host" : "zjmiao.com","rule" : ["play.videomiao.vip/API.php","time=","key=","path="]}]
"parses": [{
			"name": "解析聚合",
			"type": 3,
			"url": "Demo"
		},
		{
			"name": "Json并发",
			"type": 2,
			"url": "Parallel"
		},
		{
			"name": "Json轮询",
			"type": 2,
			"url": "Sequence"
		},
		{
			"name": "gotka",
			"type": 1,
			"url": "http://newjiexi.gotka.top/keyu3.php?url=",
			"ext": {
				"flag": [
					"qq",
					"腾讯",
					"qiyi",
					"爱奇艺",
					"奇艺",
					"youku",
					"优酷",
					"mgtv",
					"芒果",
					"letv",
					"乐视",
					"pptv",
					"PPTV",
					"sohu",
					"bilibili",
					"哔哩哔哩",
					"哔哩"
				],
				"header": {
					"User-Agent": "okhttp/4.1.0"
				}
			}
		},
		{
			"name": "bozrc",
			"type": 0,
			"url": "https://jx.bozrc.com:4433/player/?url=",
			"ext": {
				"flag": [
					"qq",
					"腾讯",
					"qiyi",
					"爱奇艺",
					"奇艺",
					"youku",
					"优酷",
					"mgtv",
					"芒果",
					"letv",
					"leshi",
					"LS",
					"pptv",
					"PPTV",
					"sohu",
					"bilibili",
					"哔哩哔哩",
					"哔哩"
				],
				"header": {
					"User-Agent": ""
				}
			}
		},
		{
			"name": "json解析",
			"type": 1,
			"url": "https://k.json.icu/json-2.php?uid=6076817&key=bhjmnprBCDFMR03459&url="
		},

		{
			"name": "vipmv",
			"type": 1,
			"url": "http://jx.vipmv.co/json.php?token=123457&url=",
			"ext": {
				"flag": ["rx", "ltnb", "renrenmi", "rongxing", "bilibili", "哔哩哔哩", "哔哩", "youku", "优酷", "qiyi", "爱奇艺", "奇艺", "qq", "腾讯", "mgtv", "芒果", "sohu", "搜狐", "letv", "乐视", "xigua", "CL4K", "西瓜"]
			}
		},
		{
			"name": "4kdv",
			"type": 0,
			"url": "https://jx.4kdv.com/?url=",
			"ext": {
				"flag": ["rx", "ltnb", "renrenmi", "rongxing", "bilibili", "哔哩哔哩", "哔哩", "youku", "优酷", "qiyi", "爱奇艺", "奇艺", "qq", "腾讯", "mgtv", "芒果", "sohu", "搜狐", "letv", "乐视", "xigua", "CL4K", "西瓜"]
			}
		},

		{
			"name": "rongxing",
			"type": 0,
			"url": "https://jx.007ts.net:6112/?url=",
			"ext": {
				"flag": ["rx", "ltnb", "renrenmi", "rongxing", "bilibili", "哔哩哔哩", "哔哩", "youku", "优酷", "qiyi", "爱奇艺", "奇艺", "qq", "腾讯", "mgtv", "芒果", "sohu", "搜狐", "letv", "乐视", "xigua", "CL4K", "西瓜"]
			}
		},
		
		{
			"name": "analysis",
			"type": 1,
			"url": "http://110.42.2.115:880/analysis/json/?uid=2255&my=cdghijkmrtyFHRSU27&url="},
		{
			"name": "77jiexi",
			"type": 0,
			"url": "https://jx.777jiexi.com/player/?url="
		},
		{
			"name": "parwix稳定",
			"type": 0,
			"ua": "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36",
			"url": "https://jx.bozrc.com:4433/player/?url="
		},

		{
			"name": "junniu",
			"type": 0,
			"url": "https://lg.junniu.net/?url="
		},
		{
			"name": "9kjx",
			"type": 0,
			"url": "https://9kjx.com/?url="
		},
		{
			"name": "okjx",
			"type": 0,
			"url": "https://m3u8.okjx.cc:3389/2k.php?url="
		},

		{
			"name": "jfxz",
			"type": 0,
			"url": "https://www.jfxz689.com/?url="
		},
		{
			"name": "ksksl",
			"type": 0,
			"url": "https://ksksl.codjx.com/?url="

		},
		{
			"name": "rxjx",
			"type": 1,
			"url": "http://rxjx.kuanjv.com/allm3u8.php?url="
		}
	],
	"flags": [
		"youku",
		"qq",
		"iqiyi",
		"qiyi",
		"letv",
		"sohu",
		"tudou",
		"pptv",
		"mgtv",
		"wasu",
		"bilibili",
		"csm3u8"
	],
	"ijk": [{
			"group": "软解码",
			"options": [{
					"category": 4,
					"name": "opensles",
					"value": "0"
				},
				{
					"category": 4,
					"name": "overlay-format",
					"value": "842225234"
				},
				{
					"category": 4,
					"name": "framedrop",
					"value": "1"
				},
				{
					"category": 4,
					"name": "soundtouch",
					"value": "1"
				},
				{
					"category": 4,
					"name": "start-on-prepared",
					"value": "1"
				},
				{
					"category": 1,
					"name": "http-detect-rangeupport",
					"value": "0"
				},
				{
					"category": 1,
					"name": "fflags",
					"value": "fastseek"
				},
				{
					"category": 2,
					"name": "skip_loop_filter",
					"value": "48"
				},
				{
					"category": 4,
					"name": "reconnect",
					"value": "1"
				},
				{
					"category": 4,
					"name": "enable-accurateeek",
					"value": "0"
				},
				{
					"category": 4,
					"name": "mediacodec",
					"value": "0"
				},
				{
					"category": 4,
					"name": "mediacodec-auto-rotate",
					"value": "0"
				},
				{
					"category": 4,
					"name": "mediacodec-handle-resolution-change",
					"value": "0"
				},
				{
					"category": 4,
					"name": "mediacodec-hevc",
					"value": "0"
				},
				{
					"category": 1,
					"name": "dns_cache_timeout",
					"value": "600000000"
				}
			]
		},
		{
			"group": "硬解码",
			"options": [{
					"category": 4,
					"name": "opensles",
					"value": "0"
				},
				{
					"category": 4,
					"name": "overlay-format",
					"value": "842225234"
				},
				{
					"category": 4,
					"name": "framedrop",
					"value": "1"
				},
				{
					"category": 4,
					"name": "soundtouch",
					"value": "1"
				},
				{
					"category": 4,
					"name": "start-on-prepared",
					"value": "1"
				},
				{
					"category": 1,
					"name": "http-detect-rangeupport",
					"value": "0"
				},
				{
					"category": 1,
					"name": "fflags",
					"value": "fastseek"
				},
				{
					"category": 2,
					"name": "skip_loop_filter",
					"value": "48"
				},
				{
					"category": 4,
					"name": "reconnect",
					"value": "1"
				},
				{
					"category": 4,
					"name": "enable-accurateeek",
					"value": "0"
				},
				{
					"category": 4,
					"name": "mediacodec",
					"value": "1"
				},
				{
					"category": 4,
					"name": "mediacodec-auto-rotate",
					"value": "1"
				},
				{
					"category": 4,
					"name": "mediacodec-handle-resolution-change",
					"value": "1"
				},
				{
					"category": 4,
					"name": "mediacodec-hevc",
					"value": "1"
				},
				{
					"category": 1,
					"name": "dns_cache_timeout",
					"value": "600000000"
				}
			]
		}
	],
	"ads": [
		"mimg.0c1q0l.cn",
		"www.googletagmanager.com",
		"www.google-analytics.com",
		"mc.usihnbcq.cn",
		"mg.g1mm3d.cn",
		"mscs.svaeuzh.cn",
		"cnzz.hhttm.top",
		"tp.vinuxhome.com",
		"cnzz.mmstat.com",
		"www.baihuillq.com",
		"s23.cnzz.com",
		"z3.cnzz.com",
		"c.cnzz.com",
		"stj.v1vo.top",
		"z12.cnzz.com",
		"img.mosflower.cn",
		"tips.gamevvip.com",
		"ehwe.yhdtns.com",
		"xdn.cqqc3.com",
		"www.jixunkyy.cn",
		"sp.chemacid.cn",
		"hm.baidu.com",
		"s9.cnzz.com",
		"z6.cnzz.com",
		"um.cavuc.com",
		"mav.mavuz.com",
		"wofwk.aoidf3.com",
		"z5.cnzz.com",
		"xc.hubeijieshikj.cn",
		"tj.tianwenhu.com",
		"xg.gars57.cn",
		"k.jinxiuzhilv.com",
		"cdn.bootcss.com",
		"ppl.xunzhuo123.com",
		"xomk.jiangjunmh.top",
		"img.xunzhuo123.com",
		"z1.cnzz.com",
		"s13.cnzz.com",
		"xg.huataisangao.cn",
		"z7.cnzz.com",
		"xg.huataisangao.cn",
		"z2.cnzz.com",
		"s96.cnzz.com",
		"q11.cnzz.com",
		"thy.dacedsfa.cn",
		"xg.whsbpw.cn",
		"s19.cnzz.com",
		"z8.cnzz.com",
		"s4.cnzz.com",
		"f5w.as12df.top",
		"ae01.alicdn.com",
		"www.92424.cn",
		"k.wudejia.com",
		"vivovip.mmszxc.top",
		"qiu.xixiqiu.com",
		"cdnjs.hnfenxun.com",
		"cms.qdwght.com"
	]
}