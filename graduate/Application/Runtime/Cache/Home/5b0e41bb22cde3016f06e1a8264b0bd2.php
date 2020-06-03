<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>毕业100</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/graduate100/graduate/Public/css/index4.css">
  <style>
    .textarea{
      width: 100%;
      font-family:'幼圆';
      resize:none;
    }
  </style>
</head>
<body style="margin: 0">
  <div id="content">
    <input type="hidden" name="name" id="name" value="<?php echo ($name); ?>" >
    <input type="hidden" name="build" id="build" value="<?php echo ($build); ?>" >
    <input type="hidden" name="food" id="food" value="<?php echo ($food); ?>" >
    <input type="hidden" name="major" id="major" value="<?php echo ($major); ?>" >
    <input type="hidden" name="imgpath" id="imgpath" value="<?php echo ($imgpath); ?>" >
    <input type="hidden" name="selected" id="selected" value="<?php echo ($selected); ?>" >
    <input type="hidden" name="sum" id="sum" value="<?php echo ($sum); ?>" >
    <div id="Home">   
      <div id="headimgdiv">
        <img id='headimg' src="/graduate100/graduate/Public/img/4-1.png" style="width:100%">
      </div>
      <div id="name">
        <img src="/graduate100/graduate/Public/img/4-1.png" style="width:100%">
      </div>
      <div id="name_txt">
        <textarea class="textarea" rows="1" id="name_text" readonly="readonly" style="font-size: 45px;background:transparent ;border-style:none;"></textarea>
      </div>
      <div id="major">
        <img src="/graduate100/graduate/Public/img/4-2.png" style="width:100%">
      </div>
      <div id="major_txt">
        <textarea class="textarea" rows="1" id="major_text" readonly="readonly" style="font-size: 45px;background:transparent ;border-style:none;"></textarea>
      </div>
      <div id="love_building">
        <img src="/graduate100/graduate/Public/img/4-3.png" style="width:100%">
      </div>
      <div id="building_txt">
        <textarea rows="1" class="textarea" id="building_text" readonly="readonly" style="font-size: 45px;background:transparent ;border-style:none;"></textarea>
      </div>
      <div id="love_food">
        <img src="/graduate100/graduate/Public/img/4-4.png" style="width:100%">
      </div>
      <div id="food_txt">
        <textarea rows="1" class="textarea" id="food_text" readonly="readonly" style="font-size: 45px;background:transparent ;border-style:none;"></textarea>
      </div>     
      <div id="koudai">
        <img src="/graduate100/graduate/Public/img/4-5.png" style="width:100%">
      </div>
      <div id="num">
        <textarea rows="1" class="textarea" id="num_text" readonly="readonly" style="font-size: 90px;background:transparent;border-style:none;"></textarea>
      </div>
      <div id="things">
        <img src="/graduate100/graduate/Public/img/4-6.png" style="width:100%">
      </div>
      <div id="sodoi">
        <img src="/graduate100/graduate/Public/img/4-7.png" style="width:100%">
      </div>
      <div id="square" style="display: none">
        <img id="squareimg" src="/graduate100/graduate/Public/img/4-9.png" style="width:100%">
      </div>
      <!-- <div id="graduation">
        <img src="img/4-10.png" style="width:100%">
      </div> -->
    </div>
  </div>
    <div id='canvasdiv'>
        <canvas id="canvas" style="position: absolute;width:100%;left:0%;" ></canvas>
    </div>
</body>

 <script type="text/javascript">
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
    getdata();
  }
  onload(); 
  
  function getdata(){
      var name = document.getElementById('name').value;
      var major = document.getElementById('major').value;
      var building = document.getElementById('build').value;
      var food = document.getElementById('food').value;
      var num = document.getElementById('sum').value;
      var headimgsrc = document.getElementById('imgpath').value;
      // var name = window.sessionStorage.getItem('name');
      // var major = window.sessionStorage.getItem('major');
      // var building = window.sessionStorage.getItem('build');
      // var food = window.sessionStorage.getItem('food');
      // var num = window.sessionStorage.getItem('num');
      // var headimgsrc = window.sessionStorage.getItem('imgsrc');
      // console.log(headimgsrc)
      document.all.name_text.innerHTML = name;
      document.all.major_text.innerHTML = major;
      document.all.building_text.innerHTML = building;
      document.all.food_text.innerHTML = food;
      document.all.num_text.innerHTML = num;
      document.getElementById('headimg').src = headimgsrc
  }
console.log("hhh");
  function getimglist(){     
  //string序号数组转换int并返回
    var number = document.getElementById('selected').value;
    // var number = window.sessionStorage.getItem('number');
    var list = [];
    var arr = number.split(',');
      for(var i = 0;i < arr.length;i++){
          list[i] = parseInt(arr[i]);
      }
      return list;
  }
