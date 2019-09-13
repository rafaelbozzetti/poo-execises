<?php
namespace Poo\Html;


class Html {
    
    public function a($text = null, $href, array $attribute = null ) 
    {
        $attribute = $this->attribute($attribute);

        return "<a href=\"{$href}\" {$attribute}> {$text} </a>";
    }

    public function img($src, array $attribute) 
    {
        $attribute = $this->attribute($attribute);

        return "<img src=\"{$src}\" />";
    }

    private function attribute($attribute) {
        if($attribute != null) {
            foreach($attribute as $k => $v) {
                $data[] = $k .'="'. $v .'"';
            }
            $attribute = implode(" ", $data);
        }
        return $attribute;
    }

}