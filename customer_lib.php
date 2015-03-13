<?php

// Write a set of classes that can represent the following sample customer data.

class customerEmailClass {
  protected $id = NULL;
  protected $type =  NULL; // "personal", "work", "cell"
  protected $address = NULL;
  protected $default = FALSE;

  function __construct($id, $type, $address, $default = FALSE) {
    $this->id = $id;
    $this->type = $type;
    $this->address = $address;
    $this->default = $default;
  }
  
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }

  function set_address($address) {
    $this->address = $address;
  }
  function get_address() {
    return $this->address;
  }

  function set_default($default) {
    $this->default = $default;
  }
  function get_default() {
    return $this->default;
  }


}

class customerPhoneClass {
  protected $id = NULL;
  protected $type = NULL; // "Work", "Home"
  protected $number = NULL;
  protected $extension = NULL; // Corrected mispelling?
  protected $default = FALSE; 
  
  function __construct($id, $type, $number, $extension, $default = FALSE) {
    $this->id = $id;
    $this->type = $type;
    $this->number = $number;
    $this->extension = $extension;
    $this->default = $default;
  }

  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }

  function set_number($number) {
    $this->number = $number;
  }
  function get_number() {
    return $this->number;
  }

  function set_extension($extension) {
    $this->extension = $extension;
  }
  function get_extension() {
    return $this->extension;
  }

  function set_default($default) {
    $this->default = $default;
  }
  function get_default() {
    return $this->default;
  }


}

class customerAddressClass {
  protected $id = NULL;
  protected $label = NULL; // "Home", "Parents"
  protected $type = NULL; // "shipping", "billing"
  protected $street = array(); // array with two elements
  protected $city = NULL;
  protected $state = NULL;
  protected $zip = NULL;
  protected $default = FALSE;
  
  function __construct($id, $label, $type, $street, $city, $state, $zip, $default = FALSE) {
    $this->id = $id;
    $this->label = $label;
    $this->type = $type;
    $this->street = $street;
    $this->city = $city;
    $this->state = $state;
    $this->zip = $zip;
    $this->default = $default;
  }
  
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  function set_label($label) {
    $this->label = $label;
  }
  function get_label() {
    return $this->label;
  }

  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }
  
  // street

  function set_city($city) {
    $this->city = $city;
  }
  function get_city() {
    return $this->city;
  }

  function set_state($state) {
    $this->state = $state;
  }
  function get_state() {
    return $this->state;
  }

  function set_zip($zip) {
    $this->zip = $zip;
  }
  function get_zip() {
    return $this->zip;
  }
  
  function set_default($default) {
    $this->default = $default;
  }
  function get_default() {
    return $this->default;
  }
  
}

class customerClass {
  protected $firstName = NULL;
  protected $lastName = NULL;
  protected $email = array();
  protected $phone = array();
  protected $address = array();
  
  function __construct($first_name, $last_name, $email = NULL, $phone = NULL, $address = NULL) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->phone = $phone;
    $this->address = $address;
  }
  
  function set_firstName($firstName) {
    $this->firstName = $firstName;
  }
  function get_firstName() {
    return $this->firstName;
  }
  
  function set_lastName($firstName) {
    $this->lastName = $firstName;
  }
  function get_lastName() {
    return $this->lastName;
  }
  
  // email
  
  // phone
  
  // address
  
}
