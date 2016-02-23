

<!DOCTYPE html>
<html>
    
<head>
      <meta charset="utf-8" />
    
    <title>Uranovsky</title>
    
<link rel="stylesheet" href="style.css">
    <!--bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--шрифт-->
      <link href="http://allfont.ru/allfont.css?fonts=futuralight-light" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
    
    </head>
    
 <body>
  <div id="header">
      
     <ul class="hr">
   <li><a class="menu" href="/">Главная</a></li>
   <li><a class="menu" href="/">Файлы</a></li>
   <li><a class="menu" href="/">Галлерея</a></li>
  </ul>
      <div id="society">
    <a href="https://vk.com/uranovsky"><img src="icons/mail.jpg"</a>
    <a href="/"><img src="icons/vk.jpg"></a>
    <a href="/"><img src="icons/YouTube.jpg"></a>
      </div>
       
     </div>
  <div id="sidebar">
  <!-- VK Widget -->
      <center>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "250", height: "400", color1: '000000', color2: 'FFFFFF', color3: '000000'}, 98686334);
</script>
          
          <script id="_wauxws">var _wau = _wau || [];
_wau.push(["colored", "z7oscmiwsx4y", "xws", "000000ffffff"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/colored.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
          
          </center>
  </div>
  <div id="content">
      <!-- content -->
 		<?php
 		while($row = mysql_fetch_assoc($otvet)){
 			echo "<section>
 			<h2>{$row['title']}</h2>
 			{$row['content']}
 			<p class=\"date\">{$row['date']}</p>
 			</section>";
 		
 		}
 		?>
 	</article>
<nav>
<?php
if( $page > 1 ) echo '<a href="index.php?page='.($page-1).'">← туда</a>';
if( $page < $pages ) echo '<a href="index.php?page='.($page+1).'">туда →</a>';
?>
</nav>
     
  <div id="footer"></div>
      
 </body>
</html>