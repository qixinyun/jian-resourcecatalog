<?php
namespace ResourceCatalog\Model;

interface IUserGroupIdentify
{
    const IDENTIFY = array(
        IUserGroup::ID['NULL'] => 'NULL',
        IUserGroup::ID['SFGW'] => 'SFGW',
        IUserGroup::ID['SCZJ'] => 'SCZJ',
        IUserGroup::ID['SYBJ'] => 'SYBJ',
        IUserGroup::ID['SRSJ'] => 'SRSJ',
        IUserGroup::ID['SWSJKW'] => 'SWSJKW',
        IUserGroup::ID['SFY'] => 'SFY',
        IUserGroup::ID['SJYJ'] => 'SJYJ',
        IUserGroup::ID['SZWFWJ'] => 'SZWFWJ',
        IUserGroup::ID['SWJ'] => 'SWJ',
        IUserGroup::ID['SSJJ'] => 'SSJJ',
        IUserGroup::ID['SGAJ'] => 'SGAJ',
        IUserGroup::ID['SSFJ'] => 'SSFJ',
        IUserGroup::ID['SGBDST'] => 'SGBDST',
        IUserGroup::ID['SGYHXXHJ'] => 'SGYHXXHJ',
        IUserGroup::ID['SZJJ'] => 'SZJJ',
        IUserGroup::ID['STJJ'] => 'STJJ',
        IUserGroup::ID['SZFB'] => 'SZFB',
        IUserGroup::ID['SSCJDGLJ'] => 'SSCJDGLJ',
        IUserGroup::ID['SHBJ'] => 'SHBJ',
        IUserGroup::ID['SJCY'] => 'SJCY',
        IUserGroup::ID['SGGZYJYZX'] => 'SGGZYJYZX',
        IUserGroup::ID['SJRB'] => 'SJRB',
        IUserGroup::ID['SNMJ'] => 'SNMJ',
        IUserGroup::ID['SSWJ'] => 'SSWJ',
        IUserGroup::ID['SKJJ'] => 'SKJJ',
        IUserGroup::ID['SCXGHJSJ'] => 'SCXGHJSJ',
        IUserGroup::ID['SMZJ'] => 'SMZJ',
        IUserGroup::ID['SWMB'] => 'SWMB',
        IUserGroup::ID['SYJGLJ'] => 'SYJGLJ',
        IUserGroup::ID['SRMYH'] => 'SRMYH',
        IUserGroup::ID['SZRZYJ'] => 'SZRZYJ',
        IUserGroup::ID['SLCJ'] => 'SLCJ',
        IUserGroup::ID['SZGH'] => 'SZGH',
        IUserGroup::ID['SJTJ'] => 'SJTJ',
        IUserGroup::ID['SGZW'] => 'SGZW',
        IUserGroup::ID['SGSL'] => 'SGSL',


        IUserGroup::ID['JZQFGW'] => 'JZQFGW',
        IUserGroup::ID['QYQFGW'] => 'QYQFGW',
        IUserGroup::ID['QAXFGW'] => 'QAXFGW',
        IUserGroup::ID['YFXFGW'] => 'YFXFGW',
        IUserGroup::ID['WAXFGW'] => 'WAXFGW',
        IUserGroup::ID['XQXFGW'] => 'XQXFGW',
        IUserGroup::ID['JSXFGW'] => 'JSXFGW',
        IUserGroup::ID['THXFGW'] => 'THXFGW',
        IUserGroup::ID['AFXFGW'] => 'AFXFGW',
        IUserGroup::ID['XJXFGW'] => 'XJXFGW',
        IUserGroup::ID['SCXFGW'] => 'SCXFGW',
        IUserGroup::ID['YXXFGW'] => 'YXXFGW',
        IUserGroup::ID['JGSSFGW'] => 'JGSSFGW',
        IUserGroup::ID['JKQ'] => 'JKQ',
        IUserGroup::ID['LLXQFGW'] => 'LLXQFGW',
        IUserGroup::ID['SFL'] => 'SFL',

        IUserGroup::ID['SCXBB'] => 'SCXBB',
        IUserGroup::ID['SCXCZJ'] => 'SCXCZJ',
        IUserGroup::ID['SCXZJJ'] => 'SCXZJJ',
        IUserGroup::ID['SCXSUIWJ'] => 'SCXSUIWJ',

        IUserGroup::ID['SCXFY'] => 'SCXFY',
        IUserGroup::ID['SCXRSJ'] => 'SCXRSJ',
        IUserGroup::ID['SCXSJJ'] => 'SCXSJJ',
        IUserGroup::ID['SCXGXJ'] => 'SCXGXJ',
        IUserGroup::ID['SCXGAJ'] => 'SCXGAJ',
        IUserGroup::ID['SCXMZJ'] => 'SCXMZJ',
        IUserGroup::ID['SCXZRZYJ'] => 'SCXZRZYJ',
        IUserGroup::ID['SCXSTHJJ'] => 'SCXSTHJJ',
        IUserGroup::ID['SCXJTJ'] => 'SCXJTJ',
        IUserGroup::ID['SCXJYTYJ'] => 'SCXJYTYJ',
        IUserGroup::ID['SCXLYJ'] => 'SCXLYJ',
        IUserGroup::ID['SCXKJJ'] => 'SCXKJJ',

        IUserGroup::ID['SCXGDGS'] => 'SCXGDGS',
        IUserGroup::ID['SCXYDGS'] => 'SCXYDGS',
        IUserGroup::ID['SCXZFGJJ'] => 'SCXZFGJJ',
        IUserGroup::ID['SCXZLSGS'] => 'SCXZLSGS',
        IUserGroup::ID['SCXLTGS'] => 'SCXLTGS',
        IUserGroup::ID['SCXDXGS'] => 'SCXDXGS',
        IUserGroup::ID['SCXNYNCJ'] => 'SCXNYNCJ',
        IUserGroup::ID['SCXQXJ'] => 'SCXQXJ',
        IUserGroup::ID['SCXRH'] => 'SCXRH',
        IUserGroup::ID['SCXWGXLJ'] => 'SCXWGXLJ',
        IUserGroup::ID['SCXSWJ'] => 'SCXSWJ',
        IUserGroup::ID['SCXZGH'] => 'SCXZGH',
        IUserGroup::ID['SCXSLJ'] => 'SCXSLJ',
        IUserGroup::ID['SCXSFJ'] => 'SCXSFJ',
        IUserGroup::ID['SCXTJJ'] => 'SCXTJJ',
        IUserGroup::ID['SCXXW'] => 'SCXXW',
        IUserGroup::ID['SCXWJW'] => 'SCXWJW',
        IUserGroup::ID['SCXWMB'] => 'SCXWMB',
        IUserGroup::ID['SCXXFDD'] => 'SCXXFDD',
        IUserGroup::ID['SCXFL'] => 'SCXFL',
        IUserGroup::ID['SCXJFB'] => 'SCXJFB',
        IUserGroup::ID['SCXGZB'] => 'SCXGZB',
        IUserGroup::ID['SCXTRQGS'] => 'SCXTRQGS',
        IUserGroup::ID['SCXYJJ'] => 'SCXYJJ',
        IUserGroup::ID['SCXSWJT'] => 'SCXSWJT',
        IUserGroup::ID['SCXCGJ'] => 'SCXCGJ',
        IUserGroup::ID['SCXYCJ'] => 'SCXYCJ',
        IUserGroup::ID['SCXJJDD'] => 'SCXJJDD',
        IUserGroup::ID['SCXYBJ'] => 'SCXYBJ',

        IUserGroup::ID['JAXSUIWJ'] => 'JAXSUIWJ',
        IUserGroup::ID['JAXJJDD'] => 'JAXJJDD',
        IUserGroup::ID['JAXSJJ'] => 'JAXSJJ',
        IUserGroup::ID['SCXJTJ'] => 'SCXJTJ',
        IUserGroup::ID['JAXNYNCFZHX'] => 'JAXNYNCFZHX',
        IUserGroup::ID['JAXCGJ'] => 'JAXCGJ',
        IUserGroup::ID['JAXGAJ'] => 'JAXGAJ',
        IUserGroup::ID['JAXLYJ'] => 'JAXLYJ',
        IUserGroup::ID['JAXSWGS'] => 'JAXSWGS',
        IUserGroup::ID['JAXHRRQ'] => 'JAXHRRQ',
        IUserGroup::ID['JAXJTJ'] => 'JAXJTJ',
        IUserGroup::ID['JAXRSJ'] => 'JAXRSJ',
        IUserGroup::ID['JAXZJJ'] => 'JAXZJJ',
        IUserGroup::ID['JAXWJW'] => 'JAXWJW',
        IUserGroup::ID['JAXSWJ'] => 'JAXSWJ',
        IUserGroup::ID['JAXYJJ'] => 'JAXYJJ',
        IUserGroup::ID['JAXJYTYJ'] => 'JAXJYTYJ',
        IUserGroup::ID['JAXWGXLJ'] => 'JAXWGXLJ',
        IUserGroup::ID['JAXQXJ'] => 'JAXQXJ',
        IUserGroup::ID['JAXHBJ'] => 'JAXHBJ',
        IUserGroup::ID['JANCZJ'] => 'JANCZJ',
        IUserGroup::ID['JAXJRB'] => 'JAXJRB',
        IUserGroup::ID['JAXZRZYJ'] => 'JAXZRZYJ',
        IUserGroup::ID['JAXZGH'] => 'JAXZGH',
        IUserGroup::ID['JAXFY'] => 'JAXFY',
        IUserGroup::ID['JAXBB'] => 'JAXBB',

        IUserGroup::ID['XGXWGXLJ'] => 'XGXWGXLJ',
        IUserGroup::ID['XGXSUIWJ'] => 'XGXSUIWJ',
        IUserGroup::ID['XGXTJJ'] => 'XGXTJJ',
        IUserGroup::ID['XGXQXJ'] => 'XGXQXJ',
        IUserGroup::ID['XGXSWJ'] => 'XGXSWJ',
        IUserGroup::ID['XGXRSJ'] => 'XGXRSJ',
        IUserGroup::ID['XGXXFDD'] => 'XGXXFDD',
        IUserGroup::ID['XGXSFJ'] => 'XGXSFJ',
        IUserGroup::ID['XGXJTJ'] => 'XGXJTJ',
        IUserGroup::ID['XGXCGJ'] => 'XGXCGJ',
        IUserGroup::ID['XGXJJDD'] => 'XGXJJDD',
        IUserGroup::ID['XGXSLJ'] => 'XGXSLJ',
        IUserGroup::ID['XGXGAJ'] => 'XGXGAJ',
        IUserGroup::ID['XGXYBJ'] => 'XGXYBJ',
        IUserGroup::ID['XGXRH'] => 'XGXRH',
        IUserGroup::ID['XGXNYNCJ'] => 'XGXNYNCJ',
        IUserGroup::ID['XGXZRZYJ'] => 'XGXZRZYJ',
        IUserGroup::ID['XGXZLSGS'] => 'XGXZLSGS',
        IUserGroup::ID['XGXZJJ'] => 'XGXZJJ',
        IUserGroup::ID['XGXWJW'] => 'XGXWJW',
        IUserGroup::ID['XGXJYTYJ'] => 'XGXJYTYJ',
        IUserGroup::ID['XGXFY'] => 'XGXFY',
        IUserGroup::ID['XGXSJJ'] => 'XGXSJJ',
        IUserGroup::ID['XGXYJJ'] => 'XGXYJJ',
        IUserGroup::ID['XGXZGH'] => 'XGXZGH',
        IUserGroup::ID['XGXLYJ'] => 'XGXLYJ',
        IUserGroup::ID['XGXMZJ'] => 'XGXMZJ',
        IUserGroup::ID['XGXYCJ'] => 'XGXYCJ',
        IUserGroup::ID['XGXGDGS'] => 'XGXGDGS',
        IUserGroup::ID['XGXGXJ'] => 'XGXGXJ',
        IUserGroup::ID['XGXSTHJJ'] => 'XGXSTHJJ',
        IUserGroup::ID['XGXHTRQ'] => 'XGXHTRQ',
        IUserGroup::ID['XGXCZJ'] => 'XGXCZJ',
        IUserGroup::ID['XGXJRB'] => 'XGXJRB',

        IUserGroup::ID['ZFGJJ'] => 'ZFGJJ',
        IUserGroup::ID['GDGS'] => 'GDGS',
        IUserGroup::ID['ZLSGS'] => 'ZLSGS',

        IUserGroup::ID['YXXBB'] => 'YXXBB',
        IUserGroup::ID['YXXCZJ'] => 'YXXCZJ',
        IUserGroup::ID['YXXGZB'] => 'YXXGZB',
        IUserGroup::ID['YXXPHJR'] => 'YXXPHJR',
        IUserGroup::ID['YXXCGJ'] => 'YXXCGJ',
        IUserGroup::ID['YXXCJB'] => 'YXXCJB',
        IUserGroup::ID['YXXDAG'] => 'YXXDAG',
        IUserGroup::ID['YXXDXJ'] => 'YXXDXJ',
        IUserGroup::ID['YXXFY'] => 'YXXFY',
        IUserGroup::ID['YXXFL'] => 'YXXFL',
        IUserGroup::ID['YXXGXJ'] => 'YXXGXJ',
        IUserGroup::ID['YXXGAJ'] => 'YXXGAJ',
        IUserGroup::ID['YXXGDGS'] => 'YXXGDGS',
        IUserGroup::ID['YXXJTJ'] => 'YXXJTJ',
        IUserGroup::ID['YXXJYTYJ'] => 'YXXJYTYJ',
        IUserGroup::ID['YXXKJJ'] => 'YXXKJJ',
        IUserGroup::ID['YXXLTGS'] => 'YXXLTGS',
        IUserGroup::ID['YXXLYJ'] => 'YXXLYJ',
        IUserGroup::ID['YXXMZJ'] => 'YXXMZJ',
        IUserGroup::ID['YXXNYNCJ'] => 'YXXNYNCJ',
        IUserGroup::ID['YXXQXJ'] => 'YXXQXJ',
        IUserGroup::ID['YXXRFB'] => 'YXXRFB',
        IUserGroup::ID['YXXZJJ'] => 'YXXZJJ',
        IUserGroup::ID['YXXRSJ'] => 'YXXRSJ',
        IUserGroup::ID['YXXRQGS'] => 'YXXRQGS',
        IUserGroup::ID['YXXSWJ'] => 'YXXSWJ',
        IUserGroup::ID['YXXSTHJJ'] => 'YXXSTHJJ',
        IUserGroup::ID['YXXSJJ'] => 'YXXSJJ',
        IUserGroup::ID['YXXSLJ'] => 'YXXSLJ',
        IUserGroup::ID['YXXSUIWJ'] => 'YXXSUIWJ',
        IUserGroup::ID['YXXTRQGS'] => 'YXXTRQGS',
        IUserGroup::ID['YXXTJJ'] => 'YXXTJJ',
        IUserGroup::ID['YXTXW'] => 'YXTXW',
        IUserGroup::ID['YXXWJW'] => 'YXXWJW',
        IUserGroup::ID['YXXWGXLJ'] => 'YXXWGXLJ',
        IUserGroup::ID['YXXXFDD'] => 'YXXXFDD',
        IUserGroup::ID['YXXYBJ'] => 'YXXYBJ',
        IUserGroup::ID['YXXYDGS'] => 'YXXYDGS',
        IUserGroup::ID['YXXYJJ'] => 'YXXYJJ',
        IUserGroup::ID['YXXZRGLJ'] => 'YXXZRGLJ',
        IUserGroup::ID['YXXZGH'] => 'YXXZGH',

        IUserGroup::ID['JGSSCZJ'] => 'JGSSCZJ',
        IUserGroup::ID['JGSSRMFY'] => 'JGSSRMFY',
        IUserGroup::ID['JGSSJTJ'] => 'JGSSJTJ',
        IUserGroup::ID['JGSSQXJ'] => 'JGSSQXJ',
        IUserGroup::ID['JGSSTHJJ'] => 'JGSSTHJJ',
        IUserGroup::ID['JGSSSLJ'] => 'JGSSSLJ',
        IUserGroup::ID['JGSSTRQGS'] => 'JGSSTRQGS',
        IUserGroup::ID['JGSSWGXJ'] => 'JGSSWGXJ',
        IUserGroup::ID['JGSSWMB'] => 'JGSSWMB',
        IUserGroup::ID['JGSSYJGLJ'] => 'JGSSYJGLJ',
        IUserGroup::ID['JGSSZJJ'] => 'JGSSZJJ',

        IUserGroup::ID['AFXZJJ'] => 'AFXZJJ',
        IUserGroup::ID['AFXLYJ'] => 'AFXLYJ',
        IUserGroup::ID['AFXSFJ'] => 'AFXSFJ',
        IUserGroup::ID['AFXSCJDGLJ'] => 'AFXSCJDGLJ',
        IUserGroup::ID['AFXSUIWJ'] => 'AFXSUIWJ',
        IUserGroup::ID['AFXJJDD'] => 'AFXJJDD',
        IUserGroup::ID['AFXRSJ'] => 'AFXRSJ',
        IUserGroup::ID['AFXCGJ'] => 'AFXCGJ',
        IUserGroup::ID['AFXJTYSJ'] => 'AFXJTYSJ',
        IUserGroup::ID['AFXNYNCJ'] => 'AFXNYNCJ',
        IUserGroup::ID['AFXYJGLJ'] => 'AFXYJGLJ',
        IUserGroup::ID['AFXSLJ'] => 'AFXSLJ',
        IUserGroup::ID['AFXQXJ'] => 'AFXQXJ',
        IUserGroup::ID['AFXXFDD'] => 'AFXXFDD',
        IUserGroup::ID['AFXWJW'] => 'AFXWJW',
        IUserGroup::ID['AFXFY'] => 'AFXFY',
        IUserGroup::ID['AFXSWJ'] => 'AFXSWJ',
        IUserGroup::ID['AFXSTJ'] => 'AFXSTJ',
        IUserGroup::ID['AFXGAJ'] => 'AFXGAJ',
        IUserGroup::ID['AFXZRZYJ'] => 'AFXZRZYJ',
        IUserGroup::ID['AFXYCGS'] => 'AFXYCGS',
        IUserGroup::ID['AFXWGXLJ'] => 'AFXWGXLJ',
        IUserGroup::ID['AFXMZJ'] => 'AFXMZJ',
        IUserGroup::ID['AFXGXJ'] => 'AFXGXJ',
        IUserGroup::ID['AFXJTJ'] => 'AFXJTJ',
        IUserGroup::ID['AFXCZJ'] => 'AFXCZJ',
        IUserGroup::ID['AFXYBJ'] => 'AFXYBJ',
        IUserGroup::ID['AFXTJJ'] => 'AFXTJJ',
        IUserGroup::ID['AFXSJJ'] => 'AFXSJJ',
        IUserGroup::ID['AFXKJJ'] => 'AFXKJJ',

        IUserGroup::ID['WAXSGJDGLJ'] => 'WAXSGJDGLJ',
        IUserGroup::ID['WAXFY'] => 'WAXFY',
        IUserGroup::ID['WAXGAJ'] => 'WAXGAJ',
        IUserGroup::ID['WAXWMB'] => 'WAXWMB',
        IUserGroup::ID['WAXCZJ'] => 'WAXCZJ',
        IUserGroup::ID['WAXRSJ'] => 'WAXRSJ',
        IUserGroup::ID['WAXZJJ'] => 'WAXZJJ',
        IUserGroup::ID['WAXSTJ'] => 'WAXSTJ',
        IUserGroup::ID['WAXZRZYJ'] => 'WAXZRZYJ',
        IUserGroup::ID['WAXMZJ'] => 'WAXMZJ',
        IUserGroup::ID['WAXTJJ'] => 'WAXTJJ',
        IUserGroup::ID['WAXSJJ'] => 'WAXSJJ',
        IUserGroup::ID['WAXSFJ'] => 'WAXSFJ',
        IUserGroup::ID['WAXJJDD'] => 'WAXJJDD',
        IUserGroup::ID['WAXWGXLJ'] => 'WAXWGXLJ',
        IUserGroup::ID['WAXWJW'] => 'WAXWJW',
        IUserGroup::ID['WAXJTGLJ'] => 'WAXJTGLJ',
        IUserGroup::ID['WAXJTJ'] => 'WAXJTJ',
        IUserGroup::ID['WAXSWJ'] => 'WAXSWJ',
        IUserGroup::ID['WAXKJJ'] => 'WAXKJJ',
        IUserGroup::ID['WAXYJGLJ'] => 'WAXYJGLJ',
        IUserGroup::ID['WAXGXJ'] => 'WAXGXJ',
        IUserGroup::ID['WAXCGJ'] => 'WAXCGJ',
        IUserGroup::ID['WAXSLJ'] => 'WAXSLJ',
        IUserGroup::ID['WAXLYJ'] => 'WAXLYJ',
        IUserGroup::ID['WAXNYNCJ'] => 'WAXNYNCJ',
        IUserGroup::ID['WAXBB'] => 'WAXBB',
        IUserGroup::ID['WAXFL'] => 'WAXFL',
        IUserGroup::ID['WAXZGH'] => 'WAXZGH',
        IUserGroup::ID['WATXW'] => 'WATXW',
        IUserGroup::ID['WAXSUIWJ'] => 'WAXSUIWJ',
        IUserGroup::ID['WAXQXJ'] => 'WAXQXJ',
        IUserGroup::ID['WAXYCJ'] => 'WAXYCJ',
        IUserGroup::ID['WAXXFDD'] => 'WAXXFDD',
        IUserGroup::ID['WAXSWJT'] => 'WAXSWJT',
        IUserGroup::ID['WAXTRQGS'] => 'WAXTRQGS',
        IUserGroup::ID['WAXDXGS'] => 'WAXDXGS',
        IUserGroup::ID['WAXYDGS'] => 'WAXYDGS',
        IUserGroup::ID['WAXLTGS'] => 'WAXLTGS',

        IUserGroup::ID['YFXFL'] => 'YFXFL',
        IUserGroup::ID['YFXTJJ'] => 'YFXTJJ',
        IUserGroup::ID['YFXSLJ'] => 'YFXSLJ',
        IUserGroup::ID['YFXRSJ'] => 'YFXRSJ',
        IUserGroup::ID['YFXCZJ'] => 'YFXCZJ',
        IUserGroup::ID['YFXZJJ'] => 'YFXZJJ',
        IUserGroup::ID['YFXJTYSJ'] => 'YFXJTYSJ',
        IUserGroup::ID['YFXCGJ'] => 'YFXCGJ',
        IUserGroup::ID['YFXYJGLJ'] => 'YFXYJGLJ',
        IUserGroup::ID['YFXBB'] => 'YFXBB',
        IUserGroup::ID['YFXDXJ'] => 'YFXDXJ',
        IUserGroup::ID['YFXFY'] => 'YFXFY',
        IUserGroup::ID['YFXGXJ'] => 'YFXGXJ',
        IUserGroup::ID['YFXGDGS'] => 'YFXGDGS',
        IUserGroup::ID['YFXJTJ'] => 'YFXJTJ',
        IUserGroup::ID['YFXMZJ'] => 'YFXMZJ',
        IUserGroup::ID['YFXSWJ'] => 'YFXSWJ',
        IUserGroup::ID['YFXWJW'] => 'YFXWJW',
        IUserGroup::ID['YFXXFDD'] => 'YFXXFDD',
        IUserGroup::ID['YFXHRRQ'] => 'YFXHRRQ',
        IUserGroup::ID['YFXLYJ'] => 'YFXLYJ',
        IUserGroup::ID['YFXXCB'] => 'YFXXCB',
        IUserGroup::ID['YFXYDGS'] => 'YFXYDGS',
        IUserGroup::ID['YFXYBJ'] => 'YFXYBJ',
        IUserGroup::ID['YFXSTJ'] => 'YFXSTJ',
        IUserGroup::ID['YFXZGH'] => 'YFXZGH',
        IUserGroup::ID['YFXGAJ'] => 'YFXGAJ',
        IUserGroup::ID['YFXSFJ'] => 'YFXSFJ',
        IUserGroup::ID['YFXQXJ'] => 'YFXQXJ',
        IUserGroup::ID['YFTXW'] => 'YFTXW',
        IUserGroup::ID['YFXYCJ'] => 'YFXYCJ',
        IUserGroup::ID['YFXWGXLJ'] => 'YFXWGXLJ',
        IUserGroup::ID['YFXGSGS'] => 'YFXGSGS',
        IUserGroup::ID['YFXZRZRJ'] => 'YFXZRZRJ',
        IUserGroup::ID['YFXNYNCJ'] => 'YFXNYNCJ',
        IUserGroup::ID['YFXLTGS'] => 'YFXLTGS',
        IUserGroup::ID['YFXRH'] => 'YFXRH',

        IUserGroup::ID['JSXYJJ'] => 'JSXYJJ',
        IUserGroup::ID['JSXCZJ'] => 'JSXCZJ',
        IUserGroup::ID['JSXDXGS'] => 'JSXDXGS',
        IUserGroup::ID['JSXGAJ'] => 'JSXGAJ',
        IUserGroup::ID['JSXFY'] => 'JSXFY',
        IUserGroup::ID['JSXZJJ'] => 'JSXZJJ',
        IUserGroup::ID['JSXFL'] => 'JSXFL',
        IUserGroup::ID['JSXGXJ'] => 'JSXGXJ',
        IUserGroup::ID['JSXGDGS'] => 'JSXGDGS',
        IUserGroup::ID['JSXZRZYJ'] => 'JSXZRZYJ',
        IUserGroup::ID['JSXSTHJJ'] => 'JSXSTHJJ',
        IUserGroup::ID['JSXJTYSJ'] => 'JSXJTYSJ',
        IUserGroup::ID['JSXJTJ'] => 'JSXJTJ',
        IUserGroup::ID['JSXJRB'] => 'JSXJRB',
        IUserGroup::ID['JSXKJJ'] => 'JSXKJJ',
        IUserGroup::ID['JSXLTGS'] => 'JSXLTGS',
        IUserGroup::ID['JSXLYJ'] => 'JSXLYJ',
        IUserGroup::ID['JSXNYNCJ'] => 'JSXNYNCJ',
        IUserGroup::ID['JSXWGXLJ'] => 'JSXWGXLJ',
        IUserGroup::ID['JSXMZJ'] => 'JSXMZJ',
        IUserGroup::ID['JSXQXJ'] => 'JSXQXJ',
        IUserGroup::ID['JSXRSJ'] => 'JSXRSJ',
        IUserGroup::ID['JSXSWJ'] => 'JSXSWJ',
        IUserGroup::ID['JSXSJJ'] => 'JSXSJJ',
        IUserGroup::ID['JSXSLJ'] => 'JSXSLJ',
        IUserGroup::ID['JSXSFJ'] => 'JSXSFJ',
        IUserGroup::ID['JSXTJJ'] => 'JSXTJJ',
        IUserGroup::ID['JSTXW'] => 'JSTXW',
        IUserGroup::ID['JSXWJW'] => 'JSXWJW',
        IUserGroup::ID['JSXWMB'] => 'JSXWMB',
        IUserGroup::ID['JSXXFDD'] => 'JSXXFDD',
        IUserGroup::ID['JSXYDGS'] => 'JSXYDGS',
        IUserGroup::ID['JSXZFGJJ'] => 'JSXZFGJJ',
        IUserGroup::ID['JSXZGH'] => 'JSXZGH',
        IUserGroup::ID['JSXHRRQ'] => 'JSXHRRQ',
        IUserGroup::ID['JSXCGJ'] => 'JSXCGJ',
        IUserGroup::ID['JSXSUIWJ'] => 'JSXSUIWJ',
        IUserGroup::ID['JSXYCJ'] => 'JSXYCJ',
        IUserGroup::ID['JSXYBJ'] => 'JSXYBJ',
        IUserGroup::ID['JSXGSGS'] => 'JSXGSGS',

        IUserGroup::ID['JGQYBJ'] => 'JGQYBJ',
        IUserGroup::ID['JGQXZSPJ'] => 'JGQXZSPJ',
        IUserGroup::ID['JGQYJJ'] => 'JGQYJJ',
        IUserGroup::ID['JGQBB'] => 'JGQBB',
        IUserGroup::ID['JGQCZJ'] => 'JGQCZJ',
        IUserGroup::ID['JGQZJJ'] => 'JGQZJJ',
        IUserGroup::ID['JGQFY'] => 'JGQFY',
        IUserGroup::ID['JGQFL'] => 'JGQFL',
        IUserGroup::ID['JGQGXJ'] => 'JGQGXJ',
        IUserGroup::ID['JGQGAFJ'] => 'JGQGAFJ',
        IUserGroup::ID['JGQJJDD'] => 'JGQJJDD',
        IUserGroup::ID['JGQZYFJ'] => 'JGQZYFJ',
        IUserGroup::ID['JGQGZZX'] => 'JGQGZZX',
        IUserGroup::ID['JGQSTJ'] => 'JGQSTJ',
        IUserGroup::ID['JGQJTJ'] => 'JGQJTJ',
        IUserGroup::ID['JGQJYTYJ'] => 'JGQJYTYJ',
        IUserGroup::ID['JGQKJJ'] => 'JGQKJJ',
        IUserGroup::ID['JGQNCJ'] => 'JGQNCJ',
        IUserGroup::ID['JGQLYFJ'] => 'JGQLYFJ',
        IUserGroup::ID['JGQWGXLJ'] => 'JGQWGXLJ',
        IUserGroup::ID['JGQMZJ'] => 'JGQMZJ',
        IUserGroup::ID['JGQRSJ'] => 'JGQRSJ',
        IUserGroup::ID['JGQSWJ'] => 'JGQSWJ',
        IUserGroup::ID['JGQSJJ'] => 'JGQSJJ',
        IUserGroup::ID['JGQSLJ'] => 'JGQSLJ',
        IUserGroup::ID['JGQSFJ'] => 'JGQSFJ',
        IUserGroup::ID['JGQTJJ'] => 'JGQTJJ',
        IUserGroup::ID['JGQTQW'] => 'JGQTQW',
        IUserGroup::ID['JGQWJW'] => 'JGQWJW',
        IUserGroup::ID['JGQWMW'] => 'JGQWMW',
        IUserGroup::ID['JGQXFDD'] => 'JGQXFDD',
        IUserGroup::ID['JGQZGH'] => 'JGQZGH',
        IUserGroup::ID['JGQCGJ'] => 'JGQCGJ',
        IUserGroup::ID['JGQSUIWJ'] => 'JGQSUIWJ',
        IUserGroup::ID['JGQYCJ'] => 'JGQYCJ',

        IUserGroup::ID['THXRSJ'] => 'THXRSJ',
        IUserGroup::ID['THXCZJ'] => 'THXCZJ',
        IUserGroup::ID['THXGXJ'] => 'THXGXJ',
        IUserGroup::ID['THXSWJ'] => 'THXSWJ',
        IUserGroup::ID['THXTJJ'] => 'THXTJJ',
        IUserGroup::ID['THXNCNYJ'] => 'THXNCNYJ',
        IUserGroup::ID['THXLYJ'] => 'THXLYJ',
        IUserGroup::ID['THXSLJ'] => 'THXSLJ',
        IUserGroup::ID['THXZRZYJ'] => 'THXZRZYJ',
        IUserGroup::ID['THXZJJ'] => 'THXZJJ',
        IUserGroup::ID['THXJTYSJ'] => 'THXJTYSJ',
        IUserGroup::ID['THXSTJ'] => 'THXSTJ',
        IUserGroup::ID['THXYJJ'] => 'THXYJJ',
        IUserGroup::ID['THXSJJ'] => 'THXSJJ',
        IUserGroup::ID['THXKJJ'] => 'THXKJJ',
        IUserGroup::ID['THXMZJ'] => 'THXMZJ',
        IUserGroup::ID['THXJTJ'] => 'THXJTJ',
        IUserGroup::ID['THXWJW'] => 'THXWJW',
        IUserGroup::ID['THXWGXLJ'] => 'THXWGXLJ',
        IUserGroup::ID['THXGAJ'] => 'THXGAJ',
        IUserGroup::ID['THXFY'] => 'THXFY',
        IUserGroup::ID['THXXCB'] => 'THXXCB',
        IUserGroup::ID['THXBB'] => 'THXBB',
        IUserGroup::ID['THXTXW'] => 'THXTXW',
        IUserGroup::ID['THXFL'] => 'THXFL',
        IUserGroup::ID['THXZGH'] => 'THXZGH',
        IUserGroup::ID['THXSFJ'] => 'THXSFJ',
        IUserGroup::ID['THXSUIWJ'] => 'THXSUIWJ',
        IUserGroup::ID['THXQXJ'] => 'THXQXJ',
        IUserGroup::ID['THXYBJ'] => 'THXYBJ',
        IUserGroup::ID['THXCGJ'] => 'THXCGJ',
        IUserGroup::ID['THXXFDD'] => 'THXXFDD',
        IUserGroup::ID['THXRH'] => 'THXRH',
        IUserGroup::ID['THXGDGS'] => 'THXGDGS',
        IUserGroup::ID['THXDXGS'] => 'THXDXGS',
        IUserGroup::ID['THXLTGS'] => 'THXLTGS',
        IUserGroup::ID['THXYDGS'] => 'THXYDGS',
        IUserGroup::ID['THXZLSGS'] => 'THXZLSGS',
        IUserGroup::ID['THXYCJ'] => 'THXYCJ',
        IUserGroup::ID['THXHRRQ'] => 'THXHRRQ',
        IUserGroup::ID['THXJJDD'] => 'THXJJDD',

        IUserGroup::ID['XJXWTZB'] => 'XJXWTZB',
        IUserGroup::ID['XJXJTJ'] => 'XJXJTJ',
        IUserGroup::ID['XJXGXJ'] => 'XJXGXJ',
        IUserGroup::ID['XJXGAJ'] => 'XJXGAJ',
        IUserGroup::ID['XJXMZJ'] => 'XJXMZJ',
        IUserGroup::ID['XJXCZJ'] => 'XJXCZJ',
        IUserGroup::ID['XJXRSJ'] => 'XJXRSJ',
        IUserGroup::ID['XJXZRZYJ'] => 'XJXZRZYJ',
        IUserGroup::ID['XJXZJJ'] => 'XJXZJJ',
        IUserGroup::ID['XJXSTJ'] => 'XJXSTJ',
        IUserGroup::ID['XJXJTYSJ'] => 'XJXJTYSJ',
        IUserGroup::ID['XJXSLJ'] => 'XJXSLJ',
        IUserGroup::ID['XJXNYNCJ'] => 'XJXNYNCJ',
        IUserGroup::ID['XJXSFJ'] => 'XJXSFJ',
        IUserGroup::ID['XJXWGXLJ'] => 'XJXWGXLJ',
        IUserGroup::ID['XJXWJW'] => 'XJXWJW',
        IUserGroup::ID['XJXYJJ'] => 'XJXYJJ',
        IUserGroup::ID['XJXLYJ'] => 'XJXLYJ',
        IUserGroup::ID['XJXSJJ'] => 'XJXSJJ',
        IUserGroup::ID['XJXYBJ'] => 'XJXYBJ',
        IUserGroup::ID['XJXTJJ'] => 'XJXTJJ',
        IUserGroup::ID['XJXCGJ'] => 'XJXCGJ',
        IUserGroup::ID['XJXQXJ'] => 'XJXQXJ',
        IUserGroup::ID['XJXSWJ'] => 'XJXSWJ',
        IUserGroup::ID['XJXXFDD'] => 'XJXXFDD',
        IUserGroup::ID['XJXXFY'] => 'XJXXFY',
        IUserGroup::ID['XJXYCJ'] => 'XJXYCJ',
        IUserGroup::ID['XJXJJDD'] => 'XJXJJDD',
        IUserGroup::ID['XJXXARQ'] => 'XJXXARQ',
        IUserGroup::ID['XJXGDGS'] => 'XJXGDGS',

        IUserGroup::ID['QYQZJJ'] => 'QYQZJJ',
        IUserGroup::ID['QYQlYJ'] => 'QYQlYJ',
        IUserGroup::ID['QYQSFJ'] => 'QYQSFJ',
        IUserGroup::ID['QYQSJJ'] => 'QYQSJJ',
        IUserGroup::ID['QYQSWJ'] => 'QYQSWJ',
        IUserGroup::ID['QYQJJDD'] => 'QYQJJDD',
        IUserGroup::ID['QYQRSJ'] => 'QYQRSJ',
        IUserGroup::ID['QYQCGJ'] => 'QYQCGJ',
        IUserGroup::ID['QYQYSJ'] => 'QYQYSJ',
        IUserGroup::ID['QYQNCJ'] => 'QYQNCJ',
        IUserGroup::ID['QYQYJJ'] => 'QYQYJJ',
        IUserGroup::ID['QYQSLJ'] => 'QYQSLJ',
        IUserGroup::ID['QYQXFDD'] => 'QYQXFDD',
        IUserGroup::ID['QYQWJW'] => 'QYQWJW',
        IUserGroup::ID['QYQFY'] => 'QYQFY',
        IUserGroup::ID['QYQSTJ'] => 'QYQSTJ',
        IUserGroup::ID['QYQGAJ'] => 'QYQGAJ',
        IUserGroup::ID['QYQZRZYJ'] => 'QYQZRZYJ',
        IUserGroup::ID['QYQYCJ'] => 'QYQYCJ',
        IUserGroup::ID['QYQGXLJ'] => 'QYQGXLJ',
        IUserGroup::ID['QYQMZJ'] => 'QYQMZJ',
        IUserGroup::ID['QYQGXJ'] => 'QYQGXJ',
        IUserGroup::ID['QYQJTJ'] => 'QYQJTJ',
        IUserGroup::ID['QYQCZJ'] => 'QYQCZJ',
        IUserGroup::ID['QYQKJJ'] => 'QYQKJJ',
        IUserGroup::ID['QYQTJJ'] => 'QYQTJJ',
        IUserGroup::ID['QYQTQW'] => 'QYQTQW',

        IUserGroup::ID['SXFZD'] => 'SXFZD',
        IUserGroup::ID['JAXXFDD'] => 'JAXXFDD',
        IUserGroup::ID['YFXKJJ'] => 'YFXKJJ',
        IUserGroup::ID['YFXSJJ'] => 'YFXSJJ',
        IUserGroup::ID['GJSWJZJYFXSWJ'] => 'GJSWJZJYFXSWJ',
        IUserGroup::ID['YFXJJDD'] => 'YFXJJDD',

        IUserGroup::ID['JKQXZGLJ'] => 'JKQXZGLJ',
        IUserGroup::ID['JKQYJGlJ'] => 'JKQYJGlJ',
        IUserGroup::ID['JKQXF'] => 'JKQXF',
        IUserGroup::ID['JKQJFJ'] => 'JKQJFJ',
        IUserGroup::ID['JKQJJZD'] => 'JKQJJZD',
        IUserGroup::ID['JKQGAJ'] => 'JKQGAJ',
        IUserGroup::ID['JKQSWJ'] => 'JKQSWJ',
        IUserGroup::ID['JKQZRZYJ'] => 'JKQZRZYJ',
        IUserGroup::ID['JKQZHZFJ'] => 'JKQZHZFJ',
        IUserGroup::ID['JKQSHSYJ'] => 'JKQSHSYJ',
        IUserGroup::ID['JKQHBJ'] => 'JKQHBJ',
        IUserGroup::ID['RSJ'] => 'RSJ',

        IUserGroup::ID['SHRRQ'] => 'SHRRQ',
        IUserGroup::ID['SBB'] => 'SBB',
        IUserGroup::ID['SYCZMJ'] => 'SYCZMJ',
        IUserGroup::ID['SYLBZJ'] => 'SYLBZJ',
        IUserGroup::ID['SCRJJCJ'] => 'SCRJJCJ',
        IUserGroup::ID['SDAG'] => 'SDAG',
        IUserGroup::ID['SHG'] => 'SHG',
        IUserGroup::ID['SQXJ'] => 'SQXJ',
        IUserGroup::ID['SRFB'] => 'SRFB',
        IUserGroup::ID['SSLJ'] => 'SSLJ',
        IUserGroup::ID['GAJ'] => 'GAJ',
        IUserGroup::ID['TSW'] => 'TSW',
        IUserGroup::ID['SWXDGLJ'] => 'SWXDGLJ',
        IUserGroup::ID['SDXGS'] => 'SDXGS',
        IUserGroup::ID['SYDGS'] => 'SYDGS',
        IUserGroup::ID['SLTGS'] => 'SLTGS',

        IUserGroup::ID['JKQSJJ'] => 'JKQSJJ',
        IUserGroup::ID['JGSSZLSYXGS'] => 'JGSSZLSYXGS',
        IUserGroup::ID['AFXSWJSJTYXGS'] => 'AFXSWJSJTYXGS',
        IUserGroup::ID['AFXYTTRQYXGS'] => 'AFXYTTRQYXGS',
        IUserGroup::ID['WARASWJTXCGSYXGS'] => 'WARASWJTXCGSYXGS',
        IUserGroup::ID['SCGJ'] => 'SCGJ',
        IUserGroup::ID['JGSSMZJ'] => 'JGSSMZJ',
        IUserGroup::ID['JGSSSJJ'] => 'JGSSSJJ',
        IUserGroup::ID['JGSSNNCJ'] => 'JGSSNNCJ',
        IUserGroup::ID['AFXXZFWZX'] => 'AFXXZFWZX',

        IUserGroup::ID['AFXFL'] => 'AFXFL',
        IUserGroup::ID['AFXGSL'] => 'AFXGSL',
        IUserGroup::ID['AFXTXW'] => 'AFXTXW',
        IUserGroup::ID['AFXZGH'] => 'AFXZGH',
        IUserGroup::ID['AFXYDGS'] => 'AFXYDGS',
        IUserGroup::ID['AFXLTGS'] => 'AFXLTGS',
        IUserGroup::ID['AFXDXGS'] => 'AFXDXGS',
        IUserGroup::ID['AFXRMYH'] => 'AFXRMYH',
        IUserGroup::ID['SYZGLJ'] => 'SYZGLJ',
        IUserGroup::ID['SWTZB'] => 'SWTZB',
        IUserGroup::ID['XJXSWGS'] => 'XJXSWGS',
    );
}
