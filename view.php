<?php

function context_find($haystack, $needle, $context) {
    $haystack=' '.$haystack.' ';
    if ($i=strpos($haystack, $needle)) {
        $start=$i;
        $end=$i;
        $spaces=0;

        while ($spaces < ((int) $context/2) && $start > 0) {
            $start--;
            if (substr($haystack, $start, 1) == ' ') {
                $spaces++;
            }
        }

        while ($spaces < ($context +1) && $end < strlen($haystack)) {
            $end++;
            if (substr($haystack,$end,1) == ' ') {
                $spaces++;
            }
        }

        while ($spaces < ($context +1) && $start > 0) {
            $start--;
            if (substr($haystack, $start, 1) == ' ') {
                $spaces++;
            }
        }

        return(trim(substr($haystack, $start, ($end - $start))));
    } else {
        return false;
    }
}

?>