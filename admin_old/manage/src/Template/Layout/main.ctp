<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <title>Error</title>
    <link rel="shortcut icon" href="http://localhost/webworks/mymscproject/theme/image.php/klass/theme/1527686350/favicon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="moodle, Error">
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"http:\/\/localhost\/webworks\/mymscproject","sesskey":"INHkIkQJMc","loadingicon":"http:\/\/localhost\/webworks\/mymscproject\/theme\/image.php\/klass\/core\/1527686350\/i\/loading_small","themerev":"1527686350","slasharguments":1,"theme":"klass","jsrev":"1527609420","svgicons":true};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''};if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else me.path=component+'/'+component+'.'+me.type};
YUI_config = {"debug":false,"base":"http:\/\/localhost\/webworks\/mymscproject\/lib\/yuilib\/3.13.0\/","comboBase":"http:\/\/localhost\/webworks\/mymscproject\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"http:\/\/localhost\/webworks\/mymscproject\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"http:\/\/localhost\/webworks\/mymscproject\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"http:\/\/localhost\/webworks\/mymscproject\/theme\/yui_combo.php?m\/1527609420\/","combine":true,"comboBase":"http:\/\/localhost\/webworks\/mymscproject\/theme\/yui_combo.php?","ext":false,"root":"m\/1527609420\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-formautosubmit":{"requires":["base","event-key"]},"moodle-core-formchangechecker":{"requires":["base","event-focus"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","event-key","dd-plugin"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-calendar-eventmanager":{"requires":["base","node","event-mouseenter","overlay","moodle-calendar-eventmanager-skin"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-block_navigation-navigation":{"requires":["base","io-base","node","event-synthetic","event-delegate","json-parse"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-notification-alert"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-theme_bootstrapbase-bootstrap":{"requires":["node","selector-css3"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"http:\/\/localhost\/webworks\/mymscproject\/lib\/javascript.php\/1527609420\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker"]}}};
M.yui.loader = {modules: {}};

//]]>
</script>
<link rel="stylesheet" type="text/css" href="http://localhost/webworks/mymscproject/theme/yui_combo.php?rollup/3.13.0/yui-moodlesimple-min.css"><script type="text/javascript" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?rollup/3.13.0/yui-moodlesimple-min.js"></script><script type="text/javascript" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?rollup/1527609420/mcore-min.js"></script><script type="text/javascript" src="http://localhost/webworks/mymscproject/theme/jquery.php/core/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://localhost/webworks/mymscproject/theme/jquery.php/core/jquery-migrate-1.2.1.min.js"></script>
<script charset="utf-8" id="yui_3_13_0_2_1527702053051_2" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?m/1527609420/theme_bootstrapbase/bootstrap/bootstrap-min.js" async=""></script><script charset="utf-8" id="yui_3_13_0_3_1527702053051_19" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?m/1527609420/course/formatchooser/formatchooser-min.js" async=""></script><script charset="utf-8" id="yui_3_13_0_2_1527702053051_4" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?3.13.0/plugin/plugin-min.js&amp;3.13.0/event-mousewheel/event-mousewheel-min.js&amp;3.13.0/event-resize/event-resize-min.js&amp;3.13.0/event-hover/event-hover-min.js&amp;3.13.0/event-touch/event-touch-min.js&amp;3.13.0/event-move/event-move-min.js&amp;3.13.0/event-flick/event-flick-min.js&amp;3.13.0/event-valuechange/event-valuechange-min.js&amp;3.13.0/event-tap/event-tap-min.js" async=""></script><script charset="utf-8" id="yui_3_13_0_3_1527702053051_20" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?3.13.0/event-simulate/event-simulate-min.js&amp;3.13.0/async-queue/async-queue-min.js&amp;3.13.0/gesture-simulate/gesture-simulate-min.js&amp;3.13.0/node-event-simulate/node-event-simulate-min.js" async=""></script><script charset="utf-8" id="yui_3_13_0_3_1527702053051_24" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?m/1527609420/form/dateselector/dateselector-min.js" async=""></script><link charset="utf-8" rel="stylesheet" id="yui_3_13_0_3_1527702053051_25" href="http://localhost/webworks/mymscproject/theme/yui_combo.php?m/1527609420/form/dateselector/dateselector.css"><script charset="utf-8" id="yui_3_13_0_3_1527702053051_26" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?2in3/2.9.0/build/yui2-calendar/yui2-calendar-min.js" async=""></script><link charset="utf-8" rel="stylesheet" id="yui_3_13_0_3_1527702053051_27" href="http://localhost/webworks/mymscproject/theme/yui_combo.php?2in3/2.9.0/build/yui2-skin-sam-calendar/assets/skins/sam/yui2-skin-sam-calendar-min.css"><script charset="utf-8" id="yui_3_13_0_3_1527702053051_28" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?2in3/2.9.0/build/yui2-yahoo/yui2-yahoo-min.js&amp;2in3/2.9.0/build/yui2-dom/yui2-dom-min.js&amp;2in3/2.9.0/build/yui2-event/yui2-event-min.js" async=""></script><script charset="utf-8" id="yui_3_13_0_3_1527702053051_97" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?m/1527609420/block_navigation/navigation/navigation-min.js" async=""></script><link charset="utf-8" rel="stylesheet" id="yui_3_13_0_3_1527702053051_202" href="http://localhost/webworks/mymscproject/theme/yui_combo.php?3.13.0/cssbutton/cssbutton-min.css"><script charset="utf-8" id="yui_3_13_0_3_1527702053051_203" src="http://localhost/webworks/mymscproject/theme/yui_combo.php?m/1527609420/core/notification/notification-alert-min.js&amp;m/1527609420/core/notification/notification-confirm-min.js&amp;m/1527609420/core/notification/notification-exception-min.js&amp;m/1527609420/core/notification/notification-ajaxexception-min.js&amp;m/1527609420/core/notification/notification-min.js&amp;3.13.0/cache-base/cache-base-min.js&amp;m/1527609420/core/popuphelp/popuphelp-min.js" async=""></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://localhost/webworks/mymscproject/theme/styles.php/klass/1527686350/all">
<script type="text/javascript" src="http://localhost/webworks/mymscproject/lib/javascript.php/1527609420/lib/javascript-static.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</head>
<body>

<header id="header">

	<div class="header-top" id="yui_3_13_0_2_1527702053051_11">
  	<div class="container-fluid">
         <div class="clearfix"></div>
    </div>
  </div>
  <div class="header-main">
	  <div class="header-main-content">
    	<div class="container-fluid">
      	<div class="row-fluid">
        	<div class="span6">
          	<div id="logo"><a href="http://localhost/webworks/mymscproject"><img src="http://localhost/webworks/mymscproject/theme/image.php/klass/theme/1527686350/home/logo" alt="Klass" width="183" height="80"></a></div>
          </div>
                   	<div class="span6">
          	<div class="top-search">
           <form action="http://localhost/webworks/mymscproject/course/search.php" method="get">
              <input placeholder="Search courses" name="search" value="" type="text">
              <input value="Search" type="submit">
           </form>
            </div>
            <div class="clearfix"></div>
          </div>
                   </div>
      </div>
    </div>
    <div class="header-main-menubar">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container-fluid">
            <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a href="#" class="brand" style="display: none;">Title</a>
            <p class="navbar-text"><a href="http://localhost/webworks/mymscproject"><i class="fa fa-home"></i>Home</a></p>
            <div class="nav-collapse collapse navbar-responsive-collapse">
              <p class="navbar-text"><a href="http://localhost/webworks/mymscproject"><i class="fa fa-home"></i>Home</a></p>
                            <ul class="nav pull-right">
                  <li></li>
                                     <li class="navbar-text"><div class="logininfo">You are logged in as <a href="http://localhost/webworks/mymscproject/user/profile.php?id=2" title="View profile">Godwin Kalu</a> (<a href="http://localhost/webworks/mymscproject/login/logout.php?sesskey=INHkIkQJMc">Log out</a>)</div></li>
                               </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
