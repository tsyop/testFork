

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html xmlns="http://www.w3.org/1999/xhtml">


<HTML>
<HEAD>
	
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="OpenOffice.org 3.1  (Linux)">
	<META NAME="AUTHOR" CONTENT="prabhu ">
	<META NAME="CREATED" CONTENT="20100706;14390700">
	<META NAME="CHANGED" CONTENT="0;0">
	
	<STYLE>
		<!-- 
		BODY,DIV,TABLE,THEAD,TBODY,TFOOT,TR,TH,TD,P { font-family:"Liberation Sans"; font-size:x-small }
		 -->
	</STYLE>
	
<link rel="stylesheet" type="text/css" href="mouseovertabs.css" />
<script src="mouseovertabs.js" type="text/javascript">

/***********************************************
* Mouseover Tabs Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<style type="text/css">

#popitmenu{
position: absolute;
background-color: white;
border:1px solid black;
font: normal 12px Verdana;
line-height: 18px;
z-index: 100;
visibility: hidden;
}

#popitmenu a{
text-decoration: none;
padding-left: 6px;
color: black;
display: block;
}

#popitmenu a:hover{ /*hover background color*/
background-color: #CCFF9D;
}

</style>

<script type="text/javascript">

/***********************************************
* Pop-it menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var defaultMenuWidth="150px" //set default menu width.

var linkset=new Array()
//SPECIFY MENU SETS AND THEIR LINKS. FOLLOW SYNTAX LAID OUT

linkset[0]='<a href="http://dynamicdrive.com">Dynamic Drive</a>'
linkset[0]+='<hr>' //Optional Separator
linkset[0]+='<a href="http://www.javascriptkit.com">JavaScript Kit</a>'
linkset[0]+='<a href="http://www.codingforums.com">Coding Forums</a>'
linkset[0]+='<a href="http://www.cssdrive.com">CSS Drive</a>'
linkset[0]+='<a href="http://freewarejava.com">Freewarejava</a>'

linkset[1]='<a href="http://msnbc.com">MSNBC</a>'
linkset[1]+='<a href="http://cnn.com">CNN</a>'
linkset[1]+='<a href="http://news.bbc.co.uk">BBC News</a>'
linkset[1]+='<a href="http://www.washingtonpost.com">Washington Post</a>'

////No need to edit beyond here

var ie5=document.all && !window.opera
var ns6=document.getElementById

if (ie5||ns6)
document.write('<div id="popitmenu" onMouseover="clearhidemenu();" onMouseout="dynamichide(event)"></div>')

function iecompattest(){
return (document.compatMode && document.compatMode.indexOf("CSS")!=-1)? document.documentElement : document.body
}

function showmenu(e, which, optWidth){
if (!document.all&&!document.getElementById)
return
clearhidemenu()
menuobj=ie5? document.all.popitmenu : document.getElementById("popitmenu")
menuobj.innerHTML=which
menuobj.style.width=(typeof optWidth!="undefined")? optWidth : defaultMenuWidth
menuobj.contentwidth=menuobj.offsetWidth
menuobj.contentheight=menuobj.offsetHeight
eventX=ie5? event.clientX : e.clientX
eventY=ie5? event.clientY : e.clientY
//Find out how close the mouse is to the corner of the window
var rightedge=ie5? iecompattest().clientWidth-eventX : window.innerWidth-eventX
var bottomedge=ie5? iecompattest().clientHeight-eventY : window.innerHeight-eventY
//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<menuobj.contentwidth)
//move the horizontal position of the menu to the left by it's width
menuobj.style.left=ie5? iecompattest().scrollLeft+eventX-menuobj.contentwidth+"px" : window.pageXOffset+eventX-menuobj.contentwidth+"px"
else
//position the horizontal position of the menu where the mouse was clicked
menuobj.style.left=ie5? iecompattest().scrollLeft+eventX+"px" : window.pageXOffset+eventX+"px"
//same concept with the vertical position
if (bottomedge<menuobj.contentheight)
menuobj.style.top=ie5? iecompattest().scrollTop+eventY-menuobj.contentheight+"px" : window.pageYOffset+eventY-menuobj.contentheight+"px"
else
menuobj.style.top=ie5? iecompattest().scrollTop+event.clientY+"px" : window.pageYOffset+eventY+"px"
menuobj.style.visibility="visible"
return false
}

function contains_ns6(a, b) {
//Determines if 1 element in contained in another- by Brainjar.com
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function hidemenu(){
if (window.menuobj)
menuobj.style.visibility="hidden"
}

function dynamichide(e){
if (ie5&&!menuobj.contains(e.toElement))
hidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
hidemenu()
}

function delayhidemenu(){
delayhide=setTimeout("hidemenu()",500)
}

function clearhidemenu(){
if (window.delayhide)
clearTimeout(delayhide)
}

if (ie5||ns6)
document.onclick=hidemenu

</script>


<link rel="stylesheet" type="text/css" href="jqcontextmenu.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="jqcontextmenu.js">

/***********************************************
* jQuery Context Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

//Usage: $(elementselector).addcontextmenu('id_of_context_menu_on_page')
//To apply context menu to entire document, use: $(document).addcontextmenu('id_of_context_menu_on_page')

jQuery(document).ready(function($){
	$('a.mylinks').addcontextmenu('contextmenu1') //apply context menu to links with class="mylinks"
})


jQuery(document).ready(function($){
	$('img').addcontextmenu('contextmenu2') //apply context menu to all images on the page
})

</script>


<script type="text/javascript">

/***********************************************
* Contractible Headers script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use. Last updated Mar 23rd, 2004.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var enablepersist="on" //Enable saving state of content structure using session cookies? (on/off)
var collapseprevious="no" //Collapse previously open content when opening present? (yes/no)

if (document.getElementById){
document.write('<style type="text/css">')
document.write('.switchcontent{display:none;}')
document.write('</style>')
}

function getElementbyClass(classname){
ccollect=new Array()
var inc=0
var alltags=document.all? document.all : document.getElementsByTagName("*")
for (i=0; i<alltags.length; i++){
if (alltags[i].className==classname)
ccollect[inc++]=alltags[i]
}
}

function contractcontent(omit){
var inc=0
while (ccollect[inc]){
if (ccollect[inc].id!=omit)
ccollect[inc].style.display="none"
inc++
}
}

function expandcontent(cid){
if (typeof ccollect!="undefined"){
if (collapseprevious=="yes")
contractcontent(cid)
document.getElementById(cid).style.display=(document.getElementById(cid).style.display!="block")? "block" : "none"
}
}

function revivecontent(){
contractcontent("omitnothing")
selectedItem=getselectedItem()
selectedComponents=selectedItem.split("|")
for (i=0; i<selectedComponents.length-1; i++)
document.getElementById(selectedComponents[i]).style.display="block"
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function getselectedItem(){
if (get_cookie(window.location.pathname) != ""){
selectedItem=get_cookie(window.location.pathname)
return selectedItem
}
else
return ""
}

function saveswitchstate(){
var inc=0, selectedItem=""
while (ccollect[inc]){
if (ccollect[inc].style.display=="block")
selectedItem+=ccollect[inc].id+"|"
inc++
}

document.cookie=window.location.pathname+"="+selectedItem
}

function do_onload(){
uniqueidn=window.location.pathname+"firsttimeload"
getElementbyClass("switchcontent")
if (enablepersist=="on" && typeof ccollect!="undefined"){
document.cookie=(get_cookie(uniqueidn)=="")? uniqueidn+"=1" : uniqueidn+"=0" 
firsttimeload=(get_cookie(uniqueidn)==1)? 1 : 0 //check if this is 1st page load
if (!firsttimeload)
revivecontent()
}
}


if (window.addEventListener)
window.addEventListener("load", do_onload, false)
else if (window.attachEvent)
window.attachEvent("onload", do_onload)
else if (document.getElementById)
window.onload=do_onload

if (enablepersist=="on" && document.getElementById)
window.onunload=saveswitchstate

</script>


<link rel="stylesheet" type="text/css" href="balloontip.css" />

<script type="text/javascript" src="balloontip.js">

/***********************************************
* Rich HTML Balloon Tooltip- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<style type="text/css">
.menutitle{
cursor:pointer;
margin-bottom: 5px;
background-color:#ECECFF;
color:#000000;
width:140px;
padding:2px;
text-align:center;
font-weight:bold;
/*/*/border:1px solid #000000;/* */
}

.submenu{
margin-bottom: 0.5em;
}
</style>

<script type="text/javascript">

