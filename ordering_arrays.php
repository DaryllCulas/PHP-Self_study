<?php
    /*
    An array can be sorted in different ways, so there are a lot of chances that the order that you need is different from the
     current one. By default, the array is sorted by the other in which the elements were added to it, but you can sort an 
     array by its key or by its value, both ascending and descending. Furthermore, when sorting an array by its values, you can
     choose to preserve their keys or to generate new ones as list.
    

     sort - | sorts by >> value | Maintains key association >> NO | Order of sort >> Low to high | 
    rsort - | sorts by >> value | Maintains key association >> NO | Order of sort >> High to Low |
    asort - | sorts by >> value | Maintains key association >> YES| Order of sort >> Low to High |
   arsort - | sorts by >> value | Maintains key association >> YES| Order of sort >> High to Low |
   ksort -  | sorts by >> key   | Maintains key association >> YES| Order of sort >> Low to High |
   krsort - | sorts by >> key   | Maintains key association >> YES| Order of sort >> High to Low |
    
    */
    $properties = [
        'firstname' => 'Tom',
        'surname' => 'Riddle', 
        'house' => 'slytherin'
    ]; 
    $properties1 = $properties2 = $properties3 = $properties;
 
    
    sort($properties1); #Low to high value - orders the values alphabetically. Also, if you check the keys, now they are numeric as in a list
    print_r($properties1);
        echo "<br>";
        

    asort($properties3); # Low to High value && it maintains key association (true) - orders the values in the same way, but keeps the association of key-values
    print_r($properties3);
        echo "<br>";

    ksort($properties2); # Low to high key && it maintains key association (true) - orders the elements by their keys, alphabetically 
    print_r($properties2);
        
    /*
        NOTE:  
            a - in the name means associative, and thus will preserve the key-value association
            r - in the name means reverse, so the order will be high to low
            k - means key, so the sorting will be based on the keys instead of the values. 
    
    
    
    
    */

?>
