<?php

namespace Poo\Html;

class Attribute extends \ArrayObject {

    private $attributes = [];

    public function __construct($input = [])
    {
        foreach($input as $v) {
            if(is_array($v)) {
                $this->setMany($v);
            }else{
                $this->append($v);
            }
        }
    }

    protected function setMany( Array $attributes) 
    {
        foreach($attributes as $v) {
            $this->offsetSet($k, $v);
        }
        return $this;
    }

    protected function getAttributes()
    {
        $attr = [];
        foreach($this->getArrayCopy() as $k => $v) {
            if(ins_int($k)) {
                $attr[] = $v;
            }else {
                $attr[] = "{$k}=\"{$v}\"";
            }
        }
        return " " . implode(" ", $attr);
    }

    public function __toString()
    {
        if(strlen($this->getAttributes()) > 1) {
            return $this->getAttributes();
        }
        return ' ';
    }

}

