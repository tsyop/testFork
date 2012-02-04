/**
* DD_roundies, this adds rounded-corner CSS in standard browsers and VML sublayers in IE that accomplish a similar appearance when comparing said browsers.
* Author: Drew Diller
* Email: drew.diller@gmail.com
* URL: http://www.dillerdesign.com/experiment/DD_roundies/
* Version: 0.0.2a -  preview 2008.12.26
* Licensed under the MIT License: http://dillerdesign.com/experiment/DD_roundies/#license
*
* Usage:
* DD_roundies.addRule('#doc .container', '10px 5px'); // selector and multiple radii
* DD_roundies.addRule('.box', 5, true); // selector, radius, and optional addition of border-radius code for standard browsers.
* 
* Just want the PNG fixing effect for IE6, and don't want to also use the DD_belatedPNG library?  Don't give any additional arguments after the CSS selector.
* DD_roundies.addRule('.your .example img');
**/
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('t K={16:\'K\',1L:G,1M:G,1d:G,2f:y(){u(D.2g!=8&&D.1N&&!D.1N[q.16]){q.1L=M;q.1M=M}17 u(D.2g==8){q.1d=M}},2h:D.2i,1O:[],1b:{},2j:y(){u(q.1L||q.1M){D.1N.2L(q.16,\'2M:2N-2O-2P:x\')}u(q.1d){D.2Q(\'<?2R 2S="\'+q.16+\'" 2T="#1P#2k" ?>\')}},2l:y(){t a=D.1k(\'z\');D.2m.1w.1Q(a,D.2m.1w.1w);u(a.12){2n{t b=a.12;b.1x(q.16+\'\\\\:*\',\'{1l:2U(#1P#2k)}\');q.12=b}2o(2p){}}17{q.12=a}},1x:y(a,b,c){u(1R b==\'1S\'||b===2V){b=0}u(b.2W.2q().1y(\'2X\')==-1){b=b.2q().2Y(/[^0-9 ]/g,\'\').1T(\' \')}H(t i=0;i<4;i++){b[i]=(!b[i]&&b[i]!==0)?b[C.1e((i-2),0)]:b[i]}u(q.12){u(q.12.1x){t d=a.1T(\',\');H(t i=0;i<d.1U;i++){q.12.1x(d[i],\'1l:2Z(K.1V.2r(q, [\'+b.1W(\',\')+\']))\')}}17 u(c){t e=b.1W(\'F \')+\'F\';q.12.1z(D.2s(a+\' {Q-1f:\'+e+\'; -30-Q-1f:\'+e+\';}\'));q.12.1z(D.2s(a+\' {-1A-Q-1m-1n-1f:\'+b[0]+\'F \'+b[0]+\'F; -1A-Q-1m-1X-1f:\'+b[1]+\'F \'+b[1]+\'F; -1A-Q-1Y-1X-1f:\'+b[2]+\'F \'+b[2]+\'F; -1A-Q-1Y-1n-1f:\'+b[3]+\'F \'+b[3]+\'F;}\'))}}17 u(q.1d){q.1O.31({\'2t\':a,\'2u\':b})}},2v:y(a){2w(32.33){I\'z.Q\':I\'z.34\':I\'z.1B\':q.1o(a);13;I\'z.2x\':q.1Z(a);13;I\'z.1p\':I\'z.2y\':I\'z.2z\':q.1o(a);13;I\'z.20\':a.18.z.20=(a.z.20==\'S\')?\'S\':\'35\';13;I\'z.21\':q.22(a);13;I\'z.1c\':a.18.z.1c=a.z.1c;13}},1o:y(a){a.14.23=\'\';q.2A(a);q.1Z(a);q.1C(a);q.1D(a);q.24(a);q.2B(a);q.22(a)},22:y(a){u(a.W.21.1y(\'36\')!=-1){t b=a.W.21;b=1g(b.37(b.25(\'=\')+1,b.25(\')\')),10)/2C;H(t v 1h a.x){a.x[v].1i.38=b}}},2A:y(a){u(!a.W){1q}17{t b=a.W}a.14.1p=\'\';a.14.1E=\'\';t c=(b.1p==\'2D\');t d=M;u(b.1E!=\'S\'||a.1F){u(!a.1F){a.J=b.1E;a.J=a.J.39(5,a.J.25(\'")\')-5)}17{a.J=a.26}t e=q;u(!e.1b[a.J]){t f=D.1k(\'3a\');f.1r(\'3b\',y(){q.1s=q.3c;q.1t=q.3d;e.1D(a)});f.3e=e.16+\'3f\';f.14.23=\'1l:S; 1j:27; 1m:-2E; 1n:-2E; Q:S;\';f.26=a.J;f.2F(\'1s\');f.2F(\'1t\');D.2G.1Q(f,D.2G.1w);e.1b[a.J]=f}a.x.Z.1i.26=a.J;d=G}a.x.Z.2H=!d;a.x.Z.1G=\'S\';a.x.1u.2H=!c;a.x.1u.1G=b.1p;a.14.1E=\'S\';a.14.1p=\'2D\'},1Z:y(a){a.x.1H.1G=a.W.2x},1C:y(a){t c=[\'N\',\'19\',\'1a\',\'O\'];a.P={};H(t b=0;b<4;b++){a.P[c[b]]=1g(a.W[\'Q\'+c[b]+\'U\'],10)||0}},1D:y(c){t e=[\'O\',\'N\',\'U\',\'V\'];H(t d=0;d<4;d++){c.E[e[d]]=c[\'3g\'+e[d]]}t f=y(a,b){a.z.1n=(b?0:c.E.O)+\'F\';a.z.1m=(b?0:c.E.N)+\'F\';a.z.1s=c.E.U+\'F\';a.z.1t=c.E.V+\'F\'};H(t v 1h c.x){t g=(v==\'Z\')?1:2;c.x[v].3h=(c.E.U*g)+\', \'+(c.E.V*g);f(c.x[v],M)}f(c.18,G);u(K.1d){c.x.1H.z.28=\'-3i\';u(1R c.P==\'1S\'){q.1C(c)}c.x.1u.z.28=(c.P.N-1)+\'F \'+(c.P.O-1)+\'F\'}},24:y(j){t k=y(a,w,h,r,b,c,d){t e=a?[\'m\',\'1I\',\'l\',\'1J\',\'l\',\'1I\',\'l\',\'1J\',\'l\']:[\'1J\',\'l\',\'1I\',\'l\',\'1J\',\'l\',\'1I\',\'l\',\'m\'];b*=d;c*=d;w*=d;h*=d;t R=r.2I();H(t i=0;i<4;i++){R[i]*=d;R[i]=C.3j(w/2,h/2,R[i])}t f=[e[0]+C.11(0+b)+\',\'+C.11(R[0]+c),e[1]+C.11(R[0]+b)+\',\'+C.11(0+c),e[2]+C.15(w-R[1]+b)+\',\'+C.11(0+c),e[3]+C.15(w+b)+\',\'+C.11(R[1]+c),e[4]+C.15(w+b)+\',\'+C.15(h-R[2]+c),e[5]+C.15(w-R[2]+b)+\',\'+C.15(h+c),e[6]+C.11(R[3]+b)+\',\'+C.15(h+c),e[7]+C.11(0+b)+\',\'+C.15(h-R[3]+c),e[8]+C.11(0+b)+\',\'+C.11(R[0]+c)];u(!a){f.3k()}t g=f.1W(\'\');1q g};u(1R j.P==\'1S\'){q.1C(j)}t l=j.P;t m=j.2J.2I();t n=k(M,j.E.U,j.E.V,m,0,0,2);m[0]-=C.1e(l.O,l.N);m[1]-=C.1e(l.N,l.19);m[2]-=C.1e(l.19,l.1a);m[3]-=C.1e(l.1a,l.O);H(t i=0;i<4;i++){m[i]=C.1e(m[i],0)}t o=k(G,j.E.U-l.O-l.19,j.E.V-l.N-l.1a,m,l.O,l.N,2);t p=k(M,j.E.U-l.O-l.19+1,j.E.V-l.N-l.1a+1,m,l.O,l.N,1);j.x.1u.29=o;j.x.Z.29=p;j.x.1H.29=n+o;q.2K(j)},2B:y(a){t s=a.W;t b=[\'N\',\'O\',\'19\',\'1a\'];H(t i=0;i<4;i++){a.14[\'1B\'+b[i]]=(1g(s[\'1B\'+b[i]],10)||0)+(1g(s[\'Q\'+b[i]+\'U\'],10)||0)+\'F\'}a.14.Q=\'S\'},2K:y(e){t f=K;u(!e.J||!f.1b[e.J]){1q}t g=e.W;t h={\'X\':0,\'Y\':0};t i=y(a,b){t c=M;2w(b){I\'1n\':I\'1m\':h[a]=0;13;I\'3l\':h[a]=0.5;13;I\'1X\':I\'1Y\':h[a]=1;13;1P:u(b.1y(\'%\')!=-1){h[a]=1g(b,10)*0.3m}17{c=G}}t d=(a==\'X\');h[a]=C.15(c?((e.E[d?\'U\':\'V\']-(e.P[d?\'O\':\'N\']+e.P[d?\'19\':\'1a\']))*h[a])-(f.1b[e.J][d?\'1s\':\'1t\']*h[a]):1g(b,10));h[a]+=1};H(t b 1h h){i(b,g[\'2y\'+b])}e.x.Z.1i.1j=(h.X/(e.E.U-e.P.O-e.P.19+1))+\',\'+(h.Y/(e.E.V-e.P.N-e.P.1a+1));t j=g.2z;t c={\'T\':1,\'R\':e.E.U+1,\'B\':e.E.V+1,\'L\':1};t k={\'X\':{\'2a\':\'L\',\'2b\':\'R\',\'d\':\'U\'},\'Y\':{\'2a\':\'T\',\'2b\':\'B\',\'d\':\'V\'}};u(j!=\'2c\'){c={\'T\':(h.Y),\'R\':(h.X+f.1b[e.J].1s),\'B\':(h.Y+f.1b[e.J].1t),\'L\':(h.X)};u(j.1y(\'2c-\')!=-1){t v=j.1T(\'2c-\')[1].3n();c[k[v].2a]=1;c[k[v].2b]=e.E[k[v].d]+1}u(c.B>e.E.V){c.B=e.E.V+1}}e.x.Z.z.3o=\'3p(\'+c.T+\'F \'+c.R+\'F \'+c.B+\'F \'+c.L+\'F)\'},1v:y(a){t b=q;2d(y(){b.1o(a)},1)},2e:y(a){q.1D(a);q.24(a)},1V:y(b){q.z.1l=\'S\';u(!q.W){1q}17{t c=q.W}t d={3q:G,3r:G,3s:G,3t:G,3u:G,3v:G,3w:G};u(d[q.1K]===G){1q}t e=q;t f=K;q.2J=b;q.E={};t g={3x:\'2e\',3y:\'2e\'};u(q.1K==\'A\'){t i={3z:\'1v\',3A:\'1v\',3B:\'1v\',3C:\'1v\'};H(t a 1h i){g[a]=i[a]}}H(t h 1h g){q.1r(\'3D\'+h,y(){f[g[h]](e)})}q.1r(\'3E\',y(){f.2v(e)});t j=y(a){a.z.3F=1;u(a.W.1j==\'3G\'){a.z.1j=\'3H\'}};j(q.3I);j(q);q.18=D.1k(\'3J\');q.18.14.23=\'1l:S; 1j:27; 28:0; 1B:0; Q:0; 3K:S;\';q.18.z.1c=c.1c;q.x={\'1u\':M,\'Z\':M,\'1H\':M};H(t v 1h q.x){q.x[v]=D.1k(f.16+\':3L\');q.x[v].1i=D.1k(f.16+\':3M\');q.x[v].1z(q.x[v].1i);q.x[v].3N=G;q.x[v].z.1j=\'27\';q.x[v].z.1c=c.1c;q.x[v].3O=\'1,1\';q.18.1z(q.x[v])}q.x.Z.1G=\'S\';q.x.Z.1i.3P=\'3Q\';q.3R.1Q(q.18,q);q.1F=G;u(q.1K==\'3S\'){q.1F=M;q.z.3T=\'3U\'}2d(y(){f.1o(e)},1)}};2n{D.3V("3W",G,M)}2o(2p){}K.2f();K.2j();K.2l();u(K.1d&&D.1r&&K.2h){D.1r(\'3X\',y(){u(D.3Y==\'3Z\'){t d=K.1O;t e=d.1U;t f=y(a,b,c){2d(y(){K.1V.2r(a,b)},c*2C)};H(t i=0;i<e;i++){t g=D.2i(d[i].2t);t h=g.1U;H(t r=0;r<h;r++){u(g[r].1K!=\'40\'){f(g[r],d[i].2u,r)}}}}})}',62,249,'||||||||||||||||||||||||||this|||var|if|||vml|function|style|||Math|document|dim|px|false|for|case|vmlBg|DD_roundies||true|Top|Left|bW|border||none||Width|Height|currentStyle|||image||floor|styleSheet|break|runtimeStyle|ceil|ns|else|vmlBox|Right|Bottom|imgSize|zIndex|IE8|max|radius|parseInt|in|filler|position|createElement|behavior|top|left|applyVML|backgroundColor|return|attachEvent|width|height|color|pseudoClass|firstChild|addRule|search|appendChild|webkit|padding|vmlStrokeWeight|vmlOffsets|backgroundImage|isImg|fillcolor|stroke|qy|qx|nodeName|IE6|IE7|namespaces|selectorsToProcess|default|insertBefore|typeof|undefined|split|length|roundify|join|right|bottom|vmlStrokeColor|display|filter|vmlOpacity|cssText|vmlPath|lastIndexOf|src|absolute|margin|path|b1|b2|repeat|setTimeout|reposition|IEversion|documentMode|querySelector|querySelectorAll|createVmlNameSpace|VML|createVmlStyleSheet|documentElement|try|catch|err|toString|call|createTextNode|selector|radii|readPropertyChanges|switch|borderColor|backgroundPosition|backgroundRepeat|vmlFill|nixBorder|100|transparent|10000px|removeAttribute|body|filled|slice|DD_radii|clipImage|add|urn|schemas|microsoft|com|writeln|import|namespace|implementation|url|null|constructor|Array|replace|expression|moz|push|event|propertyName|borderWidth|block|lpha|substring|opacity|substr|img|onload|offsetWidth|offsetHeight|className|_sizeFinder|offset|coordsize|1px|min|reverse|center|01|toUpperCase|clip|rect|BODY|TABLE|TR|TD|SELECT|OPTION|TEXTAREA|resize|move|mouseleave|mouseenter|focus|blur|on|onpropertychange|zoom|static|relative|offsetParent|ignore|background|shape|fill|stroked|coordorigin|type|tile|parentNode|IMG|visibility|hidden|execCommand|BackgroundImageCache|onreadystatechange|readyState|complete|INPUT'.split('|'),0,{}))
DD_roundies.addRule('.homepage-interest-box, .interest-header, .jive-announcement-create-table, .jive-view-profile-watches #jive-body-maincol, #jive-list-socialgroups-container, #pageContainer, .jive-form-container, #jive-body-full .jive-standard-formblock-container, #jive-body-sidebarcol .jive-sidebar, #jive-body #jive-body-maincol', '8px');
// For the homepage where we are rounding the darker brown box but only the top corners
DD_roundies.addRule('.interest-header', '8px 8px 0 0');
// DD_roundies.addrule('.jive-body-tab, .jive-body-tab a');


