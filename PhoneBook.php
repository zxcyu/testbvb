<?php
class PhoneBook {
    private $contacts = [];

    public function __construct() {
        if (file_exists('contacts.json')) {
            $this->contacts = json_decode(file_get_contents('contacts.json'), true);
        }
    }

    public function getContacts() {
        return $this->contacts;
    }

    public function addContact($name, $phone) {
        if (!is_string($name) || !is_numeric($phone)) {
            return false;
        }

        $id = uniqid();
        $this->contacts[$id] = ['name' => $name, 'phone' => $phone];
        $this->saveToFile();

        return true;
    }

    public function deleteContact($id) {
        if (isset($this->contacts[$id])) {
            unset($this->contacts[$id]);
            $this->saveToFile();
            return true;
        }
        return false;
    }

    private function saveToFile() {
        file_put_contents('contacts.json', json_encode($this->contacts));
    }
}
?>