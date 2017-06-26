<?php

$start = microtime(true);

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
