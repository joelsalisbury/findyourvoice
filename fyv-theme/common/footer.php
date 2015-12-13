
    <footer>
        <hr>
        <div class="container">
            <p class="text-center">
                <?php echo __('Copyright &copy; ') . date('Y') . ' ' . link_to_home_page() . ', All Rights Reserved.'; ?><br>
                <?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?>
            </p>
        </div>
        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
    </footer>
    <script>
      (function(d) {
        var config = {
          kitId: 'wna1gvr',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
</body>
</html>
