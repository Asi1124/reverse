<?php
    class Editor
    {
        function Reverse(string $text): string
        {
            $char = ["'", " ", "-", ".", ","];
            $arr = str_split($text);
            $a = '';
            $result = '';
            foreach ($arr as $key => $value) {
                if (in_array($value, $char)) {
                    $a = strrev($a);
                    $result = $result . $a . $value;
                    $a = '';
                } elseif ($key === array_key_last($arr)) {
                    $a = $a . $value;
                    $a = strrev($a);
                    $result = $result . $a;
                } else {
                    $a = $a . $value;
                }
            }
            $result = strtolower($result);
            foreach ($arr as $key => $value) {
                if (ctype_upper($value)) {
                    $result[$key] = strtoupper($result[$key]);
                }
            }
            return $result;
        }
    }
