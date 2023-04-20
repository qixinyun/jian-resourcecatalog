<?php

namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['DYZGXX'] => 'DYZGXX',
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => 'QYGDZCTZXMHZHBA',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => 'QXTCHJBHJDXX',
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => 'PXSTYXHDJXX',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'HSZYZGZXX',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'JXSZLJDW',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'SLGCZBXX',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['PGJGXX'] => 'PGJGXX',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'YXZZDWJBGXX',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'SLYSXKZXX',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        // IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        // IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'JXMPCPXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => 'GRRYXXJTJ',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => 'GRRYXXGDJ',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        // IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'YSZYZCHBGZC',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'YSZYZGZXX',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'WSHJHSYWYHJCXX',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'YLHJSFWJGXX',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'JBYFKZJGXX',
        IResourceCatalog::TYPE['FYCRYJLXX'] => 'FYCRYJLXX',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'WSZYJSZGKSWJXX',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => 'QSWCXXXJDWBZ',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => 'JGRYXXSWGXJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['MBFQYML'] => 'MBFQYML',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'SHTTDJXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',
        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => 'TZXMBLJGGSXX',
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => 'TZXMMCDMPPXX',
        IResourceCatalog::TYPE['SFJDRXX'] => 'SFJDRXX',
        IResourceCatalog::TYPE['SFJDJGXX'] => 'SFJDJGXX',
        IResourceCatalog::TYPE['LSZYXX'] => 'LSZYXX',
        IResourceCatalog::TYPE['LSNDPJXX'] => 'LSNDPJXX',
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => 'LSSWSNDPJXX',
        IResourceCatalog::TYPE['SAJLVJQ'] => 'SAJLVJQ',
        IResourceCatalog::TYPE['BWGXX'] => 'BWGXX',
        IResourceCatalog::TYPE['WWSDXX'] => 'WWSDXX',
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => 'WWSDGMXSJLSX',
        IResourceCatalog::TYPE['QYSWJBDJXX'] => 'QYSWJBDJXX',
        IResourceCatalog::TYPE['NSXYDJPDXX'] => 'NSXYDJPDXX',
        IResourceCatalog::TYPE['QYQSGGXX'] => 'QYQSGGXX',
        IResourceCatalog::TYPE['FZCNSRXX'] => 'FZCNSRXX',
        IResourceCatalog::TYPE['LXSDJXX'] => 'LXSDJXX',
        IResourceCatalog::TYPE['GRYCJJBAXX'] => 'GRYCJJBAXX',
        IResourceCatalog::TYPE['XZJLXXZRR'] => 'XZJLXXZRR',
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => 'XZJLXXFRHQTZZ',
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => 'MZSHTTHMBFQYDW',
        IResourceCatalog::TYPE['QYJBXX'] => 'QYJBXX',
        IResourceCatalog::TYPE['SXBZXRXX'] => 'SXBZXRXX',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'ZDSSWFAJXX',
        IResourceCatalog::TYPE['HXLDGXXX'] => 'HXLDGXXX',
        IResourceCatalog::TYPE['SCAQBLJLHMD'] => 'SCAQBLJLHMD',
        IResourceCatalog::TYPE['YZSXWFQY'] => 'YZSXWFQY',
        IResourceCatalog::TYPE['HGSXQY'] => 'HGSXQY',
        IResourceCatalog::TYPE['HGGJRZ'] => 'HGGJRZ',
        IResourceCatalog::TYPE['ZZQSGBZHSFGDMD'] => 'ZZQSGBZHSFGDMD',
        IResourceCatalog::TYPE['ZZQCYBGCZLJMD'] => 'ZZQCYBGCZLJMD',
        IResourceCatalog::TYPE['ZZQYZYBGCMD'] => 'ZZQYZYBGCMD',
        IResourceCatalog::TYPE['SLJSSC'] => 'SLJSSC',
        IResourceCatalog::TYPE['LHCJFRHMD'] => 'LHCJFRHMD',
        IResourceCatalog::TYPE['LHJLFRHMD'] => 'LHJLFRHMD',
        IResourceCatalog::TYPE['XYSFSQ'] => 'XYSFSQ',
        IResourceCatalog::TYPE['TEST'] => 'TEST',
        IResourceCatalog::TYPE['C_AJASRMD'] => 'C_AJASRMD',
        IResourceCatalog::TYPE['C_AJNSR'] => 'C_AJNSR',
        IResourceCatalog::TYPE['C_SXBZXJG'] => 'C_SXBZXJG',
        IResourceCatalog::TYPE['P_VWEB_PERSON'] => 'P_VWEB_PERSON',
        IResourceCatalog::TYPE['C_JYZCX'] => 'C_JYZCX',
        IResourceCatalog::TYPE['C_NYLYJL'] => 'C_NYLYJL',
        IResourceCatalog::TYPE['C_SBHQJT'] => 'C_SBHQJT',
        IResourceCatalog::TYPE['DDMFSBHR'] => 'DDMFSBHR',
        IResourceCatalog::TYPE['NYLYGRJLXX'] => 'NYLYGRJLXX',
        IResourceCatalog::TYPE['P_JGJGBB'] => 'P_JGJGBB',
        IResourceCatalog::TYPE['P_SXBZXR'] => 'P_SXBZXR',
        IResourceCatalog::TYPE['P_YXSBHQS'] => 'P_YXSBHQS',
        IResourceCatalog::TYPE['C_DKJBXX'] => 'C_DKJBXX',
        IResourceCatalog::TYPE['C_DSSWDJXX'] => 'C_DSSWDJXX',
        IResourceCatalog::TYPE['C_ZFGJJ'] => 'C_ZFGJJ',
        IResourceCatalog::TYPE['DFJFJL_INFO'] => 'DFJFJL_INFO',
        IResourceCatalog::TYPE['P_GJJDKXX'] => 'P_GJJDKXX',
        IResourceCatalog::TYPE['P_GRDBJFF_INFO'] => 'P_GRDBJFF_INFO',
        IResourceCatalog::TYPE['P_SFQJXX'] => 'P_SFQJXX',
        IResourceCatalog::TYPE['P_SJYJT_XSXJXX'] => 'P_SJYJT_XSXJXX',
        IResourceCatalog::TYPE['P_VWEB_LOAN_INFO'] => 'P_VWEB_LOAN_INFO',
        IResourceCatalog::TYPE['P_WATER_INFO'] => 'P_WATER_INFO',
        IResourceCatalog::TYPE['C_ESFBA'] => 'C_ESFBA',
        IResourceCatalog::TYPE['P_FDDBR'] => 'P_FDDBR',
        IResourceCatalog::TYPE['DFXBMDXX'] => 'DFXBMDXX',
        IResourceCatalog::TYPE['DFXRMDXX'] => 'DFXRMDXX',
        IResourceCatalog::TYPE['DFXYF'] => 'DFXYF',
        IResourceCatalog::TYPE['GJJGRDKXX'] => 'GJJGRDKXX',
        IResourceCatalog::TYPE['GJJGRJCXX'] => 'GJJGRJCXX',
        IResourceCatalog::TYPE['NSXX'] => 'NSXX',
        IResourceCatalog::TYPE['QSXX'] => 'QSXX',
        IResourceCatalog::TYPE['RYJLXX'] => 'RYJLXX',
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] => 'ZRRGYSYJFXX',
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] => 'ZRRTQGYSYFXX',
        IResourceCatalog::TYPE['GJJJCXX'] => 'GJJJCXX',
        IResourceCatalog::TYPE['FRGYSYJFXX'] => 'FRGYSYJFXX',
        IResourceCatalog::TYPE['FRHEIMD'] => 'FRHEIMD',
        IResourceCatalog::TYPE['FRHONGMD'] => 'FRHONGMD',
        IResourceCatalog::TYPE['FRNSXX'] => 'FRNSXX',
        IResourceCatalog::TYPE['FRQSXX'] => 'FRQSXX',
        IResourceCatalog::TYPE['FRTQGYSYFXX'] => 'FRTQGYSYFXX',
        IResourceCatalog::TYPE['RYBZXX'] => 'RYBZXX',
        IResourceCatalog::TYPE['CCWLJJLXX'] => 'CCWLJJLXX',
        IResourceCatalog::TYPE['CCWLYQXX'] => 'CCWLYQXX',
        IResourceCatalog::TYPE['FRYDJFXX'] => 'FRYDJFXX',
        IResourceCatalog::TYPE['FRYDTQFXX'] => 'FRYDTQFXX',
        IResourceCatalog::TYPE['FRYQJFXX'] => 'FRYQJFXX',
        IResourceCatalog::TYPE['FRYQTQFXX'] => 'FRYQTQFXX',
        IResourceCatalog::TYPE['FRYSJFXX'] => 'FRYSJFXX',
        IResourceCatalog::TYPE['FRYSTQFXX'] => 'FRYSTQFXX',
        IResourceCatalog::TYPE['ZRRYDJFXX'] => 'ZRRYDJFXX',
        IResourceCatalog::TYPE['ZRRYDTQFXX'] => 'ZRRYDTQFXX',
        IResourceCatalog::TYPE['ZRRYQJFXX'] => 'ZRRYQJFXX',
        IResourceCatalog::TYPE['ZRRYQTQFXX'] => 'ZRRYQTQFXX',
        IResourceCatalog::TYPE['ZRRYSJFXX'] => 'ZRRYSJFXX',
        IResourceCatalog::TYPE['ZRRYSTQFXX'] => 'ZRRYSTQFXX',
        IResourceCatalog::TYPE['C_TJLYQYJB'] => 'C_TJLYQYJB',
        IResourceCatalog::TYPE['C_YYCL'] => 'C_YYCL',
        IResourceCatalog::TYPE['P_CAR_INFO'] => 'P_CAR_INFO',
        IResourceCatalog::TYPE['P_DZDY_INFO'] => 'P_DZDY_INFO',
        IResourceCatalog::TYPE['P_GET_BZXZF'] => 'P_GET_BZXZF',
        IResourceCatalog::TYPE['P_HSZYZ'] => 'P_HSZYZ',
        IResourceCatalog::TYPE['P_TEZYRY'] => 'P_TEZYRY',
        IResourceCatalog::TYPE['C_AQSCBZHQY'] => 'C_AQSCBZHQY',
        // IResourceCatalog::TYPE['C_CHZZDW'] => 'C_CHZZDW',
        // IResourceCatalog::TYPE['C_CKXKZ'] => 'C_CKXKZ',
        IResourceCatalog::TYPE['C_GXJSQYRD'] => 'C_GXJSQYRD',
        IResourceCatalog::TYPE['C_JYJG'] => 'C_JYJG',
        IResourceCatalog::TYPE['P_EJTYZDY_INFO'] => 'P_EJTYZDY_INFO',
        IResourceCatalog::TYPE['P_EJYDY_INFO'] => 'P_EJYDY_INFO',
        IResourceCatalog::TYPE['C_MBFQY_INFO'] => 'C_MBFQY_INFO',
        IResourceCatalog::TYPE['C_MBFQYDWNJ'] => 'C_MBFQYDWNJ',
        IResourceCatalog::TYPE['C_SHTTNJ_INFO'] => 'C_SHTTNJ_INFO',
        IResourceCatalog::TYPE['P_GRHYDJ_INFO'] => 'P_GRHYDJ_INFO',
        IResourceCatalog::TYPE['C_QXZHFYZDDW'] => 'C_QXZHFYZDDW',
        IResourceCatalog::TYPE['C_QYDSJBDJ'] => 'C_QYDSJBDJ',
        IResourceCatalog::TYPE['C_SSZDWFAJ'] => 'C_SSZDWFAJ',
        IResourceCatalog::TYPE['C_QYDX_INFO'] => 'C_QYDX_INFO',
        IResourceCatalog::TYPE['C_QYGDTZZ_INFO'] => 'C_QYGDTZZ_INFO',
        IResourceCatalog::TYPE['C_QYYCML_INFO'] => 'C_QYYCML_INFO',
        IResourceCatalog::TYPE['C_YLQXJYQY'] => 'C_YLQXJYQY',
        IResourceCatalog::TYPE['P_ZRRGD_INFO'] => 'P_ZRRGD_INFO',
        IResourceCatalog::TYPE['C_SFJFJL'] => 'C_SFJFJL',
        IResourceCatalog::TYPE['C_SYDWNDBG'] => 'C_SYDWNDBG',
        IResourceCatalog::TYPE['C_SYDW_INFO'] => 'C_SYDW_INFO',
        IResourceCatalog::TYPE['C_YYCB'] => 'C_YYCB',
        IResourceCatalog::TYPE['DLSZYZZJL_INFO'] => 'DLSZYZZJL_INFO',
        IResourceCatalog::TYPE['FLFWGZZ_INFO'] => 'FLFWGZZ_INFO',
        IResourceCatalog::TYPE['LSZYZG_INFO'] => 'LSZYZG_INFO',
        IResourceCatalog::TYPE['SFJDCYRY_INFO'] => 'SFJDCYRY_INFO',
        IResourceCatalog::TYPE['LDBZNDSMSC_INFO'] => 'LDBZNDSMSC_INFO',
        IResourceCatalog::TYPE['LDYG_INFO'] => 'LDYG_INFO',
        IResourceCatalog::TYPE['P_JZHJCWFJL'] => 'P_JZHJCWFJL',
        IResourceCatalog::TYPE['P_YSZYZ'] => 'P_YSZYZ',
        IResourceCatalog::TYPE['WMDW_INFO'] => 'WMDW_INFO',
        IResourceCatalog::TYPE['GRDKHKMX'] => 'GRDKHKMX',
        IResourceCatalog::TYPE['GRJCJCXX'] => 'GRJCJCXX',
        IResourceCatalog::TYPE['GRJCMX'] => 'GRJCMX',
        IResourceCatalog::TYPE['GRMXXX'] => 'GRMXXX',
        IResourceCatalog::TYPE['JASRKJBXX'] => 'JASRKJBXX',
        // IResourceCatalog::TYPE['C_GTZYLYRY'] => 'C_GTZYLYRY',
        IResourceCatalog::TYPE['C_HBHMDQY'] => 'C_HBHMDQY',
        IResourceCatalog::TYPE['P_GRHBRYXX'] => 'P_GRHBRYXX',
        IResourceCatalog::TYPE['C_JGJGXJJT'] => 'C_JGJGXJJT',
        IResourceCatalog::TYPE['P_JGWMG'] => 'P_JGWMG',
        IResourceCatalog::TYPE['C_JGRY'] => 'C_JGRY',
        IResourceCatalog::TYPE['C_JGRYXX'] => 'C_JGRYXX',
        IResourceCatalog::TYPE['C_QSJYXTXJJT'] => 'C_QSJYXTXJJT',
        IResourceCatalog::TYPE['P_GUA_GZZ_INFO'] => 'P_GUA_GZZ_INFO',
        IResourceCatalog::TYPE['DGZJGJL_INFO'] => 'DGZJGJL_INFO',
        IResourceCatalog::TYPE['DLSSWSJL_INFO'] => 'DLSSWSJL_INFO',
        IResourceCatalog::TYPE['DSFJDJGJL_INFO'] => 'DSFJDJGJL_INFO',
        IResourceCatalog::TYPE['FDDBRXX'] => 'FDDBRXX',
        IResourceCatalog::TYPE['JYJCJGZZRDXX'] => 'JYJCJGZZRDXX',
        IResourceCatalog::TYPE['QYBGXX'] => 'QYBGXX',
        IResourceCatalog::TYPE['QYDSJSBNXX'] => 'QYDSJSBNXX',
        IResourceCatalog::TYPE['SCZTSHTZXYGSXX'] => 'SCZTSHTZXYGSXX',
        IResourceCatalog::TYPE['SPSCQYXX'] => 'SPSCQYXX',
        IResourceCatalog::TYPE['TZSBAZGZWXDWZGXKZXX'] => 'TZSBAZGZWXDWZGXKZXX',
        IResourceCatalog::TYPE['YDSYLRQCZDWZGXKXX'] => 'YDSYLRQCZDWZGXKXX',
        IResourceCatalog::TYPE['YLQXJYQYXX'] => 'YLQXJYQYXX',
        IResourceCatalog::TYPE['YLQXSCQYXX'] => 'YLQXSCQYXX',
        IResourceCatalog::TYPE['DLYGJGXX'] => 'DLYGJGXX',
        IResourceCatalog::TYPE['DLYSJYZCFXX'] => 'DLYSJYZCFXX',
        IResourceCatalog::TYPE['DLYSQYRYXX'] => 'DLYSQYRYXX',
        IResourceCatalog::TYPE['GLJSSCQYXX'] => 'GLJSSCQYXX',
        IResourceCatalog::TYPE['JYXDLKYYSJSYHMD'] => 'JYXDLKYYSJSYHMD',
        IResourceCatalog::TYPE['SLJSSCQYXX'] => 'SLJSSCQYXX',
        IResourceCatalog::TYPE['SLYGJGXX'] => 'SLYGJGXX',
        IResourceCatalog::TYPE['SLYSQYRYXX'] => 'SLYSQYRYXX',
        IResourceCatalog::TYPE['YYCLXXFR'] => 'YYCLXXFR',
        IResourceCatalog::TYPE['YYCLXXZRR'] => 'YYCLXXZRR',
        IResourceCatalog::TYPE['YYCPXXFR'] => 'YYCPXXFR',
        IResourceCatalog::TYPE['YYCPXXZRR'] => 'YYCPXXZRR',
        IResourceCatalog::TYPE['ZYCYZGXX'] => 'ZYCYZGXX',
        IResourceCatalog::TYPE['EJSHTYZDYJSDJCH'] => 'EJSHTYZDYJSDJCH',
        IResourceCatalog::TYPE['EJYDYXX'] => 'EJYDYXX',
        IResourceCatalog::TYPE['JYJGXX'] => 'JYJGXX',
        IResourceCatalog::TYPE['QSJYXTXJGZZPXXX'] => 'QSJYXTXJGZZPXXX',
        IResourceCatalog::TYPE['QSJYXTXJJTPXXX'] => 'QSJYXTXJJTPXXX',
        IResourceCatalog::TYPE['QSTYXTFXFJJDCCJL'] => 'QSTYXTFXFJJDCCJL',
        IResourceCatalog::TYPE['SJSFXXXPGRDXX'] => 'SJSFXXXPGRDXX',
        IResourceCatalog::TYPE['SQEJCPYDJXX'] => 'SQEJCPYDJXX',
        IResourceCatalog::TYPE['YDYFZRYFFCYXFJDCFXX'] => 'YDYFZRYFFCYXFJDCFXX',
        IResourceCatalog::TYPE['GRRYXX'] => 'GRRYXX',
        IResourceCatalog::TYPE['GXJSQYRDXX'] => 'GXJSQYRDXX',
        IResourceCatalog::TYPE['JXSCYJSCXLM'] => 'JXSCYJSCXLM',
        IResourceCatalog::TYPE['JXSXCTD'] => 'JXSXCTD',
        IResourceCatalog::TYPE['JXSZCKJ'] => 'JXSZCKJ',
        IResourceCatalog::TYPE['SGCJSYJZXRDXX'] => 'SGCJSYJZXRDXX',
        IResourceCatalog::TYPE['SJKJQYFHQRDXX'] => 'SJKJQYFHQRDXX',
        IResourceCatalog::TYPE['FYPLYZDHXPBAXX'] => 'FYPLYZDHXPBAXX',
        IResourceCatalog::TYPE['SJSCJYDWAQSCBLJLHMDXX'] => 'SJSCJYDWAQSCBLJLHMDXX',
        IResourceCatalog::TYPE['SLSCJYDWAQSCBLJLHMDXX'] => 'SLSCJYDWAQSCBLJLHMDXX',
        IResourceCatalog::TYPE['HLJJJY'] => 'HLJJJY',
        IResourceCatalog::TYPE['JAQNWSJZ'] => 'JAQNWSJZ',
        IResourceCatalog::TYPE['JASDJCQN'] => 'JASDJCQN',
        IResourceCatalog::TYPE['JASDJCQNTMJ'] => 'JASDJCQNTMJ',
        IResourceCatalog::TYPE['JASSDHYJGSJSXJQNJT'] => 'JASSDHYJGSJSXJQNJT',
        IResourceCatalog::TYPE['JXQNWSJ'] => 'JXQNWSJ',
        IResourceCatalog::TYPE['JXQNWSJZZ'] => 'JXQNWSJZZ',
        IResourceCatalog::TYPE['QNGWNS'] => 'QNGWNS',
        IResourceCatalog::TYPE['QNWMH'] => 'QNWMH',
        IResourceCatalog::TYPE['QSNWQG'] => 'QSNWQG',
        IResourceCatalog::TYPE['QSNZYFWQK'] => 'QSNZYFWQK',
        IResourceCatalog::TYPE['QSWSHQTW'] => 'QSWSHQTW',
        IResourceCatalog::TYPE['QSWSHQTZZ'] => 'QSWSHQTZZ',
        IResourceCatalog::TYPE['QSYXGQTGB'] => 'QSYXGQTGB',
        IResourceCatalog::TYPE['QSYXGQTY'] => 'QSYXGQTY',
        IResourceCatalog::TYPE['QSYXSXDFDY'] => 'QSYXSXDFDY',
        IResourceCatalog::TYPE['QSYXSXDJT'] => 'QSYXSXDJT',
        IResourceCatalog::TYPE['QSYXSXDY'] => 'QSYXSXDY',
        IResourceCatalog::TYPE['YXFZFXZ'] => 'YXFZFXZ',
        IResourceCatalog::TYPE['YXQNZYZ'] => 'YXQNZYZ',
        IResourceCatalog::TYPE['YXQNZYZZZ'] => 'YXQNZYZZZ',
        IResourceCatalog::TYPE['FFTQGJJXX'] => 'FFTQGJJXX',
        IResourceCatalog::TYPE['JCKQYJYJYXYGLXX'] => 'JCKQYJYJYXYGLXX',
        IResourceCatalog::TYPE['QYHGZCXX'] => 'QYHGZCXX',
        IResourceCatalog::TYPE['QYXYGLXX'] => 'QYXYGLXX',
        IResourceCatalog::TYPE['SFQYXX'] => 'SFQYXX',
        IResourceCatalog::TYPE['YQWJNGJJDK'] => 'YQWJNGJJDK',
        IResourceCatalog::TYPE['DWJLXX'] => 'DWJLXX',
        IResourceCatalog::TYPE['LYLYNDGRJLXX'] => 'LYLYNDGRJLXX',
        IResourceCatalog::TYPE['LYLYNDJTJLXX'] => 'LYLYNDJTJLXX',
        IResourceCatalog::TYPE['QSRKNYJJPCXJJTJL'] => 'QSRKNYJJPCXJJTJL',
        IResourceCatalog::TYPE['QSTJJTJLXX'] => 'QSTJJTJLXX',
        IResourceCatalog::TYPE['XFZDDWJBXX'] => 'XFZDDWJBXX',
        IResourceCatalog::TYPE['ZDHZYHMDXX'] => 'ZDHZYHMDXX',
        IResourceCatalog::TYPE['SPYBNCPRZXX'] => 'SPYBNCPRZXX',
        IResourceCatalog::TYPE['GYSXX'] => 'GYSXX',
        IResourceCatalog::TYPE['JXSZFCGJGGSXX'] => 'JXSZFCGJGGSXX',
        IResourceCatalog::TYPE['KJCYZGXX'] => 'KJCYZGXX',
        IResourceCatalog::TYPE['KJSWSDJXX'] => 'KJSWSDJXX',
        IResourceCatalog::TYPE['ZCKJSXX'] => 'ZCKJSXX',
        IResourceCatalog::TYPE['ZFCGDLYHKXX'] => 'ZFCGDLYHKXX',
        IResourceCatalog::TYPE['CZNXZJXWDHJJCRYMD'] => 'CZNXZJXWDHJJCRYMD',
        IResourceCatalog::TYPE['CZNXZJXWDSHHJJCJGMD'] => 'CZNXZJXWDSHHJJCJGMD',
        IResourceCatalog::TYPE['HBCYRYXX'] => 'HBCYRYXX',
        IResourceCatalog::TYPE['QZQJSCSHQYMD'] => 'QZQJSCSHQYMD',
        IResourceCatalog::TYPE['JXSXXWXQYCYCXSFJDSBRDXX'] => 'JXSXXWXQYCYCXSFJDSBRDXX',
        IResourceCatalog::TYPE['JXSZJTXZXQYXX'] => 'JXSZJTXZXQYXX',
        IResourceCatalog::TYPE['JXSZXQYGGFWSFPTRDXX'] => 'JXSZXQYGGFWSFPTRDXX',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => 'SJQYJSZXRDXX',
        IResourceCatalog::TYPE['SYDDSCQYSPXX'] => 'SYDDSCQYSPXX',
        IResourceCatalog::TYPE['ZDCYHCXXMXX'] => 'ZDCYHCXXMXX',
        IResourceCatalog::TYPE['CHZZDWXX'] => 'CHZZDWXX',
        IResourceCatalog::TYPE['CKXKZXX'] => 'CKXKZXX',
        IResourceCatalog::TYPE['GRRYXXSGZW'] => 'GRRYXXSGZW',
        IResourceCatalog::TYPE['GTZYLYRYXX'] => 'GTZYLYRYXX',
        IResourceCatalog::TYPE['GYQYJBXX'] => 'GYQYJBXX',
        IResourceCatalog::TYPE['KCZYKCXKZXX'] => 'KCZYKCXKZXX',
        IResourceCatalog::TYPE['KYQJYXX'] => 'KYQJYXX',
        IResourceCatalog::TYPE['QYKHXX'] => 'QYKHXX',
        IResourceCatalog::TYPE['QYRYXXSGZW'] => 'QYRYXXSGZW',
        IResourceCatalog::TYPE['TDJYXXFR'] => 'TDJYXXFR',
        IResourceCatalog::TYPE['TDJYXXZRR'] => 'TDJYXXZRR',
        IResourceCatalog::TYPE['TQNMGGZQYXX'] => 'TQNMGGZQYXX',
        IResourceCatalog::TYPE['RLZYJGNJXX'] => 'RLZYJGNJXX',
        IResourceCatalog::TYPE['QYCBQJXX'] => 'QYCBQJXX',
        IResourceCatalog::TYPE['GRRYXXSRSJ'] => 'GRRYXXSRSJ',
        IResourceCatalog::TYPE['YANGLAOBXXX'] => 'YANGLAOBXXX',
        IResourceCatalog::TYPE['GRBXSXXX'] => 'GRBXSXXX',
        IResourceCatalog::TYPE['ZDLDBZWFXWSHGBXX'] => 'ZDLDBZWFXWSHGBXX',
        IResourceCatalog::TYPE['SJLDBZCXSFDWRDXX'] => 'SJLDBZCXSFDWRDXX',
        IResourceCatalog::TYPE['LDYGXX'] => 'LDYGXX',
        IResourceCatalog::TYPE['SYBXXX_NEW'] => 'SYBXXX_NEW',
        IResourceCatalog::TYPE['SBQYXX_NEW'] => 'SBQYXX_NEW',
        IResourceCatalog::TYPE['YZTQSBXXHMD_NEW'] => 'YZTQSBXXHMD_NEW',
        IResourceCatalog::TYPE['BWGZZXX'] => 'BWGZZXX',
        IResourceCatalog::TYPE['DZDYZXX'] => 'DZDYZXX',
        IResourceCatalog::TYPE['GRRYXXSGBDST'] => 'GRRYXXSGBDST',
        IResourceCatalog::TYPE['JGRYXX_NEW'] => 'JGRYXX_NEW',
        IResourceCatalog::TYPE['LXSDJXX_NEW'] => 'LXSDJXX_NEW',
        IResourceCatalog::TYPE['SHFRCSSXHMD'] => 'SHFRCSSXHMD',
        IResourceCatalog::TYPE['SWLYCXJYSFQYXX'] => 'SWLYCXJYSFQYXX',
        IResourceCatalog::TYPE['WSTZQYXX'] => 'WSTZQYXX',
        IResourceCatalog::TYPE['HQGATGMSYDJXX'] => 'HQGATGMSYDJXX',
        IResourceCatalog::TYPE['JZQJQYZGXX'] => 'JZQJQYZGXX',
        IResourceCatalog::TYPE['MBFQYDWJBXX'] => 'MBFQYDWJBXX',
        IResourceCatalog::TYPE['MBFQYDWNJXX'] => 'MBFQYDWNJXX',
        IResourceCatalog::TYPE['RYXX'] => 'RYXX',
        IResourceCatalog::TYPE['SHTTJBXX'] => 'SHTTJBXX',
        IResourceCatalog::TYPE['SHTTNJXX'] => 'SHTTNJXX',
        IResourceCatalog::TYPE['SHZZBZXX'] => 'SHZZBZXX',
        IResourceCatalog::TYPE['DZQXGZZZCTCGXDDWJLXX'] => 'DZQXGZZZCTCGXDDWJLXX',
        IResourceCatalog::TYPE['DZQXGZZZCTCGXDGRJLXX'] => 'DZQXGZZZCTCGXDGRJLXX',
        IResourceCatalog::TYPE['FLJCJGZZXX'] => 'FLJCJGZZXX',
        IResourceCatalog::TYPE['QSFLGCJCZYJSRYZG'] => 'QSFLGCJCZYJSRYZG',
        IResourceCatalog::TYPE['QXHYBZZXQKJDXX'] => 'QXHYBZZXQKJDXX',
        IResourceCatalog::TYPE['QXTCHJBHJDXXFR'] => 'QXTCHJBHJDXXFR',
        IResourceCatalog::TYPE['QXTCHJBHJDXXGR'] => 'QXTCHJBHJDXXGR',
        IResourceCatalog::TYPE['YDJXQHKXXRZDJSXMWLZ'] => 'YDJXQHKXXRZDJSXMWLZ',
        IResourceCatalog::TYPE['LDMFPXJG'] => 'LDMFPXJG',
        IResourceCatalog::TYPE['WFJXSCWGKTLGD'] => 'WFJXSCWGKTLGD',
        IResourceCatalog::TYPE['WFJXSJTHTTLGD'] => 'WFJXSJTHTTLGD',
        IResourceCatalog::TYPE['WFJXSQYGZJTXSTLGD'] => 'WFJXSQYGZJTXSTLGD',
        IResourceCatalog::TYPE['WFJXSSSGHFBFGD'] => 'WFJXSSSGHFBFGD',
        IResourceCatalog::TYPE['WFJXSZGDBDHTLGD'] => 'WFJXSZGDBDHTLGD',
        IResourceCatalog::TYPE['DDMFYSBHRXX'] => 'DDMFYSBHRXX',
        IResourceCatalog::TYPE['WMDWXX'] => 'WMDWXX',
        IResourceCatalog::TYPE['WMJTXX'] => 'WMJTXX',
        IResourceCatalog::TYPE['WMXYXX'] => 'WMXYXX',
        IResourceCatalog::TYPE['DGZJGJLXX'] => 'DGZJGJLXX',
        IResourceCatalog::TYPE['DGZRYJLXX'] => 'DGZRYJLXX',
        IResourceCatalog::TYPE['DLSSWSJLXX'] => 'DLSSWSJLXX',
        IResourceCatalog::TYPE['DLSZYZGZJLXX'] => 'DLSZYZGZJLXX',
        IResourceCatalog::TYPE['DSFJDJGJLXX'] => 'DSFJDJGJLXX',
        IResourceCatalog::TYPE['DSFJDRYJLXX'] => 'DSFJDRYJLXX',
        IResourceCatalog::TYPE['GJTYFLZYZGKSWJXWCLXX'] => 'GJTYFLZYZGKSWJXWCLXX',
        IResourceCatalog::TYPE['GZJGJBXX_NEW'] => 'GZJGJBXX_NEW',
        IResourceCatalog::TYPE['GZYXX_NEW'] => 'GZYXX_NEW',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX_NEW'] => 'JCFLFWGZZJBXX_NEW',
        IResourceCatalog::TYPE['JCFLFWGZZJLQKXX'] => 'JCFLFWGZZJLQKXX',
        IResourceCatalog::TYPE['JCFLFWSJLQKXX'] => 'JCFLFWSJLQKXX',
        IResourceCatalog::TYPE['JCFLFWSXX_NEW'] => 'JCFLFWSXX_NEW',
        IResourceCatalog::TYPE['LSSWSXX_NEW'] => 'LSSWSXX_NEW',
        IResourceCatalog::TYPE['LSZYZGZXX_NEW'] => 'LSZYZGZXX_NEW',
        IResourceCatalog::TYPE['SFJDJGDJXX_NEW'] => 'SFJDJGDJXX_NEW',
        IResourceCatalog::TYPE['DFXX'] => 'DFXX',
        IResourceCatalog::TYPE['RQFXX'] => 'RQFXX',
        IResourceCatalog::TYPE['SFXX'] => 'SFXX',
        IResourceCatalog::TYPE['XZCJ'] => 'XZCJ',
        IResourceCatalog::TYPE['XZJDJC'] => 'XZJDJC',
        IResourceCatalog::TYPE['XZJL'] => 'XZJL',
        IResourceCatalog::TYPE['XZQR'] => 'XZQR',
        IResourceCatalog::TYPE['XZQZ'] => 'XZQZ',
        IResourceCatalog::TYPE['FZCNSHXX'] => 'FZCNSHXX',
        IResourceCatalog::TYPE['NSXX_NEW'] => 'NSXX_NEW',
        IResourceCatalog::TYPE['NSXYDJXX'] => 'NSXYDJXX',
        IResourceCatalog::TYPE['QSXX_NEW'] => 'QSXX_NEW',
        IResourceCatalog::TYPE['QYMXBDCDJQKXX'] => 'QYMXBDCDJQKXX',
        IResourceCatalog::TYPE['QYMXFCDYXX'] => 'QYMXFCDYXX',
        IResourceCatalog::TYPE['KJYFXX'] => 'KJYFXX',
        IResourceCatalog::TYPE['GRTQGJJMX'] => 'GRTQGJJMX',
        IResourceCatalog::TYPE['JCGJJDWXX'] => 'JCGJJDWXX',
        IResourceCatalog::TYPE['JASGRCBXX'] => 'JASGRCBXX',
        IResourceCatalog::TYPE['JASGRZHXX'] => 'JASGRZHXX',
        IResourceCatalog::TYPE['JASYBJYBCBJTXX'] => 'JASYBJYBCBJTXX',
        IResourceCatalog::TYPE['JASYBJYBCBRYXX'] => 'JASYBJYBCBRYXX',
        IResourceCatalog::TYPE['JASYBJYBKXX'] => 'JASYBJYBKXX',
        IResourceCatalog::TYPE['QYFRGGXYZHPJJG'] => 'QYFRGGXYZHPJJG',
        IResourceCatalog::TYPE['GWYXYXX'] => 'GWYXYXX',
        //@position
    );
}