/***********************************************
* Switch Menu script- by Martial B of http://getElementById.com/
* Modified by Dynamic Drive for format & NS4/IE4 compatibility
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var persistmenu="yes" //"yes" or "no". Make sure each SPAN content contains an incrementing ID starting at 1 (id="sub1", id="sub2", etc)
var persisttype="sitewide" //enter "sitewide" for menu to persist across site, "local" for this page only

if (document.getElementById){ //DynamicDrive.com change
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;}\n')
document.write('</style>\n')
}

function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("masterdiv").getElementsByTagName("span"); //DynamicDrive.com change
		if(el.style.display != "block"){ //DynamicDrive.com change
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu") //DynamicDrive.com change
				ar[i].style.display = "none";
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function onloadfunction(){
if (persistmenu=="yes"){
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=get_cookie(cookiename)
if (cookievalue!="")
document.getElementById(cookievalue).style.display="block"
}
}

function savemenustate(){
var inc=1, blockid=""
while (document.getElementById("sub"+inc)){
if (document.getElementById("sub"+inc).style.display=="block"){
blockid="sub"+inc
break
}
inc++
}
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid
document.cookie=cookiename+"="+cookievalue
}

if (window.addEventListener)
window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
window.onload=onloadfunction

if (persistmenu=="yes" && document.getElementById)
window.onunload=savemenustate

</script>
	

<style type="text/css">
.matrix { font-family:Lucida Console, Courier, Monotype; font-size:10pt; text-align:center; width:10px; padding:0px; margin:0px;}
</style>

<script type="text/javascript" language="JavaScript">

<!--
var rows=11; // must be an odd number
var speed=5; // lower is faster
var reveal=2; // between 0 and 2 only. The higher, the faster the word appears
var effectalign="default" //enter "center" to center it.

/***********************************************
* The Matrix Text Effect- by Richard Womersley (http://www.mf2fm.co.uk/rv)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var w3c=document.getElementById && !window.opera;;
var ie45=document.all && !window.opera;
var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;
var m_coch=new Array();
var m_copo=new Array();
window.onload=function() {
	if (!w3c && !ie45) return
  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];
  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;
  ma_txt=" "+ma_txt+" ";
  columns=ma_txt.length;
  if (w3c) {
    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);
    ma_tab=document.createElement("table");
    ma_tab.setAttribute("border", 0);
    ma_tab.setAttribute("align", effectalign);
    ma_tab.style.backgroundColor="#000000";
    ma_bod=document.createElement("tbody");
    for (x=0; x<rows; x++) {
      ma_row=document.createElement("tr");
      for (y=0; y<columns; y++) {
        matemp=document.createElement("td");
        matemp.setAttribute("id", "Mx"+x+"y"+y);
        matemp.className="matrix";
        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));
        ma_row.appendChild(matemp);
      }
      ma_bod.appendChild(ma_row);
    }
    ma_tab.appendChild(ma_bod);
    matrix.appendChild(ma_tab);
  } else {
    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';
    for (var x=0; x<rows; x++) {
      ma_tab+='<t'+'r>';
      for (var y=0; y<columns; y++) {
        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'">&nbsp;</'+'td>';
      }
      ma_tab+='</'+'tr>';
    }
    ma_tab+='</'+'table>';
    matrix.innerHTML=ma_tab;
  }
  ma_cho=ma_txt;
  for (x=0; x<columns; x++) {
    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));
    m_copo[x]=0;
  }
  ma_bod=setInterval("mytricks()", speed);
}

function mytricks() {
  x=0;
  for (y=0; y<columns; y++) {
    x=x+(m_copo[y]==100);
    ma_row=m_copo[y]%100;
    if (ma_row && m_copo[y]<100) {
      if (ma_row<rows+1) {
        if (w3c) {
          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);
          matemp.firstChild.nodeValue=m_coch[y];
        }
        else {
          matemp=document.all["Mx"+(ma_row-1)+"y"+y];
          matemp.innerHTML=m_coch[y];
        }
        matemp.style.color="#33ff66";
        matemp.style.fontWeight="bold";
      }
      if (ma_row>1 && ma_row<rows+2) {
        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];
        matemp.style.fontWeight="normal";
        matemp.style.color="#00ff00";
      }
      if (ma_row>2) {
          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];
        matemp.style.color="#009900";
      }
      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;
      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);
      else if (ma_row<rows+2) m_copo[y]++;
      else if (m_copo[y]<100) m_copo[y]=0;
    }
    else if (Math.random()>0.9 && m_copo[y]<100) {
      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));
      m_copo[y]++;
    }
  }
  if (x==columns) clearInterval(ma_bod);
}

function zoomer(ycol) {
  var mtmp, mtem, ytmp;
  if (m_copo[ycol]==Math.floor(rows/2)+1) {
    for (ytmp=0; ytmp<rows; ytmp++) {
      if (w3c) {
        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);
        mtmp.firstChild.nodeValue=m_coch[ycol];
      }
      else {
        mtmp=document.all["Mx"+ytmp+"y"+ycol];
        mtmp.innerHTML=m_coch[ycol];
      }
      mtmp.style.color="#33ff66";
      mtmp.style.fontWeight="bold";
    }
    if (Math.random()<reveal) {
      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));
      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);
    }
    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);
    m_copo[ycol]+=199;
    setTimeout("zoomer("+ycol+")", speed);
  }
  else if (m_copo[ycol]>200) {
    if (w3c) {
      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);
      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);
    }
    else {
      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];
      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];
    }
    mtmp.style.fontWeight="normal";
    mtem.style.fontWeight="normal";
    setTimeout("zoomer("+ycol+")", speed);
  }
  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);
  if (m_copo[ycol]>100 && m_copo[ycol]<200) {
    if (w3c) {
      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);
      mtmp.firstChild.nodeValue=String.fromCharCode(160);
      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);
      mtem.firstChild.nodeValue=String.fromCharCode(160);
    }
    else {
      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];
      mtmp.innerHTML=String.fromCharCode(160);
      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];
      mtem.innerHTML=String.fromCharCode(160);
    }
    setTimeout("zoomer("+ycol+")", speed);
  }
}
// -->
</script>

<style type="text/css">
.dropcontent{
width: 300px;
height: 140px;
border: 1px solid black;
background-color: #FFECC6;
display:block;
}
</style>


<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Charts Quickstart Example</title>

<style type="text/css">
/*margin and padding on body element
  can introduce errors in determining
  element position and are not recommended;
  we turn them off as a foundation for YUI
  CSS treatments. */
body {
	margin:0;
	padding:0;
}
</style>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.1/build/fonts/fonts-min.css" />
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/json/json-min.js"></script>

<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/element/element-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/datasource/datasource-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/swf/swf-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.1/build/charts/charts-min.js"></script>


<!--begin custom header content for this example-->
<style type="text/css">
	#chart
	{
		width: 250px;
		height: 175px;
	}

	.chart_title
	{
		display: block;
		font-size: 1.2em;
		font-weight: bold;
		margin-bottom: 0.4em;
	}
</style>
<!--end custom header content for this example-->

<!--js,css Code for ClusterLogic cSocial Feature...Critical...Starts Here-->

<!-- Sortable tables from http://yoast.com/articles/sortable-table/-->

<style type="text/css">

.odd {
 background-color: #ddd;
}
.even {
 background-color: #fff;
}

</style>

<script type="text/javascript" src="sortable.js"></script>

<!--js,css Code for ClusterLogic cSocial Feature...Critical...Ends Here-->



<!-- Make way for the Google Visualizations JS-->

<script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {'packages':['annotatedtimeline']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Sold Pencils');
        data.addColumn('string', 'title1');
        data.addColumn('string', 'text1');
        data.addColumn('number', 'Sold Pens');
        data.addColumn('string', 'title2');
        data.addColumn('string', 'text2');
        data.addRows([
          [new Date(2008, 1 ,1), 30000, undefined, undefined, 40645, undefined, undefined],
          [new Date(2008, 1 ,2), 14045, undefined, undefined, 20374, undefined, undefined],
          [new Date(2008, 1 ,3), 55022, undefined, undefined, 50766, undefined, undefined],
          //[new Date(2008, 1 ,4), 75284, undefined, undefined, 14334, 'Out of Stock','Ran out of stock on pens at 4pm'],
          //[new Date(2008, 1 ,5), 41476, 'Bought Pens','Bought 200k pens', 66467, undefined, undefined],
          [new Date(2008, 1 ,6), 33322, undefined, undefined, 39463, undefined, undefined]
        ]);

        var chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
        chart.draw(data, {displayAnnotations: false});
      }
    </script>

<!-- Google Visualizations API now closed -->

<!-- Say Hi to the Source Forge Menu Scripts  -->



 
 
<!-- Consume Server: sfs-consume-6 --> 
 
  
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    
    
    <meta name="description" content="SourceForge.net. Fast, secure and free downloads from the largest Open Source applications and software directory"> 
    
    
    <meta name="keywords" content="Open Source, Open Source Software, Development, Community, Source Code, Secure,  Downloads, Free Software"> 
    
    
    <!--title>SourceForge.net: Download and Develop Open Source Software for Free</title--> 
    <link rel="shortcut icon" href="http://a.fsdn.com/con/img/favicon.ico"> 
    
    
    <link rel="stylesheet" href="SourceForge_files/sf.css" type="text/css"> 
    
    
<style type="text/css"> 
    .Jc597a7f26d7c8082a8c40fd4e98ecaba622bb20b { display:none; }
</style> 
 
 
    
 
    
<link rel="alternate" type="application/rss+xml" title="SourceForge.net Blog" href="http://sourceforge.net/blog/feed/"> 
 
 
    
    <script src="SourceForge_files/sf.js" type="text/javascript"></script> 
    
    
<script src="SourceForge_files/top.js" type="text/javascript"></script> 
<script src="SourceForge_files/homepage.js" type="text/javascript"></script> 
 
    
    
    
    
    
        
<!-- DoubleClick Random Number --> 
<script type="text/javascript"> 
    var dfp_ord = Math.random() * 10000000000000000;
    var dfp_tile = 1;
    var dfp_ptile = 1;
    var adspot = '';
 
    
    var ad_page = 'index.php';
    
 
    var adid = '';
    var sponsored = '';
    var ad_topics = '';
 
    
        var page_id = 'pg_index';
    
    
        ad_prefix = 'cons_' + page_id + '_';
    
 
    var ad_logged_in = 0;
    var ad_search = 0;
    var immersion_adcode = "";
