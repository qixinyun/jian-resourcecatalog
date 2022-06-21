<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'xbxzcf',
        IResourceCatalog::TYPE['XBXZXK'] => 'xbxzxk',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'qyycmlxx',
        IResourceCatalog::TYPE['SXQYHMD'] => 'sxqyhmd',
        IResourceCatalog::TYPE['DYZGXX'] => 'dyzgxx',
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => 'qygdzctzxmhzhba',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'zfcgdljgxx',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'qygszxxx',
        IResourceCatalog::TYPE['AJNSRXX'] => 'ajnsrxx',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'qydsxzcfxx',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'yscrjzjjjzgrdxx',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'sfjdjgcyryzgxx',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'qxtchjbhjdxx',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => 'pxstyxhdjxx',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'hszyzgzxx',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'jgjcdxzjl',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'jxszljdw',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'zljcqyxx',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'slgczbxx',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'escjdpgjghzzs',
        IResourceCatalog::TYPE['PGJGXX'] => 'pgjgxx',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'dtjxjgrxx',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'yxzzdwjbgxx',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'slysxkzxx',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'zyjnzsxx',
        IResourceCatalog::TYPE['QYRYXX'] => 'qyryxx',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'shzznjxx',
        IResourceCatalog::TYPE['YLBXXX'] => 'ylbxxx',
        IResourceCatalog::TYPE['TJDCDXML'] => 'tjdcdxml',
        IResourceCatalog::TYPE['JDCWFXX'] => 'jdcwfxx',
        IResourceCatalog::TYPE['GTGSHXX'] => 'gtgshxx',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'cmqysbxx',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'yplsqyxx',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'yztqsbxxhmd',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'spyptsjbjlgr',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'spyptsjbjldw',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'jxmpcpxx',
        IResourceCatalog::TYPE['JSZGXX'] => 'jszgxx',
        IResourceCatalog::TYPE['SJYXXS'] => 'sjyxxs',
        IResourceCatalog::TYPE['SYBXXX'] => 'sybxxx',
        IResourceCatalog::TYPE['SJJXMXX'] => 'sjjxmxx',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'jyjgxinxi',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'grryxxjyj',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'grryxxjtj',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => 'grryxxgdj',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'grryxxmzj',
        IResourceCatalog::TYPE['SBQYXX'] => 'sbqyxx',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'sfjdjgdjxx',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'gzjgjbxx',
        IResourceCatalog::TYPE['GZYXX'] => 'gzyxx',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'jcflfwsxx',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'jcflfwgzzjbxx',
        IResourceCatalog::TYPE['LSSWSXX'] => 'lsswsxx',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'lszyzgzxx',
        IResourceCatalog::TYPE['GZRYXX'] => 'gzryxx',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'yszyzchbgzc',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'yszyzgzxx',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'wshjhsywyhjcxx',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'ylhjsfwjgxx',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'jbyfkzjgxx',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'fycryjlxx',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'wszyjszgkswjxx',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'qswcxxxjdwbz',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'yztqnmggzhmd',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => 'jgryxxswgxj',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'jgryxxsjyj',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'jgryxxssfj',
        IResourceCatalog::TYPE['MBFQYML'] => 'mbfqyml',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'shttdjxx',
        IResourceCatalog::TYPE['QYZXXX'] => 'qyzxxx',
        IResourceCatalog::TYPE['QYDXXX'] => 'qydxxx',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'ccjcjgxx',
        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => 'tzxmbljggsxx',
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => 'tzxmmcdmppxx',
        IResourceCatalog::TYPE['SFJDRXX'] => 'sfjdrxx',
        IResourceCatalog::TYPE['SFJDJGXX'] => 'sfjdjgxx',
        IResourceCatalog::TYPE['LSZYXX'] => 'lszyxx',
        IResourceCatalog::TYPE['LSNDPJXX'] => 'lsndpjxx',
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => 'lsswsndpjxx',
        IResourceCatalog::TYPE['SAJLVJQ'] => 'sajlvjq',
        IResourceCatalog::TYPE['BWGXX'] => 'bwgxx',
        IResourceCatalog::TYPE['WWSDXX'] => 'wwsdxx',
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => 'wwsdgmxsjlsx',
        IResourceCatalog::TYPE['QYSWJBDJXX'] => 'qyswjbdjxx',
        IResourceCatalog::TYPE['NSXYDJPDXX'] => 'nsxydjpdxx',
        IResourceCatalog::TYPE['QYQSGGXX'] => 'qyqsggxx',
        IResourceCatalog::TYPE['FZCNSRXX'] => 'fzcnsrxx',
        IResourceCatalog::TYPE['LXSDJXX'] => 'lxsdjxx',
        IResourceCatalog::TYPE['GRYCJJBAXX'] => 'grycjjbaxx',
        IResourceCatalog::TYPE['XZJLXXZRR'] => 'xzjlxxzrr',
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => 'xzjlxxfrhqtzz',
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => 'mzshtthmbfqydw',
        IResourceCatalog::TYPE['QYJBXX'] => 'qyjbxx',
        IResourceCatalog::TYPE['SXBZXRXX'] => 'sxbzxrxx',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'zdsswfajxx',
        IResourceCatalog::TYPE['HXLDGXXX'] => 'hxldgxxx',
        IResourceCatalog::TYPE['SCAQBLJLHMD'] => 'scaqbljlhmd',
        IResourceCatalog::TYPE['YZSXWFQY'] => 'yzsxwfqy',
        IResourceCatalog::TYPE['HGSXQY'] => 'hgsxqy',
        IResourceCatalog::TYPE['HGGJRZ'] => 'hggjrz',
        IResourceCatalog::TYPE['ZZQSGBZHSFGDMD'] => 'zzqsgbzhsfgdmd',
        IResourceCatalog::TYPE['ZZQCYBGCZLJMD'] => 'zzqcybgczljmd',
        IResourceCatalog::TYPE['ZZQYZYBGCMD'] => 'zzqyzybgcmd',
        IResourceCatalog::TYPE['SLJSSC'] => 'sljssc',
        IResourceCatalog::TYPE['LHCJFRHMD'] => 'lhcjfrhmd',
        IResourceCatalog::TYPE['LHJLFRHMD'] => 'lhjlfrhmd',
        IResourceCatalog::TYPE['XYSFSQ'] => 'xysfsq',
        IResourceCatalog::TYPE['TEST'] => 'test',
        IResourceCatalog::TYPE['C_AJASRMD'] => 'c_ajasrmd',
        IResourceCatalog::TYPE['C_AJNSR'] => 'c_ajnsr',
        IResourceCatalog::TYPE['C_SXBZXJG'] => 'c_sxbzxjg',
        IResourceCatalog::TYPE['P_VWEB_PERSON'] => 'p_vweb_person',
        IResourceCatalog::TYPE['C_JYZCX'] => 'c_jyzcx',
        IResourceCatalog::TYPE['C_NYLYJL'] => 'c_nylyjl',
        IResourceCatalog::TYPE['C_SBHQJT'] => 'c_sbhqjt',
        IResourceCatalog::TYPE['DDMFSBHR'] => 'ddmfsbhr',
        IResourceCatalog::TYPE['NYLYGRJLXX'] => 'nylygrjlxx',
        IResourceCatalog::TYPE['P_JGJGBB'] => 'p_jgjgbb',
        IResourceCatalog::TYPE['P_SXBZXR'] => 'p_sxbzxr',
        IResourceCatalog::TYPE['P_YXSBHQS'] => 'p_yxsbhqs',
        IResourceCatalog::TYPE['C_DKJBXX'] => 'c_dkjbxx',
        IResourceCatalog::TYPE['C_DSSWDJXX'] => 'c_dsswdjxx',
        IResourceCatalog::TYPE['C_ZFGJJ'] => 'c_zfgjj',
        IResourceCatalog::TYPE['DFJFJL_INFO'] => 'dfjfjl_info',
        IResourceCatalog::TYPE['P_GJJDKXX'] => 'p_gjjdkxx',
        IResourceCatalog::TYPE['P_GRDBJFF_INFO'] => 'p_grdbjff_info',
        IResourceCatalog::TYPE['P_SFQJXX'] => 'p_sfqjxx',
        IResourceCatalog::TYPE['P_SJYJT_XSXJXX'] => 'p_sjyjt_xsxjxx',
        IResourceCatalog::TYPE['P_VWEB_LOAN_INFO'] => 'p_vweb_loan_info',
        IResourceCatalog::TYPE['P_WATER_INFO'] => 'p_water_info',
        IResourceCatalog::TYPE['C_ESFBA'] => 'c_esfba',
        IResourceCatalog::TYPE['P_FDDBR'] => 'p_fddbr',
        IResourceCatalog::TYPE['DFXBMDXX'] => 'dfxbmdxx',
        IResourceCatalog::TYPE['DFXRMDXX'] => 'dfxrmdxx',
        IResourceCatalog::TYPE['DFXYF'] => 'dfxyf',
        IResourceCatalog::TYPE['GJJGRDKXX'] => 'gjjgrdkxx',
        IResourceCatalog::TYPE['GJJGRJCXX'] => 'gjjgrjcxx',
        IResourceCatalog::TYPE['NSXX'] => 'nsxx',
        IResourceCatalog::TYPE['QSXX'] => 'qsxx',
        IResourceCatalog::TYPE['RYJLXX'] => 'ryjlxx',
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] => 'zrrgysyjfxx',
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] => 'zrrtqgysyfxx',
        IResourceCatalog::TYPE['GJJJCXX'] => 'gjjjcxx',
        IResourceCatalog::TYPE['FRGYSYJFXX'] => 'frgysyjfxx',
        IResourceCatalog::TYPE['FRHEIMD'] => 'frheimd',
        IResourceCatalog::TYPE['FRHONGMD'] => 'frhongmd',
        IResourceCatalog::TYPE['FRNSXX'] => 'frnsxx',
        IResourceCatalog::TYPE['FRQSXX'] => 'frqsxx',
        IResourceCatalog::TYPE['FRTQGYSYFXX'] => 'frtqgysyfxx',
        IResourceCatalog::TYPE['RYBZXX'] => 'rybzxx',
        IResourceCatalog::TYPE['CCWLJJLXX'] => 'ccwljjlxx',
        IResourceCatalog::TYPE['CCWLYQXX'] => 'ccwlyqxx',
        IResourceCatalog::TYPE['FRYDJFXX'] => 'frydjfxx',
        IResourceCatalog::TYPE['FRYDTQFXX'] => 'frydtqfxx',
        IResourceCatalog::TYPE['FRYQJFXX'] => 'fryqjfxx',
        IResourceCatalog::TYPE['FRYQTQFXX'] => 'fryqtqfxx',
        IResourceCatalog::TYPE['FRYSJFXX'] => 'frysjfxx',
        IResourceCatalog::TYPE['FRYSTQFXX'] => 'frystqfxx',
        IResourceCatalog::TYPE['ZRRYDJFXX'] => 'zrrydjfxx',
        IResourceCatalog::TYPE['ZRRYDTQFXX'] => 'zrrydtqfxx',
        IResourceCatalog::TYPE['ZRRYQJFXX'] => 'zrryqjfxx',
        IResourceCatalog::TYPE['ZRRYQTQFXX'] => 'zrryqtqfxx',
        IResourceCatalog::TYPE['ZRRYSJFXX'] => 'zrrysjfxx',
        IResourceCatalog::TYPE['ZRRYSTQFXX'] => 'zrrystqfxx',
        IResourceCatalog::TYPE['C_TJLYQYJB'] => 'c_tjlyqyjb',
        IResourceCatalog::TYPE['C_YYCL'] => 'c_yycl',
        IResourceCatalog::TYPE['P_CAR_INFO'] => 'p_car_info',
        IResourceCatalog::TYPE['P_DZDY_INFO'] => 'p_dzdy_info',
        IResourceCatalog::TYPE['P_GET_BZXZF'] => 'p_get_bzxzf',
        IResourceCatalog::TYPE['P_HSZYZ'] => 'p_hszyz',
        IResourceCatalog::TYPE['P_TEZYRY'] => 'p_tezyry',
        IResourceCatalog::TYPE['C_AQSCBZHQY'] => 'c_aqscbzhqy',
        IResourceCatalog::TYPE['C_CHZZDW'] => 'c_chzzdw',
        IResourceCatalog::TYPE['C_CKXKZ'] => 'c_ckxkz',
        IResourceCatalog::TYPE['C_GXJSQYRD'] => 'c_gxjsqyrd',
        IResourceCatalog::TYPE['C_JYJG'] => 'c_jyjg',
        IResourceCatalog::TYPE['P_EJTYZDY_INFO'] => 'p_ejtyzdy_info',
        IResourceCatalog::TYPE['P_EJYDY_INFO'] => 'p_ejydy_info',
        IResourceCatalog::TYPE['C_MBFQY_INFO'] => 'c_mbfqy_info',
        IResourceCatalog::TYPE['C_MBFQYDWNJ'] => 'c_mbfqydwnj',
        IResourceCatalog::TYPE['C_SHTTNJ_INFO'] => 'c_shttnj_info',
        IResourceCatalog::TYPE['P_GRHYDJ_INFO'] => 'p_grhydj_info',
        IResourceCatalog::TYPE['C_QXZHFYZDDW'] => 'c_qxzhfyzddw',
        IResourceCatalog::TYPE['C_QYDSJBDJ'] => 'c_qydsjbdj',
        IResourceCatalog::TYPE['C_SSZDWFAJ'] => 'c_sszdwfaj',
        IResourceCatalog::TYPE['C_QYDX_INFO'] => 'c_qydx_info',
        IResourceCatalog::TYPE['C_QYGDTZZ_INFO'] => 'c_qygdtzz_info',
        IResourceCatalog::TYPE['C_QYYCML_INFO'] => 'c_qyycml_info',
        IResourceCatalog::TYPE['C_YLQXJYQY'] => 'c_ylqxjyqy',
        IResourceCatalog::TYPE['P_ZRRGD_INFO'] => 'p_zrrgd_info',
        IResourceCatalog::TYPE['C_SFJFJL'] => 'c_sfjfjl',
        IResourceCatalog::TYPE['C_SYDWNDBG'] => 'c_sydwndbg',
        IResourceCatalog::TYPE['C_SYDW_INFO'] => 'c_sydw_info',
        IResourceCatalog::TYPE['C_YYCB'] => 'c_yycb',
        IResourceCatalog::TYPE['DLSZYZZJL_INFO'] => 'dlszyzzjl_info',
        IResourceCatalog::TYPE['FLFWGZZ_INFO'] => 'flfwgzz_info',
        IResourceCatalog::TYPE['LSZYZG_INFO'] => 'lszyzg_info',
        IResourceCatalog::TYPE['SFJDCYRY_INFO'] => 'sfjdcyry_info',
        IResourceCatalog::TYPE['LDBZNDSMSC_INFO'] => 'ldbzndsmsc_info',
        IResourceCatalog::TYPE['LDYG_INFO'] => 'ldyg_info',
        IResourceCatalog::TYPE['P_JZHJCWFJL'] => 'p_jzhjcwfjl',
        IResourceCatalog::TYPE['P_YSZYZ'] => 'p_yszyz',
        IResourceCatalog::TYPE['WMDW_INFO'] => 'wmdw_info',
        IResourceCatalog::TYPE['GRDKHKMX'] => 'grdkhkmx',
        IResourceCatalog::TYPE['GRJCJCXX'] => 'grjcjcxx',
        IResourceCatalog::TYPE['GRJCMX'] => 'grjcmx',
        IResourceCatalog::TYPE['GRMXXX'] => 'grmxxx',
        IResourceCatalog::TYPE['JASRKJBXX'] => 'jasrkjbxx',


        IResourceCatalog::TYPE['C_GTZYLYRY'] => 'c_gtzylyry',
        IResourceCatalog::TYPE['C_HBHMDQY'] => 'c_hbhmdqy',
        IResourceCatalog::TYPE['P_GRHBRYXX'] => 'p_grhbryxx',
        IResourceCatalog::TYPE['C_JGJGXJJT'] => 'c_jgjgxjjt',
        IResourceCatalog::TYPE['P_JGWMG'] => 'p_jgwmg',
        IResourceCatalog::TYPE['C_JGRY'] => 'c_jgry',
        IResourceCatalog::TYPE['C_JGRYXX'] => 'c_jgryxx',
        IResourceCatalog::TYPE['C_QSJYXTXJJT'] => 'c_qsjyxtxjjt',
        IResourceCatalog::TYPE['P_GUA_GZZ_INFO'] => 'p_gua_gzz_info',
        IResourceCatalog::TYPE['DGZJGJL_INFO'] => 'dgzjgjl_info',
        IResourceCatalog::TYPE['DLSSWSJL_INFO'] => 'dlsswsjl_info',
        IResourceCatalog::TYPE['DSFJDJGJL_INFO'] => 'dsfjdjgjl_info',

        IResourceCatalog::TYPE['FDDBRXX'] => 'fddbrxx',
        IResourceCatalog::TYPE['JYJCJGZZRDXX'] => 'jyjcjgzzrdxx',
        IResourceCatalog::TYPE['QYBGXX'] => 'qybgxx',
        IResourceCatalog::TYPE['QYDSJSBNXX'] => 'qydsjsbnxx',
        IResourceCatalog::TYPE['SCZTSHTZXYGSXX'] => 'scztshtzxygsxx',
        IResourceCatalog::TYPE['SPSCQYXX'] => 'spscqyxx',
        IResourceCatalog::TYPE['TZSBAZGZWXDWZGXKZXX'] => 'tzsbazgzwxdwzgxkzxx',
        IResourceCatalog::TYPE['YDSYLRQCZDWZGXKXX'] => 'ydsylrqczdwzgxkxx',
        IResourceCatalog::TYPE['YLQXJYQYXX'] => 'ylqxjyqyxx',
        IResourceCatalog::TYPE['YLQXSCQYXX'] => 'ylqxscqyxx',
        IResourceCatalog::TYPE['DLYGJGXX'] => 'dlygjgxx',
        IResourceCatalog::TYPE['DLYSJYZCFXX'] => 'dlysjyzcfxx',
        IResourceCatalog::TYPE['DLYSQYRYXX'] => 'dlysqyryxx',
        IResourceCatalog::TYPE['GLJSSCQYXX'] => 'gljsscqyxx',
        IResourceCatalog::TYPE['JYXDLKYYSJSYHMD'] => 'jyxdlkyysjsyhmd',
        IResourceCatalog::TYPE['SLJSSCQYXX'] => 'sljsscqyxx',
        IResourceCatalog::TYPE['SLYGJGXX'] => 'slygjgxx',
        IResourceCatalog::TYPE['SLYSQYRYXX'] => 'slysqyryxx',
        IResourceCatalog::TYPE['YYCLXXFR'] => 'yyclxxfr',
        IResourceCatalog::TYPE['YYCLXXZRR'] => 'yyclxxzrr',
        IResourceCatalog::TYPE['YYCPXXFR'] => 'yycpxxfr',
        IResourceCatalog::TYPE['YYCPXXZRR'] => 'yycpxxzrr',
        IResourceCatalog::TYPE['ZYCYZGXX'] => 'zycyzgxx',
        IResourceCatalog::TYPE['EJSHTYZDYJSDJCH'] => 'ejshtyzdyjsdjch',
        IResourceCatalog::TYPE['EJYDYXX'] => 'ejydyxx',
        IResourceCatalog::TYPE['JYJGXX'] => 'jyjgxx',
        IResourceCatalog::TYPE['QSJYXTXJGZZPXXX'] => 'qsjyxtxjgzzpxxx',
        IResourceCatalog::TYPE['QSJYXTXJJTPXXX'] => 'qsjyxtxjjtpxxx',
        IResourceCatalog::TYPE['QSTYXTFXFJJDCCJL'] => 'qstyxtfxfjjdccjl',
        IResourceCatalog::TYPE['SJSFXXXPGRDXX'] => 'sjsfxxxpgrdxx',
        IResourceCatalog::TYPE['SQEJCPYDJXX'] => 'sqejcpydjxx',
        IResourceCatalog::TYPE['YDYFZRYFFCYXFJDCFXX'] => 'ydyfzryffcyxfjdcfxx',
        IResourceCatalog::TYPE['GRRYXX'] => 'grryxx',
        IResourceCatalog::TYPE['GXJSQYRDXX'] => 'gxjsqyrdxx',
        IResourceCatalog::TYPE['JGRYXX'] => 'jgryxx',
        IResourceCatalog::TYPE['JXSCYJSCXLM'] => 'jxscyjscxlm',
        IResourceCatalog::TYPE['JXSXCTD'] => 'jxsxctd',
        IResourceCatalog::TYPE['JXSZCKJ'] => 'jxszckj',
        IResourceCatalog::TYPE['SGCJSYJZXRDXX'] => 'sgcjsyjzxrdxx',
        IResourceCatalog::TYPE['SJKJQYFHQRDXX'] => 'sjkjqyfhqrdxx',
        IResourceCatalog::TYPE['FYPLYZDHXPBAXX'] => 'fyplyzdhxpbaxx',
        IResourceCatalog::TYPE['SJSCJYDWAQSCBLJLHMDXX'] => 'sjscjydwaqscbljlhmdxx',
        IResourceCatalog::TYPE['SLSCJYDWAQSCBLJLHMDXX'] => 'slscjydwaqscbljlhmdxx',
        IResourceCatalog::TYPE['HLJJJY'] => 'hljjjy',
        IResourceCatalog::TYPE['JAQNWSJZ'] => 'jaqnwsjz',
        IResourceCatalog::TYPE['JASDJCQN'] => 'jasdjcqn',
        IResourceCatalog::TYPE['JASDJCQNTMJ'] => 'jasdjcqntmj',
        IResourceCatalog::TYPE['JASSDHYJGSJSXJQNJT'] => 'jassdhyjgsjsxjqnjt',
        IResourceCatalog::TYPE['JXQNWSJ'] => 'jxqnwsj',
        IResourceCatalog::TYPE['JXQNWSJZZ'] => 'jxqnwsjzz',
        IResourceCatalog::TYPE['QNGWNS'] => 'qngwns',
        IResourceCatalog::TYPE['QNWMH'] => 'qnwmh',
        IResourceCatalog::TYPE['QSNWQG'] => 'qsnwqg',
        IResourceCatalog::TYPE['QSNZYFWQK'] => 'qsnzyfwqk',
        IResourceCatalog::TYPE['QSWSHQTW'] => 'qswshqtw',
        IResourceCatalog::TYPE['QSWSHQTZZ'] => 'qswshqtzz',
        IResourceCatalog::TYPE['QSYXGQTGB'] => 'qsyxgqtgb',
        IResourceCatalog::TYPE['QSYXGQTY'] => 'qsyxgqty',
        IResourceCatalog::TYPE['QSYXSXDFDY'] => 'qsyxsxdfdy',
        IResourceCatalog::TYPE['QSYXSXDJT'] => 'qsyxsxdjt',
        IResourceCatalog::TYPE['QSYXSXDY'] => 'qsyxsxdy',
        IResourceCatalog::TYPE['YXFZFXZ'] => 'yxfzfxz',
        IResourceCatalog::TYPE['YXQNZYZ'] => 'yxqnzyz',
        IResourceCatalog::TYPE['YXQNZYZZZ'] => 'yxqnzyzzz',
        IResourceCatalog::TYPE['FFTQGJJXX'] => 'fftqgjjxx',
        IResourceCatalog::TYPE['JCKQYJYJYXYGLXX'] => 'jckqyjyjyxyglxx',
        IResourceCatalog::TYPE['QYHGZCXX'] => 'qyhgzcxx',
        IResourceCatalog::TYPE['QYXYGLXX'] => 'qyxyglxx',
        IResourceCatalog::TYPE['SFQYXX'] => 'sfqyxx',
        IResourceCatalog::TYPE['YQWJNGJJDK'] => 'yqwjngjjdk',
        IResourceCatalog::TYPE['DWJLXX'] => 'dwjlxx',
        IResourceCatalog::TYPE['LYLYNDGRJLXX'] => 'lylyndgrjlxx',
        IResourceCatalog::TYPE['LYLYNDJTJLXX'] => 'lylyndjtjlxx',
        IResourceCatalog::TYPE['QSRKNYJJPCXJJTJL'] => 'qsrknyjjpcxjjtjl',
        IResourceCatalog::TYPE['QSTJJTJLXX'] => 'qstjjtjlxx',
        IResourceCatalog::TYPE['XFZDDWJBXX'] => 'xfzddwjbxx',
        IResourceCatalog::TYPE['ZDHZYHMDXX'] => 'zdhzyhmdxx',
        IResourceCatalog::TYPE['SPYBNCPRZXX'] => 'spybncprzxx',
        IResourceCatalog::TYPE['GYSXX'] => 'gysxx',
        IResourceCatalog::TYPE['JXSZFCGJGGSXX'] => 'jxszfcgjggsxx',
        IResourceCatalog::TYPE['KJCYZGXX'] => 'kjcyzgxx',
        IResourceCatalog::TYPE['KJSWSDJXX'] => 'kjswsdjxx',
        IResourceCatalog::TYPE['ZCKJSXX'] => 'zckjsxx',
        IResourceCatalog::TYPE['ZFCGDLYHKXX'] => 'zfcgdlyhkxx',
        IResourceCatalog::TYPE['CZNXZJXWDHJJCRYMD'] => 'cznxzjxwdhjjcrymd',
        IResourceCatalog::TYPE['CZNXZJXWDSHHJJCJGMD'] => 'cznxzjxwdshhjjcjgmd',
        IResourceCatalog::TYPE['HBCYRYXX'] => 'hbcyryxx',
        IResourceCatalog::TYPE['QZQJSCSHQYMD'] => 'qzqjscshqymd',
        //@position
    );
}
