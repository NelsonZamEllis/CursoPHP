<?php

namespace App\Models;

require_once 'Printable.php';

class BaseElement  implements Printable {
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description){
      $this->setTitle($title);
      $this->description = $description;
    }

    public function setTitle($t){
        if($t == '') {
          $this->title = 'N/A';
        } else {
        $this->title = $t;
        }
    }

    public function getTitle() {
        return $this->title;
    }

        public function getDurationAsString()
        {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        $message = "";
        if ($years > 0) {
            $message .= "$years years ";
        } 
        if ($extraMonths > 0) {
            $message .= "$extraMonths months";
        }
        return $message;
        }

        public function getDescription(){
          return $this->description;
      }
      } 