<?php

namespace App\Helpers;


class Posts extends GuzzleHttpRequests {


    public function all() {
        
        return $this->get('posts');  
    
    }

    public function find($id) {

        return $this->get("posts/{$id}");
    }
    
}