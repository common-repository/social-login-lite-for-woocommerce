<?php 
add_action( 'woocommerce_register_form_end', 'psl_myaccount_register_form' );	
function psl_myaccount_register_form() {
	$setting_data=get_option('psl_social_plugin');
	extract($setting_data['facebook_details']);
	extract($setting_data['google_plus_details']);
	if($enable_facebook=='on'|| $enable_google_plus=='on' ){
		?> 
		<?php
		if($enable_facebook=='on'){ ?>
				   <img src='<?php if($fb_icon_url!=''){ echo $fb_icon_url;}else{ echo plugin_dir_url( __FILE__ )."images/facebook.png";}?>'   style="cursor:pointer;" onclick="facebook_login()"/>
				   <?php } if($enable_google_plus=='on'){?>
				   <img src='<?php if($google_icon_url!=''){echo $google_icon_url;}else{ echo plugin_dir_url( __FILE__ )."images/google-plus.png";}?>'   style="cursor:pointer;" onclick="google_login()"/>
				   <?php } ?>
		}
	}
?>