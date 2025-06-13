<?php
function filtrar(array $arr) : array {
    return array_filter($arr, fn($n) => $n > 0);
}
function mayores(array $arr): array  {
    rsort($arr);
    return [$arr[0] ?? 0, $arr[1] ?? 0];
}

function sumaDeMayores(array $arr): int{
    [$a , $b] = mayores(filtrar($arr));
    return $a + $b;
}