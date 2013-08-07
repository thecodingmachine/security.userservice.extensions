<?php
namespace Mouf\Security\UserService;

/**
 * Objects implementing the AdvancedUserInterface represent a user, with
 * a mail, a last name and a first name.
 *
 */
interface AdvancedUserInterface extends UserInterface {
	
	/**
	 * Returns the email
	 *
	 * @return string
	 */
	public function getEmail();
	
	/**
	 * Returns the last name
	 *
	 * @return string
	 */
	public function getLastName();
	
	/**
	 * Returns the first name
	 *
	 * @return string
	 */
	public function getFirstName();
}
?>
