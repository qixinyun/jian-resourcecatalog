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
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
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
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
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
        //@position
    );
}
