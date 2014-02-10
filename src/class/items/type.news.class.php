<?php
/**
* @package e-types.items
* This file contains item persons maintenance functionality
*/

/**
* TypeNews
*/
class TypeNews extends Model {


	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		$this->db = SITE_DB.".item_news";

		// Name
		$this->addToModel("name", array(
			"type" => "string",
			"label" => "Event name",
			"required" => true,
			"unique" => $this->db,
			"hint_message" => "Write the name of the event", 
			"error_message" => "Event name must be filled out"
		));

		// Short description
		$this->addToModel("short_description", array(
			"type" => "text",
			"label" => "Short description",
			"hint_message" => "Write a short description for display on frontpage",
			"error_message" => "Short description must be filled out"
		));

		// Long description
		$this->addToModel("long_description", array(
			"type" => "text",
			"label" => "Long description",
			"hint_message" => "Write a long description of the event",
			"error_message" => "Long description must be filled out"
		));

		// Files
		$this->addToModel("files", array(
			"type" => "files",
			"label" => "Add images here",
			"max" => 1,
			"allowed_formats" => "png,jpg",
			"allowed_proportions" => "16/9,",
			"hint_message" => "Add news images here. Use png or jpg.",
			"error_message" => "Image does not fit requirements."
		));


		// Tags
		$this->addToModel("tags", array(
			"type" => "tags",
			"label" => "Add tag",
			"hint_message" => "Start typing to get suggestions"
		));

		parent::__construct();
	}


}

?>