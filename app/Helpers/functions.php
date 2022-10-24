<?php

if (! function_exists('empty_response')) {
    function empty_response() {
        return response(['data' => new \stdClass]);
    }
}

if (! function_exists('empty_array_response')) {
    function empty_array_response() {
        return response(['data' => []]);
    }
}