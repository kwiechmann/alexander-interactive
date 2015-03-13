<?php

// Write a set of classes that can represent the following sample customer data.

$customer = <<<JSON
{
  "firstName": "Jonathon",
  "lastName": "Doe",
  "email": [
    {
      "id": "2311",
      "type": "work",
      "address": "jdoe@somewhere.org",
      "default": true
    },
    {
      "id": "7775",
      "type": "personal",
      "email": "johnathon.doe@gmail.com"
    }
  ],
  "phone": [
    {
      "id": "7673",
      "type": "work",
      "number": "2124583322",
      "extension": "223",
      "default": true
    },
    {
      "id": "24332",
      "type": "cell",
      "number": "9173348484"
    }
  ],
  "address": [
    {
      "id": "232",
      "label": "Home",
      "type": "shipping",
      "street": [
        "4854 Embassy Drive",
        "Building 8"
      ],
      "city": "Arlington",
      "state": "VA",
      "zip": "20184"
    },
    {
      "id": "233",
      "label": "Work",
      "type": "shipping",
      "street": [
        "4854 South 4th Street",
        "Suite 705"
      ],
      "city": "Newark",
      "state": "NJ",
      "zip": "10475-4392",
      "default": true
    },
    {
      "id": "252",
      "label": "Parents",
      "type": "billing",
      "street": [
        "4854 South 4th Street",
        "Suite 705
      ],
      "city": "Newark",
      "state": "NJ",
      "zip": "10475-4392"
    }
  ]
}
JSON;

include_once('customer_lib.php');

$mail_object1 = new customerEmailClass(12383274, 'personal', 'kevin.s.wiechmann@gmail.com', TRUE);
$mail_object2 = new customerEmailClass(1238970, 'personal', 'thewiechmanns@gmail.com');
$mail_objects = array($mail_object1, $mail_object2);

$phone_object1 = new customerPhoneClass(4566578, 'cell', 2016153266, '', TRUE);
$phone_object2 = new customerPhoneClass(4561234, 'work', 2125226541, '');
$phone_objects = array($phone_object1, $phone_object2);

$address_object1 = new customerAddressClass(78991324, 'Home', 'shipping', array('25 Van Schaik Ln.'), 'Wyckoff', 'NJ', '07481', TRUE);
$address_object2 = new customerAddressClass(78991324, 'Home', 'shipping', array('100 Any Street.', 'Apt #100'), 'Any Town', 'NJ', '07000');
$address_objects = array($address_object1, $address_object2);

$first_name = 'Kevin';
$last_name = 'Wiechmann';
$customer_object = new customerClass($first_name, $last_name, $mail_objects, $phone_objects, $address_objects);

?>
<html>
  <head>
    <style>
      .header {background-color:pink; padding:10px;}
    </style>
  </head>
  <body>
    <pre>

<strong class="header">Complete customer_object:</strong>

      <?php print_r($customer_object); ?>

<strong class="header">Complete customer_object->get_email():</strong>

      <?php print_r($customer_object->get_email()); ?>

<strong class="header">Complete customer_object->get_phone():</strong>

      <?php print_r($customer_object->get_phone()); ?>

<strong class="header">Complete customer_object->get_address():</strong>

      <?php print_r($customer_object->get_address()); ?>

    </pre>
  </body>
</html>
