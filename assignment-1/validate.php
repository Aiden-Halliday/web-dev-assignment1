<?php
    class validate{
        public function checkEmpty($data, $fields)
        {
            $msg = null; //message is intially null until problems are identified
            foreach ($fields as $value)
            {
                if(empty($data[$value]))
                {
                    $msg .= "<p>$value field cannot be empty</p>"; //any blank field will get added to the message
                }
            }
            return $msg;
        }

        public function validEmail($email) 
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) //checks if the email follows proper formatting
            {
                return true;
            }
            return false;
        }

        public function validAddress($address) //simple address validation (just ensures only characters in an address are included, no check for format/real address verification)
        {
            if(preg_match("/^[a-zA-Z0-9\s,.'-]+$/", $address))
            {
                return true;
            }
            return false;
        }

        public function validReminder($reminder) //ensures value is a number and not negative, also not over 15 
        {
            if(preg_match("/^[0-9]+$/", $reminder) && $reminder <= 15 && $reminder >= 0)
            {
                return true;
            }
            return false;
        }

        public function validName($data, $fields) //checks that the name entries only have letters/hyphens since it seems unrealistic for a henry the 5th(if there is, they can enter roman numerals)
        {
            $check = true; //set to true originally as it is easier to assume a valid name by default
            foreach($fields as $value)
            {
                if(preg_match("/^[a-zA-Z-]+$/", $data[$value]))
                {
                    continue; //both values need to be checked so loop just moves onto next value
                }
                else
                {
                    $check = false; //if the first or last name is invalid, the name should be invalid
                    break;
                }
            }
            return $check;
        }
    }
?>