/*
 * jQuery UI 1.7.2
 *
 * Copyright (c) 2009 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI
 */
jQuery.ui||(function(c){var i=c.fn.remove,d=c.browser.mozilla&&(parseFloat(c.browser.version)<1.9);c.ui={version:"1.7.2",plugin:{add:function(k,l,n){var m=c.ui[k].prototype;for(var j in n){m.plugins[j]=m.plugins[j]||[];m.plugins[j].push([l,n[j]])}},call:function(j,l,k){var n=j.plugins[l];if(!n||!j.element[0].parentNode){return}for(var m=0;m<n.length;m++){if(j.options[n[m][0]]){n[m][1].apply(j.element,k)}}}},contains:function(k,j){return document.compareDocumentPosition?k.compareDocumentPosition(j)&16:k!==j&&k.contains(j)},hasScroll:function(m,k){if(c(m).css("overflow")=="hidden"){return false}var j=(k&&k=="left")?"scrollLeft":"scrollTop",l=false;if(m[j]>0){return true}m[j]=1;l=(m[j]>0);m[j]=0;return l},isOverAxis:function(k,j,l){return(k>j)&&(k<(j+l))},isOver:function(o,k,n,m,j,l){return c.ui.isOverAxis(o,n,j)&&c.ui.isOverAxis(k,m,l)},keyCode:{BACKSPACE:8,CAPS_LOCK:20,COMMA:188,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38}};if(d){var f=c.attr,e=c.fn.removeAttr,h="http://www.w3.org/2005/07/aaa",a=/^aria-/,b=/^wairole:/;c.attr=function(k,j,l){var m=l!==undefined;return(j=="role"?(m?f.call(this,k,j,"wairole:"+l):(f.apply(this,arguments)||"").replace(b,"")):(a.test(j)?(m?k.setAttributeNS(h,j.replace(a,"aaa:"),l):f.call(this,k,j.replace(a,"aaa:"))):f.apply(this,arguments)))};c.fn.removeAttr=function(j){return(a.test(j)?this.each(function(){this.removeAttributeNS(h,j.replace(a,""))}):e.call(this,j))}}c.fn.extend({remove:function(){c("*",this).add(this).each(function(){c(this).triggerHandler("remove")});return i.apply(this,arguments)},enableSelection:function(){return this.attr("unselectable","off").css("MozUserSelect","").unbind("selectstart.ui")},disableSelection:function(){return this.attr("unselectable","on").css("MozUserSelect","none").bind("selectstart.ui",function(){return false})},scrollParent:function(){var j;if((c.browser.msie&&(/(static|relative)/).test(this.css("position")))||(/absolute/).test(this.css("position"))){j=this.parents().filter(function(){return(/(relative|absolute|fixed)/).test(c.curCSS(this,"position",1))&&(/(auto|scroll)/).test(c.curCSS(this,"overflow",1)+c.curCSS(this,"overflow-y",1)+c.curCSS(this,"overflow-x",1))}).eq(0)}else{j=this.parents().filter(function(){return(/(auto|scroll)/).test(c.curCSS(this,"overflow",1)+c.curCSS(this,"overflow-y",1)+c.curCSS(this,"overflow-x",1))}).eq(0)}return(/fixed/).test(this.css("position"))||!j.length?c(document):j}});c.extend(c.expr[":"],{data:function(l,k,j){return !!c.data(l,j[3])},focusable:function(k){var l=k.nodeName.toLowerCase(),j=c.attr(k,"tabindex");return(/input|select|textarea|button|object/.test(l)?!k.disabled:"a"==l||"area"==l?k.href||!isNaN(j):!isNaN(j))&&!c(k)["area"==l?"parents":"closest"](":hidden").length},tabbable:function(k){var j=c.attr(k,"tabindex");return(isNaN(j)||j>=0)&&c(k).is(":focusable")}});function g(m,n,o,l){function k(q){var p=c[m][n][q]||[];return(typeof p=="string"?p.split(/,?\s+/):p)}var j=k("getter");if(l.length==1&&typeof l[0]=="string"){j=j.concat(k("getterSetter"))}return(c.inArray(o,j)!=-1)}c.widget=function(k,j){var l=k.split(".")[0];k=k.split(".")[1];c.fn[k]=function(p){var n=(typeof p=="string"),o=Array.prototype.slice.call(arguments,1);if(n&&p.substring(0,1)=="_"){return this}if(n&&g(l,k,p,o)){var m=c.data(this[0],k);return(m?m[p].apply(m,o):undefined)}return this.each(function(){var q=c.data(this,k);(!q&&!n&&c.data(this,k,new c[l][k](this,p))._init());(q&&n&&c.isFunction(q[p])&&q[p].apply(q,o))})};c[l]=c[l]||{};c[l][k]=function(o,n){var m=this;this.namespace=l;this.widgetName=k;this.widgetEventPrefix=c[l][k].eventPrefix||k;this.widgetBaseClass=l+"-"+k;this.options=c.extend({},c.widget.defaults,c[l][k].defaults,c.metadata&&c.metadata.get(o)[k],n);this.element=c(o).bind("setData."+k,function(q,p,r){if(q.target==o){return m._setData(p,r)}}).bind("getData."+k,function(q,p){if(q.target==o){return m._getData(p)}}).bind("remove",function(){return m.destroy()})};c[l][k].prototype=c.extend({},c.widget.prototype,j);c[l][k].getterSetter="option"};c.widget.prototype={_init:function(){},destroy:function(){this.element.removeData(this.widgetName).removeClass(this.widgetBaseClass+"-disabled "+this.namespace+"-state-disabled").removeAttr("aria-disabled")},option:function(l,m){var k=l,j=this;if(typeof l=="string"){if(m===undefined){return this._getData(l)}k={};k[l]=m}c.each(k,function(n,o){j._setData(n,o)})},_getData:function(j){return this.options[j]},_setData:function(j,k){this.options[j]=k;if(j=="disabled"){this.element[k?"addClass":"removeClass"](this.widgetBaseClass+"-disabled "+this.namespace+"-state-disabled").attr("aria-disabled",k)}},enable:function(){this._setData("disabled",false)},disable:function(){this._setData("disabled",true)},_trigger:function(l,m,n){var p=this.options[l],j=(l==this.widgetEventPrefix?l:this.widgetEventPrefix+l);m=c.Event(m);m.type=j;if(m.originalEvent){for(var k=c.event.props.length,o;k;){o=c.event.props[--k];m[o]=m.originalEvent[o]}}this.element.trigger(m,n);return !(c.isFunction(p)&&p.call(this.element[0],m,n)===false||m.isDefaultPrevented())}};c.widget.defaults={disabled:false};c.ui.mouse={_mouseInit:function(){var j=this;this.element.bind("mousedown."+this.widgetName,function(k){return j._mouseDown(k)}).bind("click."+this.widgetName,function(k){if(j._preventClickEvent){j._preventClickEvent=false;k.stopImmediatePropagation();return false}});if(c.browser.msie){this._mouseUnselectable=this.element.attr("unselectable");this.element.attr("unselectable","on")}this.started=false},_mouseDestroy:function(){this.element.unbind("."+this.widgetName);(c.browser.msie&&this.element.attr("unselectable",this._mouseUnselectable))},_mouseDown:function(l){l.originalEvent=l.originalEvent||{};if(l.originalEvent.mouseHandled){return}(this._mouseStarted&&this._mouseUp(l));this._mouseDownEvent=l;var k=this,m=(l.which==1),j=(typeof this.options.cancel=="string"?c(l.target).parents().add(l.target).filter(this.options.cancel).length:false);if(!m||j||!this._mouseCapture(l)){return true}this.mouseDelayMet=!this.options.delay;if(!this.mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){k.mouseDelayMet=true},this.options.delay)}if(this._mouseDistanceMet(l)&&this._mouseDelayMet(l)){this._mouseStarted=(this._mouseStart(l)!==false);if(!this._mouseStarted){l.preventDefault();return true}}this._mouseMoveDelegate=function(n){return k._mouseMove(n)};this._mouseUpDelegate=function(n){return k._mouseUp(n)};c(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate);(c.browser.safari||l.preventDefault());l.originalEvent.mouseHandled=true;return true},_mouseMove:function(j){if(c.browser.msie&&!j.button){return this._mouseUp(j)}if(this._mouseStarted){this._mouseDrag(j);return j.preventDefault()}if(this._mouseDistanceMet(j)&&this._mouseDelayMet(j)){this._mouseStarted=(this._mouseStart(this._mouseDownEvent,j)!==false);(this._mouseStarted?this._mouseDrag(j):this._mouseUp(j))}return !this._mouseStarted},_mouseUp:function(j){c(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;this._preventClickEvent=(j.target==this._mouseDownEvent.target);this._mouseStop(j)}return false},_mouseDistanceMet:function(j){return(Math.max(Math.abs(this._mouseDownEvent.pageX-j.pageX),Math.abs(this._mouseDownEvent.pageY-j.pageY))>=this.options.distance)},_mouseDelayMet:function(j){return this.mouseDelayMet},_mouseStart:function(j){},_mouseDrag:function(j){},_mouseStop:function(j){},_mouseCapture:function(j){return true}};c.ui.mouse.defaults={cancel:null,distance:1,delay:0}})(jQuery);;/*
 * jQuery UI Tabs 1.7.2
 *
 * Copyright (c) 2009 AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Tabs
 *
 * Depends:
 *	ui.core.js
 */
