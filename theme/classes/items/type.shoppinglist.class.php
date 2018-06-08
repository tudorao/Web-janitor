<?php
/**
 * Created by PhpStorm.
 * User: clevo
 * Date: 06/06/2018
 * Time: 21.39
 */

/**
 * @package janitor.itemtypes
 * This file contains itemtype functionality
 */
class TypeShoppinglist extends Itemtype {
    /**
     * Init, set varnames, validation rules
     */
    function __construct() {
        // construct ItemType before adding to model
        parent::__construct(get_class());
        // itemtype database
        $this->db = SITE_DB.".item_shoppinglist";
        $this->addToModel("name", array(
            "type" => "string",
            "label" => "Shopping Item",
            "required" => true,
            "hint_message" => "Product type",
            "error_message" => "Product type"
        ));
        $this->addToModel("select", array(
            "type" => "select",
            "label" => "Quantity",
            "required" => true,
            "hint_message" => "Amount of the desired item",
            "error_message" => "You must choose which quantity you want from the item"
        ));
        $this->addToModel("v_text", array(
            "type" => "text",
            "label" => "Comments",
            "required" => true,
            "hint_message" => " Leave your comments here",
            "error_message" => "Here you can leave a comment on your the product"
        ));
    }
}
?>