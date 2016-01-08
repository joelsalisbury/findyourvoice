    <footer>
        <hr>
<style>
#home .htfd-voices{
  display:none;
}
</style>
        <div class="htfd-voices container">
          <h2>Hartford Voices</h2>
          <div class="row">
            <div class="thumbnail col-md-3"><a href="#"><img class="img-responsive" src="/img/contemporary-voice.jpg"></a></div> 
            <div class="thumbnail col-md-3"><a href="#"><img class="img-responsive" src="/img/gwen-reed.jpg"></a></div>
            <div class="thumbnail col-md-3"><a href="#"><img class="img-responsive" src="/img/newtrad.jpg"></a></div>
            <div class="thumbnail col-md-3"><a href="#"><img class="img-responsive" src="/img/historydetective.jpg"></a></div>
          </div>
        </div>

        <div class="container">
            <p class="text-center">
                <?php echo __('Copyright &copy; ') . date('Y') . ' ' . link_to_home_page() . ', All Rights Reserved.'; ?><br>
                <?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?>
            </p>
        </div>

        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.js"></script>       

        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
        <script>
        jQuery(document).ready(function(){
          var container = jQuery('.masonry-container');
          container.imagesLoaded( function () {
            container.masonry({
              columnWidth: '.col-xs-6',
              itemSelector: '.col-xs-6'
            });   
          });
        });
       </script>
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
