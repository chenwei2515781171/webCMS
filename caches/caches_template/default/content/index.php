<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="banner" id="banner" >
	<a href="#" class="d1" style="background:url(<?php echo IMG_PATH;?>images/a1.png) center no-repeat;"></a>
	<a href="#" class="d1" style="background:url(<?php echo IMG_PATH;?>images/a2.png) center no-repeat;"></a>
	<a href="#" class="d1" style="background:url(<?php echo IMG_PATH;?>images/a3.png) center no-repeat;"></a>
	
</div>
<div class="dh" >
	<embed src="<?php echo IMG_PATH;?>images/29.swf" width="1440px" height="400px" wmode="transparent">
</div>
<!--main-->
<div class="main">
	<div class="tzgg">
		<div class="tzgg1">
			<div class="tz-ti">
				<img src="<?php echo IMG_PATH;?>images/tzgg3.png" width="148px" />
			</div>
			<div class="tz-content">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45b890d8e8f9cd0f350695bc19bd3ad6&action=lists&catid=9&order=listorder+DESC&num=12&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder DESC','limit'=>'12',));}?>
					<ul>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li>
							<span style="margin-right:30px"><img src="<?php echo IMG_PATH;?>images/news.png"  /></span>[<?php echo date('Y/m/d',$r[inputtime]);?>]<a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" style="margin-left:15px"><?php echo str_cut($r[title],100);?></a>
						</li>
						<?php $n++;}unset($n); ?> 
					</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
			</div>
			<div class="tz-control">
				<img src="<?php echo IMG_PATH;?>images/tzgg5.png" width="45px" id="top" style="margin-bottom:12px"/>
				<img src="<?php echo IMG_PATH;?>images/tzgg4.png" width="45px" id="next"/>
			</div>
		</div>
	</div>
	<div class="xx">
		<div class="slide">
            <div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
            	<div class="content" id="main-slide">
                    <div class="changeDiv">  
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],500,390);?>" alt="<?php echo $r['title'];?>" width="360" height="300" /></a>
                    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
			<div class="yw">
				<div class="xw1">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc4801da53cb4c39d63db5861a927022&action=position&posid=1&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'1',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">
							<p class="p1"><?php echo str_cut($r[title],45);?></p>
						</a>
							<p class="p2"><?php echo str_cut($r[description],230);?><a href="<?php echo $r['url'];?>">[详细]</a></p>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="jqyw">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a03c5a48b048212f67a874a24bc641c8&action=position&posid=1&start=1&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'1,6',));}?>
					<ul >
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li>
							<span><img src="<?php echo IMG_PATH;?>images/news.png"  /></span>[<?php echo date('Y/m/d',$r[inputtime]);?>]
							<a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],80);?></a>
						</li>
						<?php $n++;}unset($n); ?>
					</ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</div>
	</div>
	<div class="for4"> 
		<div class="for41">
			<div class="title1">
				<div class="lm">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8e51617d677ba81eceb39e4e393d1ff7&sql=select+catid%2Ccatname+from+yjy_category+where+parentid%3D16+AND+catid+BETWEEN+17+AND+20+order+by+catid+&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select catid,catname from yjy_category where parentid=16 AND catid BETWEEN 17 AND 20 order by catid  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<ul>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li id="<?php echo $r['catid'];?>">
							<?php echo $r['catname'];?>
						</li>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
				<div class="zx">
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=9"><img src="<?php echo IMG_PATH;?>images/zx07.png"  /></a>
				</div>
			</div>
			<div class="for42">
				<div class="for42-content show 17">
					<div class="left">
						<ul>
							<li>01</li>
							<li>02</li>
							<li>03</li>
							<li>04</li>
							<li>05</li>
						</ul>
					</div>
					<div class="right">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=08eb7d7c46af43612d3836c0da70fd6b&action=lists&catid=17&order=listorder+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder DESC','limit'=>'5',));}?>
						<ul>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<img src="<?php echo thumb($r['thumb'],830,400);?>" alt="<?php echo $r['title'];?>" width="830" height="400" />
								<div class="content-top">
									<p class=p4><?php echo date('Y-m-d',$r[inputtime]);?></p>
									<p class=p5><?php echo str_cut($r['title'],50);?></p>
									<p class=p6><?php echo str_cut($r[description],230);?></a></p>
								</div>
								<div class="href">
									<a href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>images/c11.png"  /></a>
								</div>
							</li>
							<?php $n++;}unset($n); ?> 
						</ul>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
					</div>
				</div>
				<div class="for42-content 18" >
					<div class="left">
						<ul>
							<li>01</li>
							<li>02</li>
							<li>03</li>
							<li>04</li>
							<li>05</li>
						</ul>
					</div>
					<div class="right">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9d1ad1891b412419ce1c610e1581e99f&action=lists&catid=18&order=listorder+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'18','order'=>'listorder DESC','limit'=>'5',));}?>
						<ul>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<img src="<?php echo thumb($r['thumb'],830,400);?>" alt="<?php echo $r['title'];?>" width="830" height="400" />
								<div class="content-top">
									<p class=p4><?php echo date('Y-m-d',$r[inputtime]);?></p>
									<p class=p5><?php echo str_cut($r['title'],50);?></p>
									<p class=p6><?php echo str_cut($r[description],230);?></a></p>
								</div>
								<div class="href">
									<a href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>images/c11.png"  /></a>
								</div>
							</li>
							<?php $n++;}unset($n); ?> 
						</ul>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
					</div>
				</div>
				<div class="for42-content 19" >
					<div class="left">
						<ul>
							<li>01</li>
							<li>02</li>
							<li>03</li>
							<li>04</li>
							<li>05</li>
						</ul>
					</div>
					<div class="right">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=55de65b32343207f1b9541725fefe2ad&action=lists&catid=19&order=listorder+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'listorder DESC','limit'=>'5',));}?>
						<ul>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<img src="<?php echo thumb($r['thumb'],830,400);?>" alt="<?php echo $r['title'];?>" width="830" height="400" />
								<div class="content-top">
									<p class=p4><?php echo date('Y-m-d',$r[inputtime]);?></p>
									<p class=p5><?php echo str_cut($r['title'],50);?></p>
									<p class=p6><?php echo str_cut($r[description],230);?></a></p>
								</div>
								<div class="href">
									<a href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>images/c11.png"  /></a>
								</div>
							</li>
							<?php $n++;}unset($n); ?> 
						</ul>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
					</div>
				</div>
				<div class="for42-content 20">
					<div class="left">
						<ul>
							<li>01</li>
							<li>02</li>
							<li>03</li>
							<li>04</li>
							<li>05</li>
						</ul>
					</div>
					<div class="right">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcbc22926f8a4d6472e82f37596656a5&action=lists&catid=20&order=listorder+DESC&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'20','order'=>'listorder DESC','limit'=>'5',));}?>
						<ul>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<img src="<?php echo thumb($r['thumb'],830,400);?>" alt="<?php echo $r['title'];?>" width="830" height="400" />
								<div class="content-top">
									<p class=p4><?php echo date('Y-m-d',$r[inputtime]);?></p>
									<p class=p5><?php echo str_cut($r['title'],50);?></p>
									<p class=p6><?php echo str_cut($r[description],230);?></a></p>
								</div>
								<div class="href">
									<a href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>images/c11.png"  /></a>
								</div>
							</li>
							<?php $n++;}unset($n); ?> 
						</ul>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="fhfw">
	<div class="fhfw1">
		<div class="title2">
			<div class="zx1">
				<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13"><img src="<?php echo IMG_PATH;?>images/fhfw11.png"  /></a>
			</div>
		</div>
		<div class="fhfw4">
			<ul>
				<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13"><img src="<?php echo IMG_PATH;?>images/fhfw10.png"  /><img class="img1"  src="<?php echo IMG_PATH;?>images/fhfw103.png"  /></a></li>
				<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13"><img src="<?php echo IMG_PATH;?>images/fhfw12.png"  /><img class="img1"  src="<?php echo IMG_PATH;?>images/fhfw105.png"  /></a></li>
				<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13"><img src="<?php echo IMG_PATH;?>images/fhfw14.png"  /><img class="img1"  src="<?php echo IMG_PATH;?>images/fhfw107.png"  /></a></li> 
				<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13"><img src="<?php echo IMG_PATH;?>images/fhfw16.png"  /><img class="img1"  src="<?php echo IMG_PATH;?>images/fhfw109.png"  /></a></li>
			</ul>
		
		</div>
	</div>
