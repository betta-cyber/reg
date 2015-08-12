<?php
	$post_info = $post_info[0];
	//var_dump($current_page);
?>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>info</title>
	<style>
		table,tr,td,p{
		    margin:0;
			padding:0;
			font-family:"微软雅黑";
			font-size:22px;
			border: 3px solid rgb(5, 5, 5);
			border-radius: 10px;
		    }
			
		body,table{text-align: center;}
		body{margin-top:20px;}
		table{background-color:#eeeeee;}
		table  td{width:246px;height:20px;}
	</style>
	</head>

	<body>
	    <center>
		    <table align="center" width="800px" height="600px">
				<tbody>
				<tr>
					<td><a href="<?php echo base_url();?>post/page/all/<?php echo $current_page;?>">主列表</a></td>
					<td><a href="<?php echo base_url();?>post/delete_info/<?php echo $post_info['Id'];?>">删除信息</a></td>
				</tr>
				<tr><td colspan="3" align="center">个人详情</td>
				</tr>
				<tr><td height="90px">姓名：<?php echo $post_info['name']?></td>
				<td >性别： <?php echo $post_info['sex']?></td>
				<td rowspan="3"  style="background-repeat:round;background-image:url(<?php echo base_url();?>static/uploads/<?php echo $post_info['img']?>);"></td>
				</tr>
				<tr><td>学院：<?php echo $post_info['department']?></td>
				 <td>年纪专业： <?php echo $post_info['grade']?></td>
				 
				</tr>
				<tr><td>部门：<?php echo $post_info['intention']?></td>
				 <td>手机：<?php echo $post_info['phone']?></td>
				 
				</tr>
				<tr><td colspan="3" align="center" height="200px">介绍： <?php echo $post_info['summary']?></td>
				</tr>
				</tbody>
			</table>
		</center>
	</body>
</html>