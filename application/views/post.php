<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php  echo base_url();?>"/>
    <link rel="icon" href="../../favicon.ico">

    <title>HGDonline</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
	<link href="static/css/style.css" type="text/css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
	<link href="static/css/css1.css" rel="stylesheet">
	<script src="static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="static/js/jquery-1.4.2.min.js"></script>
  </head>
  <body>
	<div class="container">
		<div class="nav1">
			<ul id="myTab" class="nav nav-tabs nav-pill nav-stacked">
				<li class="<?php echo $all;?>"><a href="<?php echo base_url();?>post/page/all/<?php echo $Thisid;?>">全部 <img src="static/imgs/jt.gif"></a></li>
				<li class="<?php echo $sj;?>"><a href="<?php echo base_url();?>post/page/sj/<?php echo $Thisid;?>">设计部 <img src="static/imgs/jt.gif"></a></li>
				<li class="<?php echo $js;?>"><a href="<?php echo base_url();?>post/page/js/<?php echo $Thisid;?>">技术部 <img src="static/imgs/jt.gif"></a></li>
				<li class="<?php echo $cp;?>"><a href="<?php echo base_url();?>post/page/cp/<?php echo $Thisid;?>">产品部 <img src="static/imgs/jt.gif"></a></li>
			</ul>
		</div>

		<div class="right">
		<div id="myTabContent" class="tab-content">
		<div class="table1 tab-pane active" id="qb">
			<table cellspacing="0" class="table table-striped  table-hover">
				<thead>
					<tr>
					<th>姓名</th>
					<th>学院</th>
					<th>专业</th>
					<th>意向</th>
					</tr>
				</thead>
				<tbody>
                	<?php foreach ($list as $row):?>
						<tr>
						<td ><a href="<?php echo base_url();?>post/info/<?php echo $row['Id'];?>"><?php echo $row['name'];?><a/></td>
						<td><?php echo $row['department'];?></td>
						<td><?php echo $row['grade'];?></td>
						<td><?php echo $row['intention'];?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		
		</div>
			<div class="turn">
				<ul class="pagination">
					<li><a href="post/page/<?php echo $sub;?>/<?php echo $Thisid-1;?>">&laquo;</a></li>
					<li><a href="post/page/<?php echo $sub;?>/<?php echo $Thisid-1;?>"><?php echo $Thisid-1;?></a></li>
					<li><a href="post/page/<?php echo $sub;?>/<?php echo $Thisid;?>"><?php echo $Thisid;?></a></li>
					<li><a href="post/page/<?php echo $sub;?>/<?php echo $Thisid+1;?>"><?php echo $Thisid+1;?></a></li>
					<li><a href="post/page/<?php echo $sub;?>/<?php echo $Thisid+1;?>">&raquo;</a></li>
				</ul>
			</div>
		</div>
    </div>
	</div>
  </body>
</html>