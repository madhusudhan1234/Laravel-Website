<?php
/**
 * @param $p
 */
function body_formatted($p)
{
    $p['body_nohtml'] = strip_tags($p['body']);

    if ($p['body'] == $p['body_nohtml']) {
        $p['body_formatted'] = '<p>' . $p['body'] . '<p>';
    }else
    {
        $p['body_formatted'] = $p['body'];
    }
}

/**
 * @param $url
 * @return string
 */
function get_slug($url)
{
    $pos = strrpos($url,'/');
    $slug = substr($url,$pos+1);
    return $slug;
}

/**
 * @param $arg
 */
function dropdown($arg)
{
    if(count($arg)>0)
    {
        echo 'dropdown';
    }
}

/**
 * @param $arg
 */
function dropdown_menu($arg)
{
    if(count($arg)>0)
    {
        echo 'dropdown-menu';
    }
}

function dropdown_toggle($arg)
{
    if(count($arg)>0)
    {
        echo 'dropdown-toggle';
    }
}

function data_toggle($arg)
{
    if(count($arg)>0)
    {
        echo 'dropdown';
    }
}

/**
 * @param $pageid
 * @param $navigation_url
 */
function get_active($slug , $navigation_url)
{
    if($slug == get_slug($navigation_url) )
    {
     echo 'active';
    }
}