</script> 
<!-- End DoubleClick Random Number --> 
 
    
    
        
            
<script type="text/javascript"> 
    ad_wrapper = '';
    adspot = ad_prefix + 'p97_wrapper';
    wrappercode = '';
 
    
    if ($.cookie('ad_wrapper')) {
      ad_wrapper = $.cookie('ad_wrapper');
      
      wrappercode = ";wrapper=" + ad_wrapper;
    }
    
    
    document.write(unescape('%3Cscript src="http://ad.doubleclick.net/adj/ostg.sourceforge/'+adspot+';pg='+ad_page+';psrch=' + ad_search + wrappercode + ';logged_in=0;ptile='+dfp_ptile+';'+ad_topics + 'ord='+dfp_ord+'?" type="text/javascript"%3E%3C/script%3E'));
    
    dfp_ptile = dfp_ptile + 1;
 
    
    jQuery(function($) {
        if (ad_wrapper != "") {
            // an easy way to zero out a date's timestamp (i.e., midnight)
            Date.prototype.zeroTimestamp = function() {
                this.setHours(0);
                this.setMinutes(0);
                this.setSeconds(0);
                this.setMilliseconds(0);
                return this;
            };
 
           var d = new Date();
 
           // get the current date in EST
           var localTime = d.getTime();
           var localOffset = d.getTimezoneOffset() * 60000;
           var utc = localTime + localOffset;
           var est = utc - (3600000 * 5);
           var nd = new Date(est);
 
           // setup the cookie to expire tomorrow at midnight
           nd.zeroTimestamp();
           nd = new Date(nd.getTime() + 86400000);
 
           $.cookie('ad_wrapper', ad_wrapper, { path: '/', expires: nd });
        }
    });
</script><script src="SourceForge_files/cons_pg_index_p97_wrapper.js" type="text/javascript"></script> 
        
    
    
    
    <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32013-6'], ['_trackPageview']);
 
    (function() {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
    })();
    </script><script async="true" src="SourceForge_files/ga.js"></script> 







<!-- Say Bye to the SourceForge Menu Scripts-->

<!-- Say Hi to Google Table API-->

<script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Salary');
        data.addColumn('boolean', 'Full Time Employee');
        data.addRows(4);
        data.setCell(0, 0, 'Mike');
        data.setCell(0, 1, 10000, '$10,000');
        data.setCell(0, 2, true);
        data.setCell(1, 0, 'Jim');
        data.setCell(1, 1, 8000, '$8,000');
        data.setCell(1, 2, false);
        data.setCell(2, 0, 'Alice');
        data.setCell(2, 1, 12500, '$12,500');
        data.setCell(2, 2, true);
        data.setCell(3, 0, 'Bob');
        data.setCell(3, 1, 7000, '$7,000');
        data.setCell(3, 2, true);

        var table = new google.visualization.Table(document.getElementById('table_div'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


<!--Say Bye to Google Table API-->



<link rel="stylesheet" type="text/css" href="tabcontent.css" />

<script type="text/javascript" src="tabcontent.js">

/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="featuredcontentglider.css" />

<script type="text/javascript" src="featuredcontentglider.js">

/***********************************************
* Featured Content Glider script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>



<style type="text/css">

/*Example CSS for the two demo scrollers*/

#pscroller1{
width: 200px;
height: 100px;
border: 1px solid black;
padding: 5px;
background-color: lightyellow;
}

#pscroller2{
width: 350px;
height: 20px;
border: 1px solid black;
padding: 3px;
}

#pscroller2 a{
text-decoration: none;
}

.someclass{ //class to apply to your scroller(s) if desired
}

</style>

<script type="text/javascript">

/*Example message arrays for the two demo scrollers*/

var pausecontent=new Array()
pausecontent[0]='<a href="http://www.javascriptkit.com">JavaScript Kit</a><br />Comprehensive JavaScript tutorials and over 400+ free scripts!'
pausecontent[1]='<a href="http://www.codingforums.com">Coding Forums</a><br />Web coding and development forums.'
pausecontent[2]='<a href="http://www.cssdrive.com" target="_new">CSS Drive</a><br />Categorized CSS gallery and examples.'

var pausecontent2=new Array()
pausecontent2[0]='<a href="http://www.news.com">News.com: Technology and business reports</a>'
pausecontent2[1]='<a href="http://www.cnn.com">CNN: Headline and breaking news 24/7</a>'
pausecontent2[2]='<a href="http://news.bbc.co.uk">BBC News: UK and international news</a>'

</script>


<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google AJAX Feed API - Simple Example</title>
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAAiAF3DNUNzdZwDzmj_q9NhRKa4Dnm4xzijYYLgEs70xMuVRLTBQ4dHDXmHzOPqZc-HEGB84at4o64g"></script>
    <script type="text/javascript">
 
    google.load("feeds", "1");
 
    function initialize() {
      var feed = new google.feeds.Feed("http://www.google.com/finance/company_news?q=INDEXBOM:.BSESN&output=rss");
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed1");
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
            var div = document.createElement("div");
            div.appendChild(document.createTextNode(entry.title));
            container.appendChild(div);
          }
        }
      });
    }
    google.setOnLoadCallback(initialize);
 
    </script>


<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google AJAX Feed API - Simple Example</title>
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAAiAF3DNUNzdZwDzmj_q9NhRKa4Dnm4xzijYYLgEs70xMuVRLTBQ4dHDXmHzOPqZc-HEGB84at4o64g"></script>
    <script type="text/javascript">
 
    google.load("feeds", "1");
 
    function initialize() {
      var feed = new google.feeds.Feed("http://www.sebi.gov.in/SEBI.xml");
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed2");
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
            var div = document.createElement("div");
            div.appendChild(document.createTextNode(entry.title));
            container.appendChild(div);
          }
        }
      });
    }
    google.setOnLoadCallback(initialize);
 
    </script>


<script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {'packages':['annotatedtimeline']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Sold Pencils');
        data.addColumn('string', 'title1');
        data.addColumn('string', 'text1');
        data.addColumn('number', 'Sold Pens');
        data.addColumn('string', 'title2');
        data.addColumn('string', 'text2');
        data.addRows([
          [new Date(2008, 1 ,1), 30000, undefined, undefined, 40645, undefined, undefined],
          [new Date(2008, 1 ,2), 14045, undefined, undefined, 20374, undefined, undefined],
          [new Date(2008, 1 ,3), 55022, undefined, undefined, 50766, undefined, undefined],
         // [new Date(2008, 1 ,4), 75284, undefined, undefined, 14334, 'Out of Stock','Ran out of stock on pens at 4pm'],
         // [new Date(2008, 1 ,5), 41476, 'Bought Pens','Bought 200k pens', 66467, undefined, undefined],
          [new Date(2008, 1 ,6), 33322, undefined, undefined, 39463, undefined, undefined]
        ]);

        var chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
        chart.draw(data, {displayAnnotations: true});
      }
    </script>





</HEAD>

<BODY TEXT="#000000">
<TABLE FRAME=VOID CELLSPACING=0 COLS=3 RULES=NONE BORDER=0>
	<!--COLGROUP><COL WIDTH=86><COL WIDTH=86><COL WIDTH=86></COLGROUP-->
	<TBODY>
		
		<TR>
			
			<TD STYLE="border-right: 3px solid #000000" HEIGHT=800 WIDTH=300 BGCOLOR="#ffffff" ><FONT FACE="Liberation Serif"></FONT></TD>
			<TD HEIGHT=800 WIDTH=850 ALIGN=LEFT VALIGN=TOP><FONT FACE="Liberation Serif">
			<TABLE BORDER="3">
			
			<!--TR>
			<TD WIDTH=800 HEIGHT=50 BGCOLOR="#c6f6f2" ALIGN="LEFT" VALIGN="TOP">
			This is Banner 1
			</TD>
			</TR-->

			<TR>
			<TD WIDTH=800 HEIGHT=100 BGCOLOR="#e1ea82" ALIGN="LEFT" VALIGN="TOP">
			<!--This is Banner 2-->
						
			<!--div id="matrix">MostlyLinux - Making Open Source Work</div-->


			<!--This is the Sourceforge Header-->

	
			<div id="messages"> 
        
        
 
        
    </div> 
 
    <div id="doc3"> 
      <div id="hd"> 
    <div class="yui-b"> 
          
 
<p id="metaNav"> 
    
    <strong>Welcome, Guest!</strong> 
    <a href="https://sourceforge.net/account/login.php">Log In</a> | <a href="http://sourceforge.net/account/registration/">Create Account</a> 
    
</p> 
	  
<a href="http://sourceforge.net/" class="logo">Find and trade your Stocks</a><br/>

<script type="text/javascript">

//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

new pausescroller(pausecontent2, "pscroller2", "someclass", 2000)

//scroller ends

</script>

<ul id="nav"> 
	<li class="first"><a href="http://sourceforge.net/softwaremap/" title="Find free open source software">Find Stock</a></li> 
	<li><a href="http://sourceforge.net/develop/" title="Learn more about the actively developed projects on SourceForge">Trade Stock</a></li> 
	<li><a href="http://sourceforge.net/register/" title="Start your very own project!">Create Account</a></li> 
	<li><a href="http://sourceforge.net/blog/">Check Indices</a></li> 
	<li><a href="http://p.sf.net/sourceforge/getsupport">Site Support</a></li> 
	
	<li class="last"><a href="http://sourceforge.net/about">About SME India</a></li> 
