<footer>
                    
                    



	<ul id="footer-site-map">
<?php 

$my_pages = wp_list_pages('echo=0&title_li=&depth=6');
$var1 = '<a';
$var2 = '<span class="footer"><a';
$var3 = '</a>';
$var4 = '</a></span>';
$my_pages = str_replace($var1, $var2, $my_pages);
$my_pages = str_replace($var3, $var4, $my_pages);
echo $my_pages;


?>
</ul>

<p>&copy; <?= date('Y'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>  &bull; <a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform">WordPress <?php bloginfo('version'); ?></a> &bull; <a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to Posts Feed">Entries (RSS)</a>


		<?php wp_footer(); ?>

    </footer>
  </body>
</html>
