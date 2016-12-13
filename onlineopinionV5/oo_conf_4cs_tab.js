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

/* Detect if English, Chinese Simplified, English UK, or Japanese */

var oo_is_english = (location.href.toLowerCase().indexOf('/en-us') > -1),
    oo_is_chinese_simplified = (location.href.toLowerCase().indexOf('/zh-cn') > -1),
    oo_is_chinese_traditional = (location.href.toLowerCase().indexOf('/zh-hk') > -1),
    oo_is_japanese = (location.href.toLowerCase().indexOf('/ja-jp') > -1);

/* Create configuration for the translated object */
var oo_tab_verbiage;

/* IF translating a horizontal tab, uncomment the variables below,
    to set custom style rules then add them to the HTML in the OpinionLabInit() */
var oo_tab_right_1_width,
    oo_tab_right_1_right,
    oo_tab_right_1_right_small;

/* IF translating a vertical tab, uncomment the variables below,
    to set custom style rules then add them to the HTML in the OpinionLabInit() */
// custom vertical tab style rules here

if (oo_is_chinese_simplified === true) {
    oo_tab_verbiage = '&#24847;&#35265;&#21453;&#39304;';
    oo_tab_right_1_width = '120px';
    oo_tab_right_1_right = '-5px';
    oo_tab_right_1_right_small = '-85px';
} else if (oo_is_chinese_traditional === true) {
    oo_tab_verbiage = '&#24847;&#35211;&#22238;&#39243;';
    oo_tab_right_1_width = '120px';
    oo_tab_right_1_right = '-5px';
    oo_tab_right_1_right_small = '-85px';
} else if (oo_is_japanese === true) {
    oo_tab_verbiage = '&#12501;&#12451;&#12540;&#12489;&#12496;&#12483;&#12463;';
    oo_tab_right_1_width = '120px';
    oo_tab_right_1_right = '-5px';
    oo_tab_right_1_right_small = '-85px';
} else {
    oo_tab_verbiage = 'Feedback';
    oo_tab_right_1_width = '120px';
    oo_tab_right_1_right = '-5px';
    oo_tab_right_1_right_small = '-85px';
}

/* [+] Tab configuration */
(function (w, o) {
    'use strict';

    var OpinionLabInit = function () {

        o.oo_tab = new o.Ocode({
            tab: {
                position: 'right',
                title: oo_tab_verbiage,
                tabType: 1,
                verbiage: oo_tab_verbiage
            },
            onPageCard: {
                closeWithOverlay: true
            },
            referrerRewrite: {
                searchPattern: /:\/\/.*/g,
                replacePattern: '://4cs.gia.edu' + window.location.pathname
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

        /* START TRANSLATED TAB ONLY - IF adding a translated tab,
            uncomment below to adjust it's CSS rules */

        /* Add custom styles so tabs display properly in each language */
        var oo_style_element = document.createElement('style'),
            oo_css_rules = '';

        /* IF oo_tab_1_right, uncomment the patterns below */
        oo_css_rules += '#oo_tab_1.oo_tab_right_1 { ' + 'right: ' + oo_tab_right_1_right + '; ';
        oo_css_rules += 'width: ' + oo_tab_right_1_width + ' } ';
        oo_css_rules += '#oo_tab_1.oo_tab_right_1.small { ' + 'right: ' + oo_tab_right_1_right_small + ' }';

        /* IF oo_tab, uncomment the patterns below */
        // common oo_tab oo_css_rules go here

        /* Always include the pattern below to append oo_style_element to HTML */
        oo_style_element.innerHTML = oo_css_rules;
        document.body.appendChild(oo_style_element);

        /* END TRANSLATED TAB ONLY */

    };

    o.addEventListener(w, 'load', OpinionLabInit, false);

})(window, OOo);