</ul> 
 
 
<div id="additional-h" class="yui-g"> 
  <div class="yui-u"> 
    <div class="header head-main"> 
      <h1><strong>The SME Stock Exchange of India</strong></h1> 
    </div> 
    <div class="clearfix"> 
      <a href="http://sourceforge.net/about" class="button"><span>Learn more about the SME Exchange of India</span></a> 
      <a href="http://sourceforge.net/apps/trac/sourceforge/wiki/What%20is%20Open%20Source%20software" class="dotted-link">What is Stock Trading?</a> 
    </div> 
  </div> 
  <div class="yui-u first"> 
    <div class="header head-sub"> 
      <h3>Search your Scrip and Stock</h3> 
    </div> 
    <div class="sfBox search"> 
      <form action="/search/" method="get"> 
        <input value="soft" name="type_of_search" type="hidden"> 
        <input class="text clear hint blur" name="words" value="enter keyword" type="text"> 
        <span class="yui-button yui-push-button default"> 
          <span class="first-child"> 
            <button type="submit" value="Search">Search</button> 
          </span> 
        </span> 
      </form> 
    </div> 
    <div class="sfPickOS"> 
        By default, we'll show you Stocks 
        <div id="cur_os" class="win32_os" style="display: inline;"> 
            Auto Anc
            <a href="#change_os" id="change_os" title="change OS" class="icon os-icon win-icon"> 
            (change)
            </a> 
        </div> 
        <div id="sel_os" style="display: none;"> 
            <form method="post" action="/settings/set_os" style="display: inline;"> 
                <select id="os_select" name="value" style="display: inline;"> 
                     
                    <option value="-guess-">Steel Mills</option> 
                     
                    <option value="win32" selected="selected">Generators</option> 
                     
                    <option value="mac_intel">Pumps</option> 
                     
                    <option value="lin32">Pistons</option> 
                     
                    <option value="other">Other</option> 
                     
                </select> 
                <input style="display: none;" value="Change" type="submit"> 
		<input name="_visit_cookie" value="4b8e48ab86502b777f000584" type="hidden"> 
            </form> 
        </div> 
    </div> 
  </div> 
</div> 
 
    </div> 
      </div> 

			
			<!--This is the end of the Sourceforge Header-->

			</TD>
			</TR>

			<TR>
			<TD WIDTH=800 HEIGHT=50 BGCOLOR="#c6f6f2" ALIGN="LEFT" VALIGN="TOP">
			<!--This is Banner 3-->
			
			
			<div id="mytabsmenu" class="tabsmenuclass">
<ul>
<li><a href="http://www.javascriptkit.com" rel="gotsubmenu[selected]">JavaScript Kit</a></li>
<li><a href="http://www.cssdrive.com" rel="gotsubmenu">CSS Drive</a></li>
<!--li><a href="http://www.codingforums.com">No Sub Menu</a></li-->
</ul>
</div>

<div id="mysubmenuarea" class="tabsmenucontentclass">

<!--1st link within submenu container should point to the external submenu contents file-->
<a href="submenucontents.htm" style="visibility:hidden">Sub Menu contents</a>

</div>


<script type="text/javascript">
//mouseovertabsmenu.init("tabs_container_id", "submenu_container_id", "bool_hidecontentsmouseout")
mouseovertabsmenu.init("mytabsmenu", "mysubmenuarea", true)

</script>



<!--Contents of submenucontents.htm-->

<div class="tabsmenucontent">
<ul>
<li><a href="http://www.javascriptkit.com">Home</a></li>
<li><a href="http://www.javascriptkit.com/cutpastejava.shtml">Free JavaScripts</a></li>
<li><a href="http://www.javascriptkit.com/javatutors/">JS Tutorials</a></li>
</ul>
</div>

<div class="tabsmenucontent">
<ul>
<li><a href="http://www.cssdrive.com">Gallery</a></li>
<li><a href="http://www.cssdrive.com/index.php/menudesigns/">Menu Designs</a></li>
<li><a href="http://www.cssdrive.com/index.php/news/">News</a></li>
</ul>
</div>



			
			</TD>
			</TR>
			

			<TABLE BORDER="0">
			<TR>
			<TD STYLE="border-right: 2px solid #000000" HEIGHT=300 WIDTH=150 BGCOLOR="#c6d6f6" VALIGN="TOP" >
			<!--Left Module 1 Starts here-->

			<div id="masterdiv">

	<div class="menutitle" onclick="SwitchMenu('sub1')">Site Menu</div>
	<span class="submenu" id="sub1">
		- <a href="new.htm">What's New</a><br>
		- <a href="hot.htm">What's hot</a><br>
		- <a href="revised.htm">Revised Scripts</a><br>
		- <a href="morezone/">More Zone</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub2')">FAQ/Help</div>
	<span class="submenu" id="sub2">
		- <a href="notice.htm">Usage Terms</a><br>
		- <a href="faqs.htm">DHTML FAQs</a><br>
		- <a href="help.htm">Scripts FAQs</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub3')">Help Forum</div>
	<span class="submenu" id="sub3">
		- <a href="http://www.codingforums.com">Coding Forums</a><br>
	</span>
	
	<div class="menutitle" onclick="SwitchMenu('sub4')">Cool Links</div>
	<span class="submenu" id="sub4">
		- <a href="http://www.javascriptkit.com">JavaScript Kit</a><br>
		- <a href="http://www.freewarejava.com">Freewarejava</a><br>
		- <a href="http://www.cooltext.com">Cool Text</a><br>
		- <a href="http://www.google.com">Google.com</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub5')">Site Menu</div>
	<span class="submenu" id="sub5">
		- <a href="new.htm">What's New</a><br>
		- <a href="hot.htm">What's hot</a><br>
		- <a href="revised.htm">Revised Scripts</a><br>
		- <a href="morezone/">More Zone</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub6')">FAQ/Help</div>
	<span class="submenu" id="sub6">
		- <a href="notice.htm">Usage Terms</a><br>
		- <a href="faqs.htm">DHTML FAQs</a><br>
		- <a href="help.htm">Scripts FAQs</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub7')">Help Forum</div>
	<span class="submenu" id="sub7">
		- <a href="http://www.codingforums.com">Coding Forums</a><br>
	</span>
	
	<div class="menutitle" onclick="SwitchMenu('sub8')">Cool Links</div>
	<span class="submenu" id="sub8">
		- <a href="http://www.javascriptkit.com">JavaScript Kit</a><br>
		- <a href="http://www.freewarejava.com">Freewarejava</a><br>
		- <a href="http://www.cooltext.com">Cool Text</a><br>
		- <a href="http://www.google.com">Google.com</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub9')">Site Menu</div>
		<span class="submenu" id="sub9">
		- <a href="new.htm">What's New</a><br>
		- <a href="hot.htm">What's hot</a><br>
		- <a href="revised.htm">Revised Scripts</a><br>
		- <a href="morezone/">More Zone</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub10')">FAQ/Help</div>
	<span class="submenu" id="sub10">
		- <a href="notice.htm">Usage Terms</a><br>
		- <a href="faqs.htm">DHTML FAQs</a><br>
		- <a href="help.htm">Scripts FAQs</a>
	</span>

	<div class="menutitle" onclick="SwitchMenu('sub11')">Help Forum</div>
	<span class="submenu" id="sub11">
		- <a href="http://www.codingforums.com">Coding Forums</a><br>
	</span>
	
	<div class="menutitle" onclick="SwitchMenu('sub12')">Cool Links</div>
	<span class="submenu" id="sub12">
		- <a href="http://www.javascriptkit.com">JavaScript Kit</a><br>
		- <a href="http://www.freewarejava.com">Freewarejava</a><br>
		- <a href="http://www.cooltext.com">Cool Text</a><br>
		- <a href="http://www.google.com">Google.com</a>
	</span>



	<!--img src="arrowdown.gif" onclick="SwitchMenu('sub5')"
	<span class="submenu" id="sub5">
		- <a href="http://www.dynamicdrive.com/link.htm">Link to DD</a><br>
		- <a href="http://www.dynamicdrive.com/recommendit/">Recommend Us</a><br>
		- <a href="http://www.dynamicdrive.com/contact.htm">Email Us</a><br>
	</span-->

</div>

			<!-- Left Module 1 closes here-->

			</TD>

			<!--Main Body 1 opens here-->

			<TD HEIGHT=300 WIDTH=650 BGCOLOR="#fafbfd" ALIGN="LEFT" VALIGN="TOP">
						
			<BR>
			<!-- h2 onClick="expandcontent('sc1')" style="cursor:hand; cursor:pointer">+ What is JavaScript?</h2>
<div id="sc1" class="switchcontent">
JavaScript is a scripting language originally developed by Netscape to add interactivity and power to web documents. It is purely client side, and runs completely on the client's browser and computer.<BR>
</div>

<h2 onClick="expandcontent('sc2')" style="cursor:hand; cursor:pointer">+ Difference betwen Java & JavaScript?</h2>
<div id="sc2" class="switchcontent">
Java is completely different from JavaScript- the former is a compiled language while the later is a scripting language.
</div>

<h2 onClick="expandcontent('sc3')" style="cursor:hand; cursor:pointer">+ What is DHTML?</h2>
<div id="sc3" class="switchcontent">
DHTML is the embodiment of a combination of technologies- JavaScript, CSS, and HTML. Through them a new level of interactivity is possible for the end user experience.
</div>
<BR><BR>

<script>

