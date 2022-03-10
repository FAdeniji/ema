<?php

    $id = 1;
    $ctr = 0;
    do {
        $relatedid = mt_rand(1,8);

        if(!in_array($relatedid, $dynamicProducts)) 
        {
            $dynamicProducts[$ctr] = $relatedid;
            $ctr = $ctr + 1;
        } else {

            echo "Duplicate detected: " . $relatedid;

        }

    } while ($ctr < 4);

    echo '<pre>'; print_r($dynamicProducts); echo '</pre>';

?>