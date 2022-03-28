<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogIsConfirm
{
    const TYPE_RESOURECATALOG_CONFIRM = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['DYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYGDZCTZXMHZHBA'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['PXSTYXHDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JXSZLJDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZLJCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SLGCZBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['PGJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SLYSXKZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QYRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JXMPCPXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXJTJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXGDJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JBYFKZJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['FYCRYJLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TZXMBLJGGSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TZXMMCDMPPXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSZYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSNDPJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LSSWSNDPJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SAJLVJQ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['BWGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WWSDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['WWSDGMXSJLSX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYSWJBDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['NSXYDJPDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYQSGGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['FZCNSRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LXSDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRYCJJBAXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XZJLXXZRR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XZJLXXFRHQTZZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['MZSHTTHMBFQYDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SXBZXRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HXLDGXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SCAQBLJLHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YZSXWFQY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HGSXQY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HGGJRZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZZQSGBZHSFGDMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZZQCYBGCZLJMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZZQYZYBGCMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SLJSSC'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['LHCJFRHMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['LHJLFRHMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XYSFSQ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['C_AJASRMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_AJNSR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SXBZXJG'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_VWEB_PERSON'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_JYZCX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_NYLYJL'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SBHQJT'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DDMFSBHR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['NYLYGRJLXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_JGJGBB'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_SXBZXR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_YXSBHQS'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_DKJBXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_DSSWDJXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_ZFGJJ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DFJFJL_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_GJJDKXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_GRDBJFF_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_SFQJXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_SJYJT_XSXJXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_VWEB_LOAN_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_WATER_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_ESFBA'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_FDDBR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DFXBMDXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DFXRMDXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DFXYF'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GJJGRDKXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GJJGRJCXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['NSXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QSXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['RYJLXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GJJJCXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRGYSYJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRHEIMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRHONGMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRNSXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRQSXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRTQGYSYFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['RYBZXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['CCWLJJLXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['CCWLYQXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRYDJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRYDTQFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRYQJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRYQTQFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRYSJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FRYSTQFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRYDJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRYDTQFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRYQJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRYQTQFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRYSJFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZRRYSTQFXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_TJLYQYJB'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_YYCL'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_CAR_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_DZDY_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_GET_BZXZF'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_HSZYZ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_TEZYRY'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['C_AQSCBZHQY'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_CHZZDW'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_CKXKZ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_GXJSQYRD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_JYJG'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_EJTYZDY_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_EJYDY_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_MBFQY_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_MBFQYDWNJ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SHTTNJ_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_GRHYDJ_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QXZHFYZDDW'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QYDSJBDJ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SSZDWFAJ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QYDX_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QYGDTZZ_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QYYCML_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_YLQXJYQY'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_ZRRGD_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SFJFJL'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SYDWNDBG'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_SYDW_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_YYCB'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DLSZYZZJL_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['FLFWGZZ_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['LSZYZG_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SFJDCYRY_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['LDBZNDSMSC_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['LDYG_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_JZHJCWFJL'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_YSZYZ'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['WMDW_INFO'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GRDKHKMX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GRJCJCXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GRJCMX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GRMXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['JASRKJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_GTZYLYRY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_HBHMDQY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_GRHBRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_JGJGXJJT'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_JGWMG'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_JGRY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_JGRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_JXQNWSJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QNWMH'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QSYXSXDJT'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_YXQNZYZ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_HLJJJY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_JASDJCQN'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_QSYXGQTY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_QSYXGQY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_QSYXSXDFDY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_QSYXSXDY'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_SDJCQNTM'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_WSJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_YXQN'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['C_QSJYXTXJJT'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['P_GUA_GZZ_INFO'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DGZJGJL_INFO'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DLSSWSJL_INFO'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DSFJDJGJL_INFO'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],

        IResourceCatalog::TYPE['FDDBRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['JYJCJGZZRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QYBGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['QYDSJSBNXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SCZTSHTZXYGSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SPSCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['TZSBAZGZWXDWZGXKZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YDSYLRQCZDWZGXKXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YLQXJYQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YLQXSCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],

        IResourceCatalog::TYPE['DLYGJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DLYSJYZCFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['DLYSQYRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['GLJSSCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['JYXDLKYYSJSYHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SLJSSCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SLYGJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SLYSQYRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YYCLXXFR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YYCLXXZRR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YYCPXXFR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['YYCPXXZRR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['ZYCYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        

        //@position
    );
}
