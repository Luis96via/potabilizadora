<?php
function restrofood_fa_icons( $html = '' ){
  $icons = array(
	'fa-glass'=>'&#xf000;  fa-glass',
	'fa-music'=>'&#xf001;  fa-music',
	'fa-search'=>'&#xf002;  fa-search',
	'fa-envelope-o'=>'&#xf003;  fa-envelope-o',
	'fa-heart'=>'&#xf004;  fa-heart',
	'fa-star'=>'&#xf005;  fa-star',
	'fa-star-o'=>'&#xf006;  fa-star-o',
	'fa-user'=>'&#xf007;  fa-user',
	'fa-film'=>'&#xf008;  fa-film',
	'fa-th-large'=>'&#xf009;  fa-th-large',
	'fa-th'=>'&#xf00a;  fa-th',
	'fa-th-list'=>'&#xf00b;  fa-th-list',
	'fa-check'=>'&#xf00c;  fa-check',
	'fa-times'=>'&#xf00d;  fa-times',
	'fa-search-plus'=>'&#xf00e;  fa-search-plus',
	'fa-search-minus'=>'&#xf010;  fa-search-minus',
	'fa-power-off'=>'&#xf011;  fa-power-off',
	'fa-signal'=>'&#xf012;  fa-signal',
	'fa-cog'=>'&#xf013;  fa-cog',
	'fa-trash-o'=>'&#xf014;  fa-trash-o',
	'fa-home'=>'&#xf015;  fa-home',
	'fa-file-o'=>'&#xf016;  fa-file-o',
	'fa-clock-o'=>'&#xf017;  fa-clock-o',
	'fa-road'=>'&#xf018;  fa-road',
	'fa-download'=>'&#xf019;  fa-download',
	'fa-arrow-circle-o-down'=>'&#xf01a;  fa-arrow-circle-o-down',
	'fa-arrow-circle-o-up'=>'&#xf01b;  fa-arrow-circle-o-up',
	'fa-inbox'=>'&#xf01c;  fa-inbox',
	'fa-play-circle-o'=>'&#xf01d;  fa-play-circle-o',
	'fa-repeat'=>'&#xf01e;  fa-repeat',
	'fa-refresh'=>'&#xf021;  fa-refresh',
	'fa-list-alt'=>'&#xf022;  fa-list-alt',
	'fa-lock'=>'&#xf023;  fa-lock',
	'fa-flag'=>'&#xf024;  fa-flag',
	'fa-headphones'=>'&#xf025;  fa-headphones',
	'fa-volume-off'=>'&#xf026;  fa-volume-off',
	'fa-volume-down'=>'&#xf027;  fa-volume-down',
	'fa-volume-up'=>'&#xf028;  fa-volume-up',
	'fa-qrcode'=>'&#xf029;  fa-qrcode',
	'fa-barcode'=>'&#xf02a;  fa-barcode',
	'fa-tag'=>'&#xf02b;  fa-tag',
	'fa-tags'=>'&#xf02c;  fa-tags',
	'fa-book'=>'&#xf02d;  fa-book',
	'fa-bookmark'=>'&#xf02e;  fa-bookmark',
	'fa-print'=>'&#xf02f;  fa-print',
	'fa-camera'=>'&#xf030;  fa-camera',
	'fa-font'=>'&#xf031;  fa-font',
	'fa-bold'=>'&#xf032;  fa-bold',
	'fa-italic'=>'&#xf033;  fa-italic',
	'fa-text-height'=>'&#xf034;  fa-text-height',
	'fa-text-width'=>'&#xf035;  fa-text-width',
	'fa-align-left'=>'&#xf036;  fa-align-left',
	'fa-align-center'=>'&#xf037;  fa-align-center',
	'fa-align-right'=>'&#xf038;  fa-align-right',
	'fa-align-justify'=>'&#xf039;  fa-align-justify',
	'fa-list'=>'&#xf03a;  fa-list',
	'fa-outdent'=>'&#xf03b;  fa-outdent',
	'fa-indent'=>'&#xf03c;  fa-indent',
	'fa-video-camera'=>'&#xf03d;  fa-video-camera',
	'fa-picture-o'=>'&#xf03e;  fa-picture-o',
	'fa-pencil'=>'&#xf040;  fa-pencil',
	'fa-map-marker'=>'&#xf041;  fa-map-marker',
	'fa-adjust'=>'&#xf042;  fa-adjust',
	'fa-tint'=>'&#xf043;  fa-tint',
	'fa-pencil-square-o'=>'&#xf044;  fa-pencil-square-o',
	'fa-share-square-o'=>'&#xf045;  fa-share-square-o',
	'fa-check-square-o'=>'&#xf046;  fa-check-square-o',
	'fa-arrows'=>'&#xf047;  fa-arrows',
	'fa-step-backward'=>'&#xf048;  fa-step-backward',
	'fa-fast-backward'=>'&#xf049;  fa-fast-backward',
	'fa-backward'=>'&#xf04a;  fa-backward',
	'fa-play'=>'&#xf04b;  fa-play',
	'fa-pause'=>'&#xf04c;  fa-pause',
	'fa-stop'=>'&#xf04d;  fa-stop',
	'fa-forward'=>'&#xf04e;  fa-forward',
	'fa-fast-forward'=>'&#xf050;  fa-fast-forward',
	'fa-step-forward'=>'&#xf051;  fa-step-forward',
	'fa-eject'=>'&#xf052;  fa-eject',
	'fa-chevron-left'=>'&#xf053;  fa-chevron-left',
	'fa-chevron-right'=>'&#xf054;  fa-chevron-right',
	'fa-plus-circle'=>'&#xf055;  fa-plus-circle',
	'fa-minus-circle'=>'&#xf056;  fa-minus-circle',
	'fa-times-circle'=>'&#xf057;  fa-times-circle',
	'fa-check-circle'=>'&#xf058;  fa-check-circle',
	'fa-question-circle'=>'&#xf059;  fa-question-circle',
	'fa-info-circle'=>'&#xf05a;  fa-info-circle',
	'fa-crosshairs'=>'&#xf05b;  fa-crosshairs',
	'fa-times-circle-o'=>'&#xf05c;  fa-times-circle-o',
	'fa-check-circle-o'=>'&#xf05d;  fa-check-circle-o',
	'fa-ban'=>'&#xf05e;  fa-ban',
	'fa-arrow-left'=>'&#xf060;  fa-arrow-left',
	'fa-arrow-right'=>'&#xf061;  fa-arrow-right',
	'fa-arrow-up'=>'&#xf062;  fa-arrow-up',
	'fa-arrow-down'=>'&#xf063;  fa-arrow-down',
	'fa-share'=>'&#xf064;  fa-share',
	'fa-expand'=>'&#xf065;  fa-expand',
	'fa-compress'=>'&#xf066;  fa-compress',
	'fa-plus'=>'&#xf067;  fa-plus',
	'fa-minus'=>'&#xf068;  fa-minus',
	'fa-asterisk'=>'&#xf069;  fa-asterisk',
	'fa-exclamation-circle'=>'&#xf06a;  fa-exclamation-circle',
	'fa-gift'=>'&#xf06b;  fa-gift',
	'fa-leaf'=>'&#xf06c;  fa-leaf',
	'fa-fire'=>'&#xf06d;  fa-fire',
	'fa-eye'=>'&#xf06e;  fa-eye',
	'fa-eye-slash'=>'&#xf070;  fa-eye-slash',
	'fa-exclamation-triangle'=>'&#xf071;  fa-exclamation-triangle',
	'fa-plane'=>'&#xf072;  fa-plane',
	'fa-calendar'=>'&#xf073;  fa-calendar',
	'fa-random'=>'&#xf074;  fa-random',
	'fa-comment'=>'&#xf075;  fa-comment',
	'fa-magnet'=>'&#xf076;  fa-magnet',
	'fa-chevron-up'=>'&#xf077;  fa-chevron-up',
	'fa-chevron-down'=>'&#xf078;  fa-chevron-down',
	'fa-retweet'=>'&#xf079;  fa-retweet',
	'fa-shopping-cart'=>'&#xf07a;  fa-shopping-cart',
	'fa-folder'=>'&#xf07b;  fa-folder',
	'fa-folder-open'=>'&#xf07c;  fa-folder-open',
	'fa-arrows-v'=>'&#xf07d;  fa-arrows-v',
	'fa-arrows-h'=>'&#xf07e;  fa-arrows-h',
	'fa-bar-chart'=>'&#xf080;  fa-bar-chart',
	'fa-twitter-square'=>'&#xf081;  fa-twitter-square',
	'fa-facebook-square'=>'&#xf082;  fa-facebook-square',
	'fa-camera-retro'=>'&#xf083;  fa-camera-retro',
	'fa-key'=>'&#xf084;  fa-key',
	'fa-cogs'=>'&#xf085;  fa-cogs',
	'fa-comments'=>'&#xf086;  fa-comments',
	'fa-thumbs-o-up'=>'&#xf087;  fa-thumbs-o-up',
	'fa-thumbs-o-down'=>'&#xf088;  fa-thumbs-o-down',
	'fa-star-half'=>'&#xf089;  fa-star-half',
	'fa-heart-o'=>'&#xf08a;  fa-heart-o',
	'fa-sign-out'=>'&#xf08b;  fa-sign-out',
	'fa-linkedin-square'=>'&#xf08c;  fa-linkedin-square',
	'fa-thumb-tack'=>'&#xf08d;  fa-thumb-tack',
	'fa-external-link'=>'&#xf08e;  fa-external-link',
	'fa-sign-in'=>'&#xf090;  fa-sign-in',
	'fa-trophy'=>'&#xf091;  fa-trophy',
	'fa-github-square'=>'&#xf092;  fa-github-square',
	'fa-upload'=>'&#xf093;  fa-upload',
	'fa-lemon-o'=>'&#xf094;  fa-lemon-o',
	'fa-phone'=>'&#xf095;  fa-phone',
	'fa-square-o'=>'&#xf096;  fa-square-o',
	'fa-bookmark-o'=>'&#xf097;  fa-bookmark-o',
	'fa-phone-square'=>'&#xf098;  fa-phone-square',
	'fa-twitter'=>'&#xf099;  fa-twitter',
	'fa-facebook'=>'&#xf09a;  fa-facebook',
	'fa-github'=>'&#xf09b;  fa-github',
	'fa-unlock'=>'&#xf09c;  fa-unlock',
	'fa-credit-card'=>'&#xf09d;  fa-credit-card',
	'fa-rss'=>'&#xf09e;  fa-rss',
	'fa-hdd-o'=>'&#xf0a0;  fa-hdd-o',
	'fa-bullhorn'=>'&#xf0a1;  fa-bullhorn',
	'fa-bell'=>'&#xf0f3;  fa-bell',
	'fa-certificate'=>'&#xf0a3;  fa-certificate',
	'fa-hand-o-right'=>'&#xf0a4;  fa-hand-o-right',
	'fa-hand-o-left'=>'&#xf0a5;  fa-hand-o-left',
	'fa-hand-o-up'=>'&#xf0a6;  fa-hand-o-up',
	'fa-hand-o-down'=>'&#xf0a7;  fa-hand-o-down',
	'fa-arrow-circle-left'=>'&#xf0a8;  fa-arrow-circle-left',
	'fa-arrow-circle-right'=>'&#xf0a9;  fa-arrow-circle-right',
	'fa-arrow-circle-up'=>'&#xf0aa;  fa-arrow-circle-up',
	'fa-arrow-circle-down'=>'&#xf0ab;  fa-arrow-circle-down',
	'fa-globe'=>'&#xf0ac;  fa-globe',
	'fa-wrench'=>'&#xf0ad;  fa-wrench',
	'fa-tasks'=>'&#xf0ae;  fa-tasks',
	'fa-filter'=>'&#xf0b0;  fa-filter',
	'fa-briefcase'=>'&#xf0b1;  fa-briefcase',
	'fa-arrows-alt'=>'&#xf0b2;  fa-arrows-alt',
	'fa-users'=>'&#xf0c0;  fa-users',
	'fa-link'=>'&#xf0c1;  fa-link',
	'fa-cloud'=>'&#xf0c2;  fa-cloud',
	'fa-flask'=>'&#xf0c3;  fa-flask',
	'fa-scissors'=>'&#xf0c4;  fa-scissors',
	'fa-files-o'=>'&#xf0c5;  fa-files-o',
	'fa-paperclip'=>'&#xf0c6;  fa-paperclip',
	'fa-floppy-o'=>'&#xf0c7;  fa-floppy-o',
	'fa-square'=>'&#xf0c8;  fa-square',
	'fa-bars'=>'&#xf0c9;  fa-bars',
	'fa-list-ul'=>'&#xf0ca;  fa-list-ul',
	'fa-list-ol'=>'&#xf0cb;  fa-list-ol',
	'fa-strikethrough'=>'&#xf0cc;  fa-strikethrough',
	'fa-underline'=>'&#xf0cd;  fa-underline',
	'fa-table'=>'&#xf0ce;  fa-table',
	'fa-magic'=>'&#xf0d0;  fa-magic',
	'fa-truck'=>'&#xf0d1;  fa-truck',
	'fa-pinterest'=>'&#xf0d2;  fa-pinterest',
	'fa-pinterest-square'=>'&#xf0d3;  fa-pinterest-square',
	'fa-google-plus-square'=>'&#xf0d4;  fa-google-plus-square',
	'fa-google-plus'=>'&#xf0d5;  fa-google-plus',
	'fa-money'=>'&#xf0d6;  fa-money',
	'fa-caret-down'=>'&#xf0d7;  fa-caret-down',
	'fa-caret-up'=>'&#xf0d8;  fa-caret-up',
	'fa-caret-left'=>'&#xf0d9;  fa-caret-left',
	'fa-caret-right'=>'&#xf0da;  fa-caret-right',
	'fa-columns'=>'&#xf0db;  fa-columns',
	'fa-sort'=>'&#xf0dc;  fa-sort',
	'fa-sort-desc'=>'&#xf0dd;  fa-sort-desc',
	'fa-sort-asc'=>'&#xf0de;  fa-sort-asc',
	'fa-envelope'=>'&#xf0e0;  fa-envelope',
	'fa-linkedin'=>'&#xf0e1;  fa-linkedin',
	'fa-undo'=>'&#xf0e2;  fa-undo',
	'fa-gavel'=>'&#xf0e3;  fa-gavel',
	'fa-tachometer'=>'&#xf0e4;  fa-tachometer',
	'fa-comment-o'=>'&#xf0e5;  fa-comment-o',
	'fa-comments-o'=>'&#xf0e6;  fa-comments-o',
	'fa-bolt'=>'&#xf0e7;  fa-bolt',
	'fa-sitemap'=>'&#xf0e8;  fa-sitemap',
	'fa-umbrella'=>'&#xf0e9;  fa-umbrella',
	'fa-clipboard'=>'&#xf0ea;  fa-clipboard',
	'fa-lightbulb-o'=>'&#xf0eb;  fa-lightbulb-o',
	'fa-exchange'=>'&#xf0ec;  fa-exchange',
	'fa-cloud-download'=>'&#xf0ed;  fa-cloud-download',
	'fa-cloud-upload'=>'&#xf0ee;  fa-cloud-upload',
	'fa-user-md'=>'&#xf0f0;  fa-user-md',
	'fa-stethoscope'=>'&#xf0f1;  fa-stethoscope',
	'fa-suitcase'=>'&#xf0f2;  fa-suitcase',
	'fa-bell-o'=>'&#xf0a2;  fa-bell-o',
	'fa-coffee'=>'&#xf0f4;  fa-coffee',
	'fa-cutlery'=>'&#xf0f5;  fa-cutlery',
	'fa-file-text-o'=>'&#xf0f6;  fa-file-text-o',
	'fa-building-o'=>'&#xf0f7;  fa-building-o',
	'fa-hospital-o'=>'&#xf0f8;  fa-hospital-o',
	'fa-ambulance'=>'&#xf0f9;  fa-ambulance',
	'fa-medkit'=>'&#xf0fa;  fa-medkit',
	'fa-fighter-jet'=>'&#xf0fb;  fa-fighter-jet',
	'fa-beer'=>'&#xf0fc;  fa-beer',
	'fa-h-square'=>'&#xf0fd;  fa-h-square',
	'fa-plus-square'=>'&#xf0fe;  fa-plus-square',
	'fa-angle-double-left'=>'&#xf100;  fa-angle-double-left',
	'fa-angle-double-right'=>'&#xf101;  fa-angle-double-right',
	'fa-angle-double-up'=>'&#xf102;  fa-angle-double-up',
	'fa-angle-double-down'=>'&#xf103;  fa-angle-double-down',
	'fa-angle-left'=>'&#xf104;  fa-angle-left',
	'fa-angle-right'=>'&#xf105;  fa-angle-right',
	'fa-angle-up'=>'&#xf106;  fa-angle-up',
	'fa-angle-down'=>'&#xf107;  fa-angle-down',
	'fa-desktop'=>'&#xf108;  fa-desktop',
	'fa-laptop'=>'&#xf109;  fa-laptop',
	'fa-tablet'=>'&#xf10a;  fa-tablet',
	'fa-mobile'=>'&#xf10b;  fa-mobile',
	'fa-circle-o'=>'&#xf10c;  fa-circle-o',
	'fa-quote-left'=>'&#xf10d;  fa-quote-left',
	'fa-quote-right'=>'&#xf10e;  fa-quote-right',
	'fa-spinner'=>'&#xf110;  fa-spinner',
	'fa-circle'=>'&#xf111;  fa-circle',
	'fa-reply'=>'&#xf112;  fa-reply',
	'fa-github-alt'=>'&#xf113;  fa-github-alt',
	'fa-folder-o'=>'&#xf114;  fa-folder-o',
	'fa-folder-open-o'=>'&#xf115;  fa-folder-open-o',
	'fa-smile-o'=>'&#xf118;  fa-smile-o',
	'fa-frown-o'=>'&#xf119;  fa-frown-o',
	'fa-meh-o'=>'&#xf11a;  fa-meh-o',
	'fa-gamepad'=>'&#xf11b;  fa-gamepad',
	'fa-keyboard-o'=>'&#xf11c;  fa-keyboard-o',
	'fa-flag-o'=>'&#xf11d;  fa-flag-o',
	'fa-flag-checkered'=>'&#xf11e;  fa-flag-checkered',
	'fa-terminal'=>'&#xf120;  fa-terminal',
	'fa-code'=>'&#xf121;  fa-code',
	'fa-reply-all'=>'&#xf122;  fa-reply-all',
	'fa-star-half-o'=>'&#xf123;  fa-star-half-o',
	'fa-location-arrow'=>'&#xf124;  fa-location-arrow',
	'fa-crop'=>'&#xf125;  fa-crop',
	'fa-code-fork'=>'&#xf126;  fa-code-fork',
	'fa-chain-broken'=>'&#xf127;  fa-chain-broken',
	'fa-question'=>'&#xf128;  fa-question',
	'fa-info'=>'&#xf129;  fa-info',
	'fa-exclamation'=>'&#xf12a;  fa-exclamation',
	'fa-superscript'=>'&#xf12b;  fa-superscript',
	'fa-subscript'=>'&#xf12c;  fa-subscript',
	'fa-eraser'=>'&#xf12d;  fa-eraser',
	'fa-puzzle-piece'=>'&#xf12e;  fa-puzzle-piece',
	'fa-microphone'=>'&#xf130;  fa-microphone',
	'fa-microphone-slash'=>'&#xf131;  fa-microphone-slash',
	'fa-shield'=>'&#xf132;  fa-shield',
	'fa-calendar-o'=>'&#xf133;  fa-calendar-o',
	'fa-fire-extinguisher'=>'&#xf134;  fa-fire-extinguisher',
	'fa-rocket'=>'&#xf135;  fa-rocket',
	'fa-maxcdn'=>'&#xf136;  fa-maxcdn',
	'fa-chevron-circle-left'=>'&#xf137;  fa-chevron-circle-left',
	'fa-chevron-circle-right'=>'&#xf138;  fa-chevron-circle-right',
	'fa-chevron-circle-up'=>'&#xf139;  fa-chevron-circle-up',
	'fa-chevron-circle-down'=>'&#xf13a;  fa-chevron-circle-down',
	'fa-html5'=>'&#xf13b;  fa-html5',
	'fa-css3'=>'&#xf13c;  fa-css3',
	'fa-anchor'=>'&#xf13d;  fa-anchor',
	'fa-unlock-alt'=>'&#xf13e;  fa-unlock-alt',
	'fa-bullseye'=>'&#xf140;  fa-bullseye',
	'fa-ellipsis-h'=>'&#xf141;  fa-ellipsis-h',
	'fa-ellipsis-v'=>'&#xf142;  fa-ellipsis-v',
	'fa-rss-square'=>'&#xf143;  fa-rss-square',
	'fa-play-circle'=>'&#xf144;  fa-play-circle',
	'fa-ticket'=>'&#xf145;  fa-ticket',
	'fa-minus-square'=>'&#xf146;  fa-minus-square',
	'fa-minus-square-o'=>'&#xf147;  fa-minus-square-o',
	'fa-level-up'=>'&#xf148;  fa-level-up',
	'fa-level-down'=>'&#xf149;  fa-level-down',
	'fa-check-square'=>'&#xf14a;  fa-check-square',
	'fa-pencil-square'=>'&#xf14b;  fa-pencil-square',
	'fa-external-link-square'=>'&#xf14c;  fa-external-link-square',
	'fa-share-square'=>'&#xf14d;  fa-share-square',
	'fa-compass'=>'&#xf14e;  fa-compass',
	'fa-caret-square-o-down'=>'&#xf150;  fa-caret-square-o-down',
	'fa-caret-square-o-up'=>'&#xf151;  fa-caret-square-o-up',
	'fa-caret-square-o-right'=>'&#xf152;  fa-caret-square-o-right',
	'fa-eur'=>'&#xf153;  fa-eur',
	'fa-gbp'=>'&#xf154;  fa-gbp',
	'fa-usd'=>'&#xf155;  fa-usd',
	'fa-inr'=>'&#xf156;  fa-inr',
	'fa-jpy'=>'&#xf157;  fa-jpy',
	'fa-rub'=>'&#xf158;  fa-rub',
	'fa-krw'=>'&#xf159;  fa-krw',
	'fa-btc'=>'&#xf15a;  fa-btc',
	'fa-file'=>'&#xf15b;  fa-file',
	'fa-file-text'=>'&#xf15c;  fa-file-text',
	'fa-sort-alpha-asc'=>'&#xf15d;  fa-sort-alpha-asc',
	'fa-sort-alpha-desc'=>'&#xf15e;  fa-sort-alpha-desc',
	'fa-sort-amount-asc'=>'&#xf160;  fa-sort-amount-asc',
	'fa-sort-amount-desc'=>'&#xf161;  fa-sort-amount-desc',
	'fa-sort-numeric-asc'=>'&#xf162;  fa-sort-numeric-asc',
	'fa-sort-numeric-desc'=>'&#xf163;  fa-sort-numeric-desc',
	'fa-thumbs-up'=>'&#xf164;  fa-thumbs-up',
	'fa-thumbs-down'=>'&#xf165;  fa-thumbs-down',
	'fa-youtube-square'=>'&#xf166;  fa-youtube-square',
	'fa-youtube'=>'&#xf167;  fa-youtube',
	'fa-xing'=>'&#xf168;  fa-xing',
	'fa-xing-square'=>'&#xf169;  fa-xing-square',
	'fa-youtube-play'=>'&#xf16a;  fa-youtube-play',
	'fa-dropbox'=>'&#xf16b;  fa-dropbox',
	'fa-stack-overflow'=>'&#xf16c;  fa-stack-overflow',
	'fa-instagram'=>'&#xf16d;  fa-instagram',
	'fa-flickr'=>'&#xf16e;  fa-flickr',
	'fa-adn'=>'&#xf170;  fa-adn',
	'fa-bitbucket'=>'&#xf171;  fa-bitbucket',
	'fa-bitbucket-square'=>'&#xf172;  fa-bitbucket-square',
	'fa-tumblr'=>'&#xf173;  fa-tumblr',
	'fa-tumblr-square'=>'&#xf174;  fa-tumblr-square',
	'fa-long-arrow-down'=>'&#xf175;  fa-long-arrow-down',
	'fa-long-arrow-up'=>'&#xf176;  fa-long-arrow-up',
	'fa-long-arrow-left'=>'&#xf177;  fa-long-arrow-left',
	'fa-long-arrow-right'=>'&#xf178;  fa-long-arrow-right',
	'fa-apple'=>'&#xf179;  fa-apple',
	'fa-windows'=>'&#xf17a;  fa-windows',
	'fa-android'=>'&#xf17b;  fa-android',
	'fa-linux'=>'&#xf17c;  fa-linux',
	'fa-dribbble'=>'&#xf17d;  fa-dribbble',
	'fa-skype'=>'&#xf17e;  fa-skype',
	'fa-foursquare'=>'&#xf180;  fa-foursquare',
	'fa-trello'=>'&#xf181;  fa-trello',
	'fa-female'=>'&#xf182;  fa-female',
	'fa-male'=>'&#xf183;  fa-male',
	'fa-gratipay'=>'&#xf184;  fa-gratipay',
	'fa-sun-o'=>'&#xf185;  fa-sun-o',
	'fa-moon-o'=>'&#xf186;  fa-moon-o',
	'fa-archive'=>'&#xf187;  fa-archive',
	'fa-bug'=>'&#xf188;  fa-bug',
	'fa-vk'=>'&#xf189;  fa-vk',
	'fa-weibo'=>'&#xf18a;  fa-weibo',
	'fa-renren'=>'&#xf18b;  fa-renren',
	'fa-pagelines'=>'&#xf18c;  fa-pagelines',
	'fa-stack-exchange'=>'&#xf18d;  fa-stack-exchange',
	'fa-arrow-circle-o-right'=>'&#xf18e;  fa-arrow-circle-o-right',
	'fa-arrow-circle-o-left'=>'&#xf190;  fa-arrow-circle-o-left',
	'fa-caret-square-o-left'=>'&#xf191;  fa-caret-square-o-left',
	'fa-dot-circle-o'=>'&#xf192;  fa-dot-circle-o',
	'fa-wheelchair'=>'&#xf193;  fa-wheelchair',
	'fa-vimeo-square'=>'&#xf194;  fa-vimeo-square',
	'fa-try'=>'&#xf195;  fa-try',
	'fa-plus-square-o'=>'&#xf196;  fa-plus-square-o',
	'fa-space-shuttle'=>'&#xf197;  fa-space-shuttle',
	'fa-slack'=>'&#xf198;  fa-slack',
	'fa-envelope-square'=>'&#xf199;  fa-envelope-square',
	'fa-wordpress'=>'&#xf19a;  fa-wordpress',
	'fa-openid'=>'&#xf19b;  fa-openid',
	'fa-university'=>'&#xf19c;  fa-university',
	'fa-graduation-cap'=>'&#xf19d;  fa-graduation-cap',
	'fa-yahoo'=>'&#xf19e;  fa-yahoo',
	'fa-google'=>'&#xf1a0;  fa-google',
	'fa-reddit'=>'&#xf1a1;  fa-reddit',
	'fa-reddit-square'=>'&#xf1a2;  fa-reddit-square',
	'fa-stumbleupon-circle'=>'&#xf1a3;  fa-stumbleupon-circle',
	'fa-stumbleupon'=>'&#xf1a4;  fa-stumbleupon',
	'fa-delicious'=>'&#xf1a5;  fa-delicious',
	'fa-digg'=>'&#xf1a6;  fa-digg',
	'fa-pied-piper-pp'=>'&#xf1a7;  fa-pied-piper-pp',
	'fa-pied-piper-alt'=>'&#xf1a8;  fa-pied-piper-alt',
	'fa-drupal'=>'&#xf1a9;  fa-drupal',
	'fa-joomla'=>'&#xf1aa;  fa-joomla',
	'fa-language'=>'&#xf1ab;  fa-language',
	'fa-fax'=>'&#xf1ac;  fa-fax',
	'fa-building'=>'&#xf1ad;  fa-building',
	'fa-child'=>'&#xf1ae;  fa-child',
	'fa-paw'=>'&#xf1b0;  fa-paw',
	'fa-spoon'=>'&#xf1b1;  fa-spoon',
	'fa-cube'=>'&#xf1b2;  fa-cube',
	'fa-cubes'=>'&#xf1b3;  fa-cubes',
	'fa-behance'=>'&#xf1b4;  fa-behance',
	'fa-behance-square'=>'&#xf1b5;  fa-behance-square',
	'fa-steam'=>'&#xf1b6;  fa-steam',
	'fa-steam-square'=>'&#xf1b7;  fa-steam-square',
	'fa-recycle'=>'&#xf1b8;  fa-recycle',
	'fa-car'=>'&#xf1b9;  fa-car',
	'fa-taxi'=>'&#xf1ba;  fa-taxi',
	'fa-tree'=>'&#xf1bb;  fa-tree',
	'fa-spotify'=>'&#xf1bc;  fa-spotify',
	'fa-deviantart'=>'&#xf1bd;  fa-deviantart',
	'fa-soundcloud'=>'&#xf1be;  fa-soundcloud',
	'fa-database'=>'&#xf1c0;  fa-database',
	'fa-file-pdf-o'=>'&#xf1c1;  fa-file-pdf-o',
	'fa-file-word-o'=>'&#xf1c2;  fa-file-word-o',
	'fa-file-excel-o'=>'&#xf1c3;  fa-file-excel-o',
	'fa-file-powerpoint-o'=>'&#xf1c4;  fa-file-powerpoint-o',
	'fa-file-image-o'=>'&#xf1c5;  fa-file-image-o',
	'fa-file-archive-o'=>'&#xf1c6;  fa-file-archive-o',
	'fa-file-audio-o'=>'&#xf1c7;  fa-file-audio-o',
	'fa-file-video-o'=>'&#xf1c8;  fa-file-video-o',
	'fa-file-code-o'=>'&#xf1c9;  fa-file-code-o',
	'fa-vine'=>'&#xf1ca;  fa-vine',
	'fa-codepen'=>'&#xf1cb;  fa-codepen',
	'fa-jsfiddle'=>'&#xf1cc;  fa-jsfiddle',
	'fa-life-ring'=>'&#xf1cd;  fa-life-ring',
	'fa-circle-o-notch'=>'&#xf1ce;  fa-circle-o-notch',
	'fa-rebel'=>'&#xf1d0;  fa-rebel',
	'fa-empire'=>'&#xf1d1;  fa-empire',
	'fa-git-square'=>'&#xf1d2;  fa-git-square',
	'fa-git'=>'&#xf1d3;  fa-git',
	'fa-hacker-news'=>'&#xf1d4;  fa-hacker-news',
	'fa-tencent-weibo'=>'&#xf1d5;  fa-tencent-weibo',
	'fa-qq'=>'&#xf1d6;  fa-qq',
	'fa-weixin'=>'&#xf1d7;  fa-weixin',
	'fa-paper-plane'=>'&#xf1d8;  fa-paper-plane',
	'fa-paper-plane-o'=>'&#xf1d9;  fa-paper-plane-o',
	'fa-history'=>'&#xf1da;  fa-history',
	'fa-circle-thin'=>'&#xf1db;  fa-circle-thin',
	'fa-header'=>'&#xf1dc;  fa-header',
	'fa-paragraph'=>'&#xf1dd;  fa-paragraph',
	'fa-sliders'=>'&#xf1de;  fa-sliders',
	'fa-share-alt'=>'&#xf1e0;  fa-share-alt',
	'fa-share-alt-square'=>'&#xf1e1;  fa-share-alt-square',
	'fa-bomb'=>'&#xf1e2;  fa-bomb',
	'fa-futbol-o'=>'&#xf1e3;  fa-futbol-o',
	'fa-tty'=>'&#xf1e4;  fa-tty',
	'fa-binoculars'=>'&#xf1e5;  fa-binoculars',
	'fa-plug'=>'&#xf1e6;  fa-plug',
	'fa-slideshare'=>'&#xf1e7;  fa-slideshare',
	'fa-twitch'=>'&#xf1e8;  fa-twitch',
	'fa-yelp'=>'&#xf1e9;  fa-yelp',
	'fa-newspaper-o'=>'&#xf1ea;  fa-newspaper-o',
	'fa-wifi'=>'&#xf1eb;  fa-wifi',
	'fa-calculator'=>'&#xf1ec;  fa-calculator',
	'fa-paypal'=>'&#xf1ed;  fa-paypal',
	'fa-google-wallet'=>'&#xf1ee;  fa-google-wallet',
	'fa-cc-visa'=>'&#xf1f0;  fa-cc-visa',
	'fa-cc-mastercard'=>'&#xf1f1;  fa-cc-mastercard',
	'fa-cc-discover'=>'&#xf1f2;  fa-cc-discover',
	'fa-cc-amex'=>'&#xf1f3;  fa-cc-amex',
	'fa-cc-paypal'=>'&#xf1f4;  fa-cc-paypal',
	'fa-cc-stripe'=>'&#xf1f5;  fa-cc-stripe',
	'fa-bell-slash'=>'&#xf1f6;  fa-bell-slash',
	'fa-bell-slash-o'=>'&#xf1f7;  fa-bell-slash-o',
	'fa-trash'=>'&#xf1f8;  fa-trash',
	'fa-copyright'=>'&#xf1f9;  fa-copyright',
	'fa-at'=>'&#xf1fa;  fa-at',
	'fa-eyedropper'=>'&#xf1fb;  fa-eyedropper',
	'fa-paint-brush'=>'&#xf1fc;  fa-paint-brush',
	'fa-birthday-cake'=>'&#xf1fd;  fa-birthday-cake',
	'fa-area-chart'=>'&#xf1fe;  fa-area-chart',
	'fa-pie-chart'=>'&#xf200;  fa-pie-chart',
	'fa-line-chart'=>'&#xf201;  fa-line-chart',
	'fa-lastfm'=>'&#xf202;  fa-lastfm',
	'fa-lastfm-square'=>'&#xf203;  fa-lastfm-square',
	'fa-toggle-off'=>'&#xf204;  fa-toggle-off',
	'fa-toggle-on'=>'&#xf205;  fa-toggle-on',
	'fa-bicycle'=>'&#xf206;  fa-bicycle',
	'fa-bus'=>'&#xf207;  fa-bus',
	'fa-ioxhost'=>'&#xf208;  fa-ioxhost',
	'fa-angellist'=>'&#xf209;  fa-angellist',
	'fa-cc'=>'&#xf20a;  fa-cc',
	'fa-ils'=>'&#xf20b;  fa-ils',
	'fa-meanpath'=>'&#xf20c;  fa-meanpath',
	'fa-buysellads'=>'&#xf20d;  fa-buysellads',
	'fa-connectdevelop'=>'&#xf20e;  fa-connectdevelop',
	'fa-dashcube'=>'&#xf210;  fa-dashcube',
	'fa-forumbee'=>'&#xf211;  fa-forumbee',
	'fa-leanpub'=>'&#xf212;  fa-leanpub',
	'fa-sellsy'=>'&#xf213;  fa-sellsy',
	'fa-shirtsinbulk'=>'&#xf214;  fa-shirtsinbulk',
	'fa-simplybuilt'=>'&#xf215;  fa-simplybuilt',
	'fa-skyatlas'=>'&#xf216;  fa-skyatlas',
	'fa-cart-plus'=>'&#xf217;  fa-cart-plus',
	'fa-cart-arrow-down'=>'&#xf218;  fa-cart-arrow-down',
	'fa-diamond'=>'&#xf219;  fa-diamond',
	'fa-ship'=>'&#xf21a;  fa-ship',
	'fa-user-secret'=>'&#xf21b;  fa-user-secret',
	'fa-motorcycle'=>'&#xf21c;  fa-motorcycle',
	'fa-street-view'=>'&#xf21d;  fa-street-view',
	'fa-heartbeat'=>'&#xf21e;  fa-heartbeat',
	'fa-venus'=>'&#xf221;  fa-venus',
	'fa-mars'=>'&#xf222;  fa-mars',
	'fa-mercury'=>'&#xf223;  fa-mercury',
	'fa-transgender'=>'&#xf224;  fa-transgender',
	'fa-transgender-alt'=>'&#xf225;  fa-transgender-alt',
	'fa-venus-double'=>'&#xf226;  fa-venus-double',
	'fa-mars-double'=>'&#xf227;  fa-mars-double',
	'fa-venus-mars'=>'&#xf228;  fa-venus-mars',
	'fa-mars-stroke'=>'&#xf229;  fa-mars-stroke',
	'fa-mars-stroke-v'=>'&#xf22a;  fa-mars-stroke-v',
	'fa-mars-stroke-h'=>'&#xf22b;  fa-mars-stroke-h',
	'fa-neuter'=>'&#xf22c;  fa-neuter',
	'fa-genderless'=>'&#xf22d;  fa-genderless',
	'fa-facebook-official'=>'&#xf230;  fa-facebook-official',
	'fa-pinterest-p'=>'&#xf231;  fa-pinterest-p',
	'fa-whatsapp'=>'&#xf232;  fa-whatsapp',
	'fa-server'=>'&#xf233;  fa-server',
	'fa-user-plus'=>'&#xf234;  fa-user-plus',
	'fa-user-times'=>'&#xf235;  fa-user-times',
	'fa-bed'=>'&#xf236;  fa-bed',
	'fa-viacoin'=>'&#xf237;  fa-viacoin',
	'fa-train'=>'&#xf238;  fa-train',
	'fa-subway'=>'&#xf239;  fa-subway',
	'fa-medium'=>'&#xf23a;  fa-medium',
	'fa-y-combinator'=>'&#xf23b;  fa-y-combinator',
	'fa-optin-monster'=>'&#xf23c;  fa-optin-monster',
	'fa-opencart'=>'&#xf23d;  fa-opencart',
	'fa-expeditedssl'=>'&#xf23e;  fa-expeditedssl',
	'fa-battery-full'=>'&#xf240;  fa-battery-full',
	'fa-battery-three-quarters'=>'&#xf241;  fa-battery-three-quarters',
	'fa-battery-half'=>'&#xf242;  fa-battery-half',
	'fa-battery-quarter'=>'&#xf243;  fa-battery-quarter',
	'fa-battery-empty'=>'&#xf244;  fa-battery-empty',
	'fa-mouse-pointer'=>'&#xf245;  fa-mouse-pointer',
	'fa-i-cursor'=>'&#xf246;  fa-i-cursor',
	'fa-object-group'=>'&#xf247;  fa-object-group',
	'fa-object-ungroup'=>'&#xf248;  fa-object-ungroup',
	'fa-sticky-note'=>'&#xf249;  fa-sticky-note',
	'fa-sticky-note-o'=>'&#xf24a;  fa-sticky-note-o',
	'fa-cc-jcb'=>'&#xf24b;  fa-cc-jcb',
	'fa-cc-diners-club'=>'&#xf24c;  fa-cc-diners-club',
	'fa-clone'=>'&#xf24d;  fa-clone',
	'fa-balance-scale'=>'&#xf24e;  fa-balance-scale',
	'fa-hourglass-o'=>'&#xf250;  fa-hourglass-o',
	'fa-hourglass-start'=>'&#xf251;  fa-hourglass-start',
	'fa-hourglass-half'=>'&#xf252;  fa-hourglass-half',
	'fa-hourglass-end'=>'&#xf253;  fa-hourglass-end',
	'fa-hourglass'=>'&#xf254;  fa-hourglass',
	'fa-hand-rock-o'=>'&#xf255;  fa-hand-rock-o',
	'fa-hand-paper-o'=>'&#xf256;  fa-hand-paper-o',
	'fa-hand-scissors-o'=>'&#xf257;  fa-hand-scissors-o',
	'fa-hand-lizard-o'=>'&#xf258;  fa-hand-lizard-o',
	'fa-hand-spock-o'=>'&#xf259;  fa-hand-spock-o',
	'fa-hand-pointer-o'=>'&#xf25a;  fa-hand-pointer-o',
	'fa-hand-peace-o'=>'&#xf25b;  fa-hand-peace-o',
	'fa-trademark'=>'&#xf25c;  fa-trademark',
	'fa-registered'=>'&#xf25d;  fa-registered',
	'fa-creative-commons'=>'&#xf25e;  fa-creative-commons',
	'fa-gg'=>'&#xf260;  fa-gg',
	'fa-gg-circle'=>'&#xf261;  fa-gg-circle',
	'fa-tripadvisor'=>'&#xf262;  fa-tripadvisor',
	'fa-odnoklassniki'=>'&#xf263;  fa-odnoklassniki',
	'fa-odnoklassniki-square'=>'&#xf264;  fa-odnoklassniki-square',
	'fa-get-pocket'=>'&#xf265;  fa-get-pocket',
	'fa-wikipedia-w'=>'&#xf266;  fa-wikipedia-w',
	'fa-safari'=>'&#xf267;  fa-safari',
	'fa-chrome'=>'&#xf268;  fa-chrome',
	'fa-firefox'=>'&#xf269;  fa-firefox',
	'fa-opera'=>'&#xf26a;  fa-opera',
	'fa-internet-explorer'=>'&#xf26b;  fa-internet-explorer',
	'fa-television'=>'&#xf26c;  fa-television',
	'fa-contao'=>'&#xf26d;  fa-contao',
	'fa-500px'=>'&#xf26e;  fa-500px',
	'fa-amazon'=>'&#xf270;  fa-amazon',
	'fa-calendar-plus-o'=>'&#xf271;  fa-calendar-plus-o',
	'fa-calendar-minus-o'=>'&#xf272;  fa-calendar-minus-o',
	'fa-calendar-times-o'=>'&#xf273;  fa-calendar-times-o',
	'fa-calendar-check-o'=>'&#xf274;  fa-calendar-check-o',
	'fa-industry'=>'&#xf275;  fa-industry',
	'fa-map-pin'=>'&#xf276;  fa-map-pin',
	'fa-map-signs'=>'&#xf277;  fa-map-signs',
	'fa-map-o'=>'&#xf278;  fa-map-o',
	'fa-map'=>'&#xf279;  fa-map',
	'fa-commenting'=>'&#xf27a;  fa-commenting',
	'fa-commenting-o'=>'&#xf27b;  fa-commenting-o',
	'fa-houzz'=>'&#xf27c;  fa-houzz',
	'fa-vimeo'=>'&#xf27d;  fa-vimeo',
	'fa-black-tie'=>'&#xf27e;  fa-black-tie',
	'fa-fonticons'=>'&#xf280;  fa-fonticons',
	'fa-reddit-alien'=>'&#xf281;  fa-reddit-alien',
	'fa-edge'=>'&#xf282;  fa-edge',
	'fa-credit-card-alt'=>'&#xf283;  fa-credit-card-alt',
	'fa-codiepie'=>'&#xf284;  fa-codiepie',
	'fa-modx'=>'&#xf285;  fa-modx',
	'fa-fort-awesome'=>'&#xf286;  fa-fort-awesome',
	'fa-usb'=>'&#xf287;  fa-usb',
	'fa-product-hunt'=>'&#xf288;  fa-product-hunt',
	'fa-mixcloud'=>'&#xf289;  fa-mixcloud',
	'fa-scribd'=>'&#xf28a;  fa-scribd',
	'fa-pause-circle'=>'&#xf28b;  fa-pause-circle',
	'fa-pause-circle-o'=>'&#xf28c;  fa-pause-circle-o',
	'fa-stop-circle'=>'&#xf28d;  fa-stop-circle',
	'fa-stop-circle-o'=>'&#xf28e;  fa-stop-circle-o',
	'fa-shopping-bag'=>'&#xf290;  fa-shopping-bag',
	'fa-shopping-basket'=>'&#xf291;  fa-shopping-basket',
	'fa-hashtag'=>'&#xf292;  fa-hashtag',
	'fa-bluetooth'=>'&#xf293;  fa-bluetooth',
	'fa-bluetooth-b'=>'&#xf294;  fa-bluetooth-b',
	'fa-percent'=>'&#xf295;  fa-percent',
	'fa-gitlab'=>'&#xf296;  fa-gitlab',
	'fa-wpbeginner'=>'&#xf297;  fa-wpbeginner',
	'fa-wpforms'=>'&#xf298;  fa-wpforms',
	'fa-envira'=>'&#xf299;  fa-envira',
	'fa-universal-access'=>'&#xf29a;  fa-universal-access',
	'fa-wheelchair-alt'=>'&#xf29b;  fa-wheelchair-alt',
	'fa-question-circle-o'=>'&#xf29c;  fa-question-circle-o',
	'fa-blind'=>'&#xf29d;  fa-blind',
	'fa-audio-description'=>'&#xf29e;  fa-audio-description',
	'fa-volume-control-phone'=>'&#xf2a0;  fa-volume-control-phone',
	'fa-braille'=>'&#xf2a1;  fa-braille',
	'fa-assistive-listening-systems'=>'&#xf2a2;  fa-assistive-listening-systems',
	'fa-american-sign-language-interpreting'=>'&#xf2a3;  fa-american-sign-language-interpreting',
	'fa-deaf'=>'&#xf2a4;  fa-deaf',
	'fa-glide'=>'&#xf2a5;  fa-glide',
	'fa-glide-g'=>'&#xf2a6;  fa-glide-g',
	'fa-sign-language'=>'&#xf2a7;  fa-sign-language',
	'fa-low-vision'=>'&#xf2a8;  fa-low-vision',
	'fa-viadeo'=>'&#xf2a9;  fa-viadeo',
	'fa-viadeo-square'=>'&#xf2aa;  fa-viadeo-square',
	'fa-snapchat'=>'&#xf2ab;  fa-snapchat',
	'fa-snapchat-ghost'=>'&#xf2ac;  fa-snapchat-ghost',
	'fa-snapchat-square'=>'&#xf2ad;  fa-snapchat-square',
	'fa-pied-piper'=>'&#xf2ae;  fa-pied-piper',
	'fa-first-order'=>'&#xf2b0;  fa-first-order',
	'fa-yoast'=>'&#xf2b1;  fa-yoast',
	'fa-themeisle'=>'&#xf2b2;  fa-themeisle',
	'fa-google-plus-official'=>'&#xf2b3;  fa-google-plus-official',
	'fa-font-awesome'=>'&#xf2b4;  fa-font-awesome',
	'fa-handshake-o'=>'&#xf2b5;  fa-handshake-o',
	'fa-envelope-open'=>'&#xf2b6;  fa-envelope-open',
	'fa-envelope-open-o'=>'&#xf2b7;  fa-envelope-open-o',
	'fa-linode'=>'&#xf2b8;  fa-linode',
	'fa-address-book'=>'&#xf2b9;  fa-address-book',
	'fa-address-book-o'=>'&#xf2ba;  fa-address-book-o',
	'fa-address-card'=>'&#xf2bb;  fa-address-card',
	'fa-address-card-o'=>'&#xf2bc;  fa-address-card-o',
	'fa-user-circle'=>'&#xf2bd;  fa-user-circle',
	'fa-user-circle-o'=>'&#xf2be;  fa-user-circle-o',
	'fa-user-o'=>'&#xf2c0;  fa-user-o',
	'fa-id-badge'=>'&#xf2c1;  fa-id-badge',
	'fa-id-card'=>'&#xf2c2;  fa-id-card',
	'fa-id-card-o'=>'&#xf2c3;  fa-id-card-o',
	'fa-quora'=>'&#xf2c4;  fa-quora',
	'fa-free-code-camp'=>'&#xf2c5;  fa-free-code-camp',
	'fa-telegram'=>'&#xf2c6;  fa-telegram',
	'fa-thermometer-full'=>'&#xf2c7;  fa-thermometer-full',
	'fa-thermometer-three-quarters'=>'&#xf2c8;  fa-thermometer-three-quarters',
	'fa-thermometer-half'=>'&#xf2c9;  fa-thermometer-half',
	'fa-thermometer-quarter'=>'&#xf2ca;  fa-thermometer-quarter',
	'fa-thermometer-empty'=>'&#xf2cb;  fa-thermometer-empty',
	'fa-shower'=>'&#xf2cc;  fa-shower',
	'fa-bath'=>'&#xf2cd;  fa-bath',
	'fa-podcast'=>'&#xf2ce;  fa-podcast',
	'fa-window-maximize'=>'&#xf2d0;  fa-window-maximize',
	'fa-window-minimize'=>'&#xf2d1;  fa-window-minimize',
	'fa-window-restore'=>'&#xf2d2;  fa-window-restore',
	'fa-window-close'=>'&#xf2d3;  fa-window-close',
	'fa-window-close-o'=>'&#xf2d4;  fa-window-close-o',
	'fa-bandcamp'=>'&#xf2d5;  fa-bandcamp',
	'fa-grav'=>'&#xf2d6;  fa-grav',
	'fa-etsy'=>'&#xf2d7;  fa-etsy',
	'fa-imdb'=>'&#xf2d8;  fa-imdb',
	'fa-ravelry'=>'&#xf2d9;  fa-ravelry',
	'fa-eercast'=>'&#xf2da;  fa-eercast',
	'fa-microchip'=>'&#xf2db;  fa-microchip',
	'fa-snowflake-o'=>'&#xf2dc;  fa-snowflake-o',
	'fa-superpowers'=>'&#xf2dd;  fa-superpowers',
	'fa-wpexplorer'=>'&#xf2de;  fa-wpexplorer',
	'fa-meetup'=>'&#xf2e0;  fa-meetup',

  );


  if( $html == 'html' ){
    $iconHtml = '';
    foreach( $icons as $key=>$value ){

      $iconHtml .= '<option value="'.$key.'">'.$value.'</option>';

    }

    return $iconHtml;

  }else{
    return $icons;
  }

}

// the opt_name is set to restrofood_opt.  Please replace it if change your opt_name name.
add_action( 'redux/page/restrofood_opt/enqueue', 'restrofood_faIconFont' );
function restrofood_faIconFont() {

  //  Font awesome enqueue
  wp_enqueue_style( 'font-awesome', RESTROFOOD_THEME_CSS_DIR_URI.'font-awesome.min.css', array(), '4.7', 'all' );

  // Redux admin css enqueue
  wp_enqueue_style( 'restrofood-redux-admin', RESTROFOOD_THEME_DIR_URI.'inc/redux-custom-field/assist/restrofood-redux-admin.css', array(), '1.0' );

  // Redux admin js enqueue
  wp_enqueue_script( 'restrofood-redux-admin', RESTROFOOD_THEME_DIR_URI.'inc/redux-custom-field/assist/restrofood-redux-admin.js', array( 'jquery' ), '1.0', true );

}