YAHOO.example.puppies = [
   { name: "Ashley", breed: "German Shepherd", age: 12 },
   { name: "Dirty Harry", breed: "Norwich Terrier", age: 5 },
   { name: "Emma", breed: "Labrador Retriever", age: 9 },
   { name: "Oscar", breed: "Yorkshire Terrier", age: 6 },
   { name: "Riley", breed: "Golden Retriever", age: 6 },
   { name: "Shannon", breed: "Greyhound", age: 12 },
   { name: "Washington" ,breed: "English Bulldog", age: 8 },
   { name: "Zoe", breed: "Labrador Retriever", age: 3 }
];

var myDataSource = new YAHOO.util.DataSource(YAHOO.example.puppies);
myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
myDataSource.responseSchema = {
    fields: [ "name","breed","age" ]
};


<div>
var myChart = new YAHOO.widget.ColumnChart( "myContainer", myDataSource, {
    xField: "name",
    yField: "age"
});
</div>

YAHOO.example.monthlyExpenses = 
	[ 
	    { month: "January", rent: 880.00, utilities: 894.68 }, 
	    { month: "February", rent: 880.00, utilities: 901.35 }, 
	    { month: "March", rent: 880.00, utilities: 889.32 }, 
	    { month: "April", rent: 880.00, utilities: 884.71 }, 
	    { month: "May", rent: 910.00, utilities: 879.811 }, 
	    { month: "June", rent: 910.00, utilities: 897.95 } 
	]; 
	 
	var myDataSource = new YAHOO.util.DataSource( YAHOO.example.monthlyExpenses ); 
	myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY; 
	myDataSource.responseSchema = 
	{ 
	    fields: [ "month", "rent", "utilities" ] 
	}; 






var myChart = new YAHOO.widget.ColumnChart( "myContainer", myDataSource, {
    xField: "name",
    yField: "age"
});

var mychart = new YAHOO.widget.LineChart( "chart", myDataSource, 
	{ 
	    xField: "month", 
	    series: seriesDef, 
	    yAxis: currencyAxis, 
	    dataTipFunction: YAHOO.example.getDataTipText 
	}); 



</script>


<div class="yui-skin-sam">


<h1>Charts Quickstart Example</h1>

<div class="exampleIntro">
	<p>This example is a demonstration of the <a href="http://developer.yahoo.com/yui/charts/">YUI Chart Control</a>'s basic features.</p>
<p>Please note: The YUI Charts Control requires Flash Player 9.0.45 or higher. The latest version of Flash Player is available at the <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player Download Center</a>.</p>			
</div>

<BEGIN SOURCE CODE FOR EXAMPLE =============================== >

<span class="chart_title">Monthly Expenses</span>
<div id="chart">Unable to load Flash content. The YUI Charts Control requires Flash Player 9.0.45 or higher. You can download the latest version of Flash Player from the <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player Download Center</a>.</p></div>

<script type="text/javascript">

	YAHOO.widget.Chart.SWFURL = "http://yui.yahooapis.com/2.8.1/build/charts/assets/charts.swf";

//--- data

	YAHOO.example.monthlyExpenses =
	[
		{ month: "January", rent: 880.00, utilities: 894.68 },
		{ month: "February", rent: 880.00, utilities: 901.35 },
		{ month: "March", rent: 880.00, utilities: 889.32 },
		{ month: "April", rent: 880.00, utilities: 884.71 },
		{ month: "May", rent: 910.00, utilities: 879.811 },
		{ month: "June", rent: 910.00, utilities: 897.95 }
	];

	var myDataSource = new YAHOO.util.DataSource( YAHOO.example.monthlyExpenses );
	myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
	myDataSource.responseSchema =
	{
		fields: [ "month", "rent", "utilities" ]
	};

//--- chart

	var seriesDef =
	[
		{ displayName: "Rent", yField: "rent" },
		{ displayName: "Utilities", yField: "utilities" }
	];

	YAHOO.example.formatCurrencyAxisLabel = function( value )
	{
		return YAHOO.util.Number.format( value,
		{
			prefix: "$",
			thousandsSeparator: ",",
			decimalPlaces: 2
		});
	}

	YAHOO.example.getDataTipText = function( item, index, series )
	{
		var toolTipText = series.displayName + " for " + item.month;
		toolTipText += "\n" + YAHOO.example.formatCurrencyAxisLabel( item[series.yField] );
		return toolTipText;
	}

	var currencyAxis = new YAHOO.widget.NumericAxis();
	currencyAxis.minimum = 800;
	currencyAxis.labelFunction = YAHOO.example.formatCurrencyAxisLabel;

	var mychart = new YAHOO.widget.LineChart( "chart", myDataSource,
	{
		series: seriesDef,
		xField: "month",
		yAxis: currencyAxis,
		dataTipFunction: YAHOO.example.getDataTipText,
		//only needed for flash player express install
		expressInstall: "assets/expressinstall.swf"
	});

</script>
<!--END SOURCE CODE FOR EXAMPLE =============================== -->


<!--MyBlogLog instrumentation>
<script type="text/javascript" src="http://track2.mybloglog.com/js/jsserv.php?mblID=2007020704011645"></script>

</div-->


			<script type="text/javascript">

			//new pausescroller(name_of_message_array, CSS_ID, CSS_classname, pause_in_miliseconds)

			//new pausescroller(pausecontent, "pscroller1", "someclass", 3000)
			//document.write("<br />")
			new pausescroller(pausecontent2, "pscroller2", "someclass", 2000)

			</script>


			<!--h3 onClick="expandcontent('sc1')" style="cursor:hand; cursor:pointer">What is JavaScript?</h3>
<div id="sc1" class="switchcontent">
JavaScript is a scripting language originally developed by Netscape to add interactivity and power to web documents. It is purely client side, and runs completely on the client's browser and computer.
</div>

<h3 onClick="expandcontent('sc2')" style="cursor:hand; cursor:pointer">Difference betwen Java & JavaScript?</h3>
<div id="sc2" class="switchcontent">
Java is completely different from JavaScript- the former is a compiled language while the later is a scripting language.
</div>

<h3 onClick="expandcontent('sc3')" style="cursor:hand; cursor:pointer">What is DHTML?</h3>
<div id="sc3" class="switchcontent">
DHTML is the embodiment of a combination of technologies- JavaScript, CSS, and HTML. Through them a new level of interactivity is possible for the end user experience.
</div-->

<div id="pettabs" class="indentmenu">
<ul>
<li><a href="#" rel="dog1" class="selected">Tab 1</a></li>
<li><a href="#" rel="dog2">Tab 2</a></li>
<li><a href="#" rel="dog3">Tab 3</a></li>
<li><a href="#" rel="dog4" id="myfavorite">Tab 4</a></li>
<li><a href="http://www.google.com">Google</a></li>
</ul>
<br style="clear: left" />
</div>

<div style="border:1px solid gray; width:600px; height: 225px; padding: 5px; margin-bottom:1em">

<div id="dog1" class="tabcontent">
<!--Tab 1 content-->
<!--script src="http://spreadsheets.google.com/gpub?url=http%3A%2F%2Ftbaoebshgeq225lhq2bam0m0a5mf6u0b.spreadsheets.gmodules.com%2Fgadgets%2Fifr%3Fup__table_query_url%3Dhttp%253A%252F%252Fspreadsheets.google.com%252Ftq%253Frange%253DE106%25253AF242%2526headers%253D-1%2526gid%253D6%2526key%253D0AmaO0lNZML3TcHVrWjBJUDRHNEhrMkVuclUyVUpGRGc%2526pub%253D1%26up_title%26up__table_query_refresh_interval%3D0%26up_scale%3Dfixed%26up_values_suffix%26up_annotations_width%3D25%26up_display_zoom_buttons%3D1%26up_display_exact_values%3D0%26up_display_annotations_filter%3D0%26up_display_legend_inNewline%3D0%26url%3Dhttp%253A%252F%252Fwww.google.com%252Fig%252Fmodules%252Ftime-series-line.xml&height=220&width=475"></script-->

<div id='chart_div' style='width: 550px; height: 220px;'></div>



<!--p><b><a href="javascript: mypets.expandit('myfavorite')">Click here to select tab with id="myfavorite"</a></b></p-->
</div>

<div id="dog2" class="tabcontent">
<!--Tab 2 content-->



<div class="yui-skin-sam">


<!--h1>Charts Quickstart Example</h1>

<div class="exampleIntro">
	<p>This example is a demonstration of the <a href="http://developer.yahoo.com/yui/charts/">YUI Chart Control</a>'s basic features.</p>
<p>Please note: The YUI Charts Control requires Flash Player 9.0.45 or higher. The latest version of Flash Player is available at the <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player Download Center</a>.</p>			
</div-->

<!--BEGIN SOURCE CODE FOR EXAMPLE =============================== -->

<span class="chart_title">Monthly Expenses</span>
<!--div id="chart">Unable to load Flash content. The YUI Charts Control requires Flash Player 9.0.45 or higher. You can download the latest version of Flash Player from the <a href="http://www.adobe.com/go/getflashplayer">Adobe Flash Player Download Center</a>.</p></div-->

<script type="text/javascript">

	YAHOO.widget.Chart.SWFURL = "http://yui.yahooapis.com/2.8.1/build/charts/assets/charts.swf";

