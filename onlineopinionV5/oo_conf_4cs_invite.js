/*
OnlineOpinion v5.9.0
Released: 11/17/2014. Compiled 11/17/2014 01:01:01 PM -0600
Branch: master 7cffc7b9a0b11594d56b71ca0cb042d9b0fc24f5
Components: Full
UMD: disabled
The following code is Copyright 1998-2014 Opinionlab, Inc. All rights reserved. Unauthorized use is prohibited. This product and other products of OpinionLab, Inc. are protected by U.S. Patent No. 6606581, 6421724, 6785717 B1 and other patents pending. http://www.opinionlab.com
*/

/* global window, OOo */

// 4cs.gia.edu

/* Invitation configuration */

/* Detect if English, Chinese Simplified, English UK, or Japanese */
var oo_is_english = (location.href.toLowerCase().indexOf('/en-us') > -1),
    oo_is_chinese_simplified = (location.href.toLowerCase().indexOf('/zh-cn') > -1),
    oo_is_chinese_traditional = (location.href.toLowerCase().indexOf('/zh-hk') > -1),
    oo_is_japanese = (location.href.toLowerCase().indexOf('/ja-jp') > -1);

/* Create configuration for the translated oo_invite object */
var oo_lang,
    oo_company_slogan,
    oo_new_window_size,
    ooPathNameInvite4cs = window.location.pathname;

if (oo_is_chinese_simplified) {
    oo_lang = 'cn_simplified';
    oo_company_slogan = '&#25105;&#20204;&#30340;&#25913;&#36827;&#65292;&#38656;&#35201;&#24744;&#30340;&#24110;&#21161;&#12290;';
    oo_new_window_size = [350, 315];
} else if (oo_is_chinese_traditional) {
    oo_lang = 'cn_traditional';
    oo_company_slogan = '&#25105;&#20497;&#30340;&#25913;&#36914;&#65292;&#38656;&#35201;&#24744;&#30340;&#21332;&#21161;&#12290;';
    oo_new_window_size = [375, 315];
} else if (oo_is_japanese) {
    oo_lang = 'jp';
    oo_company_slogan = '&#12469;&#12540;&#12499;&#12473;&#21521;&#19978;&#12395;&#12372;&#21332;&#21147;&#12367;&#12384;&#12373;&#12356;&#12290;';
    oo_new_window_size = [425, 335];
} else {
    oo_lang = 'en_us';
    oo_company_slogan = 'Please help us improve.';
    oo_new_window_size = [325, 250];
}

/* Create the prompt and monitor variable based on the language */
var oo_prompt_markup = 'oo_inv_prompt_' + oo_lang + '.html',
    oo_monitor_window = 'oo_inv_monitor_' + oo_lang + '.html';

(function (w, o) {
    'use strict';

    var OpinionLabInit = function () {
      if(!OOo.Browser.isMobile){
        o.oo_invite = new o.Invitation({
        /* REQUIRED - Asset identification */
            pathToAssets: '/onlineopinionV5/',
            companyLogo: '/onlineopinionV5/GIA-Logo.png',
            companySlogan: oo_company_slogan,
            promptMarkup: oo_prompt_markup,
            monitorWindow: oo_monitor_window,
            newWindowSize: oo_new_window_size,
        /* OPTIONAL - Configuration */
            responseRate: 50,
            repromptTime: 2592000,
            promptDelay: 3,
            referrerRewrite: {
                searchPattern: /:\/\/.*/g,
                replacePattern: '://invite.4cs.gia.edu' + ooPathNameInvite4cs
            },
            customVariables: {
                _utma: o.readCookie('_utma'),
                siteSection: typeof siteSection !== 'undefined' ? siteSection : '',
                siteSubSection: typeof siteSubSection !== 'undefined' ? siteSubSection : '',
                pageType: typeof pageType !== 'undefined' ? pageType : '',
                articleGemstone: typeof articleGemstone !== 'undefined' ? articleGemstone : '',
                articleAuthor: typeof articleAuthor !== 'undefined' ? articleAuthor : ''
            }
        });
      }

    };


    o.addEventListener(w, 'load', OpinionLabInit, false);

})(window, OOo);
