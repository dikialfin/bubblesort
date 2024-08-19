<?php 

    $listNumber = [6,1,4,9,2,7,3,5,8];
    $listNumberLength = count($listNumber);

    echo "Before Sorting : ";
    foreach ($listNumber as $number) {
        echo "$number,";
    }

    for ($pointer=0; $pointer < $listNumberLength; $pointer++) { 
        for ($comparator=0; $comparator < $listNumberLength - $pointer - 1; $comparator++) { 
            if ($listNumber[$comparator] < $listNumber[$comparator + 1]) {
                $temp = $listNumber[$comparator];
                $listNumber[$comparator] = $listNumber[$comparator + 1];
                $listNumber[$comparator+1] = $temp;
            }
        }
    }

    echo "\nAfter Sorting : ";
    foreach ($listNumber as $number) {
        echo "$number,";
    }
