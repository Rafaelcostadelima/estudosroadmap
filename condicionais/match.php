<?php
$statusCode = 'Ola';
$message = match ($statusCode) {
    'Ola' => 'Olá!!!',
    default => 'unknown status code',
};

echo $message . "<br><a href='https://roadmap.sh/php' target='_blank'>Veja aqui um exemplo (terá que acessar pelos condicionais e procure pelo match)</a>";
