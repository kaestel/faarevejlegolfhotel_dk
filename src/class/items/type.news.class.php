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

		// Published
		$this->addToModel("published_at", array(
			"type" => "datetime",
			"label" => "Publish date (yyyy-mm-dd)",
			"pattern" => "^[\d]{4}-[\d]{2}-[\d]{2}[0-9\-\/ \:]*$",
			"hint_message" => "Date to publish news post on site. Until this date news post will remain hidden on site. Leave empty for instant publication", 
			"error_message" => "Date must be of format (yyyy-mm-dd[ hh:mm:ss])"
		));

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

		// Link
		$this->addToModel("link", array(
			"type" => "string",
			"label" => "Link",
			"hint_message" => "Link to additional infomation"
		));

		// Link text
		$this->addToModel("link_text", array(
			"type" => "string",
			"label" => "Link text",
			"hint_message" => "Text for link to additional infomation"
		));

		// class
		$this->addToModel("classname", array(
			"type" => "string",
			"label" => "CSS classname",
			"hint_message" => "CSS classname for special appearance"
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