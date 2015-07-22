<?php
namespace Mouf\Security\UserService;

/**
 * Objects implementing the UserManagerServiceInterface can edit (create/save) a user.
 *
 */
interface UserManagerServiceInterface {
	
	/**
	 * Creates or update the user $user.
	 * The User ID (in database) is returned.
	 * 
	 * @param \Hybrid_User_Profile $user The user to save
	 * @return string The user ID
	 */
	public function saveUser(\Hybrid_User_Profile $user);
}
?>
