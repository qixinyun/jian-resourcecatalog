<?php
namespace ResourceCatalog\Model;

interface IUserGroup extends IUserGroupIdentify
{
    const ID = array(
        'NULL' => 0,
        'SFGW' => 1,
        'SCZJ' => 2,
        'SYBJ' => 3,
        'SRSJ' => 4,
        'SWSJKW' => 5,
        'SFY' => 6,
        'SJYJ' => 7,
        'SZWFWJ' => 8,
        'SWJ' => 9,
        'SSJJ' => 10,
        'SGAJ' => 11,
        'SSFJ' => 12,
        'SGBDST' => 13,
        'SGYHXXHJ' => 14,
        'SZJJ' => 15,
        'STJJ' => 16,
        'SZFB' => 17,
        'SSCJDGLJ' => 18,
        'SHBJ' => 19,
        'SJCY' => 20,
        'SGGZYJYZX' => 21,
        'SJRB' => 22,
        'SNMJ' => 23,
        'SSWJ' => 24,
        'SKJJ' => 26,
        'SCXGHJSJ' => 25,
        'SMZJ' => 27,
        'SWMB' => 28,
        'SYJGLJ' => 29,
        'SRMYH' => 30,
        'SZRZYJ' => 31,
        'SLCJ' => 32,
        'SZGH' => 33,
        'SJTJ' => 34,
        'SGZW' => 35,
        'SGSL' => 36,

        'JZQFGW' => 37,
        'QYQFGW' => 38,
        'QAXFGW' => 39,
        'YFXFGW' => 40,
        'WAXFGW' => 41,
        'XQXFGW' => 42,
        'JSXFGW' => 43,
        'THXFGW' => 44,
        'AFXFGW' => 45,
        'XJXFGW' => 46,
        'SCXFGW' => 47,
        'YXXFGW' => 48,
        'JGSSFGW' => 49,
        'JKQ' => 50,
        'LLXQFGW' => 51,
        'SFL' => 52,

        'SCXBB' => 53,
        'SCXCZJ' => 54,
        'SCXZJJ' => 55,
        'SCXSUIWJ' => 56,

        'SCXFY' => 58,
        'SCXRSJ' => 59,
        'SCXSJJ' => 60,
        'SCXGXJ' => 61,
        'SCXGAJ' => 62,
        'SCXMZJ' => 63,
        'SCXZRZYJ' => 64,
        'SCXSTHJJ' => 65,
        'SCXJTJ' => 66,
        'SCXJYTYJ' => 67,
        'SCXLYJ' => 68,
        'SCXKJJ' => 69,
        'SCXGDGS' => 70,
        'SCXYDGS' => 71,
        'SCXZFGJJ' => 72,
        'SCXZLSGS' => 73,
        'SCXLTGS' => 74,
        'SCXDXGS' => 75,
        'SCXNYNCJ' => 76,
        'SCXQXJ' => 77,
        'SCXRH' => 78,
        'SCXWGXLJ' => 79,
        'SCXSWJ' => 80,
        'SCXZGH' => 81,
        'SCXSLJ' => 82,
        'SCXSFJ' => 83,
        'SCXTJJ' => 84,
        'SCXXW' => 85,
        'SCXWJW' => 86,
        'SCXWMB' => 87,
        'SCXXFDD' => 88,
        'SCXFL' => 89,
        'SCXJFB' => 90,
        'SCXGZB' => 91,
        'SCXTRQGS' => 92,
        'SCXYJJ' => 93,
        'SCXSWJT' => 94,
        'SCXCGJ' => 95,
        'SCXYCJ' => 96,
        'SCXJJDD' => 97,
        'SCXYBJ' => 98,

        'JAXSUIWJ' => 100,
        'JAXJJDD' => 101,
        'JAXSJJ' => 102,
        'JAXNYNCFZHX' => 103,
        'JAXCGJ' => 104,
        'JAXGAJ' => 105,
        'JAXLYJ' => 106,
        'JAXSWGS' => 107,
        'JAXHRRQ' => 108,
        'JAXJTJ' => 109,
        'JAXRSJ' => 110,
        'JAXZJJ' => 111,
        'JAXWJW' => 112,
        'JAXSWJ' => 113,
        'JAXYJJ' => 114,
        'JAXJYTYJ' => 115,
        'JAXWGXLJ' => 116,
        'JAXQXJ' => 117,
        'JAXHBJ' => 118,
        'JANCZJ' => 119,
        'JAXJRB' => 120,
        'JAXZRZYJ' => 121,
        'JAXZGH' => 122,
        'JAXFY' => 123,
        'JAXBB' => 124,

        'XGXWGXLJ' => 126,
        'XGXSUIWJ' => 127,
        'XGXTJJ' => 128,
        'XGXQXJ' => 129,
        'XGXSWJ' => 130,
        'XGXRSJ' => 131,
        'XGXXFDD' => 132,
        'XGXSFJ' => 133,
        'XGXJTJ' => 134,
        'XGXCGJ' => 135,
        'XGXJJDD' => 136,
        'XGXSLJ' => 137,
        'XGXGAJ' => 138,
        'XGXYBJ' => 139,
        'SZRZYJ' => 140,
        'XGXNYNCJ' => 141,
        'XGXZRZYJ' => 142,
        'XGXZLSGS' => 143,
        'XGXZJJ' => 144,
        'XGXWJW' => 145,
        'XGXJYTYJ' => 146,
        'XGXFY' => 147,
        'XGXSJJ' => 148,
        'XGXYJJ' => 149,
        'XGXZGH' => 150,
        'XGXLYJ' => 151,
        'XGXMZJ' => 152,
        'XGXYCJ' => 153,
        'XGXGDGS' => 154,
        'XGXGXJ' => 155,
        'XGXSTHJJ' => 156,
        'XGXHTRQ' => 157,
        'XGXCZJ' => 158,
        'XGXJRB' => 159,

        'ZFGJJ' => 980,
        'GDGS' => 981,
        'ZLSGS' => 982,

        'YXXBB' => 200,
        'YXXCZJ' => 201,
        'YXXGZB' => 202,
        'YXXPHJR' => 203,
        'YXXCGJ' => 204,
        'YXXCJB' => 205,
        'YXXDAG' => 206,
        'YXXDXJ' => 207,
        'YXXFY' => 208,
        'YXXFL' => 209,
        'YXXGXJ' => 210,
        'YXXGAJ' => 211,
        'YXXGDGS' => 212,
        'YXXJTJ' => 213,
        'YXXJYTYJ' => 214,
        'YXXKJJ' => 215,
        'YXXLTGS' => 216,
        'YXXLYJ' => 217,
        'YXXMZJ' => 218,
        'YXXNYNCJ' => 219,
        'YXXQXJ' => 220,
        'YXXRFB' => 221,
        'YXXZJJ' => 222,
        'YXXRSJ' => 223,
        'YXXRQGS' => 224,
        'YXXSWJ' => 225,
        'YXXSTHJJ' => 226,
        'YXXSJJ' => 227,
        'YXXSLJ' => 228,
        'YXXSUIWJ' => 229,
        'YXXTRQGS' => 230,
        'YXXTJJ' => 231,
        'YXTXW' => 232,
        'YXXWJW' => 233,
        'YXXWGXLJ' => 234,
        'YXXXFDD' => 235,
        'YXXYBJ' => 236,
        'YXXYDGS' => 237,
        'YXXYJJ' => 238,
        'YXXZRGLJ' => 239,
        'YXXZGH' => 240,

        'JGSSCZJ' => 300,
        'JGSSRMFY' => 301,
        'JGSSJTJ' => 302,
        'JGSSQXJ' => 303,
        'JGSSTHJJ' => 304,
        'JGSSSLJ' => 305,
        'JGSSTRQGS' => 306,
        'JGSSWGXJ' => 307,
        'JGSSWMB' => 308,
        'JGSSYJGLJ' => 309,
        'JGSSZJJ' => 310,

        'AFXZJJ' => 400,
        'AFXLYJ' => 401,
        'AFXSFJ' => 402,
        'AFXSCJDGLJ' => 403,
        'AFXSUIWJ' => 404,
        'AFXJJDD' => 405,
        'AFXRSJ' => 406,
        'AFXCGJ' => 407,
        'AFXJTYSJ' => 408,
        'AFXNYNCJ' => 409,
        'AFXYJGLJ' => 410,
        'AFXSLJ' => 411,
        'AFXQXJ' => 412,
        'AFXXFDD' => 413,
        'AFXWJW' => 414,
        'AFXFY' => 415,
        'AFXSWJ' => 416,
        'AFXSTJ' => 417,
        'AFXGAJ' => 418,
        'AFXZRZYJ' => 419,
        'AFXYCGS' => 420,
        'AFXWGXLJ' => 421,
        'AFXMZJ' => 422,
        'AFXGXJ' => 423,
        'AFXJTJ' => 424,
        'AFXCZJ' => 425,
        'AFXYBJ' => 426,
        'AFXTJJ' => 427,
        'AFXSJJ' => 428,
        'AFXKJJ' => 429,

        'WAXSGJDGLJ' => 500,
        'WAXFY' => 501,
        'WAXGAJ' => 502,
        'WAXWMB' => 503,
        'WAXCZJ' => 504,
        'WAXRSJ' => 505,
        'WAXZJJ' => 506,
        'WAXSTJ' => 507,
        'WAXZRZYJ' => 508,
        'WAXMZJ' => 509,
        'WAXTJJ' => 510,
        'WAXSJJ' => 511,
        'WAXSFJ' => 512,
        'WAXJJDD' => 513,
        'WAXWGXLJ' => 514,
        'WAXWJW' => 515,
        'WAXJTGLJ' => 516,
        'WAXJTJ' => 517,
        'WAXSWJ' => 518,
        'WAXKJJ' => 519,
        'WAXYJGLJ' => 520,
        'WAXGXJ' => 521,
        'WAXCGJ' => 522,
        'WAXSLJ' => 523,
        'WAXLYJ' => 524,
        'WAXNYNCJ' => 525,
        'WAXBB' => 526,
        'WAXFL' => 527,
        'WAXZGH' => 528,
        'WATXW' => 529,
        'WAXSUIWJ' => 530,
        'WAXQXJ' => 531,
        'WAXYCJ' => 532,
        'WAXXFDD' => 533,
        'WAXSWJT' => 534,
        'WAXTRQGS' => 535,
        'WAXDXGS' => 536,
        'WAXYDGS' => 537,
        'WAXLTGS' => 538,

        'YFXFL' => 600,
        'YFXTJJ' => 601,
        'YFXSLJ' => 602,
        'YFXRSJ' => 603,
        'YFXCZJ' => 604,
        'YFXZJJ' => 605,
        'YFXJTYSJ' => 606,
        'YFXCGJ' => 607,
        'YFXYJGLJ' => 608,
        'YFXBB' => 609,
        'YFXDXJ' => 610,
        'YFXFY' => 611,
        'YFXGXJ' => 612,
        'YFXGDGS' => 613,
        'YFXJTJ' => 614,
        'YFXMZJ' => 615,
        'YFXSWJ' => 616,
        'YFXWJW' => 617,
        'YFXXFDD' => 618,
        'YFXHRRQ' => 619,
        'YFXLYJ' => 620,
        'YFXXCB' => 621,
        'YFXYDGS' => 622,
        'YFXYBJ' => 623,
        'YFXSTJ' => 624,
        'YFXZGH' => 625,
        'YFXGAJ' => 626,
        'YFXSFJ' => 627,
        'YFXQXJ' => 628,
        'YFTXW' => 629,
        'YFXYCJ' => 630,
        'YFXWGXLJ' => 631,
        'YFXGSGS' => 632,
        'YFXZRZRJ' => 633,
        'YFXNYNCJ' => 634,
        'YFXLTGS' => 635,
        'YFXRH' => 636,

        'JSXYJJ' => 700,
        'JSXCZJ' => 701,
        'JSXDXGS' => 702,
        'JSXGAJ' => 703,
        'JSXFY' => 704,
        'JSXZJJ' => 705,
        'JSXFL' => 706,
        'JSXGXJ' => 707,
        'JSXGDGS' => 708,
        'JSXZRZYJ' => 709,
        'JSXSTHJJ' => 710,
        'JGSSWGXJ' => 307,
        'JSXJTYSJ' => 711,
        'JSXJTJ' => 712,
        'JSXJRB' => 713,
        'JSXKJJ' => 714,
        'JSXLTGS' => 715,
        'JSXLYJ' => 716,
        'JSXNYNCJ' => 717,
        'JSXWGXLJ' => 718,
        'JSXMZJ' => 719,
        'JSXQXJ' => 720,
        'JSXRSJ' => 721,
        'JSXSWJ' => 722,
        'JSXSJJ' => 723,
        'JSXSLJ' => 724,
        'JSXSFJ' => 725,
        'JSXTJJ' => 726,
        'JSTXW' => 727,
        'JSXWJW' => 728,
        'JSXWMB' => 729,
        'JSXXFDD' => 730,
        'JSXYDGS' => 731,
        'JSXZFGJJ' => 732,
        'JSXZGH' => 733,
        'JSXHRRQ' => 734,
        'JSXCGJ' => 735,
        'JSXSUIWJ' => 736,
        'JSXYCJ' => 737,
        'JSXYBJ' => 738,
        'JSXGSGS' => 739,

        'JGQYBJ' => 800,
        'JGQXZSPJ' => 801,
        'JGQYJJ' => 802,
        'JGQBB' => 803,
        'JGQCZJ' => 804,
        'JGQZJJ' => 805,
        'JGQFY' => 806,
        'JGQFL' => 807,
        'JGQGXJ' => 808,
        'JGQGAFJ' => 809,
        'JGQJJDD' => 810,
        'JGQZYFJ' => 811,
        'JGQGZZX' => 812,
        'JGQSTJ' => 813,
        'JGQJTJ' => 814,
        'JGQJYTYJ' => 815,
        'JGQKJJ' => 816,
        'JGQNCJ' => 817,
        'JGQLYFJ' => 818,
        'JGQWGXLJ' => 819,
        'JGQMZJ' => 820,
        'JGQRSJ' => 821,
        'JGQSWJ' => 822,
        'JGQSJJ' => 823,
        'JGQSLJ' => 824,
        'JGQSFJ' => 825,
        'JGQTJJ' => 826,
        'JGQTQW' => 827,
        'JGQWJW' => 828,
        'JGQWMW' => 829,
        'JGQXFDD' => 830,
        'JGQZGH' => 831,
        'JGQCGJ' => 832,
        'JGQSUIWJ' => 833,
        'JGQYCJ' => 834,

        'THXRSJ' => 850,
        'THXCZJ' => 851,
        'THXGXJ' => 852,
        'THXSWJ' => 853,
        'THXTJJ' => 854,
        'THXNCNYJ' => 855,
        'THXLYJ' => 856,
        'THXSLJ' => 857,
        'THXZRZYJ' => 858,
        'THXZJJ' => 859,
        'THXJTYSJ' => 860,
        'THXSTJ' => 861,
        'THXYJJ' => 862,
        'THXSJJ' => 863,
        'THXKJJ' => 864,
        'THXMZJ' => 865,
        'THXJTJ' => 866,
        'THXWJW' => 867,
        'THXWGXLJ' => 868,
        'THXGAJ' => 869,
        'THXFY' => 870,
        'THXXCB' => 871,
        'THXBB' => 872,
        'THXTXW' => 873,
        'THXFL' => 874,
        'THXZGH' => 875,
        'THXSFJ' => 876,
        'THXSUIWJ' => 877,
        'THXQXJ' => 878,
        'THXYBJ' => 879,
        'THXCGJ' => 880,
        'THXXFDD' => 881,
        'THXRH' => 882,
        'THXGDGS' => 883,
        'THXDXGS' => 884,
        'THXLTGS' => 885,
        'THXYDGS' => 886,
        'THXZLSGS' => 887,
        'THXYCJ' => 888,
        'THXHRRQ' => 889,
        'THXJJDD' => 890,

        'XJXWTZB' => 900,
        'XJXJTJ' => 901,
        'XJXGXJ' => 902,
        'XJXGAJ' => 903,
        'XJXMZJ' => 904,
        'XJXCZJ' => 905,
        'XJXRSJ' => 906,
        'XJXZRZYJ' => 907,
        'XJXZJJ' => 908,
        'XJXSTJ' => 909,
        'XJXJTYSJ' => 910,
        'XJXSLJ' => 911,
        'XJXNYNCJ' => 912,
        'XJXSFJ' => 913,
        'XJXWGXLJ' => 914,
        'XJXWJW' => 915,
        'XJXYJJ' => 916,
        'XJXLYJ' => 917,
        'XJXSJJ' => 918,
        'XJXYBJ' => 919,
        'XJXTJJ' => 920,
        'XJXCGJ' => 921,
        'XJXQXJ' => 922,
        'XJXSWJ' => 923,
        'XJXXFDD' => 924,
        'XJXXFY' => 925,
        'XJXYCJ' => 926,
        'XJXJJDD' => 927,
        'XJXXARQ' => 928,
        'XJXGDGS' => 929,

        'QYQZJJ' => 950,
        'QYQSFJ' => 952,
        'QYQSJJ' => 953,
        'QYQSWJ' => 954,
        'QYQJJDD' => 955,
        'QYQRSJ' => 956,
        'QYQCGJ' => 957,
        'QYQYSJ' => 958,
        'QYQNCJ' => 959,
        'QYQYJJ' => 960,
        'QYQSLJ' => 961,
        'QYQXFDD' => 962,
        'QYQWJW' => 963,
        'QYQFY' => 964,
        'QYQSTJ' => 965,
        'QYQGAJ' => 966,
        'QYQZRZYJ' => 967,
        'QYQYCJ' => 968,
        'QYQGXLJ' => 969,
        'QYQGXJ' => 971,
        'QYQJTJ' => 972,
        'QYQCZJ' => 973,
        'QYQKJJ' => 974,
        'QYQTJJ' => 975,
        'QYQTQW' => 976,

        'SXFZD' => 983,
        'JAXXFDD' => 984,
        'YFXKJJ' => 985,
        'YFXSJJ' => 986,
        'GJSWJZJYFXSWJ' => 987,
        'YFXJJDD' => 988,

        'JKQXZGLJ' => 1000,
        'JKQYJGlJ' => 1001,
        'JKQXF' => 1002,
        'JKQJFJ' => 1003,
        'JKQJJZD' => 1004,
        'JKQGAJ' => 1005,
        'JKQSWJ' => 1006,
        'JKQZRZYJ' => 1007,
        'JKQZHZFJ' => 1008,
        'JKQSHSYJ' => 1009,
        'JKQHBJ' => 1010,
        'RSJ' => 1011,

        'SHRRQ' => 1030,
        'SBB' => 1031,
        'SYCZMJ' => 1032,
        'SYLBZJ' => 1033,
        'SCRJJCJ' => 1034,
        'SDAG' => 1035,
        'SHG' => 1036,
        'SQXJ' => 1037,
        'SRFB' => 1038,
        'SSLJ' => 1039,
        'GAJ' => 1040,
        'TSW' => 1041,
        'SWXDGLJ' => 1042,
        'SDXGS' => 1043,
        'SYDGS' => 1044,
        'SLTGS' => 1045,
    );
}
