<?php

if (! function_exists('empty_response')) {
    function empty_response() {
        return response(['data' => new \stdClass]);
    }
}
