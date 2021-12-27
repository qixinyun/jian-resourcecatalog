<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'QYYCMLXX' => 3,
        'SXQYHMD' => 4,
        'DYZGXX' => 5,
        'QYGDZCTZXMHZHBA' => 6,
        'ZFCGDLJGXX' => 7,
        'QYGSZXXX' => 8,
        'AJNSRXX' => 9,
        'QYDSXZCFXX' => 10,
        'YSCRJZJJJZGRDXX' => 11,
        'SFJDJGCYRYZGXX' => 12,
        'QXTCHJBHJDXX' => 13,
        'PXSTYXHDJXX' => 14,
        'HSZYZGZXX' => 15,
        'JGJCDXZJL' => 16,
        'JXSZLJDW' => 17,
        'ZLJCQYXX' => 18,
        'SLGCZBXX' => 19,
        'ESCJDPGJGHZZS' => 20,
        'PGJGXX' => 21,
        'DTJXJGRXX' => 22,
        'YXZZDWJBGXX' => 23,
        'SLYSXKZXX' => 24,
        'ZYJNZSXX' => 25,
        'QYRYXX' => 26,
        'SHZZNJXX' => 27,
        'YLBXXX' => 28,
        'TJDCDXML' => 29,
        'JDCWFXX' => 30,
        'GTGSHXX' => 31,
        'CMQYSBXX' => 32,
        'YPLSQYXX' => 33,
        'YZTQSBXXHMD' => 34,
        'JGRYXX' => 35,
        'SPYPTSJBJLGR' => 36,
        'SPYPTSJBJLDW' => 37,
        'JXMPCPXX' => 38,
        'JSZGXX' => 39,
        'SJYXXS' => 40,
        'SYBXXX' => 41,
        'SJJXMXX' => 42,
        'JYJGXINXI' => 43,
        'GRRYXXJYJ' => 44,
        'GRRYXXJTJ' => 45,
        'GRRYXXGDJ' => 46,
        'GRRYXXMZJ' => 47,
        'SBQYXX' => 48,
        'SFJDJGDJXX' => 49,
        'GZJGJBXX' => 50,
        'GZYXX' => 51,
        'JCFLFWSXX' => 52,
        'JCFLFWGZZJBXX' => 53,
        'LSSWSXX' => 54,
        'LSZYZGZXX' => 55,
        'GZRYXX' => 56,
        'YSZYZCHBGZC' => 57,
        'YSZYZGZXX' => 58,
        'WSHJHSYWYHJCXX' => 59,
        'YLHJSFWJGXX' => 60,
        'JBYFKZJGXX' => 61,
        'FYCRYJLXX' => 62,
        'WSZYJSZGKSWJXX' => 63,
        'QSWCXXXJDWBZ' => 64,
        'YZTQNMGGZHMD' => 65,
        'JGRYXXSWGXJ' => 66,
        'JGRYXXSJYJ' => 67,
        'JGRYXXSSFJ' => 68,
        'MBFQYML' => 69,
        'SHTTDJXX' => 70,
        'QYZXXX' => 71,
        'QYDXXX' => 72,
        'CCJCJGXX' => 73,
        'TZXMBLJGGSXX' => 74,
        'TZXMMCDMPPXX' => 75,
        'SFJDRXX' => 76,
        'SFJDJGXX' => 77,
        'LSZYXX' => 78,
        'LSNDPJXX' => 79,
        'LSSWSNDPJXX' => 80,
        'SAJLVJQ' => 81,
        'BWGXX' => 82,
        'WWSDXX' => 83,
        'WWSDGMXSJLSX' => 84,
        'QYSWJBDJXX' => 85,
        'NSXYDJPDXX' => 86,
        'QYQSGGXX' => 87,
        'FZCNSRXX'=> 88,
        'LXSDJXX' => 89,
        'GRYCJJBAXX' => 90,
        'XZJLXXZRR' => 91,
        'XZJLXXFRHQTZZ' => 92,
        'MZSHTTHMBFQYDW' => 93,
        'QYJBXX' => 94,
        'SXBZXRXX' => 95,
        'ZDSSWFAJXX' => 96,
        'HXLDGXXX' => 97,
        'SCAQBLJLHMD' => 98,
        'YZSXWFQY' => 99,
        'HGSXQY' => 100,
        'HGGJRZ' => 101,
        'ZZQSGBZHSFGDMD' => 102,
        'ZZQCYBGCZLJMD' => 103,
        'ZZQYZYBGCMD' => 104,
        'SLJSSC' => 105,
        'LHCJFRHMD'=>106,
        'LHJLFRHMD'=>107,
        'XYSFSQ'=>108,
        'C_AJASRMD'=>109,
        'C_AJNSR'=>110,
        'C_SXBZXJG'=>111,
        'P_VWEB_PERSON'=>112,
        'C_JYZCX'=>113,
        'C_NYLYJL'=>114,
        'C_SBHQJT'=>115,
        'DDMFSBHR'=>116,
        'NYLYGRJLXX'=>117,
        'P_JGJGBB'=>118,
        'P_SXBZXR'=>119,
        'P_YXSBHQS'=>120,
        'C_DKJBXX'=>121,
        'C_DSSWDJXX'=>122,
        'C_ZFGJJ'=>123,
        'DFJFJL_INFO'=>124,
        'P_GJJDKXX'=>125,
        'P_GRDBJFF_INFO'=>126,
        'P_SFQJXX'=>127,
        'P_SJYJT_XSXJXX'=>128,
        'P_VWEB_LOAN_INFO'=>129,
        'P_WATER_INFO'=>130,
        'C_ESFBA'=>131,
        'P_FDDBR'=>132,
