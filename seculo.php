<?php

function seculo ($ano) {
    
    return "século" . " " . strftime("%C",strtotime('01/01/' . $ano));
}        
        
echo seculo(2491);