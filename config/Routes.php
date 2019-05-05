<?php

return array(
    'book/([0-9]+)/page-([0-9]+)' => 'site/books/$1/$2',
    'book/([0-9]+)/email' =>'email/em/$1',
    'book/([0-9]+)' =>'site/books/$1',
    '([0-9]+)' => 'site/index/$1',
    '' => 'site/index',
);
