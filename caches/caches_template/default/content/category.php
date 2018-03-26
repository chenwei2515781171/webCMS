<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->

<div class="main">
	<div class="title-img">
		<img src="" width="100%">
	</div>
<script>
	var imgname="<?php echo $catname;?>";
	$('.title-img img').src;
	 switch (imgname) {
                    case ("我院概况"):
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/wygk02.png');
                        break;
                    case ("科研场所"):
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/kycs02.png');
                        break;
                    case ("技术研发"):
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/jsyf02.png');
                        break;
					case ("孵化服务"):
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/fhfw02.png');
                        break;
					case ("合作联盟"):
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/hzlm02.png');
                        break;
					case ("联系我们"):
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/lxwm02.png');
                        break;
                    default:
                        $('.title-img img').attr('src','<?php echo IMG_PATH;?>images/wygk02.png');
                }
</script>
	<div class="lm-content">
		<div class="content-left">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=95b99ee5d16c8536d5876786fb63b4a3&sql=select+catname%2Ccatid+from+yjy_category+where+parentid%3D%24catid+order+by+catid&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select catname,catid from yjy_category where parentid=$catid order by catid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li class="bck1" id="<?php echo $r['catid'];?>" ><?php echo $r['catname'];?></li>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<div class="content-right">
			<ul>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f440863401ab1a6dd417f6cdd2692383&sql=select+catid%2Ccatname+from+yjy_category+where+parentid%3D%24catid+order+by+catid+&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select catid,catname from yjy_category where parentid=$catid order by catid  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li id="<?php echo $r['catid'];?>" >
						<p class="content-title"><?php echo $r['catname'];?><span>当前位置：<?php echo $catname;?>-<?php echo $r['catname'];?></span></p>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c609ff6355b500cf9cdc1d9d3be64d19&sql=select+id+from+yjy_news+where+catid%3D%24r%5Bcatid%5D&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select id from yjy_news where catid=$r[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
							<?php $n=1;if(is_array($data)) foreach($data AS $d) { ?>
							
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=93087ada12d8a54b80142f45f9ecd374&sql=select+content+from+yjy_news_data+where+id%3D%24d%5Bid%5D&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select content from yjy_news_data where id=$d[id] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
									<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
										<?php echo $c['content'];?>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</li>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</div>   
</div>
<script type="text/javascript">
$('.content-left li').first().addClass('bck');
$('.content-right li').first().show();
var leftli=$('.content-left li');
var rightli=$('.content-right li');
for(var a=0;a<leftli.length;a++){
	
	$(leftli[a]).click(function(){
		$('.content-left li').removeClass('bck');
		$(this).addClass('bck');
		$('.content-right li').hide();
		var f=$(this).attr("id");
		for(var b=0;b<rightli.length;b++){
			var g=$(rightli[b]).attr("id");
			if(parseInt(f)==parseInt(g)){
				$(rightli[b]).show();
			}
		};
		
	})
}

</script>
<?php include template("content","footer"); ?>