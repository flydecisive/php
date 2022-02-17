<?php

function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0) {
        return "https://" . substr($url, strlen("http://"));
    } else {
        return 'https://' . $url;
    }
}