(function(a){a.widget("ui.tabs",{_init:function(){if(this.options.deselectable!==undefined){this.options.collapsible=this.options.deselectable}this._tabify(true)},_setData:function(b,c){if(b=="selected"){if(this.options.collapsible&&c==this.options.selected){return}this.select(c)}else{this.options[b]=c;if(b=="deselectable"){this.options.collapsible=c}this._tabify()}},_tabId:function(b){return b.title&&b.title.replace(/\s/g,"_").replace(/[^A-Za-z0-9\-_:\.]/g,"")||this.options.idPrefix+a.data(b)},_sanitizeSelector:function(b){return b.replace(/:/g,"\\:")},_cookie:function(){var b=this.cookie||(this.cookie=this.options.cookie.name||"ui-tabs-"+a.data(this.list[0]));return a.cookie.apply(null,[b].concat(a.makeArray(arguments)))},_ui:function(c,b){return{tab:c,panel:b,index:this.anchors.index(c)}},_cleanup:function(){this.lis.filter(".ui-state-processing").removeClass("ui-state-processing").find("span:data(label.tabs)").each(function(){var b=a(this);b.html(b.data("label.tabs")).removeData("label.tabs")})},_tabify:function(n){this.list=this.element.children("ul:first");this.lis=a("li:has(a[href])",this.list);this.anchors=this.lis.map(function(){return a("a",this)[0]});this.panels=a([]);var p=this,d=this.options;var c=/^#.+/;this.anchors.each(function(r,o){var q=a(o).attr("href");var s=q.split("#")[0],u;if(s&&(s===location.toString().split("#")[0]||(u=a("base")[0])&&s===u.href)){q=o.hash;o.href=q}if(c.test(q)){p.panels=p.panels.add(p._sanitizeSelector(q))}else{if(q!="#"){a.data(o,"href.tabs",q);a.data(o,"load.tabs",q.replace(/#.*$/,""));var w=p._tabId(o);o.href="#"+w;var v=a("#"+w);if(!v.length){v=a(d.panelTemplate).attr("id",w).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").insertAfter(p.panels[r-1]||p.list);v.data("destroy.tabs",true)}p.panels=p.panels.add(v)}else{d.disabled.push(r)}}});if(n){this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all");this.list.addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.lis.addClass("ui-state-default ui-corner-top");this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom");if(d.selected===undefined){if(location.hash){this.anchors.each(function(q,o){if(o.hash==location.hash){d.selected=q;return false}})}if(typeof d.selected!="number"&&d.cookie){d.selected=parseInt(p._cookie(),10)}if(typeof d.selected!="number"&&this.lis.filter(".ui-tabs-selected").length){d.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"))}d.selected=d.selected||0}else{if(d.selected===null){d.selected=-1}}d.selected=((d.selected>=0&&this.anchors[d.selected])||d.selected<0)?d.selected:0;d.disabled=a.unique(d.disabled.concat(a.map(this.lis.filter(".ui-state-disabled"),function(q,o){return p.lis.index(q)}))).sort();if(a.inArray(d.selected,d.disabled)!=-1){d.disabled.splice(a.inArray(d.selected,d.disabled),1)}this.panels.addClass("ui-tabs-hide");this.lis.removeClass("ui-tabs-selected ui-state-active");if(d.selected>=0&&this.anchors.length){this.panels.eq(d.selected).removeClass("ui-tabs-hide");this.lis.eq(d.selected).addClass("ui-tabs-selected ui-state-active");p.element.queue("tabs",function(){p._trigger("show",null,p._ui(p.anchors[d.selected],p.panels[d.selected]))});this.load(d.selected)}a(window).bind("unload",function(){p.lis.add(p.anchors).unbind(".tabs");p.lis=p.anchors=p.panels=null})}else{d.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"))}this.element[d.collapsible?"addClass":"removeClass"]("ui-tabs-collapsible");if(d.cookie){this._cookie(d.selected,d.cookie)}for(var g=0,m;(m=this.lis[g]);g++){a(m)[a.inArray(g,d.disabled)!=-1&&!a(m).hasClass("ui-tabs-selected")?"addClass":"removeClass"]("ui-state-disabled")}if(d.cache===false){this.anchors.removeData("cache.tabs")}this.lis.add(this.anchors).unbind(".tabs");if(d.event!="mouseover"){var f=function(o,i){if(i.is(":not(.ui-state-disabled)")){i.addClass("ui-state-"+o)}};var j=function(o,i){i.removeClass("ui-state-"+o)};this.lis.bind("mouseover.tabs",function(){f("hover",a(this))});this.lis.bind("mouseout.tabs",function(){j("hover",a(this))});this.anchors.bind("focus.tabs",function(){f("focus",a(this).closest("li"))});this.anchors.bind("blur.tabs",function(){j("focus",a(this).closest("li"))})}var b,h;if(d.fx){if(a.isArray(d.fx)){b=d.fx[0];h=d.fx[1]}else{b=h=d.fx}}function e(i,o){i.css({display:""});if(a.browser.msie&&o.opacity){i[0].style.removeAttribute("filter")}}var k=h?function(i,o){a(i).closest("li").removeClass("ui-state-default").addClass("ui-tabs-selected ui-state-active");o.hide().removeClass("ui-tabs-hide").animate(h,h.duration||"normal",function(){e(o,h);p._trigger("show",null,p._ui(i,o[0]))})}:function(i,o){a(i).closest("li").removeClass("ui-state-default").addClass("ui-tabs-selected ui-state-active");o.removeClass("ui-tabs-hide");p._trigger("show",null,p._ui(i,o[0]))};var l=b?function(o,i){i.animate(b,b.duration||"normal",function(){p.lis.removeClass("ui-tabs-selected ui-state-active").addClass("ui-state-default");i.addClass("ui-tabs-hide");e(i,b);p.element.dequeue("tabs")})}:function(o,i,q){p.lis.removeClass("ui-tabs-selected ui-state-active").addClass("ui-state-default");i.addClass("ui-tabs-hide");p.element.dequeue("tabs")};this.anchors.bind(d.event+".tabs",function(){var o=this,r=a(this).closest("li"),i=p.panels.filter(":not(.ui-tabs-hide)"),q=a(p._sanitizeSelector(this.hash));if((r.hasClass("ui-tabs-selected")&&!d.collapsible)||r.hasClass("ui-state-disabled")||r.hasClass("ui-state-processing")||p._trigger("select",null,p._ui(this,q[0]))===false){this.blur();return false}d.selected=p.anchors.index(this);p.abort();if(d.collapsible){if(r.hasClass("ui-tabs-selected")){d.selected=-1;if(d.cookie){p._cookie(d.selected,d.cookie)}p.element.queue("tabs",function(){l(o,i)}).dequeue("tabs");this.blur();return false}else{if(!i.length){if(d.cookie){p._cookie(d.selected,d.cookie)}p.element.queue("tabs",function(){k(o,q)});p.load(p.anchors.index(this));this.blur();return false}}}if(d.cookie){p._cookie(d.selected,d.cookie)}if(q.length){if(i.length){p.element.queue("tabs",function(){l(o,i)})}p.element.queue("tabs",function(){k(o,q)});p.load(p.anchors.index(this))}else{throw"jQuery UI Tabs: Mismatching fragment identifier."}if(a.browser.msie){this.blur()}});this.anchors.bind("click.tabs",function(){return false})},destroy:function(){var b=this.options;this.abort();this.element.unbind(".tabs").removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible").removeData("tabs");this.list.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.anchors.each(function(){var c=a.data(this,"href.tabs");if(c){this.href=c}var d=a(this).unbind(".tabs");a.each(["href","load","cache"],function(e,f){d.removeData(f+".tabs")})});this.lis.unbind(".tabs").add(this.panels).each(function(){if(a.data(this,"destroy.tabs")){a(this).remove()}else{a(this).removeClass(["ui-state-default","ui-corner-top","ui-tabs-selected","ui-state-active","ui-state-hover","ui-state-focus","ui-state-disabled","ui-tabs-panel","ui-widget-content","ui-corner-bottom","ui-tabs-hide"].join(" "))}});if(b.cookie){this._cookie(null,b.cookie)}},add:function(e,d,c){if(c===undefined){c=this.anchors.length}var b=this,g=this.options,i=a(g.tabTemplate.replace(/#\{href\}/g,e).replace(/#\{label\}/g,d)),h=!e.indexOf("#")?e.replace("#",""):this._tabId(a("a",i)[0]);i.addClass("ui-state-default ui-corner-top").data("destroy.tabs",true);var f=a("#"+h);if(!f.length){f=a(g.panelTemplate).attr("id",h).data("destroy.tabs",true)}f.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide");if(c>=this.lis.length){i.appendTo(this.list);f.appendTo(this.list[0].parentNode)}else{i.insertBefore(this.lis[c]);f.insertBefore(this.panels[c])}g.disabled=a.map(g.disabled,function(k,j){return k>=c?++k:k});this._tabify();if(this.anchors.length==1){i.addClass("ui-tabs-selected ui-state-active");f.removeClass("ui-tabs-hide");this.element.queue("tabs",function(){b._trigger("show",null,b._ui(b.anchors[0],b.panels[0]))});this.load(0)}this._trigger("add",null,this._ui(this.anchors[c],this.panels[c]))},remove:function(b){var d=this.options,e=this.lis.eq(b).remove(),c=this.panels.eq(b).remove();if(e.hasClass("ui-tabs-selected")&&this.anchors.length>1){this.select(b+(b+1<this.anchors.length?1:-1))}d.disabled=a.map(a.grep(d.disabled,function(g,f){return g!=b}),function(g,f){return g>=b?--g:g});this._tabify();this._trigger("remove",null,this._ui(e.find("a")[0],c[0]))},enable:function(b){var c=this.options;if(a.inArray(b,c.disabled)==-1){return}this.lis.eq(b).removeClass("ui-state-disabled");c.disabled=a.grep(c.disabled,function(e,d){return e!=b});this._trigger("enable",null,this._ui(this.anchors[b],this.panels[b]))},disable:function(c){var b=this,d=this.options;if(c!=d.selected){this.lis.eq(c).addClass("ui-state-disabled");d.disabled.push(c);d.disabled.sort();this._trigger("disable",null,this._ui(this.anchors[c],this.panels[c]))}},select:function(b){if(typeof b=="string"){b=this.anchors.index(this.anchors.filter("[href$="+b+"]"))}else{if(b===null){b=-1}}if(b==-1&&this.options.collapsible){b=this.options.selected}this.anchors.eq(b).trigger(this.options.event+".tabs")},load:function(e){var c=this,g=this.options,b=this.anchors.eq(e)[0],d=a.data(b,"load.tabs");this.abort();if(!d||this.element.queue("tabs").length!==0&&a.data(b,"cache.tabs")){this.element.dequeue("tabs");return}this.lis.eq(e).addClass("ui-state-processing");if(g.spinner){var f=a("span",b);f.data("label.tabs",f.html()).html(g.spinner)}this.xhr=a.ajax(a.extend({},g.ajaxOptions,{url:d,success:function(i,h){a(c._sanitizeSelector(b.hash)).html(i);c._cleanup();if(g.cache){a.data(b,"cache.tabs",true)}c._trigger("load",null,c._ui(c.anchors[e],c.panels[e]));try{g.ajaxOptions.success(i,h)}catch(j){}c.element.dequeue("tabs")}}))},abort:function(){this.element.queue([]);this.panels.stop(false,true);if(this.xhr){this.xhr.abort();delete this.xhr}this._cleanup()},url:function(c,b){this.anchors.eq(c).removeData("cache.tabs").data("load.tabs",b)},length:function(){return this.anchors.length}});a.extend(a.ui.tabs,{version:"1.7.2",getter:"length",defaults:{ajaxOptions:null,cache:false,cookie:null,collapsible:false,disabled:[],event:"click",fx:null,idPrefix:"ui-tabs-",panelTemplate:"<div></div>",spinner:"<em>Loading&#8230;</em>",tabTemplate:'<li><a href="#{href}"><span>#{label}</span></a></li>'}});a.extend(a.ui.tabs.prototype,{rotation:null,rotate:function(d,f){var b=this,g=this.options;var c=b._rotate||(b._rotate=function(h){clearTimeout(b.rotation);b.rotation=setTimeout(function(){var i=g.selected;b.select(++i<b.anchors.length?i:0)},d);if(h){h.stopPropagation()}});var e=b._unrotate||(b._unrotate=!f?function(h){if(h.clientX){b.rotate(null)}}:function(h){t=g.selected;c()});if(d){this.element.bind("tabsshow",c);this.anchors.bind(g.event+".tabs",e);c()}else{clearTimeout(b.rotation);this.element.unbind("tabsshow",c);this.anchors.unbind(g.event+".tabs",e);delete this._rotate;delete this._unrotate}}})})(jQuery);;
$j(function($) {
	
	
		$('#navigation').mouseover(function(e) {
				var $tgt = $(e.target);
				if ($tgt.is('li')) {
					$('#navigation li').removeClass("hover");
					$tgt.addClass("hover").parents('li').addClass("hover");
					return;
				} else if ($tgt.is('a')){
					$('#navigation li').removeClass("hover");
					$tgt.parents('li').addClass("hover");
					return;
				}
			}).mouseleave(function() {
				$('.hover', '#navigation').removeClass("hover");
		});
		$("#tabs").tabs({event: 'mouseover'});
		
		
		// inserts wbr tags after a certain number of characters in a string
		function wbr(str, num) { 
				  return str.replace(RegExp("(\\w{" + num + "})(\\w)", "g"), function(all,text,char){
				    return text + "<wbr />" + char;
		});
				};
				
				// This fixes long urls as document titles in recent documents tables.
				$('.jive-table-cell-subject a, .jive-table-cell-title a, .jive-table-cell-activity strong a').each(function() {
					var subjectItem = $(this);
					var subjectItemText = subjectItem.text();
					if (subjectItemText.length > 50) {
						subjectItem.html(wbr(subjectItemText, 4));
						
						// Force reset of the positioning for rounded corner widget caps used by IE.
						$('.cap').css('position', 'absolute');
					};
				});
				

					if ($('body').hasClass('view-profile-main')) {
						var feedHeight = $('#profile-feed').height();
						var feedContainerHeight = $('#jive-body-maincol-container').height();
						if (feedHeight > feedContainerHeight) {
							$('#jive-body-maincol-container').height(
								feedContainerHeight + (feedHeight - feedContainerHeight + 40)
							);
						}
					}
					
					if ($('.jive-widget').length){
						$('.app-gallery-details-recent-comments-widget').parents('.jive-widget').removeClass("jive-widget").find('.cap').remove();
					};
					
					if (($j.browser.msie) && ($j.browser.version == 6.0 )) {
						if ($('#jive-view-apps-container').length) {
							$('#jive-body-sidebarcol-container').css({'position' :'absolute', "top" : "78px", "right": 0});
						};
					};
					
					// accordion effect for developer toolsets page.
					$('.developer-toolsets-large-widget h2').click(function() {
							$(this).toggleClass("open").next().toggle("fast");
							return false;
						}).next().hide();

					// accordion effect for application gallery page.
					$('.application-gallery-details-big h2').click(function() {
							$(this).toggleClass("open").next().toggle("fast");
							return false;
						}).next().hide();
});
if (($j.browser.msie) && ($j.browser.version == 6.0 )) {	
	jQuery(window).load(function($){
		jQuery('#status-profile').css({'position' : 'absolute'});
		jQuery('input:radio, input:checkbox').css('border', '');
		
		
		
	});
};


$j(document).ready(function(){
    var url = document.location.toString();
    var item = url.split('#')[1];
    if(item == 1 || item == 3 || item == 5){
        $j(".application-gallery-details-big h2:nth-child("+item+")").click();
    }
});

$j(document).ready(function(){
    var url = document.location.toString();
    var item = url.split('#')[1];
    if(item == 3 || item == 5 || item == 7){
        $j(".developer-toolsets-large-widget h2:nth-child("+item+")").click();
    }
});

// if you are looking at the Apps 101 page, you'll need this function to do the slide.
$j(document).ready(function(){
    $j('#toggleServices').click(function() {
        $j("#services").slideToggle();
    });
});