//--- data

	YAHOO.example.monthlyExpenses =
	[
		{ month: "January", rent: 880.00, utilities: 894.68 },
		{ month: "February", rent: 880.00, utilities: 901.35 },
		{ month: "March", rent: 880.00, utilities: 889.32 },
		{ month: "April", rent: 880.00, utilities: 884.71 },
		{ month: "May", rent: 910.00, utilities: 879.811 },
		{ month: "June", rent: 910.00, utilities: 897.95 }
	];

	var myDataSource = new YAHOO.util.DataSource( YAHOO.example.monthlyExpenses );
	myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
	myDataSource.responseSchema =
	{
		fields: [ "month", "rent", "utilities" ]
	};

//--- chart

	var seriesDef =
	[
		{ displayName: "Rent", yField: "rent" },
		{ displayName: "Utilities", yField: "utilities" }
	];

	YAHOO.example.formatCurrencyAxisLabel = function( value )
	{
		return YAHOO.util.Number.format( value,
		{
			prefix: "$",
			thousandsSeparator: ",",
			decimalPlaces: 2
		});
	}

	YAHOO.example.getDataTipText = function( item, index, series )
	{
		var toolTipText = series.displayName + " for " + item.month;
		toolTipText += "\n" + YAHOO.example.formatCurrencyAxisLabel( item[series.yField] );
		return toolTipText;
	}

	var currencyAxis = new YAHOO.widget.NumericAxis();
	currencyAxis.minimum = 800;
	currencyAxis.labelFunction = YAHOO.example.formatCurrencyAxisLabel;

	var mychart = new YAHOO.widget.LineChart( "chart", myDataSource,
	{
		series: seriesDef,
		xField: "month",
		yAxis: currencyAxis,
		dataTipFunction: YAHOO.example.getDataTipText,
		//only needed for flash player express install
		expressInstall: "assets/expressinstall.swf"
	});

</script>
<!--END SOURCE CODE FOR EXAMPLE =============================== -->


<!--MyBlogLog instrumentation-->
<script type="text/javascript" src="http://track2.mybloglog.com/js/jsserv.php?mblID=2007020704011645"></script>



</div>

</div>

<div id="dog3" class="tabcontent">
<!-- Tab content 3 here<br />Tab content 3 here<br / -->

<h2>--Feeds from Google Finance--</h2><br/>

    <div id="feed1"></div>

<h2>-- Feeds from SEBI --</h2><br/>

	<div id="feed2"></div>


</div>

<div id="dog4" class="tabcontent">
<!--Tab content 4 here<br />Tab content 4 here<br /-->


<div id='chart_div' style='width: 300px; height: 175px;'></div>


</div>

</div>


<script type="text/javascript">

var mypets=new ddtabcontent("pettabs")
mypets.setpersist(true)
mypets.setselectedClassTarget("link")
mypets.init(2000)

</script>


		<!--Main Body 1 closes here-->

			</TD>


			<!--TD STYLE=" border-left: 2px solid #000000 " HEIGHT=300 WIDTH=150 BGCOLOR="#c6d6f6" VALIGN="TOP" ALIGN="CENTER">
			
			<Right Module 2 opens here>

			<Right Module 2 closes here>			

			</TD-->


			</TR>
			</TABLE>

			<TABLE BORDER="0">
			<TR>
			<!--TD STYLE="border-right: 3px solid #000000" HEIGHT=300 WIDTH=150 BGCOLOR="#c6d6f6" >

			Left Module 3 opens here

			
			</TD-->
			<TD HEIGHT=300 WIDTH=800 BGCOLOR="#fafbfd">

			<!-- Main Body 2 opens here-->
			
<!--Code for ClusterLogic cSocial Feature...Critical...Starts Here-->
			
<?php

$user = "joomla";
$pass = "joomla";
$db = "joomla4";

$link = mysql_connect("localhost",$user,$pass);

if(!$link)

die ("MySQL Connection Failure");
else
print"Successful Connection to MySQL";



if(!mysql_select_db($db,$link))

die("Database Connection Failure");

else

print "Successful Connection to Database $db";


?>
<table class="sortable" id="anyid" border="2"  width="500px" cellpadding="0" cellspacing="0">

<tr><th align="center">Refresh id</th><th>Sort Profile</th><th class="startsort"> Sort Professional</th><th>Sort Enterprise</th></tr>

<?php
$result = mysql_query("SELECT * FROM AIADAcSocial1");
?>

<?php while($a_row = mysql_fetch_array($result)) {?>

<tr><td align="center"><?php echo $a_row[id]; ?></td><td align="center"><a href="<?php echo $a_row[url]; ?>" target="_new"><?php echo $a_row["name"]; ?></a></td><td align="center"><?php echo $a_row["professional"]; ?></td><td align="center"><a href="<?php echo $a_row[www]?>" target="_new"><?php echo $a_row["organisation"]; ?></a></td></tr>

<?php } ?>


<!--tr><td>15</td><td></td><td></td><td>&euro;29.55</td><td></td></tr-->

			</table>

<!--Code for ClusterLogic cSocial Feature...Critical...Ends Here-->



<!-- This is an Interactive Google Chart from Google Spreadsheets >
<div id='chart_div' style='width: 500px; height: 200px;'></div -->


<!--Google Table API starts-->

<div id='table_div'></div>

<!--Google Table API ends-->

<BR>

<!--This is the SourceForge Main Menu... Opening...Thank you sourceforge.com-->
			

<div id="yui-main"> 
    <div class="yui-b"> 
      <div class="sfBox b-hot"> 
	<div class="b-hot__inner"> 
	  <h3>Benchmark Stock Exchanges of India</h3> 
	  <div class="b-hot__wrap"> 
	    <div class="list"> 
              
	      <div class="carousel-wrap"> 
		<div id="hotB-carousel-body" class="carousel-body" style="top: -2292px;"> 
                  
                  
                  <ul> 
                    
                    <li class="first"> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "emule",
                                        "source": "sf.net",
                                        "action": "/projects/emule/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Check Stocks</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/emule/reviews" title="View all reviews">| Trade</a></div> 
                            
                        </div> 
                      <div class="nn">1</div> 
                      
                      <div class="picrel"><a href="http://sourceforge.net/projects/emule/" title="eMule"><img src="SourceForge_files/bse.png" alt="BSE" height="48" width="48"></a></div> 
                      
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/emule/" title="eMule">The BSE of India</a></h4> 
                        <p>The BSE is India's benchmark stock exchange.</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/emule/eMule/0.50a/eMule0.50a-Installer.exe?74777303' }" href="http://sourceforge.net/projects/emule/files/eMule/0.50a/eMule0.50a-Installer.exe/download" title="/eMule/0.50a/eMule0.50a-Installer.exe"> 
                            <strong>Visit the BSE Website</strong> <small>bseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "azureus",
                                        "source": "sf.net",
                                        "action": "/projects/azureus/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Check Stocks</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/azureus/reviews" title="View all reviews"> | Trade</a></div> 
                            
                        </div> 
                      <div class="nn">2</div> 
                      
                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/bse.png" alt="BSE" height="48" width="48"></a></div> 
                      
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"> The BSE of India</a></h4> 
                        <p>Check Stocks on the basis of Market Capitalization - Small Cap, Mid Cap, Large Cap</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/azureus/vuze/Vuze_4406/Vuze_4406a_windows.exe?42642818' }" href="http://sourceforge.net/projects/azureus/files/vuze/Vuze_4406/Vuze_4406a_windows.exe/download" title="/vuze/Vuze_4406/Vuze_4406a_windows.exe"> 
                            <strong>Visit the BSE Website</strong> <small>bseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "aresgalaxy",
                                        "source": "sf.net",
                                        "action": "/projects/aresgalaxy/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Check Stocks</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/aresgalaxy/reviews" title="View all reviews">| Trade</a></div> 
                            
                        </div> 
                      <div class="nn">3</div> 
                      
<div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/bse.png" alt="BSE" height="48" width="48"></a></div> 


                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/aresgalaxy/" title="Ares Galaxy">The BSE of India</a></h4> 
                        <p>Check Stocks by Sector Oil and Gas, Metals, Technology, Telecom</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/aresgalaxy/aresgalaxy/AresRegular215_02082010/aresregular215_installer.exe?50421622' }" href="http://sourceforge.net/projects/aresgalaxy/files/aresgalaxy/AresRegular215_02082010/aresregular215_installer.exe/download" title="/aresgalaxy/AresRegular215_02082010/aresregular215_installer.exe"> 
                            <strong>Visit the BSE India Website</strong> <small>bseindia.com</small></a></p> 
                      </div> 
                    </li> 
                             
<li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "aresgalaxy",
                                        "source": "sf.net",
                                        "action": "/projects/aresgalaxy/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Check Stocks</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/aresgalaxy/reviews" title="View all reviews">| Trade</a></div> 
                            
                        </div> 
                      <div class="nn">4</div> 
                      
