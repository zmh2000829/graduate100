<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>毕业100</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<!-- <meta http-equiv="refresh" content="4;url=index2.html"> -->
	<link rel="stylesheet" type="text/css" href="/graduate/Public/css/index.css">
  <script type="text/javascript" src="/graduate/Public/js/jquery.min.js"></script>
  <style type="text/css">
    ul {
    list-style: none;           /*  去掉ul标签默认的点样式  */
}
/*  中间样式 */
#moocBox {
    height: 100%;
    overflow: hidden;     
}
  </style>
</head>
<body style="margin: 0">
  <div id="content">
    <div id="Home" >
      <div id="color">
        <img src="/graduate/Public/img/1.png" style="width:100%">
      </div>   
      <div  id="color"> 
      <div  id="moocBox">
          <ul id="con1" style="height: 100%;margin:0;padding: 0">
          </ul>
          <ul id="color2" style="overflow: hidden;padding: 0;margin: 0;width: 85%;margin-left: 7.5%">
              <img id="text" src="/graduate/Public/img/1-2.png" style="width: 100%;height: auto;">
          </ul>
      </div>
      </div>

    </div>
  </div>
</body>

 <script type="text/javascript">
  var imgwidth = $('#text').width();
var height = imgwidth * 2.09;
$('#text').css('height',height+'px');
var bheight = document.body.clientHeight;
var area = document.getElementById('moocBox');
$('#moocBox').css('height',height+'px');
var con1 = document.getElementById('con1');
$('#con1').css('height',height+'px');
var con2 = document.getElementById('color');
var speed = 15;
area.scrollTop = 0;
function adddiv() {
    var div = document.createElement("div");
    div.innerHTML = "<div id='getkoudai'><img style='width:100%' src='/graduate/Public/img/1-3.png'></div>";//为div输入内容 
    document.getElementById("Home").appendChild(div);
    var div2 = document.createElement("div");
    div2.innerHTML = "<div id='btn'><img onclick='next()' style='width:100%' src='/graduate/Public/img/1-4.png'></div>";//为div输入内容 
    document.getElementById("Home").appendChild(div2);
}
function scrollUp(){
    if(area.scrollTop >= con1.scrollHeight || area.scrollTop >= height) {
        clearInterval(myScroll);
        setTimeout(adddiv(),1000);
    }else{
        area.scrollTop ++; 
    } 
}
var myScroll = setInterval("scrollUp()",speed);
    function onload(){
      var sen = "Home";  
      var width = document.documentElement.clientWidth;
      var height = document.documentElement.clientHeight;
      var ratio = width / height;
      if (ratio > (9 / 16)) {
        var bodywidth = height * 9 / 16;
        var margin = (width - bodywidth) / 2;
        document.getElementById(sen).style.height= height + 'px';
        document.getElementById(sen).style.width= bodywidth + 'px';
        document.getElementById(sen).style.marginLeft= margin + 'px';
        document.getElementById(sen).style.marginRight= margin + 'px';
      }else if(ratio < (9 / 16)){
        var bodyheight = width * 16 / 9;
        var margin = (height - bodyheight) / 2;
        document.getElementById(sen).style.height = bodyheight + 'px';
        document.getElementById(sen).style.width = width + 'px';
        document.getElementById(sen).style.marginTop = margin + 'px';
        document.getElementById(sen).style.marginBottom = margin + 'px';
      }else{
        document.getElementById(sen).style.height = height + 'px';
        document.getElementById(sen).style.width = width + 'px';
        document.getElementById(sen).style.marginTop = 0 + 'px';
        document.getElementById(sen).style.marginBottom = 0 + 'px';
      }
      
    }
  onload(); 
  function next(){
    window.location.href = "https://www.link-studio.cn/graduate/Home/Index/index2";
    // window.location.href = "http://localhost/graduate100/graduate/Home/Index/index2";
}
</script>
<script type="text/javascript">

</script>
</html>