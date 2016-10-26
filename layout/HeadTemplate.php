<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author 845853366
 */
class HeadTemplate {

    private $title;
    private $description;
    
    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}
