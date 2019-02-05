<?php
echo '<div class="container">
	<form method="post" action="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/search.php" class="search-form">
		<table class="tablebtn" align="center">
		<tbody>
		<tr>
			<td>
				<input type="text" id="searchkey" value="" placeholder="输入您想要看的书名或笔名" name="searchkey">
			</td>
			<td width="70">
				<input type="submit" class="btn btn-auto btn-blue vm" value="搜索">
			</td>
		</tr>
		</tbody>
		</table>
	</form>
	<div class="mod three-pic index_pic" style="margin-top:0;">
		<div id="EditArea9Item" class="bd">'.$this->_tpl_vars['jieqi_pageblocks']['bid104']['content'].'
		</div>
	</div>
	<div class="mod block tab recommend">
		<div class="hd c3">
			<span class="item active" id="jsqieT1" onclick="qie(1)">热门精选</span>
			<span class="item" id="jsqieT2" onclick="qie(2)">限时免费</span>
			<span class="item" id="jsqieT3" onclick="qie(3)">全本热销</span>
		</div>
		<div class="bd">
			<ul class=" item lists" style="" id="jsqie1">
				<li id="EditArea10First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid105']['content'].'</li>
				'.$this->_tpl_vars['jieqi_pageblocks']['bid125']['content'].'
			</ul>
			<ul class=" item lists" style="display: none" id="jsqie2">
				<li id="EditArea11First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid106']['content'].'</li>
				'.$this->_tpl_vars['jieqi_pageblocks']['bid126']['content'].'
			</ul>
			<ul class=" item lists" style="display: none" id="jsqie3">
				<li id="EditArea12First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid107']['content'].'</li>
					'.$this->_tpl_vars['jieqi_pageblocks']['bid127']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block recommend yellow">
		<div class="hd">
			<h4>总裁豪门</h4>
		</div>
		<div class="bd">
			<ul class="lists">
				<li id="EditArea13First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid108']['content'].'</li>
				'.$this->_tpl_vars['jieqi_pageblocks']['bid128']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block recommend pinkz">
		<div class="hd">
			<h4>灵异悬疑</h4>
		</div>
		<div class="bd">
			<ul class="lists">
				<li id="EditArea14First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid109']['content'].'</li>
				'.$this->_tpl_vars['jieqi_pageblocks']['bid129']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block recommend">
		<div class="hd">
			<h4>古代穿越</h4>
		</div>
		<div class="bd">
			<ul class="lists">
				<li id="EditArea15First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid110']['content'].'</li>
				'.$this->_tpl_vars['jieqi_pageblocks']['bid130']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block recommend green">
		<div class="hd">
			<h4>主编推荐</h4>
		</div>
		<div class="bd">
			<ul class="lists">
				<li id="EditArea16First" class="column-1">'.$this->_tpl_vars['jieqi_pageblocks']['bid111']['content'].'</li>
				'.$this->_tpl_vars['jieqi_pageblocks']['bid131']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block pink column-list goodbook">
		<div class="hd">
			<h4>原创小说</h4>
		</div>
		<div class="bd">
			<ul class="list">'.$this->_tpl_vars['jieqi_pageblocks']['bid112']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block pink column-list goodbook">
		<div class="hd">
			<h4>新书速递</h4>
		</div>
		<div class="bd">
			<ul class="list">'.$this->_tpl_vars['jieqi_pageblocks']['bid113']['content'].'
			</ul>
		</div>
	</div>
	<div class="mod block tab rank">
		<div class="hd c3">
			<span class="item active" id="jsqieTL1">点击榜</span>
			<span class="item" id="jsqieTL2">推荐榜</span>
			<span class="item" id="jsqieTL3">打赏榜</span>
		</div>
		<div class="bd">
			<ul id="htmlDian" class="item lists">'.$this->_tpl_vars['jieqi_pageblocks']['bid114']['content'].'
			</ul>
			<ul id="htmlDashang" class="item lists none">'.$this->_tpl_vars['jieqi_pageblocks']['bid132']['content'].'
			</ul>
			<ul id="htmlDingYue" class="item lists none">'.$this->_tpl_vars['jieqi_pageblocks']['bid133']['content'].'
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(function () {
        $(".top .nav a").eq(0).addClass("nav_active");
    })
    function qie(i) {
        byId("jsqieT1,jsqieT2,jsqieT3").addClass("item");
        byId("jsqie1,jsqie2,jsqie3").hide();
        byId("jsqieT" + i).addClass("item active");
        byId("jsqie" + i).show();
    }
    function qie2(i) {
        byId("jsqieTL1,jsqieTL2,jsqieTL3").addClass("item");
        byId("htmlDian,htmlDashang,htmlDingYue").hide();
        byId("jsqieTL" + i).addClass("item active");
        if (i == 1)
            byId("htmlDian").show();
        else if (i == 2)
            byId("htmlDashang").show();
        else if (i == 3)
            byId("htmlDingYue").show();
    }
    byId("jsqieTL1").click(function(){qie2(1)});
    byId("jsqieTL2").click(function(){qie2(2)});
    byId("jsqieTL3").click(function(){qie2(3)});
</script>
';
?>