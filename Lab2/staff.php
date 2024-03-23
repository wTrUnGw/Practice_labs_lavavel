/* This PHP class named `staff` extends the `character` class and includes properties for staff code
and part, along with methods to retrieve these values and generate a staff code. */
<?php
require_once("character.php");

class staff extends character
{
    private $staffcode;
    private $part;

    public function __construct($fullname_staff, $countrycode, $part)
    {
        parent::__construct($fullname_staff, $countrycode, $part);
        $this->part = $part;
        $this->staffcode = $this->staffcode_continue();
    }

    public function get_staffcode()
    {
        return $this->staffcode;
    }

    public function get_part()
    {
        return $this->part;
    }

    final private function staffcode_continue()
    {
        // TODO: Implement staffcode_continue functionality
        static $makecode = 1;
        $makecode++;
        // Add your logic here to generate staff code
    }
}