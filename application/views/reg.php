<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="<?php  echo base_url();?>"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link href="static/css/reg.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
window.onload=function(){
$name=document.getElementById("name_1");
$department=document.getElementById("department_1");
$phone=document.getElementById("phone_1");
$departmentre=document.getElementById("departmentre");
$phonere=document.getElementById("phonere");
$namere=document.getElementById("namere");
$department.onkeyup=function(){//验证学院//

	if($department.value.match('^[\u2E80-\u9FFF]{2,7}$')==null){
		$departmentre.style.display="table-row";
	}

	else $departmentre.style.display="none";
}

$phone.onkeyup=function(){//验证电话//

	if ($phone.value.match('^1[0-9]{10}$')==null){
		$phonere.style.display="table-row";
	}
	else $phonere.style.display="none";

}


$name.onkeyup=function(){//验证姓名//

	if ($name.value.match('^[\u2E80-\u9FFF]{2,4}$')==null){
		$namere.style.display="table-row";
	}
	else $namere.style.display="none";
	}
}
</script>

<script type="text/javascript">
$(function(){
    $('#img_upload').change(function(){
      var file = this.files[0]; //选择上传的文件
      var r = new FileReader();
      r.readAsDataURL(file); //Base64
        $(r).load(function(){
          $('#box').html('<img style="width:154px; height:217px;" src="'+ this.result +'" alt="" />');
        });
    });
});
</script>

<title>Hgdonline报名</title>
</head>

<body>
<div class="main container" >
  <div class="content" id="content">
    <form action="reg/post" method="post" enctype="multipart/form-data">
	  <table  class="table">
	    <tr >
		  <td>
			<input id="name_1" class="input_1" type="text" name="username" placeholder="姓名"  />
		  </td><!--name voer-->
		  <td class="input_2">
			  <label><input class="radio_1" type="radio" name="sex" value="男" checked="checked" />    男</label>
		      <label><input class="radio_1" type="radio" name="sex" value="女"  />    女</label>
		  </td> <!--sex voer-->
		  <td  rowspan="3">
			<div  class="upload">
				<input type="text" class="upload_1" name="txt" value="上传照片"/>
				<input type="file" id="img_upload" name="userfile"/>
				<div id="box" style="position: absolute; margin: -219px 0 0 0;"></div>
			</div>
		  </td><!--picture voer-->
		</tr>
		
		<tr >
		 <td id="namere"  class="rege1"> 请输入二到四个字的姓名</td>
		</tr>
		
		
	    <tr>
		  <td class="range1">
			<input id="department_1" class="input_1" type="text" name="department"  placeholder="学院" />
		  </td><!--collage voer-->
		  <td class="range2">
			<input class="input_1" type="text" name="grade" placeholder="年级专业" />
		  </td><!--major voer-->
		</tr>
		
		<tr>
		 <td id="departmentre"  class="rege2"> 请输入二到七个字的年级专业
		 </td>
		</tr>
		
		
		<tr >
		  <td class="range3">
		      <label><input class="radio_1" type="radio" name="Intention" value= "技术部" checked="checked" />    技术部</label>
		      <label><input class="radio_1" type="radio" name="Intention" value="产品部"  />    产品部</label>
		      <label><input class="radio_1" type="radio" name="Intention" value="产品部"  />    设计部</label>
		  </td><!--intention voer-->
		  <td class="range4">
			<input id="phone_1" class="input_1" type="text" name="phone" placeholder="手机号" />
		  </td><!--contact voer-->
		</tr>
		
		<tr>
		 <td id="phonere" class="rege3"> 请输入十一位手机号</td>
		</tr>
		
	  </table><!--table voer-->
	  <div >
	    <textarea class="input_3" id="summary" placeholder="自我介绍" name="summary" ></textarea>
	  </div><!--textarea voer-->
	  <div >
		<button class="submit_1" type="submit"  name="submit"/>提     交</button>
	  </div><!--submit voer-->
    </form>
  </div> 
</div>

</body>
</html>