<?php
echo '<link rel="stylesheet" type="text/css" href="/wap/css/yue.css" media="all"/>

<div class="container">

<div class="within-book">    <h3 class="column">包月说明</h3>    <p class="explain">订购包月，有效期内可阅读全部包月书籍。</p>   </div>
<div class="js-month-list">    
   
<div class="within-book">     
<h3 class="column">包月热书</h3>     
<ul class="column-ul">            
'.$this->_tpl_vars['jieqi_pageblocks']['622']['content'].'       
</ul>    
</div>   

<div class="within-book">     
<h3 class="column">包月精品</h3>     
<ul class="column-ul">            
'.$this->_tpl_vars['jieqi_pageblocks']['623']['content'].'           
</ul>    
</div>  

<div class="within-book">     
<h3 class="column">包月畅销</h3>     
<ul class="column-ul">            
'.$this->_tpl_vars['jieqi_pageblocks']['bid624']['content'].'        
</ul>    
</div>  

</div>

</div>';
?>