</script>
<script type="text/javascript">
items = ['光华楼顶看日出', '校庆日看升旗仪式', '打卡四个校区图书馆', '吃遍四大校区食堂', '带朋友逛复旦校园', '和挚友光阶畅聊', '有一次期末全A', '拥有一件复旦周边', '在复旦游泳馆游泳', '微信通讯录超过1000人', '拿一次国家奖学金', '和室友毕业旅行', '做一次公众演讲', '加入一个社团', '旁听跨专业课程', '和班级所有同学拍照', '在江湾遇见小动物', '跨校区上课一学期', '通宵做实验', '周末开过组会', '有过一次实习', '发表一篇paper', '装扮过宿舍', '和喜欢的人光草晒太阳', '三教通宵赶ddl', '和爸妈在复旦拍照', '参加过支教', '存钱买了喜欢的东西', '打卡其他友校', '买猫粮喂过复旦喵', '在阿康和朋友吃串串', '相辉堂看过演出', '细品光华楼前的石楠', '早八上过课', '和朋友拍过毕业写真', '复旦活动中表演节目', '献过血', '参加过志愿活动', '关注“复旦研究生”', '在上海景点拍过照', '打卡上海所有地铁线路', '和导师单独合影', '参加过师门聚会', '参加过校运会', '参加复旦乐跑活动', '做过助管/助教', '学习第二外语', '在图书馆借30本书', '在复旦丢伞', '在光华楼被风吹坏伞', '连续一周打卡图书馆', '负责校内媒体推送', '打卡复旦周边奶茶', '在食堂被人借一卡通', '带朋友吃复旦食堂', '成为过抽奖幸运儿', '在校园角落偷偷哭过', '在校园定向徒步', '乘坐复旦周边公交', '参加过联谊', '讲座上主动举手提问', '与复旦樱花合影', '打卡大学路美食店', '在亚青参加讨论会', '在青书馆买过书', '丢失过校园卡', '从图书馆开门待到闭馆', '卖过二手闲置物品', '向喜欢的人主动表白', '和喜欢的人上一门课', '给室友带饭', '在校园内夜跑', '在复旦超市花>50元', '自学一门乐器', '宿舍里养过植物', '和朋友一起过生日', '为票圈爱情流泪点赞', '海底捞享受学生优惠', '和室友开夜晚卧谈会', '参加过班会', '发红包请亲友填问卷', '乘坐过复旦校车', '和复旦校门合影', '看到复旦雪景', '洗澡脱完衣服发现没卡', '吃复旦点心部双皮奶', '调侃复旦交大迷惑关系', '吃食堂青团/月饼', '给人解释李达三楼', '在图书馆学到睡着', '在校内骑共享单车', '连续吃复旦食堂>1周', '和同学组队参赛', '给学妹学弟答疑解惑', '用复旦落叶做过手账', '食堂打饭卡里没钱', '问学霸借过笔记', '期末期间转发求好运', '见过光华楼正门打开', '课上点外卖下课前到']
var imgnumlist = getimglist();
var len = imgnumlist.length;
var he = Math.ceil(len/3);
var width = document.getElementById('canvasdiv').clientWidth;
var marginwidth = (1-0.76 * 0.96) * width / 2;
var marginheight = 0.01 * document.documentElement.clientHeight;
var backwidth = document.documentElement.clientWidth;
var height = document.getElementById('canvasdiv').clientHeight/2.95*he;

var can = document.getElementById('canvas');
var canvas = can.getContext('2d');
var backimg = document.getElementById("squareimg");
can.setAttribute('width',width)
can.setAttribute('height',height)
canvas.drawImage(backimg, 0 ,0,backwidth,height); 
 //int型选中的img序号数组
var imglist = [];
var p,q;
canvas.font = "22px bold 黑体";
canvas.textAlign = "center";
canvas.textBaseline = "middle";

for(var i = 0;i < imgnumlist.length; i++){
  n = imgnumlist[i];
  imglist.push({s:items[n], x:0, y:0});
  imglist[i].picture = new Image();
  if(n + 1 < 10){
    imglist[i].picture.src = "/graduate100/graduate/Public/img/100/0" + (n + 1).toString()+'.png';
  }
  else{
    imglist[i].picture.src = "/graduate100/graduate/Public/img/100/" + (n + 1).toString()+'.png';
  }
}
for (var i = 0; i < len; i++) {
  console.log(imglist[i].s);
  console.log(imgnumlist[i]);
}
var img = new Image();
var row,j;
img.src = "/graduate100/graduate/Public/img/100/01.png";
img.onload=function(){ //将选出的图片排版
  if (len <= 3) {
  //直接一排
    for(var i = 0;i < len ; i++){
      canvas.drawImage(imglist[i].picture,255*i+140,0+marginheight,img.width*0.19,img.height*0.19);    
      canvas.fillText(imglist[i].s, 255*i+235,210+marginheight);
    }
  }
  else{
  // 先将能排满的行排好
    _l = 3*Math.floor(len/3);
    if (len%3 == 0) row = 0; //row为0没有余数不单排
    else row = Math.ceil(len / 3) - 1;

    for(var i = 0,j = 0 ;j < _l ; i+=3){
      canvas.drawImage(imglist[j].picture, 140 ,i*80+marginheight,img.width*0.19,img.height*0.19);
      canvas.fillText(imglist[j++].s, 235,210+80*i+marginheight);    
      canvas.drawImage(imglist[j].picture,395,i*80+marginheight,img.width*0.19,img.height*0.19); 
      canvas.fillText(imglist[j++].s, 490,210+80*i+marginheight);
      canvas.drawImage(imglist[j].picture,650,i*80+marginheight,img.width*0.19,img.height*0.19); 
      canvas.fillText(imglist[j++].s, 745,210+80*i+marginheight);
    }
    if(row > 0){
      for(var i = 0; i < len-_l; i++){
      //余出来的单排
        canvas.drawImage(imglist[j].picture,255*i+140,row*240+marginheight,img.width*0.19,img.height*0.19);  
        canvas.fillText(imglist[j++].s, 255*i+235,row*240+210+marginheight);
      }
    }  
  }
}

</script>
</html>