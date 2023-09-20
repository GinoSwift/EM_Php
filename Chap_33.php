<?php

function add($nums)
{
    if (!is_array($nums)) {
        throw new Exception("Argument must be array");
    }
}

try {
    echo add(1, "2");
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Done";
}
