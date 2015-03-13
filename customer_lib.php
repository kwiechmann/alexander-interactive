<?php

// Write a set of classes that can represent the following sample customer data.

class customerInfoBaseClass {
  private $id = NULL;
  private $type =  NULL;
  private $default = FALSE;

  function __construct($id, $type, $default = FALSE) {
    $this->id = $id;
    
    switch (get_class($this)) {
      case 'customerEmailClass':   
        $types = array('personal', 'work');
        break;
      case 'customerPhoneClass':
        $types = array('work', 'cell');
        break;
      case 'customerAddressClass': 
        $types = array('shipping', 'billing');
        break;
      default:            
        $types = array();
    }
    if (in_array($type, $types)) {
      $this->type = $type;
    }

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

  function set_default($default) {
    $this->default = $default;
  }
  function get_default() {
    return $this->default;
  }
 }

class customerEmailClass extends customerInfoBaseClass {

  private $address = NULL;


  function __construct($id, $type, $address, $default = FALSE) {
    parent::__construct($id, $type, $default);
    
    $this->address = $address;
  }
  
  function set_address($address) {
    $this->address = $address;
  }
  function get_address() {
    return $this->address;
  }
}

class customerPhoneClass extends customerInfoBaseClass {
  private $number = NULL;
  private $extension = NULL; // Corrected mispelling?
  
  function __construct($id, $type, $number, $extension, $default = FALSE) {
    parent::__construct($id, $type, $default);
    
    $this->number = $number;
    $this->extension = $extension;
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
  
}

class customerAddressClass extends customerInfoBaseClass {
  private $label = NULL; // "Home", "Parents"
  private $street = array(); // array with two elements
  private $city = NULL;
  private $state = NULL;
  private $zip = NULL;
  
  function __construct($id, $label, $type, $street, $city, $state, $zip, $default = FALSE) {
    parent::__construct($id, $type, $default);
    
    $this->label = $label;
    $this->street = $street;
    $this->city = $city;
    $this->state = $state;
    $this->zip = $zip;
  }
  

  function set_label($label) {
    $this->label = $label;
  }
  function get_label() {
    return $this->label;
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
}

class customerClass {
  private $firstName = NULL;
  private $lastName = NULL;
  private $email = array();
  private $phone = array();
  private $address = array();
  
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
  
  function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }
  
  function set_phone($phone) {
    $this->phone = $phone;
  }
  function get_phone() {
    return $this->phone;
  }
   
  function set_address($address) {
    $this->address = $address;
  }
  function get_address() {
    return $this->address;
  }
}
