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

if (! function_exists('data_response')) {
    function data_response($data) {
        return response(['data' => $data]);
    }
}