</div>
<script type="text/javascript"> 
banner();
//通知公告点击事件
var tzlist=$('.tz-content li');
for(var t1=0;t1<3;t1++){
	$(tzlist[t1]).css('display','block');
}
var top1=3;
$('#next').click(function(){
  var next=top1+3;
  if(next>tzlist.length){
	  alert("已经是最后一条！")
  }else{
	  for(var t2=top1,t21=1;t2<next;t2++,t21=t21+2){
			$(tzlist[t2]).css('display','block');
			$(tzlist[t2-t21]).css('display','none');
			top1=top1+1;	
	  };
  };
});

$('#top').click(function(){
  var next=top1-3;
  if(next==0){
	alert("已经是第一条！")
  }else{
		for(var t2=next,t21=next-3;t2<top1,t21<next;t2++,t21++){
		$(tzlist[t2]).css('display','none');
		$(tzlist[t21]).css('display','block');
		top1=top1-1;	  
	  };
  };
});

//焦点图

$(function(){
	new slide("#main-slide","cur",360,300,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
});

$(".lm li").first().addClass('li-first');
var b=$('.lm li');
var can=17;
action();
for(var j=0; j<b.length; j++){
	$(b[j]).click(function(){
		$(".lm li").removeClass('li-first');
		$(this).addClass('li-first');
		var f=$(this).attr("id");
		$('.for42-content').hide();
		$('.'+f).css('display','block');
		can=f;
		action(can);
		
	});
};
function action(){	
$('.'+can+' .left li').first().addClass('contentsize');
$("."+can+" .left li").first().append('<div class="sanjiao"></div>');
$("."+can+' .right li').hide();
$("."+can+" .right li").first().show();
var c=$("."+can+' .left li');
for(var h=0; h<c.length; h++){
	c[h].onmouseover=function(){
		$("."+can+' .sanjiao').remove();
		$("."+can+' .left li').removeClass('contentsize');
		$(this).addClass('contentsize');
		$(this).append('<div class="sanjiao"></div>');
		var p=$(this).text();
		$("."+can+' .right li').hide();
		var d=$("."+can+' .right li');
		for(var g=0;g<5; g++){
			if(p=="01"){
				$(d[0]).show();
			};
			if(p=="02"){
				$(d[1]).show();
			};
			if(p=="03"){
				$(d[2]).show();
			};
			if(p=="04"){
				$(d[3]).show();
			};
			if(p=="05"){
				$(d[4]).show();
			};
		};

	};
};
}

var img=$('.fhfw4 li');
for(var p=0;p<img.length;p++){
	img[p].onmouseover=function(){
		$(this).find('img').hide();
		$(this).find('.img1').show();
	};
	img[p].onmouseout = function(){
		$(this).find('img').show();
		$(this).find('.img1').hide();
}
}
</script>
<?php include template("content","footer"); ?>