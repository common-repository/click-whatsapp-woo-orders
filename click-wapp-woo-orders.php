<?php
  /*
    Plugin Name: Instant Message for WooCommerce Orders
    Plugin URI: https://wpokulu.co
    Version: 0.86
    Author: WPOkulu
    Description: Simply click on the customer phone number in the orders and easily contact your customers via WhatsApp.
 */
 
function cwwo_replace_wa(){
	echo 
	'<script text/javascript>
	function cwwo_chage_href(){
	var number=document.querySelector(".address p:nth-of-type(3) a").text;
	if (number !=null){
	var changetelephonelinktowhatsapp="https://wa.me/"+number;
	document.querySelector(".address p:nth-of-type(3) a").setAttribute("href", changetelephonelinktowhatsapp);
	}
	}window.onload=cwwo_chage_href;
	</script>';
}
	if ( is_admin()) { 
		add_action('admin_head','cwwo_replace_wa');
	}
?>
