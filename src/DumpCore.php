<?php
namespace Nigromante\Framework;


abstract class DumpCore
{
    protected static $instance;
    private $values;
    private $current_group;

    protected function __construct()
    {
        $this->current_group = "default";
        $this->values = [];
    }



    public function setGroup($group = "default", $description = "")
    {
        $this->current_group = $group;
        if (!isset($this->values[$group])) {
            $this->values[$group] = ["description" => $description, "data" => []];
        }
    }


    public function set($data, $title = '')
    {
        $this->values[$this->current_group]["data"][$title] =  $data;
    }

    public function get($group = "default")
    {
        return $this->values[$group];
    }

    public function getData($group = "default")
    {
        return $this->values[$group]["data"];
    }

    public function getAll()
    {
        return $this->values;
    }
}
