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

$mail_object = new customerEmailClass(123, 'personal', 'kevin.s.wiechmann@gmail.com', TRUE);
$mail_objects = array($mail_object);

$phone_object = new customerPhoneClass(456, 'cell', 2016153266, '', TRUE);
$phone_objects = array($phone_object);

$address_object = new customerAddressClass(789, 'Home', 'shipping', array('25 Van Schaik Ln.'), 'Wyckoff', 'NJ', '07481', TRUE);
$address_objects = array($address_object);

$first_name = 'Kevin';
$last_name = 'Wiechmann';
$customer_object = new customerClass($first_name, $last_name, $mail_object, $phone_object, $address_object);

?>
<html>
  <head>
    
  </head>
  <body>
    <pre>
      <?php print_r($customer_object); ?>
    </pre>
  </body>
</html>
