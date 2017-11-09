<?php

namespace foo {
    class HHH {
        public static function hoge ($test) {
            echo __NAMESPACE__ . " : ";
            return "\\foo\\hoge called with " . $test . ".<br />\n";
        }
    }
}

namespace bar {
    class HHH {
        public static function hoge($test) {
            echo __NAMESPACE__ . " : ";
            return "\\bar\\hoge called with " . $test . ".<br />\n";
        }
    }
}
