<?php
function deconsturctURLFragment($fragment)
{
    $parts = explode('=', $fragment);
    if (count($parts) == 2 && $parts[0] == 'id') {
        return ($parts[1]);
    } else {
        return null;
    }
}

?>