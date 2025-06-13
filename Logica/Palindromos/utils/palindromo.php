<?php
function isPalindrome(string $word): bool {
    $cleaned = strtolower(preg_replace('/[^a-z0-9]/', '', $word));
    return $cleaned === strrev($cleaned);
}


?>