'DFXBMDXX'=>133,
'DFXRMDXX'=>134,
'DFXYF'=>135,
'GJJGRDKXX'=>136,
'GJJGRJCXX'=>137,
'NSXX'=>138,
'QSXX'=>139,
'RYJLXX'=>140,
'ZRRGYSYJFXX'=>141,
'ZRRTQGYSYFXX'=>142,
'GJJJCXX'=>143,
'FRGYSYJFXX'=>144,
'FRHEIMD'=>145,
'FRHONGMD'=>146,
'FRNSXX'=>147,
'FRQSXX'=>148,
'FRTQGYSYFXX'=>149,
'RYBZXX'=>150,
'CCWLJJLXX'=>151,
'CCWLYQXX'=>152,
'FRYDJFXX'=>153,
'FRYDTQFXX'=>154,
'FRYQJFXX'=>155,
'FRYQTQFXX'=>156,
'FRYSJFXX'=>157,
'FRYSTQFXX'=>158,
'ZRRYDJFXX'=>159,
'ZRRYDTQFXX'=>160,
'ZRRYQJFXX'=>161,
'ZRRYQTQFXX'=>162,
'ZRRYSJFXX'=>163,
'ZRRYSTQFXX'=>164,
        //@position_type_165
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['DFXRMDXX'],
            self::TYPE['DFXYF'],
            self::TYPE['RYJLXX'],
            self::TYPE['FRHONGMD'],
            self::TYPE['RYBZXX']
        ),
        IUserGroup::ID['SFGW'] => array(self::TYPE['ZRRYSTQFXX'],self::TYPE['ZRRYSJFXX'],self::TYPE['ZRRYQTQFXX'],self::TYPE['ZRRYQJFXX'],self::TYPE['ZRRYDTQFXX'],self::TYPE['ZRRYDJFXX'],self::TYPE['FRYSTQFXX'],self::TYPE['FRYSJFXX'],self::TYPE['FRYQTQFXX'],self::TYPE['FRYQJFXX'],self::TYPE['FRYDTQFXX'],self::TYPE['FRYDJFXX'],self::TYPE['CCWLYQXX'],self::TYPE['CCWLJJLXX'],self::TYPE['FRTQGYSYFXX'],self::TYPE['FRQSXX'],self::TYPE['FRNSXX'],self::TYPE['FRHEIMD'],self::TYPE['FRGYSYJFXX'],self::TYPE['GJJJCXX'],self::TYPE['ZRRTQGYSYFXX'],self::TYPE['ZRRGYSYJFXX'],self::TYPE['QSXX'],self::TYPE['NSXX'],self::TYPE['GJJGRJCXX'],self::TYPE['GJJGRDKXX'],self::TYPE['DFXBMDXX'],
            self::TYPE['LHJLFRHMD'],
            self::TYPE['LHCJFRHMD'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['TZXMBLJGGSXX'],
            self::TYPE['TZXMMCDMPPXX'],
            self::TYPE['QYGDZCTZXMHZHBA'],
            self::TYPE['TEST'],
        ),
        IUserGroup::ID['SZFB'] => array(),
        IUserGroup::ID['SRMYH'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SSCJDGLJ'] => array(
            self::TYPE['P_FDDBR'],
            self::TYPE['QYJBXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JGRYXX'],
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SSWJ'] => array(
            self::TYPE['C_DSSWDJXX'],
            self::TYPE['C_AJNSR'],
            self::TYPE['C_AJASRMD'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYSWJBDJXX'],
            self::TYPE['NSXYDJPDXX'],
            self::TYPE['QYQSGGXX'],
            self::TYPE['FZCNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['SRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['HXLDGXXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SHBJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SFY'] => array(
            self::TYPE['P_SXBZXR'],
            self::TYPE['C_SXBZXJG'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SJTJ'] => array(
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SJCY'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SYBJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SGYHXXHJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SYJGLJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SZRZYJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SJYJ'] => array(
            self::TYPE['P_SJYJT_XSXJXX'],
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SWSJKW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SJRB'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']            
        ),
        IUserGroup::ID['SNMJ'] => array(
            self::TYPE['NYLYGRJLXX'],
            self::TYPE['C_NYLYJL'],
            self::TYPE['C_JYZCX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SZWFWJ'] => array(),
        IUserGroup::ID['STJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SKJJ'] => array(
            self::TYPE['JXSZLJDW'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SMZJ'] => array(
            self::TYPE['P_GRDBJFF_INFO'],
            self::TYPE['MZSHTTHMBFQYDW'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['SFJDRXX'],
            self::TYPE['SFJDJGXX'],
            self::TYPE['LSZYXX'],
            self::TYPE['LSNDPJXX'],
            self::TYPE['LSSWSNDPJXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SZJJ'] => array(self::TYPE['C_ESFBA'],
            self::TYPE['P_VWEB_PERSON'],
            self::TYPE['ZLJCQYXX'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['ZZQSGBZHSFGDMD'],
            self::TYPE['ZZQCYBGCZLJMD'],
            self::TYPE['ZZQYZYBGCMD'],
        ),
        IUserGroup::ID['SZGH'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SWMB'] => array(
            self::TYPE['DDMFSBHR'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SCZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SGSL'] => array(),
        IUserGroup::ID['SLCJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SGGZYJYZX'] => array(),
        IUserGroup::ID['SSJJ'] => array(),
        IUserGroup::ID['SGBDST'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SGZW'] => array(
            self::TYPE['QYRYXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SFL'] => array(
            self::TYPE['P_YXSBHQS'],
            self::TYPE['P_JGJGBB'],
            self::TYPE['C_SBHQJT'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['ZFGJJ'] => array(
            self::TYPE['P_GJJDKXX'],
            self::TYPE['C_ZFGJJ'],
            self::TYPE['C_DKJBXX'],
            self::TYPE['P_VWEB_LOAN_INFO'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['GJJGRDKXX'],
            self::TYPE['GJJGRJCXX'],
            self::TYPE['GJJJCXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['GDGS'] => array(
            self::TYPE['DFJFJL_INFO'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['ZLSGS'] => array(
            self::TYPE['P_WATER_INFO'],
            self::TYPE['P_SFQJXX'],
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JSXFY'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['YFXFY'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['YFXZRZRJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['JZQFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['QYQFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XJXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['THXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['LLXQFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['SBB'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SCXGHJSJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SCRJJCJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SDXGS'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['GAJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SLTGS'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SQXJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SRFB'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SSLJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['TSW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SWXDGLJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SXFZD'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SYDGS'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SHRRQ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['SYCZMJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SYLBZJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['JGSSFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JSXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['QAXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XQXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YFXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['SCXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['WAXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['AFXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YXXFGW'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRHEIMD'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JKQJFJ'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['SDAG'] => array(
            self::TYPE['DFXBMDXX'],
            self::TYPE['FRHEIMD']
        ),
        IUserGroup::ID['JGQSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['QYQSWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['JSXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['JAXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['XJXSWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['XGXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['GJSWJZJYFXSWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['THXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['SCXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['WAXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['AFXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['YXXSUIWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['JKQSWJ'] => array(
            self::TYPE['NSXX'],
            self::TYPE['QSXX'],
            self::TYPE['FRNSXX'],
            self::TYPE['FRQSXX']
        ),
        IUserGroup::ID['SCXZLSGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['THXZLSGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XGXZLSGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JSXGSGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YFXGSGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['WAXSWJT'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JAXSWGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['SCXSWJT'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XJXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['THXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YFXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JSXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YXXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XGXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['SCXGDGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JAXHRRQ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XGXHTRQ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YFXHRRQ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JSXHRRQ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['THXHRRQ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['WAXTRQGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JGSSTRQGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['YXXTRQGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['SCXTRQGS'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['XJXXARQ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX']
        ),
        IUserGroup::ID['JKQXZGLJ'] => array(
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
            self::TYPE['FRGYSYJFXX']
        ),
        IUserGroup::ID['JKQSHSYJ'] => array(
            self::TYPE['FRTQGYSYFXX']
        ),

        
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
