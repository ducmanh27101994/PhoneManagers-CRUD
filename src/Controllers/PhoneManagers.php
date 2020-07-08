<?php

namespace App\Controllers;

include_once 'Phones.php';

class PhoneManagers
{

    private $dataPhoneJson;

    public function __construct($dataPhoneJson)
    {
        $this->dataPhoneJson = $dataPhoneJson;
    }

    function readFileJson()
    {
        $dataJson = file_get_contents($this->dataPhoneJson);
        return json_decode($dataJson, true);
    }

    function saveFileJson($array)
    {
        $dataJson = json_encode($array);
        file_put_contents($this->dataPhoneJson, $dataJson);
    }

    function addPhone($phones)
    {
        $data = $this->readFileJson();
        $arr = [
            "Id" => $phones->getId(),
            "Phone" => $phones->getPhone(),
            "Price" => $phones->getPrice(),
            "Color" => $phones->getColor(),
            "Image" => $phones->getImage(),
            "Status" => $phones->getStatus(),
        ];
        array_push($data, $arr);

        $this->saveFileJson($data);
    }

    function displayPhone()
    {
        $data = $this->readFileJson();
        $arr = array();

        foreach ($data as $key => $value) {
            $phones = new Phones(++$key, $value['Phone'], $value['Price'], $value['Color'], $value['Image'], $value['Status']);
            array_push($arr, $phones);
        }
        return $arr;
    }

    function delete($id)
    {
        $data = $this->readFileJson();
        array_splice($data, $id, 1);
        $this->saveFileJson($data);
    }

    function update($id, $phones)
    {
        $data = $this->readFileJson();
        $arr = [
            "Id" => $phones->getId(),
            "Phone" => $phones->getPhone(),
            "Price" => $phones->getPrice(),
            "Color" => $phones->getColor(),
            "Image" => $phones->getImage(),
            "Status" => $phones->getStatus(),
        ];
        $data[$id] = $arr;
        $this->saveFileJson($data);
    }

}