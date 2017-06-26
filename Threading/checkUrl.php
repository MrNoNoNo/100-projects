<?php

/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 26-Jun-17
 * Time: 11:14 PM
 */
$start = microtime(true);
//function is_url()
//{
//    $response = [];
//    $url = $_GET['url'];
//    if (!empty($url)) {
//        $response = get_headers($url);
//    }
//    return $response;
//}

class Url
{
    protected $response = [];

    function check_url($url)
    {
            if (!empty($url)) {
                $response = get_headers($url, 1);
                array_push($this->response, $response);
            }
        print_r($this->response);
    }
}

echo "<pre>";

$list = ['http://www.facebook.com', 'http://google.com', 'http://www.google.com/dsa'];
$first = new Url();

foreach($list as $result) {
    $first->check_url($result);
    print "\n";
}

$total = microtime(true) - $start;
echo "Time elapsed : " . $total . " secs.";