<div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/bse.png" alt="BSE" height="48" width="48"></a></div> 


                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/aresgalaxy/" title="Ares Galaxy">The BSE of India</a></h4> 
                        <p>Check Stocks by Sector Oil and Gas, Metals, Technology, Telecom</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/aresgalaxy/aresgalaxy/AresRegular215_02082010/aresregular215_installer.exe?50421622' }" href="http://sourceforge.net/projects/aresgalaxy/files/aresgalaxy/AresRegular215_02082010/aresregular215_installer.exe/download" title="/aresgalaxy/AresRegular215_02082010/aresregular215_installer.exe"> 
                            <strong>Visit the BSE India Website</strong> <small>bseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    


                    <li class="first"> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "sevenzip",
                                        "source": "sf.net",
                                        "action": "/projects/sevenzip/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div>
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/sevenzip/reviews" title="View all reviews"> | Trade</a></div> 
                            
                        </div> 
                      <div class="nn">1</div> 

	                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/nse.png" alt="NSE" height="48" width="48"></a></div> 
                      
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/sevenzip/" title="7-Zip">The NSE of India</a></h4> 
                        <p>The NSE has both Spot and Future and Options Trading Schemes</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/sevenzip/7-Zip/9.15/7z915.exe?86445676' }" href="http://sourceforge.net/projects/sevenzip/files/7-Zip/9.15/7z915.exe/download" title="/7-Zip/9.15/7z915.exe"> 
                            <strong>Visit the NSE website</strong> <small>nseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "peazip",
                                        "source": "sf.net",
                                        "action": "/projects/peazip/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/peazip/reviews" title="View all reviews"> | Trade</a></div> 
                            
                        </div> 
                      <div class="nn">2</div> 
                      
                      <div class="picrel"><a href="http://sourceforge.net/projects/peazip/" title="PeaZip"><img src="SourceForge_files/nse.png" alt="NSE" height="48" width="48"></a></div> 
                      
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/peazip/" title="PeaZip">NSE India uses state of the art technology</a></h4> 
                        <p>NSE uses state of the art technology for systems and communication. The systems trade high value transcations in volumes and finances.</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/peazip/PeaZip%20for%20Windows/3.2.1/peazip-3.2.1.WINDOWS.exe?96180246' }" href="http://sourceforge.net/projects/peazip/files/PeaZip%20for%20Windows/3.2.1/peazip-3.2.1.WINDOWS.exe/download" title="/PeaZip for Windows/3.2.1/peazip-3.2.1.WINDOWS.exe"> 
                            <strong>Vist the NSE website</strong> <small>nseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "freefilesync",
                                        "source": "sf.net",
                                        "action": "/projects/freefilesync/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/freefilesync/reviews" title="View all reviews">| Trade</a></div> 
                            
                        </div> 
                      <div class="nn">3</div> 
                      
		                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/nse.png" alt="NSE" height="48" width="48"></a></div> 


                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/freefilesync/" title="FreeFileSync">NSE for Futures and Options</a></h4> 
                        <p>NSE Futures and Options transactions keep a record of future contracts, call and put options keeping Investors stress free.</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/freefilesync/freefilesync/v3.8/FreeFileSync_v3.8_setup.exe?73052274' }" href="http://sourceforge.net/projects/freefilesync/files/freefilesync/v3.8/FreeFileSync_v3.8_setup.exe/download" title="/freefilesync/v3.8/FreeFileSync_v3.8_setup.exe"> 
                            <strong>Visit the NSE website</strong> <small>nseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "fullsync",
                                        "source": "sf.net",
                                        "action": "/projects/fullsync/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/fullsync/reviews" title="View all reviews"> | Trade</a></div> 
                            
                        </div> 
                      <div class="nn">4</div> 
               
                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/nse.png" alt="NSE" height="48" width="48"></a></div> 

       
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/fullsync/" title="FullSync">NSE Trading Terminal</a></h4> 
                        <p>Investors can book a NSE Trading Terminal online and get started with their daily trading right away!</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/fullsync/fullsync/FullSync%200.9.1/FullSyncInstaller.exe?41927344' }" href="http://sourceforge.net/projects/fullsync/files/fullsync/FullSync%200.9.1/FullSyncInstaller.exe/download" title="/fullsync/FullSync 0.9.1/FullSyncInstaller.exe"> 
                            <strong>Visit the NSE website</strong> <small>nseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "keepass",
                                        "source": "sf.net",
                                        "action": "/projects/keepass/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/keepass/reviews" title="View all reviews">| Trade</a></div> 
                            
                        </div> 
                      <div class="nn">1</div> 

	                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/ise.png" alt="ISE" height="48" width="48"></a></div> 

                      
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/keepass/" title="KeePass Password Safe">The InterConnected Stock Exchange</a></h4> 
                        <p>The InterConnected Stock Exchange uses both the BSE and NSE for Trade</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/keepass/KeePass%202.x/2.11/KeePass-2.11-Setup.exe?40215146' }" href="http://sourceforge.net/projects/keepass/files/KeePass%202.x/2.11/KeePass-2.11-Setup.exe/download" title="/KeePass 2.x/2.11/KeePass-2.11-Setup.exe"> 
                            <strong>Visit the ISE website</strong> <small>iseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "ipscan",
                                        "source": "sf.net",
                                        "action": "/projects/ipscan/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/ipscan/reviews" title="View all reviews"> | Trade</a></div> 
                            
                        </div> 
                      <div class="nn">2</div> 
      
                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/ise.png" alt="ISE" height="48" width="48"></a></div> 

                
                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/ipscan/" title="Angry IP Scanner">The Interconnected Stock Exchange uses the best of both worlds</a></h4> 
                        <p>Data from both the BSE and NSE is pooled into the ISE for better correlation</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/ipscan/ipscan3-binary/3.0-beta4/ipscan-3.0-beta4.exe?5909361' }" href="http://sourceforge.net/projects/ipscan/files/ipscan3-binary/3.0-beta4/ipscan-3.0-beta4.exe/download" title="/ipscan3-binary/3.0-beta4/ipscan-3.0-beta4.exe"> 
                            <strong>Visit the ISE website</strong> <small>iseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                    <li> 
                        <div class="review"> 
                            <div class="ireview"> 
                                <script type="data"> 
                                    {
                                        "shortname": "freenet",
                                        "source": "sf.net",
                                        "action": "/projects/freenet/add_review",
                                        "review": {},
                                    }
                                </script> 
                            <div class="thumbs"><a class="thumbs_up_s rate" href="#thumbs_up">Thumbs Up</a><a class="thumbs_down_s rate" href="#thumbs_down">Thumbs Down</a></div></div> 
                            
                            <div class="rating">Search a Stock</div> 
                            <div class="reviews-total"><a href="http://sourceforge.net/projects/freenet/reviews" title="View all reviews"> | Trade</a></div> 
                            
                        </div> 
                      <div class="nn">3</div> 
                      
                      <div class="picrel"><a href="http://sourceforge.net/projects/azureus/" title="Azureus / Vuze"><img src="SourceForge_files/ise.png" alt="ISE" height="48" width="48"></a></div> 

                      <div class="txt"> 
                        <h4><a href="http://sourceforge.net/projects/freenet/" title="The Freenet Project">The ISE as a reference to global markets</a></h4> 
                        <p>The ISE correlates global cues to bring a global perspective to stock trade in India.</p> 
                        <p class="link-dload"><a class="icon dload { url: 'http://downloads.sourceforge.net/project/freenet/freenet/0.7.5-rc1/freenet-0.7.5-rc1-installer.exe?52048172' }" href="http://sourceforge.net/projects/freenet/files/freenet/0.7.5-rc1/freenet-0.7.5-rc1-installer.exe/download" title="/freenet/0.7.5-rc1/freenet-0.7.5-rc1-installer.exe"> 
                            <strong>Visit the ISE website</strong> <small>iseindia.com</small></a></p> 
                      </div> 
                    </li> 
                    
                  </ul> 
                             
                </div> 
              </div> 
	    </div> 
	    <ul class="cats"> 
	      
              <li class=" first-item"><a href="#filesharing"><span class="ico filesharing"></span><span>Bombay Stock Exchange</span></a> 
              </li> 
              
              <li class=""><a href="#backup"><span class="ico backup"></span><span>National Stock Exchange</span></a> 
              </li> 
              
              <li class=""><a href="#security"><span class="ico security"></span><span>Interconnected Stock Exchange</span></a> 
              </li> 
              
              <!--li class=" last-item"><a href="#games"><span class="ico games"></span><span>Games</span></a-->
              </li> 
              
            </ul> 
	    <!--ul class="cats cats-side"> 
	      
              <li class=" first-item"><a href="#software_dev."><span class="ico softwaredev"></span><span>Software Dev.</span></a> 
              </li> 
              
              <li class=""><a href="#system_admin."><span class="ico sysadmin"></span><span>System Admin.</span></a> 
              </li> 
              
              <li class="cur"><a href="#business"><span class="ico business"></span><span>Business</span></a> 
              </li> 
              
              <li class=" last-item"><a href="#audio/video"><span class="ico multimedia"></span><span>Audio/Video</span></a> 
              </li> 
              
            </ul--> 
   	  </div> 
	</div> 
      </div> 
    </div> 
  </div> 


<!--Sourceforge main menu closes here-->

<BR/>



<!-- This is for the 2 container boxes from Sourceforge -->

<div id="doc4-b"> 
    <div class="yui-b"> 
        <div class="yui-gb"> 
            <div class="yui-u first"> 
                <div id="project-of-month" class="sfBox sfBox-blue"> 
                    <div class="header dotted-header-1"> 
                        <h3>Project of the Month</h3> 
                    </div> 
 
                    <div class="item-list"> 
                        <div class="item clearfix"> 
                            <h4>Scintilla</h4> 
                            <div class="item-img"> 
                                <img src="SourceForge_files/Scintilla_screenshot_thumb.jpg" alt="Project of the Month - Scintilla screenshot"> 
                            </div> 
                            <p> 
