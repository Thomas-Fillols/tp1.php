<?php

function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head></title><hr/><br/><strong>' . PHP_EOL . $title . '</strong><br/><hr/></head><body>' . PHP_EOL
    ;
};

function end_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><footer><hr/><br/><strong>' . PHP_EOL . $title . '</strong><br/><hr/></footer><body>' . PHP_EOL
    ;
};
