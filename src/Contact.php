<?php
    class Contact
    {
        private $name;
        private $phone_number;
        private $address;

        function __construct($new_name, $new_phone, $new_address)
        {
            $this->name = (string) $new_name;
            $this->phone_number = (string) $new_phone;
            $this->address = (string) $new_address;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhoneNumber($new_phone)
        {
            $this->phone_number = $new_phone;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function setAddress($new_address) {
            $this->address = (string) $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function save() {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll() {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll() {
            $_SESSION['list_of_contacts'] = array();
        }

        static function deleteAContact($index) {
            $contacts = $_SESSION['list_of_contacts'];
            $number_of_contacts = count($contacts);
            $number_of_contacts -= 1;
            $contacts[$index] = $contacts[$number_of_contacts];
            array_pop($contacts);
            $_SESSION['list_of_contacts'] = $contacts;
        }

    }
?>
