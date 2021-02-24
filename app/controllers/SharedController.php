<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * post_category_option_list Model Action
     * @return array
     */
	function post_category_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT name AS value,name AS label FROM category ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

	/**
     * post_author_option_list Model Action
     * @return array
     */
	function post_author_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT name AS value,name AS label FROM user ORDER BY id";
		$arr = $db->rawQuery($sqltext);
		return $arr;
	}

}
