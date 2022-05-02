<?php
class FiltersHelper {
          
    public function filter_post_money($t) {
        $price = filter_input(INPUT_POST, $t);
        $price = str_replace('.','',$price);
        $price = str_replace(',','.',$price);
        $price = filter_var($price, FILTER_VALIDATE_FLOAT);

        return $price; 
    }
           
}

?>
            