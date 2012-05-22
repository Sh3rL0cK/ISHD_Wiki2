<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
		<input type="text" value="Search Site" onfocus="this.value=''; this.onfocus=null;" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="GO!" />
        
</form>