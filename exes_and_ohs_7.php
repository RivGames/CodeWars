<?php
function XO($s): bool
{
    $s = strtolower($s);
    return substr_count($s, 'x') == substr_count($s, 'o');
}

echo(XO('xxxooo'));
