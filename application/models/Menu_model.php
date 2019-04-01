<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	
	public function getSubmenu()
	{
		$q = 	"SELECT `user_sub_menu`.* , `user_menu`.`menu`
				 FROM `user_sub_menu` JOIN `user_menu`
				 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
				 ORDER BY `user_sub_menu`.`menu_id` ASC
		";
		return $this->db->query($q)->result_array();
	}
}