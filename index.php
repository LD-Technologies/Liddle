<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Liddle - Web Prototyping</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Web Prototyping tool">
	<meta name="author" content="Robert Lemon">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>
<div class="page" id="page">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="#">Liddle <small>Web Prototyping</small></a>
                <ul class="nav">
                    <li class="divider-vertical"></li>
                    <li><a href="#">Run <i class="icon-play-circle icon-white"></i></a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#">Save <i class="icon-file icon-white"></i></a></li>
                    <li><a href="#">Clone <i class="icon-magnet icon-white"></i></a></li>
                    <li><a href="#">Reset <i class="icon-fire icon-white"></i></a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#">Tidy <i class="icon-indent-left icon-white"></i></a></li>
                    <li><a href="#">JSLint <i class="icon-ok icon-white"></i></a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Panes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML <i class="icon-eye-close pull-right"></i></a></li>
                        <li><a href="#">CSS <i class="icon-eye-close pull-right"></i></a></li>
                        <li><a href="#">JavaScript <i class="icon-eye-open pull-right"></i></a></li>
                        <li><a href="#">Results <i class="icon-eye-open pull-right"></i></a></li>
                    </ul>
                    </li>
                </ul>
                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">User Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dashboard <i class="icon-home pull-right"></i></a></li>
                        <li><a href="#">Change Password <i class="icon-pencil pull-right"></i></a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout <i class="icon-eject pull-right"></i></a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="accordion" id="cm_sidebar">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#cm_sidebar" href="#cm_settings">
                            General Settings <i class="icon-chevron-right pull-right"></i></a>
                        </div>
                        <div id="cm_settings" class="accordion-body in">
                            <div class="accordion-inner">
                                 <div class="control-group">
									<label class="control-label" for="js_wrap">Include in</label>
									<div class="controls">
                                        <select name="js_wrap" id="js_wrap" class="input-medium">
                                            <option value="h">document head</option>
                                            <option value="b" selected="selected">document body</option>
                                        </select>
									</div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#cm_sidebar" href="#cm_incops">
                                Frameworks <i class="icon-chevron-down pull-right"></i></a>
                        </div>
                        <div id="cm_incops" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="control-group">
                                    <label class="control-label" for="js_lib">Framework</label>
                                    <div class="controls">
                                        <select name="js_lib" id="js_lib" class="input-medium">
                                            <optgroup label="Mootools">
                                            <option value="96">Mootools 1.4.5 (compat)</option>
                                            <option value="95">Mootools 1.4.5</option>
                                            <option value="63">Mootools 1.3.2 (compat)</option>
                                            <option value="62">Mootools 1.3.2</option>
                                            <option value="37">Mootools 1.2.5</option>
                                            <option value="1">Mootools 1.1.2</option>
                                            <option value="59">Mootools (edge)</option>
                                            </optgroup>
                                            <optgroup label="jQuery">
                                            <option value="83">jQuery 1.7.1</option>
                                            <option value="75">jQuery 1.6.4</option>
                                            <option value="60">jQuery 1.5.2</option>
                                            <option value="49">jQuery 1.4.4</option>
                                            <option value="7">jQuery 1.3.2</option>
                                            <option value="6">jQuery 1.2.6</option>
                                            <option value="46">jQuery (edge)</option>
                                            </optgroup>
                                            <optgroup label="Prototype">
                                            <option value="54">Prototype 1.7</option>
                                            <option value="4">Prototype 1.6.1.0</option>
                                            </optgroup>
                                            <optgroup label="YUI">
                                            <option value="74">YUI 3.4.1 simple</option>
                                            <option value="73">YUI 3.4.1</option>
                                            <option value="56">YUI 3.3.0 Simple</option>
                                            <option value="51">YUI 3.3.0</option>
                                            <option value="9">YUI 2.8.0r4</option>
                                            </optgroup>
                                            <optgroup label="Glow">
                                            <option value="10">Glow Core 1.7.0</option>
                                            </optgroup>
                                            <optgroup label="No-Library">
                                            <option value="11" selected="selected">No-Library (pure JS)</option>
                                            </optgroup>
                                            <optgroup label="Dojo">
                                            <option value="94">Dojo 1.7.2</option>
                                            <option value="86">Dojo 1.7.1</option>
                                            <option value="61">Dojo 1.6</option>
                                            <option value="34">Dojo 1.5</option>
                                            <option value="13">Dojo 1.4</option>
                                            <option value="12">Dojo 1.3</option>
                                            <option value="87">Dojo (nightly)</option>
                                            </optgroup>
                                            <optgroup label="Processing.js">
                                            <option value="81">Processing.js 1.3.6</option>
                                            <option value="67">Processing.js 1.2.3</option>
                                            <option value="50">Processing.js 1.0.0</option>
                                            </optgroup>
                                            <optgroup label="ExtJS">
                                            <option value="80">ExtJS 4.0.7</option>
                                            <option value="23">ExtJS 3.1.0</option>
                                            <option value="24">ExtJS 3.0.0</option>
                                            </optgroup>
                                            <optgroup label="Raphael">
                                            <option value="76">Raphael 2.0</option>
                                            <option value="36">Raphael 1.5.2 (min)</option>
                                            <option value="30">Raphael 1.4</option>
                                            </optgroup>
                                            <optgroup label="RightJS">
                                            <option value="45">RightJS 2.1.1</option>
                                            </optgroup>
                                            <optgroup label="Three.js">
                                            <option value="82">Three.js (edge)</option>
                                            </optgroup>
                                            <optgroup label="Zepto">
                                            <option value="90">Zepto 0.8</option>
                                            </optgroup>
                                            <optgroup label="Enyo">
                                            <option value="91">Enyo 2.0b3</option>
                                            </optgroup>
                                            <optgroup label="Shipyard">
                                            <option value="98">Shipyard 0.1</option>
                                            <option value="99">Shipyard (nightly)</option>
                                            </optgroup>
                                            <optgroup label="MooFx">
                                            <option value="100">MooFx 3.0.6</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#cm_sidebar" href="#cm_res">
                            Resources <i class="icon-chevron-right pull-right"></i></a>
                        </div>
                        <div id="cm_res" class="accordion-body collapse">
                            <div class="accordion-inner">
                                 resources options
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#cm_sidebar" href="#cm_info">
                            Information <i class="icon-chevron-right pull-right"></i></a>
                        </div>
                        <div id="cm_info" class="accordion-body collapse">
                            <div class="accordion-inner">
                                 information options
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main-inner" id="main_inner">
				<div class="left pane" id="left-pane">
					<div class="top pane" id="left-top-pane"></div>
					<div class="splitter horizontal" id="left-splitter-horizontal"></div>
					<div class="bottom pane" id="left-bottom-pane"></div>
				</div>
				<div class="splitter vertical" id="splitter-vertical"></div>
				<div class="right pane" id="right-pane">
					<div class="top pane" id="right-top-pane"></div>
					<div class="splitter horizontal" id="right-splitter-horizontal"></div>
					<div class="bottom pane" id="right-bottom-pane"></div>
				</div>
            </div>
        </div>
    </div>
