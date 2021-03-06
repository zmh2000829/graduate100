<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>毕业100-2</title>
  <script type="text/javascript" src="/graduate100/graduate/Public/js/jquery.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/graduate100/graduate/Public/css/index2.css">
</head>
<body style="margin: 0;position: absolute;width: 100%;height: 100%">
  <div id="content">
    <div id="Home">   
      <div id="background">
        <img src="/graduate100/graduate/Public/img/2-3.png" style="width:100%">
      </div>  
      <div id="name">
        <img src="/graduate100/graduate/Public/img/2-4.png" style="width:100%">
        <input id="nameText" v-model="username" placeholder="填写姓名" maxlength="8"/>
      </div>
      <div id="major">
        <img src="/graduate100/graduate/Public/img/2-5.png" style="width:100%">
        <input id="majorText" v-model="usermajor" placeholder="填写专业" maxlength="12"/>
      </div>
      <div id="love_building">
        <img src="/graduate100/graduate/Public/img/2-6.png" style="width:100%">
        <input id="buildingText" v-model="building" placeholder="填写你喜欢的复旦建筑" maxlength="12"/>
      </div>
      <div id="love_food">
        <img src="/graduate100/graduate/Public/img/2-7.png" style="width:100%">
        <input id="foodText" v-model="food" placeholder="填写你喜欢的食堂菜品" maxlength="12"/>
      </div>
      <div id="load">
        <img src="/graduate100/graduate/Public/img/2-8.png" style="width:100%">
      </div>
      <div id="square">

        <img id='uploadimage' src="/graduate100/graduate/Public/img/2-2.png" style="width:100%" onclick="filesimg()">
          <!-- <div class="file"> -->
            <!-- <i class="ico-plus"></i> -->
            <input  type="file" id="chooseImage" name="file" accept="image/*" id="upload" style="display: none;" >
          <!-- </div>   -->
      </div>
      <div id="btn" >
        <img onclick="select()" src="/graduate100/graduate/Public/img/2-9.png" alt="666" style="width:100%">
      </div>

    </div>
  </div>
</body>

 <script type="text/javascript">
  var HEIGHT = $('body').height();
    $(window).resize(function() {
    　　$('#content').height(HEIGHT);
    });
    function filesimg(){
      // alert('请上传正方形图片哦~')
      document.querySelector('input[type=file]').click();
    }
    function onload(){
      var sen = "Home";  
      var width = document.body.clientWidth;
      var height = document.body.clientHeight;
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

    function select(){
      var name = document.getElementById("nameText");
      var major = document.getElementById("majorText");
      var build = document.getElementById("buildingText");
      var food = document.getElementById("foodText");
      // var img = document.getElementById("uploadimage");
      console.log(window.sessionStorage.getItem('imgsrc'));
     if((name.value == '')||(major.value == '')||(build.value == '')||(food.value == '')||(window.sessionStorage.getItem('imgsrc') == null)){
          alert('信息还未完善哦~')
      }
      else{
        var data = new Array();
        data['name'] = name.value;
        data["major"] = major.value;
        data["build"] = build.value;
        data["food"] = food.value;
        data['imgpath'] = window.sessionStorage.getItem('imgsrc');
        var temp = document.createElement("form"); 
        // temp.action = "https://www.link-studio.cn/graduate/Home/Index/select"; 
        temp.action = "http://localhost/graduate100/graduate/Home/Index/select";
        temp.method = "post"; 
        temp.style.display = "none"; 
        for (var x in data)
        {
            var opt = document.createElement("input"); 
            opt.name = x; 
            opt.value = data[x];
            temp.appendChild(opt); 
        }
        document.body.appendChild(temp); 
        temp.submit(); 
      }
    }
    </script>
  <script type="text/javascript">
  // let src;
 $('#chooseImage').on('change',function(){
      var filePath = $(this).val(),         //获取到input的value，里面是文件的路径
        fileFormat = filePath.substring(filePath.lastIndexOf(".")).toLowerCase();
        f = this.files[0]
        src = window.URL.createObjectURL(f); //转成可以在本地预览的格式
        
      // 检查是否是图片
      if( !fileFormat.match(/.png|.jpg|.jpeg/) ) {
        error_prompt_alert('上传错误,文件格式必须为：png/jpg/jpeg');
          return;  
        }
        
        $('#uploadimage').attr('src',src);        

        var oFReader = new FileReader();
        oFReader.readAsDataURL(f);
        oFReader.onloadend = function(oFRevent){
        var path = oFRevent.target.result;
        window.sessionStorage['imgsrc'] = path; 
    }

});

</script>
</html>