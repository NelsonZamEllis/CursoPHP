<?php

namespace App\Models;

class Job extends BaseElement {
    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
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
    return "Job duration: $message";
    }
}