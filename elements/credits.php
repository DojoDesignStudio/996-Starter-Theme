<ul>

<li><a href="/sitemap">Sitemap</a> | </li>
<li><a href="/terms-and-conditions">Terms and Conditions</a> | </li>
<li><a href="/privacy-policy">Privacy Policy &amp; Cookies</a> | </li> 
<li>
			<?php 
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php  
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
				<span class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t(' [Sign Out]')?></a></span>
			<?php  } else { ?>
				<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
			<?php  } ?></li>
         
</ul>   
            
            
            
            <div>
            <br /> <a target="_blank" href="http://www.dojodesignstudio.com/what-we-do/website-design-glasgow" title="Website Design Glasgow, Dojo Design Studio">Website Design Glasgow, Dojo Design Studio</a>
            </div>
            