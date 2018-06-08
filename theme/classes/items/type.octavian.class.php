<?php
/**
 * @package janitor.itemtypes
 * This file contains itemtype functionality
 */
class TypeOctavian extends Itemtype {
    /**
     * Init, set varnames, validation rules
     */
    function __construct() {
        // construct ItemType before adding to model
        parent::__construct(get_class());
        // itemtype database
        $this->db = SITE_DB.".item_octavian";
        $this->addToModel("name", array(
            "type" => "string",
            "label" => "Navn",
            "required" => true,
            "hint_message" => "Type string",
            "error_message" => "String must be string"
        ));
        $this->addToModel("v_text", array(
            "type" => "text",
            "label" => "Description",
            "required" => true,
            "hint_message" => "Write the description in this place",
            "error_message" => "The description shoul be writen with capital leters"
        ));
    }
}
?>