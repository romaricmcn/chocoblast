<?php
namespace app\utils;
class utilitaire{
    function cleanInput(?string $value):?string{
        return htmlspecialchars(strip_tags(trim($value)),ENT_NOQUOTES);
    }
}

