<?php

namespace Frontend;

class BaseClass {

    public $screen_title = "";
    public $num_of_rows_per_page = 0;

    function __construct($screen_title) {
        
        $this->screen_title = $screen_title;
        
    }

}
