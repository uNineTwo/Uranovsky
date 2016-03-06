<?php get_header(); ?>


  <div id="sidebar">
  <!-- VK Widget -->
      <center>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400", color1: '000000', color2: 'FFFFFF', color3: '000000'}, 98686334);
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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="article"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <?php the_content(); ?>
    <hr class="line">
    <?php endwhile; else: ?>
    <h1>Нет новых записей...</h1>
    <?php endif; ?>
    <p align="center"><?php posts_nav_link(); ?></p>
</div>

<?php get_footer(); ?>
     
