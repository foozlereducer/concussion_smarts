<?php
/** 
 * Device Router
 * 
 * Is dependant on Jetpack. It determines the current web device; mobile, tablet or desktop.
 * It returns the appropriate device suffix. These suffixes will be used to determine 
 * the correct ad unit and div id to load
 * 
 * @author steve browning
 * @version 1.0.0
 */
class sbmr_Device_Router  {
	
	public function __construct() {
		if( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
			// Set a default user-agent so Jetpack_User_Agent_Info() 
			// can be instantiated for use by get_device_type()
			$this->set_ua( 'mozilla/5.0 (android; tablet; rv:14.0) gecko/14.0 firefox/14.0' );
		}
		return 1;
	}
	
	
	public function get_device() {
		
		if( function_exists( 'jetpack_is_mobile' ) ) {
			
				return $this->get_device_type();
		
		} else {
		
			throw new exception(
				'Jetpack needs to be installed for the Device Router class to return device suffixes'
			);
			
			return ;
		}
	}
	
	/**
	 * For Unit testing set the user agent
	 *
	 */
	public function set_ua( $ua ){
		$_SERVER['HTTP_USER_AGENT'] = $ua;
	}
	
	public function get_ua(){
		return $_SERVER['HTTP_USER_AGENT'];
	}
	
	protected function get_device_type() {
		
		/*
		 * Call the VIP available cached jetpack_is_mobile() function
		 */
		$mobile_or_tablet_or_desktop = jetpack_is_mobile();
		
		
		if ( true === $mobile_or_tablet_or_desktop ) {
			
			return 'mobile';
			
		} 
		
		
		/* set user agent locally */
		$user_agent = $this->get_ua();
		
		/* jetpack_is_mobile will return FALSE for tablets; so we first check if it is false, then we run it 
		 * against the is_tablet() method which calls internal tablet methods; if this returns tablet = true 
		 * then we return tablet. As a final fail safe there are many generic tablet user_agents that are returned 
		 * as mobiles or desktops, so the basic preg_match checks for a match of 'tablet' in the user agent string 
		 * if it finds it then it will return 'tablet'
		 */
		
		if( $mobile_or_tablet_or_desktop == FALSE && Jetpack_User_Agent_Info::is_tablet() == TRUE || preg_match('/tablet/i', $user_agent ) ) {
			
			return 'tablet';
			
		} elseif ( $mobile_or_tablet_or_desktop == FALSE ) {
			/* When reaching here, if jetpack_is_mobile returns FALSE and it is not a tablet then it is a desktop
			 * So return 'desktop'
			*/
			return 'desktop';
		}
	}
}