Scintilla is a free source code editing component that includes
features such as syntax styling, error indicators, ... <a href="http://sourceforge.net/blog/potm-201007/">Read more</a> 
                            </p> 
                        </div> 
                    </div> 
 
                    <a href="http://sourceforge.net/projects/scintilla/files/SciTE/2.12/wscite212.zip/downloadaller-1.6.11.jar/download" class="icon dload { url: 'http://downloads.sourceforge.net/project/scintilla/SciTE/2.12/wscite212.zip/downloadaller-1.6.11.jar?58951369' }"> 
                        <strong>Download Now!</strong> <small>(1.0 MB)</small> 
                    </a> 
 
                    <div class="clearfix"> 
                        <a href="http://sourceforge.net/blog/potm/" class="button"><span>Past Projects of the Month</span></a> 
                    </div> 
                </div><!-- #project-of-month --> 
            </div><!-- .yui-u --> 
            <div class="yui-u"> 
                <div class="sfBox sfBox-blue blog-container"> 
                    <div class="header dotted-header-1"> 
                        <h3>Latest from SourceForge</h3> 
                    </div> 
 
                    <div class="blog"> 
                        <ul class="tab-nav clearfix"> 
                            <li>Source:</li> 
                            <li class="selected"><span class="tab">Blog</span><em class="arrow"></em></li> 
                            <li><a href="#twitter">Twitter</a></li> 
                        </ul> 
                    </div> 
                    <div class="twitter"> 
                        <ul class="tab-nav clearfix"> 
                            <li>Source:</li> 
                            <li><a href="#blog">Blog</a></li> 
                            <li class="selected"><span class="tab">Twitter</span><em class="arrow"></em></li> 
                        </ul> 
                    </div> 
 
                    <div class="blog-twitter-container"> 
                        <div class="item-list blog"> 
                            
                            <div class="item clearfix"> 
                                
                                <p><a href="http://sourceforge.net/blog/maestro-strike-up-the-midi/">Maestro, strike up the MIDI</a><br> 
                                <small><a href="http://sourceforge.net/blog/maestro-strike-up-the-midi/#comments"> Comments</a> 
                                | POSTED: 24 hours ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                
                                <p><a href="http://sourceforge.net/blog/meet-the-staff-community-editor-lee-schlesinger/">Meet the staff: Community editor Lee Schlesinger</a><br> 
                                <small><a href="http://sourceforge.net/blog/meet-the-staff-community-editor-lee-schlesinger/#comments"> Comments</a> 
                                | POSTED: 2 days ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                
                                <p><a href="http://sourceforge.net/blog/jspresso-builds-rich-java-based-internet-apps/">Jspresso builds rich Java-based Internet apps</a><br> 
                                <small><a href="http://sourceforge.net/blog/jspresso-builds-rich-java-based-internet-apps/#comments"> Comments</a> 
                                | POSTED: 5 days ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                
                                <p><a href="http://sourceforge.net/blog/july-project-of-the-month-scintilla/">July Project of the Month: Scintilla</a><br> 
                                <small><a href="http://sourceforge.net/blog/july-project-of-the-month-scintilla/#comments"> Comments</a> 
                                | POSTED: 6 days ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                
                                <p><a href="http://sourceforge.net/blog/developers-breathe-easier-when-doxygens-on-the-job/">Developers breathe easier when Doxygen’s on the job</a><br> 
                                <small><a href="http://sourceforge.net/blog/developers-breathe-easier-when-doxygens-on-the-job/#comments"> Comments</a> 
                                | POSTED: 7 days ago</small></p> 
                            </div> 
                            
                        </div> 
            
                        <div class="item-list twitter"> 
                            
                            <div class="item clearfix"> 
                                <div class="item-img"> 
                                    <a href="http://twitter.com/sourceforgejp"><img src="SourceForge_files/sfjp_icon_125x125_normal.png" alt="temp" height="40" width="40"></a> 
                                </div> 
                                <p> 
                                <a href="http://twitter.com/sourceforgejp">@sourceforgejp: </a> 
                                レビュー(Up): よろしくお願いします
 - Cabos http://bit.ly/5G4fjL #opensource #sfjp<br> 
                                <small>POSTED: 21 minutes ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                <div class="item-img"> 
                                    <a href="http://twitter.com/hirtlitschka"><img src="SourceForge_files/banae_normal.png" alt="temp" height="40" width="40"></a> 
                                </div> 
                                <p> 
                                <a href="http://twitter.com/hirtlitschka">@hirtlitschka: </a> 
                                @343max Mit Foldersize http://foldersize.sourceforge.net (in der Detailansicht)<br> 
                                <small>POSTED: 30 minutes ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                <div class="item-img"> 
                                    <a href="http://twitter.com/Lord_Rod"><img src="SourceForge_files/twitter_normal.jpg" alt="temp" height="40" width="40"></a> 
                                </div> 
                                <p> 
                                <a href="http://twitter.com/Lord_Rod">@Lord_Rod: </a> 
                                @343max http://foldersize.sourceforge.net!<br> 
                                <small>POSTED: 35 minutes ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                <div class="item-img"> 
                                    <a href="http://twitter.com/peter_budo"><img src="SourceForge_files/dukewithhelmet_normal.jpg" alt="temp" height="40" width="40"></a> 
                                </div> 
                                <p> 
                                <a href="http://twitter.com/peter_budo">@peter_budo: </a> 
Looking at
https://wicket-stuff.svn.sourceforge.net/svnroot/wicket-stuff/trunk/wicketstuff-core/gmap2-parent/<br> 
                                <small>POSTED: 41 minutes ago</small></p> 
                            </div> 
                            
                            <div class="item clearfix"> 
                                <div class="item-img"> 
                                    <a href="http://twitter.com/sourceforgejp"><img src="SourceForge_files/sfjp_icon_125x125_normal.png" alt="temp" height="40" width="40"></a> 
                                </div> 
                                <p> 
                                <a href="http://twitter.com/sourceforgejp">@sourceforgejp: </a> 
                                レビュー(Down): Badddddddddddddd - Cabos http://bit.ly/5G4fjL #opensource #sfjp<br> 
                                <small>POSTED: 50 minutes ago</small></p> 
                            </div> 
                            
                        </div> 
                    </div><!-- .blog-twitter-container --> 
                </div><!-- .blog-container --> 
            </div><!-- .yui-u --> 


<!-- End of the 2 container boxes from Sourceforge -->


			</TD>
			<!-- TD STYLE="border-left: 3px solid #000000" HEIGHT=300 WIDTH=150 BGCOLOR="#c6d6f6" >
			Right Module 4 opens here


			Right module 4 closes here
			</TD-->

			</TR>
			</TABLE>
		

			</FONT></TD>
			<TD STYLE="border-left: 3px solid #000000" HEIGHT=800 WIDTH=300 BGCOLOR="#ffffff"><FONT FACE="Liberation Serif" SIZE=3></FONT></TD>
		</TR>



	</TBODY>
</TABLE>

<!--Footer from Sourceforge...again -->


 <div id="ft" class="clearfix"> 
        <div class="yui-b"> 
          <div class="cols clearfix"> 
            <div class="col first"> 
          <h4>About SourceForge</h4> 
              <ul> 
                <li><a href="http://sourceforge.net/about">About SourceForge</a></li> 
                <li><a href="http://sourceforge.net/support">Contact Us</a></li> 
                <li><a href="http://geek.net/careers/">Jobs @ Geeknet</a></li> 
                <li><a href="http://geek.net/advertising/">Advertising</a></li> 
              </ul> 
            </div> 
            <div class="col"> 
          <h4>Find Software</h4> 
              <ul> 
        <li><a href="http://sourceforge.net/search/">Search Software</a></li> 
                <li><a href="http://sourceforge.net/softwaremap/">Browse by Category</a></li> 
                <li><a href="http://sourceforge.net/top/topalltime.php?type=downloads">Most Popular Overall</a></li> 
                <li><a href="http://sourceforge.net/top/mostactive.php">Most Active Overall</a></li> 
              </ul> 
            </div> 
            <div class="col"> 
          <h4>Develop Software</h4> 
              <ul> 
                <li><a href="http://sourceforge.net/register/">Create Project</a></li> 
                <li><a href="http://sourceforge.net/people/">Project Help Wanted</a></li> 
                <li><a href="http://sourceforge.net/new/new_projects.php">New Projects</a></li> 
              </ul> 
            </div> 
            <div class="col"> 
          <h4>Community</h4> 
              <ul> 
                <li><a href="http://sourceforge.net/blog/">The Blog</a></li> 
                <li><a href="http://twitter.com/sourceforge" rel="nofollow">@sourceforge on Twitter</a></li> 
              </ul> 
 
            </div> 
            <div class="col"> 
          <h4>Help</h4> 
              <ul> 
                <li><a href="http://sourceforge.net/apps/trac/sourceforge/wiki/WikiStart">Site Documentation</a></li> 
                <li><a href="http://sourceforge.net/apps/trac/sourceforge/wiki/Support">Submit Support Requests</a></li> 
                <li><a href="http://sourceforge.net/apps/wordpress/sourceforge/">Site Outages</a></li> 
              </ul> 
            </div> 
          </div> 
          <p class="copyright">© 2010 <a title="Network which provides and promotes Open Source software downloads, development, discussion and news." href="http://geek.net/">Geeknet, Inc.</a> <a href="http://p.sf.net/sourceforge/terms">Terms of Use</a> <a href="http://p.sf.net/sourceforge/privacy">Privacy Policy</a></p> 
        </div> 
      </div> 
    </div> 



<!--Closing the footer phew !! -->

<!-- ************************************************************************** -->
</BODY>

</HTML>


