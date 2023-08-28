<?php

namespace Nigromante\Framework;


final class Dump  extends DumpCore {

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }


    public function dump($data, $title = "")
    {
        $this->setGroup();
        $this->set($data, $title);
    }

    public function dump_group($group, $description = "")
    {
        $this->setGroup($group, $description);
    }


    public function dumpsection($data, $title = "")
    {
        $this->set($data, $title);
    }


    public function getDump()
    {
        return $this->getAll();
    }
}