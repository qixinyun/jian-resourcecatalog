<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => '民政社会团体和民办非企业单位',
        IResourceCatalog::TYPE['QYJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['DYZGXX'] => '导游资格信息',
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => '企业固定资产投资项目核准或备案',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业税务行政处罚信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => '气象探测环境保护监督信息',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => '体育协会登记信息',
        IResourceCatalog::TYPE['HSZYZGZXX'] => '护士执业资格证信息',
        IResourceCatalog::TYPE['JGJCDXZJL'] => '价格监测的行政奖励',
        IResourceCatalog::TYPE['JXSZLJDW'] => '专利奖（单位）',
        IResourceCatalog::TYPE['ZLJCQYXX'] => '质量检测企业信息',
        IResourceCatalog::TYPE['SLGCZBXX'] => '水利工程中标信息',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => '二手车鉴定评估机构核准证书',
        IResourceCatalog::TYPE['PGJGXX'] => '评估机构信息',
        IResourceCatalog::TYPE['DTJXJGRXX'] => '对统计先进个人信息',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => '音像制作单位及变更信息',
        IResourceCatalog::TYPE['SLYSXKZXX'] => '水路运输许可证信息',
        IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
        // IResourceCatalog::TYPE['QYRYXX'] => '企业荣誉信息',
        IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
        IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
        IResourceCatalog::TYPE['TJDCDXML'] => '统计调查对象目录',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
        IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
        IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
        IResourceCatalog::TYPE['JXMPCPXX'] => '名牌产品信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['SJYXXS'] => '市级三好学生、市级优秀学生干部',
        IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
        IResourceCatalog::TYPE['SJJXMXX'] => '社会事业领域中央预算内和省基建项目信息',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['SBQYXX'] => '社保企业信息',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => '司法鉴定机构登记信息',
        IResourceCatalog::TYPE['GZJGJBXX'] => '公证机构基本信息',
        IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
        IResourceCatalog::TYPE['JCFLFWSXX'] => '基层法律服务所信息',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => '基层法律服务工作者基本信息',
        IResourceCatalog::TYPE['LSSWSXX'] => '律师事务所信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => '医师执业注册和变更注册',
        IResourceCatalog::TYPE['YSZYZGZXX'] => '医师执业资格证信息',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => '卫生和计划生育委员会基础信息',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => '医疗和计生服务机构信息',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => '疾病预防控制机构信息',
        IResourceCatalog::TYPE['FYCRYJLXX'] => '妇幼处荣誉奖励信息',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => '卫生专业技术资格考试违纪信息',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => '对全市无偿献血先进单位的表彰奖励',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => '严重拖欠农民工工资黑名单',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
        IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
        IResourceCatalog::TYPE['QYDXXX'] => '企业吊销信息',
        IResourceCatalog::TYPE['CCJCJGXX'] => '抽查检查结果信息',
        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => '投资项目办理结果公示信息',
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => '投资项目名称代码匹配信息',
        IResourceCatalog::TYPE['SFJDRXX'] => '司法鉴定人信息',
        IResourceCatalog::TYPE['SFJDJGXX'] => '司法鉴定机构信息',
        IResourceCatalog::TYPE['LSZYXX'] => '律师执业信息',
        IResourceCatalog::TYPE['LSNDPJXX'] => '律师年度评价信息',
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => '律师事务所年度评价信息',
        IResourceCatalog::TYPE['SAJLVJQ'] => '4A级旅游景区',
        IResourceCatalog::TYPE['BWGXX'] => '博物馆信息',
        IResourceCatalog::TYPE['WWSDXX'] => '文物商店信息',
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => '文物商店购买、销售文物有关记录事项',
        IResourceCatalog::TYPE['QYSWJBDJXX'] => '企业税务基本登记信息',
        IResourceCatalog::TYPE['NSXYDJPDXX'] => '纳税信用等级评定信息',
        IResourceCatalog::TYPE['QYQSGGXX'] => '企业欠税公告信息',
        IResourceCatalog::TYPE['FZCNSRXX'] => '非正常纳税人信息',
        IResourceCatalog::TYPE['LXSDJXX'] => '旅行社登记信息',
        IResourceCatalog::TYPE['GRYCJJBAXX'] => '个人演出经纪备案信息',
        IResourceCatalog::TYPE['XZJLXXZRR'] => '行政奖励信息（自然人）',
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => '行政奖励信息（社会法人）',
        IResourceCatalog::TYPE['SXBZXRXX'] => '失信被执行人信息',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => '重大税收违法案件信息',
        IResourceCatalog::TYPE['HXLDGXXX'] => '和谐劳动关系信息',
        IResourceCatalog::TYPE['SCAQBLJLHMD'] => '生产安全不良记录黑名单',
        IResourceCatalog::TYPE['YZSXWFQY'] => '严重失信违法企业',
        IResourceCatalog::TYPE['HGSXQY'] => '海关失信企业',
        IResourceCatalog::TYPE['HGGJRZ'] => '海关高级认证',
        IResourceCatalog::TYPE['ZZQSGBZHSFGDMD'] => '江西省施工安全标准化示范工地表彰名单',
        IResourceCatalog::TYPE['ZZQCYBGCZLJMD'] => '江西省“草原杯”工程质量奖名单',
        IResourceCatalog::TYPE['ZZQYZYBGCMD'] => '江西省优质样板工程名单',
        IResourceCatalog::TYPE['SLJSSC'] => '水里建设市场',
        IResourceCatalog::TYPE['LHCJFRHMD'] => '联合惩戒法人黑名单',
        IResourceCatalog::TYPE['LHJLFRHMD'] => '联合奖励法人红名单',
        IResourceCatalog::TYPE['XYSFSQ'] => '信用示范（商圈、街区）',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录',
        IResourceCatalog::TYPE['C_AJASRMD'] => '纳税信用A级纳税人名单共管信息',
        IResourceCatalog::TYPE['C_AJNSR'] => '网站守信_A级纳税人信息',
        IResourceCatalog::TYPE['C_SXBZXJG'] => '失信被执行机构信息',
        IResourceCatalog::TYPE['P_VWEB_PERSON'] => '个人信息',
        IResourceCatalog::TYPE['C_JYZCX'] => '经营者诚信信息',
        IResourceCatalog::TYPE['C_NYLYJL'] => '农业领域奖励信息',
        IResourceCatalog::TYPE['C_SBHQJT'] => '获得“三八红旗集体”荣誉称号信息',
        IResourceCatalog::TYPE['DDMFSBHR'] => '道德模范与身边好人信息',
        IResourceCatalog::TYPE['NYLYGRJLXX'] => '农业领域个人奖励信息',
        IResourceCatalog::TYPE['P_JGJGBB'] => '获得“巾帼建功标兵”荣誉称号信息',
        IResourceCatalog::TYPE['P_SXBZXR'] => '失信被执行自然人信息',
        IResourceCatalog::TYPE['P_YXSBHQS'] => '获得“三八红旗手”荣誉称号信息',
        IResourceCatalog::TYPE['C_DKJBXX'] => '贷款基本信息',
        IResourceCatalog::TYPE['C_DSSWDJXX'] => '（税务）登记信息变更函',
        IResourceCatalog::TYPE['C_ZFGJJ'] => '住房公积金缴费信息（单位住房公积金缴存信息）',
        IResourceCatalog::TYPE['DFJFJL_INFO'] => '电费缴费记录信息',
        IResourceCatalog::TYPE['P_GJJDKXX'] => '公积金贷款信息',
        IResourceCatalog::TYPE['P_GRDBJFF_INFO'] => '个人低保金发放信息',
        IResourceCatalog::TYPE['P_SFQJXX'] => '水费欠费记录信息',
        IResourceCatalog::TYPE['P_SJYJT_XSXJXX'] => '学生学籍信息',
        IResourceCatalog::TYPE['P_VWEB_LOAN_INFO'] => '贷款信息',
        IResourceCatalog::TYPE['P_WATER_INFO'] => '水费缴费记录信息',
        IResourceCatalog::TYPE['C_ESFBA'] => '二手房备案信息',
        IResourceCatalog::TYPE['P_FDDBR'] => '法定代表人（负责人）信息',
        IResourceCatalog::TYPE['DFXBMDXX'] => '地方性黑名单信息',
        IResourceCatalog::TYPE['DFXRMDXX'] => '地方性红名单信息',
        IResourceCatalog::TYPE['DFXYF'] => '地方信用分',
        IResourceCatalog::TYPE['GJJGRDKXX'] => '公积金个人贷款信息',
        IResourceCatalog::TYPE['GJJGRJCXX'] => '公积金个人缴存信息',
        IResourceCatalog::TYPE['NSXX'] => '纳税信息',
        IResourceCatalog::TYPE['QSXX'] => '欠税信息',
        IResourceCatalog::TYPE['RYJLXX'] => '荣誉奖励信息',
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] => '自然人公用事业缴费信息',
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] => '自然人拖欠公用事业费信息',
        IResourceCatalog::TYPE['GJJJCXX'] => '公积金缴存信息（法人）',
        IResourceCatalog::TYPE['FRGYSYJFXX'] => '法人公用事业缴费信息',
        IResourceCatalog::TYPE['FRHEIMD'] => '地方性黑名单（法人）',
        IResourceCatalog::TYPE['FRHONGMD'] => '地方性红名单信息（法人）',
        IResourceCatalog::TYPE['FRNSXX'] => '纳税信息（法人）',
        IResourceCatalog::TYPE['FRQSXX'] => '欠税信息（法人）',
        IResourceCatalog::TYPE['FRTQGYSYFXX'] => '法人拖欠公用事业费信息',
        IResourceCatalog::TYPE['RYBZXX'] => '荣誉表彰信息',
        IResourceCatalog::TYPE['CCWLJJLXX'] => '仓储物流寄件量信息',
        IResourceCatalog::TYPE['CCWLYQXX'] => '仓储物流逾期信息',
        IResourceCatalog::TYPE['FRYDJFXX'] => '法人用电缴费信息',
        IResourceCatalog::TYPE['FRYDTQFXX'] => '法人用电拖欠费信息',
        IResourceCatalog::TYPE['FRYQJFXX'] => '法人用气缴费信息',
        IResourceCatalog::TYPE['FRYQTQFXX'] => '法人用气拖欠费信息',
        IResourceCatalog::TYPE['FRYSJFXX'] => '法人用水缴费信息',
        IResourceCatalog::TYPE['FRYSTQFXX'] => '法人用水拖欠费信息',
        IResourceCatalog::TYPE['ZRRYDJFXX'] => '自然人用电缴费信息',
        IResourceCatalog::TYPE['ZRRYDTQFXX'] => '自然人用电拖欠费信息',
        IResourceCatalog::TYPE['ZRRYQJFXX'] => '自然人用气缴费信息',
        IResourceCatalog::TYPE['ZRRYQTQFXX'] => '自然人用气拖欠费信息',
        IResourceCatalog::TYPE['ZRRYSJFXX'] => '自然人用水缴费信息',
        IResourceCatalog::TYPE['ZRRYSTQFXX'] => '自然人用水拖欠费信息',
        IResourceCatalog::TYPE['C_TJLYQYJB'] => '统计领域企业基本信息',
        IResourceCatalog::TYPE['C_YYCL'] => '营运车辆信息（法人）',
        IResourceCatalog::TYPE['P_CAR_INFO'] => '营运车辆信息（自然人）',
        IResourceCatalog::TYPE['P_DZDY_INFO'] => '电子导游证信息',
        IResourceCatalog::TYPE['P_GET_BZXZF'] => '获得保障性住房信息',
        IResourceCatalog::TYPE['P_HSZYZ'] => '护士执业证信息',
        IResourceCatalog::TYPE['P_TEZYRY'] => '特种作业人员操作资格证核发',
        IResourceCatalog::TYPE['C_AQSCBZHQY'] => '安全生产标准化企业信息',
        // IResourceCatalog::TYPE['C_CHZZDW'] => '测绘资质单位信息',
        // IResourceCatalog::TYPE['C_CKXKZ'] => '采矿许可证信息',
        IResourceCatalog::TYPE['C_GXJSQYRD'] => '高新技术企业认定信息',
        IResourceCatalog::TYPE['C_JYJG'] => '教育机构信息',
        IResourceCatalog::TYPE['P_EJTYZDY_INFO'] => '二级社会体育指导员技术等级称号',
        IResourceCatalog::TYPE['P_EJYDY_INFO'] => '二级运动员信息',
        IResourceCatalog::TYPE['C_MBFQY_INFO'] => '民办非企业单位基本信息',
        IResourceCatalog::TYPE['C_MBFQYDWNJ'] => '民办非企业单位年检信息',
        IResourceCatalog::TYPE['C_SHTTNJ_INFO'] => '社会团体年检信息',
        IResourceCatalog::TYPE['P_GRHYDJ_INFO'] => '个人婚姻登记信息',
        IResourceCatalog::TYPE['C_QXZHFYZDDW'] => '气象灾害防御重点单位信息',
        IResourceCatalog::TYPE['C_QYDSJBDJ'] => '企业地税基本登记信息',
        IResourceCatalog::TYPE['C_SSZDWFAJ'] => '税收重大违法案件信息',
        IResourceCatalog::TYPE['C_QYDX_INFO'] => '企业吊销信息',
        IResourceCatalog::TYPE['C_QYGDTZZ_INFO'] => '企业股东（投资者）信息',
        IResourceCatalog::TYPE['C_QYYCML_INFO'] => '企业异常名录信息',
        IResourceCatalog::TYPE['C_YLQXJYQY'] => '医疗器械经营企业信息',
        IResourceCatalog::TYPE['P_ZRRGD_INFO'] => '自然人股东信息',
        IResourceCatalog::TYPE['C_SFJFJL'] => '水费缴费记录信息',
        IResourceCatalog::TYPE['C_SYDWNDBG'] => '事业单位年度报告',
        IResourceCatalog::TYPE['C_SYDW_INFO'] => '事业单位法人登记信息',
        IResourceCatalog::TYPE['C_YYCB'] => '营运船舶信息',
        IResourceCatalog::TYPE['DLSZYZZJL_INFO'] => '对律师执业资格者奖励信息',
        IResourceCatalog::TYPE['FLFWGZZ_INFO'] => '基层法律服务工作者基本信息',
        IResourceCatalog::TYPE['LSZYZG_INFO'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['SFJDCYRY_INFO'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['LDBZNDSMSC_INFO'] => '劳动保障年度书面审查信息',
        IResourceCatalog::TYPE['LDYG_INFO'] => '劳动用工信息',
        IResourceCatalog::TYPE['P_JZHJCWFJL'] => '酒驾后驾车违法行为记录',
        IResourceCatalog::TYPE['P_YSZYZ'] => '医师执业证信息',
        IResourceCatalog::TYPE['WMDW_INFO'] => '文明单位信息',
        IResourceCatalog::TYPE['GRDKHKMX'] => '个人贷款还款明细',
        IResourceCatalog::TYPE['GRJCJCXX'] => '个人缴存基础信息',
        IResourceCatalog::TYPE['GRJCMX'] => '个人缴存明细',
        IResourceCatalog::TYPE['GRMXXX'] => '个人明细信息',
        IResourceCatalog::TYPE['JASRKJBXX'] => '吉安市人口基本信息',
        // IResourceCatalog::TYPE['C_GTZYLYRY'] => '国土资源领域荣誉信息',
        IResourceCatalog::TYPE['C_HBHMDQY'] => '环保黑名单企业信息',
        IResourceCatalog::TYPE['P_GRHBRYXX'] => '个人环保荣誉信息',
        IResourceCatalog::TYPE['C_JGJGXJJT'] => '获得“巾帼建功先进集体”荣誉称号信息',
        IResourceCatalog::TYPE['P_JGWMG'] => '获得“巾帼文明岗”荣誉称号信息',
        IResourceCatalog::TYPE['C_JGRY'] => '机构荣誉信息',
        IResourceCatalog::TYPE['C_JGRYXX'] => '机构荣誉信息',
        // IResourceCatalog::TYPE['C_JXQNWSJ'] => '江西青年五四奖组织',
        // IResourceCatalog::TYPE['C_QNWMH'] => '青年文明号',
        // IResourceCatalog::TYPE['C_QSYXSXDJT'] => '全市优秀少先队集体',
        // IResourceCatalog::TYPE['C_YXQNZYZ'] => '优秀青年志愿者组织',
        // IResourceCatalog::TYPE['P_HLJJJY'] => '红领巾讲解员',
        // IResourceCatalog::TYPE['P_JASDJCQN'] => '吉安十大杰出青年',
        // IResourceCatalog::TYPE['P_QSYXGQTY'] => '全市优秀共青团干部',
        // IResourceCatalog::TYPE['P_QSYXGQY'] => '全市优秀共青团员',
        // IResourceCatalog::TYPE['P_QSYXSXDFDY'] => '全市优秀少先队辅导员',
        // IResourceCatalog::TYPE['P_QSYXSXDY'] => '全市优秀少先队员',
        // IResourceCatalog::TYPE['P_SDJCQNTM'] => '吉安十大杰出青年提名奖',
        // IResourceCatalog::TYPE['P_WSJ'] => '江西青年五四奖组织',
        // IResourceCatalog::TYPE['P_YXQN'] => '优秀青年志愿者组织',
        IResourceCatalog::TYPE['C_QSJYXTXJJT'] => '全省教育系统先进集体评选信息',
        IResourceCatalog::TYPE['P_GUA_GZZ_INFO'] => '全省（市）教育系统先进工作者评选信息',
        IResourceCatalog::TYPE['DGZJGJL_INFO'] => '对公证机构奖励信息',
        IResourceCatalog::TYPE['DLSSWSJL_INFO'] => '对律师事务所奖励信息',
        IResourceCatalog::TYPE['DSFJDJGJL_INFO'] => '对司法鉴定机构奖励信息',
        IResourceCatalog::TYPE['FDDBRXX'] => '法定代表人信息',
        IResourceCatalog::TYPE['JYJCJGZZRDXX'] => '检验检测机构资质认定信息',
        IResourceCatalog::TYPE['QYBGXX'] => '企业变更信息',
        IResourceCatalog::TYPE['QYDSJSBNXX'] => '企业董事监事备案信息',
        IResourceCatalog::TYPE['SCZTSHTZXYGSXX'] => '市场主体守合同重信用公示信息',
        IResourceCatalog::TYPE['SPSCQYXX'] => '食品生产企业信息',
        IResourceCatalog::TYPE['TZSBAZGZWXDWZGXKZXX'] => '特种设备安装改造维修单位资格许可证信息',
        IResourceCatalog::TYPE['YDSYLRQCZDWZGXKXX'] => '移动式压力容器充装单位资格许可信息',
        IResourceCatalog::TYPE['YLQXJYQYXX'] => '医疗器械经营企业信息',
        IResourceCatalog::TYPE['YLQXSCQYXX'] => '医疗器械生产企业信息',
        IResourceCatalog::TYPE['DLYGJGXX'] => '道路运管机构信息',
        IResourceCatalog::TYPE['DLYSJYZCFXX'] => '道路运输经营者处罚信息',
        IResourceCatalog::TYPE['DLYSQYRYXX'] => '道路运输企业荣誉信息',
        IResourceCatalog::TYPE['GLJSSCQYXX'] => '公路建设市场企业信息',
        IResourceCatalog::TYPE['JYXDLKYYSJSYHMD'] => '经营性道路客运运输驾驶员黑名单',
        IResourceCatalog::TYPE['SLJSSCQYXX'] => '水路建设市场企业信息',
        IResourceCatalog::TYPE['SLYGJGXX'] => '水路运管机构信息',
        IResourceCatalog::TYPE['SLYSQYRYXX'] => '水路运输企业荣誉信息',
        IResourceCatalog::TYPE['YYCLXXFR'] => '营运车辆信息(法人)',
        IResourceCatalog::TYPE['YYCLXXZRR'] => '营运车辆信息(自然人)',
        IResourceCatalog::TYPE['YYCPXXFR'] => '营运船舶信息(法人)',
        IResourceCatalog::TYPE['YYCPXXZRR'] => '营运船舶信息(自然人)',
        IResourceCatalog::TYPE['ZYCYZGXX'] => '职业从业资格信息',
        IResourceCatalog::TYPE['EJSHTYZDYJSDJCH'] => '二级社会体育指导员技术等级称号',
        IResourceCatalog::TYPE['EJYDYXX'] => '二级运动员信息',
        IResourceCatalog::TYPE['JYJGXX'] => '教育机构信息',
        IResourceCatalog::TYPE['QSJYXTXJGZZPXXX'] => '全省（市）教育系统先进工作者评选信息',
        IResourceCatalog::TYPE['QSJYXTXJJTPXXX'] => '全省教育系统先进集体评选信息',
        IResourceCatalog::TYPE['QSTYXTFXFJJDCCJL'] => '全市体育系统反兴奋剂监督抽查记录',
        IResourceCatalog::TYPE['SJSFXXXPGRDXX'] => '省级示范性学校评估认定信息',
        IResourceCatalog::TYPE['SQEJCPYDJXX'] => '申请二级裁判员登记信息',
        IResourceCatalog::TYPE['YDYFZRYFFCYXFJDCFXX'] => '运动员辅助人员非法持有兴奋剂的处罚信息',
        IResourceCatalog::TYPE['GRRYXX'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GXJSQYRDXX'] => '高新技术企业认定信息',
        IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JXSCYJSCXLM'] => '江西省产业技术创新联盟',
        IResourceCatalog::TYPE['JXSXCTD'] => '江西省星创天地',
        IResourceCatalog::TYPE['JXSZCKJ'] => '江西省众创空间',
        IResourceCatalog::TYPE['SGCJSYJZXRDXX'] => '省工程技术研究中心（重点实验室）认定信息',
        IResourceCatalog::TYPE['SJKJQYFHQRDXX'] => '省级科技企业孵化器认定信息',
        IResourceCatalog::TYPE['FYPLYZDHXPBAXX'] => '非药品类易制毒化学品备案信息',
        IResourceCatalog::TYPE['SJSCJYDWAQSCBLJLHMDXX'] => '省级生产经营单位安全生产不良记录“黑名单”信息',
        IResourceCatalog::TYPE['SLSCJYDWAQSCBLJLHMDXX'] => '市级生产经营单位安全生产不良记录“黑名单”信息',
        IResourceCatalog::TYPE['HLJJJY'] => '红领巾讲解员',
        IResourceCatalog::TYPE['JAQNWSJZ'] => '吉安青年五四奖章',
        IResourceCatalog::TYPE['JASDJCQN'] => '吉安十大杰出青年',
        IResourceCatalog::TYPE['JASDJCQNTMJ'] => '吉安十大杰出青年提名奖',
        IResourceCatalog::TYPE['JASSDHYJGSJSXJQNJT'] => '吉安市十大弘扬井冈山精神先进青年集体',
        IResourceCatalog::TYPE['JXQNWSJ'] => '江西青年五四奖',
        IResourceCatalog::TYPE['JXQNWSJZZ'] => '江西青年五四奖组织',
        IResourceCatalog::TYPE['QNGWNS'] => '青年岗位能手',
        IResourceCatalog::TYPE['QNWMH'] => '青年文明号',
        IResourceCatalog::TYPE['QSNWQG'] => '青少年维权岗',
        IResourceCatalog::TYPE['QSNZYFWQK'] => '青少年志愿服务情况',
        IResourceCatalog::TYPE['QSWSHQTW'] => '全市五四红旗团委',
        IResourceCatalog::TYPE['QSWSHQTZZ'] => '全市五四红旗团总支(支部)',
        IResourceCatalog::TYPE['QSYXGQTGB'] => '全市优秀共青团干部',
        IResourceCatalog::TYPE['QSYXGQTY'] => '全市优秀共青团员',
        IResourceCatalog::TYPE['QSYXSXDFDY'] => '全市优秀少先队辅导员',
        IResourceCatalog::TYPE['QSYXSXDJT'] => '全市优秀少先队集体',
        IResourceCatalog::TYPE['QSYXSXDY'] => '全市优秀少先队员',
        IResourceCatalog::TYPE['YXFZFXZ'] => '优秀法制副校长',
        IResourceCatalog::TYPE['YXQNZYZ'] => '优秀青年志愿者',
        IResourceCatalog::TYPE['YXQNZYZZZ'] => '优秀青年志愿者组织',
        IResourceCatalog::TYPE['FFTQGJJXX'] => '非法套取公积金信息',
        IResourceCatalog::TYPE['JCKQYJYJYXYGLXX'] => '进出口企业检验检疫信用管理信息',
        IResourceCatalog::TYPE['QYHGZCXX'] => '企业海关注册信息',
        IResourceCatalog::TYPE['QYXYGLXX'] => '企业信用管理信息',
        IResourceCatalog::TYPE['SFQYXX'] => '示范企业信息',
        IResourceCatalog::TYPE['YQWJNGJJDK'] => '逾期未缴纳公积金贷款',
        IResourceCatalog::TYPE['DWJLXX'] => '单位奖励信息',
        IResourceCatalog::TYPE['LYLYNDGRJLXX'] => '林业领域内对个人奖励信息',
        IResourceCatalog::TYPE['LYLYNDJTJLXX'] => '林业领域内对集体奖励信息',
        IResourceCatalog::TYPE['QSRKNYJJPCXJJTJL'] => '全市人口、农业、经济普查先进集体奖励',
        IResourceCatalog::TYPE['QSTJJTJLXX'] => '全省统计集体奖励信息',
        IResourceCatalog::TYPE['XFZDDWJBXX'] => '消防重点单位基本信息',
        IResourceCatalog::TYPE['ZDHZYHMDXX'] => '重大火灾隐患名单信息',
        IResourceCatalog::TYPE['SPYBNCPRZXX'] => '“三品一标”农产品认证信息',
        IResourceCatalog::TYPE['GYSXX'] => '供应商信息',
        IResourceCatalog::TYPE['JXSZFCGJGGSXX'] => '江西省政府采购机构公示信息',
        IResourceCatalog::TYPE['KJCYZGXX'] => '会计从业资格信息',
        IResourceCatalog::TYPE['KJSWSDJXX'] => '会计师事务所登记信息',
        IResourceCatalog::TYPE['ZCKJSXX'] => '注册会计师信息',
        IResourceCatalog::TYPE['ZFCGDLYHKXX'] => '政府采购代理用户库信息',
        IResourceCatalog::TYPE['CZNXZJXWDHJJCRYMD'] => '存在弄虚作假行为的环境监测人员名单',
        IResourceCatalog::TYPE['CZNXZJXWDSHHJJCJGMD'] => '存在弄虚作假行为的社会环境监测机构名单',
        IResourceCatalog::TYPE['HBCYRYXX'] => '环保从业人员信息',
        IResourceCatalog::TYPE['QZQJSCSHQYMD'] => '强制清洁生产审核企业名单',
        IResourceCatalog::TYPE['JXSXXWXQYCYCXSFJDSBRDXX'] => '江西省小型微型企业创业创新示范基地申报认定信息',
        IResourceCatalog::TYPE['JXSZJTXZXQYXX'] => '江西省“专精特新”中小企业信息',
        IResourceCatalog::TYPE['JXSZXQYGGFWSFPTRDXX'] => '江西省中小企业公共服务示范平台认定信息',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => '省级企业技术中心认定信息',
        IResourceCatalog::TYPE['SYDDSCQYSPXX'] => '食盐定点生产企业审批信息',
        IResourceCatalog::TYPE['ZDCYHCXXMXX'] => '重点产业化创新项目信息',
        IResourceCatalog::TYPE['CHZZDWXX'] => '测绘资质单位信息',
        IResourceCatalog::TYPE['CKXKZXX'] => '采矿许可证信息',
        IResourceCatalog::TYPE['GRRYXXSGZW'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GTZYLYRYXX'] => '国土资源领域荣誉信息',
        IResourceCatalog::TYPE['GYQYJBXX'] => '国有企业基本信息',
        IResourceCatalog::TYPE['KCZYKCXKZXX'] => '矿产资源勘查许可证信息',
        IResourceCatalog::TYPE['KYQJYXX'] => '矿业权（采矿权、探矿权）交易信息',
        IResourceCatalog::TYPE['QYKHXX'] => '企业考核信息',
        IResourceCatalog::TYPE['QYRYXXSGZW'] => '企业荣誉信息',
        IResourceCatalog::TYPE['TDJYXXFR'] => '土地交易信息-法人',
        IResourceCatalog::TYPE['TDJYXXZRR'] => '土地交易信息-自然人',
        //@position
    );
}