</div>​
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-collapse.mod.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
<script type="text/javascript">
function make_vertical(elem) {
	$('body').addClass('noselect');
    return function(e) {
		if( !(e.which & 1) ) { 
			unbind_events();
		}
        var x = e.clientX-222, w = $('#main_inner').width();
        x = (x > 64) ? (x > w - 12 - 64) ? w - 12 - 64 : x : 64;
        var parent = $(elem.parentNode);
        parent.children('.left.pane').css('width', x/w*100+'%');
        parent.children('.right.pane').css('width', (w - x - 12)/w*100+'%');
    };
}
function make_horizontal(elem) {
	$('body').addClass('noselect');
    return function(e) {
		if( !(e.which & 1) ) { 
			unbind_events();
		}
        var y = e.clientY-42, h = $('#main_inner').height();
        y = (y > 64) ? (y > h - 12 - 64) ? h - 12 - 64 : y : 64;
        var parent = $(elem.parentNode);
        parent.children('.top.pane').css('height', y/h*100+'%');
        parent.children('.bottom.pane').css('height', (h - y - 12)/h*100+'%');
    };

}
function unbind_events() {
	$('#main_inner').unbind('mousemove.splitter');
	$('body').removeClass('noselect');
}

var container = $('#main_inner');
container.css({
	'height': ($('#page').height() - 42)/$('#page').height() * 100 + '%',
	'width': ($('#page').width() - 222)/$('#page').width() * 100 + '%'
});
$('.splitter.vertical').on('mousedown', function(e) {
    container.bind('mousemove.splitter', make_vertical(this));
});
$('.splitter.horizontal').on('mousedown', function(e) {
    container.bind('mousemove.splitter', make_horizontal(this));
});
$('.top.pane, .bottom.pane').css({
    'height': ((container.height() - 24) / (container.height() - 12) / 2) * 100 + '%'
});
$('.left.pane, .right.pane').css({
    'width': ((container.width() - 24) / (container.width() - 12) / 2) * 100 + '%'
});
$(document).on("selectstart dragstart", function(e){
    e.preventDefault();
});
</script>
</body>
</html>
