<?php

class Job {
    public $title;
    public $description;
    public $visible;
    public $months;

    public function setTitle($t){
        $this->title = $t;
    }

    public function getTitle() {
        return $this->title;
    }
    if ( ! function_exists('getDuration')) {
        public function getDurationAsString()
        {
        $years = floor($months / 12);
        $extraMonths = $months % 12;
        $message = "";
        if ($years > 0) {
            $message .= "$years years ";
        } 
        if ($extraMonths > 0) {
            $message .= "$extraMonths months";
        }
        return $message;
        }
      } 
}

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->description = 'This is an awesome job!!!';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->setTitle('Python Developer');
$job2->description = 'This is an awesome job!!!';
$job2->visible = true;
$job2->months = 24;

$jobs = [
    $job1,
    $job2
    /* [
      'title' => 'PHP Developer',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 16
    ],
    [
      'title' => 'Python Dev',
      'description' => 'This is an awesome job!!!',
      'visible' => false,
      'months' => 14
    ],
    [
      'title' => 'Devops',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 5
    ],
    [
      'title' => 'Node Dev',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 24
    ],
    [
      'title' => 'Frontend Dev',
      'description' => 'This is an awesome job!!!',
      'visible' => true,
      'months' => 3
    ] */
  ];

  /* if ( ! function_exists('getDuration')) {
    function getDuration($months)
    {
    $years = floor($months / 12);
    $extraMonths = $months % 12;
    $message = "";
    if ($years > 0) {
        $message .= "$years years ";
    } 
    if ($extraMonths > 0) {
        $message .= "$extraMonths months";
    }
    return $message;
    }
  } */
  
  function printJob($job) {
    if($job->visible == false){
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . getDuration($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

  /* function printJob($job) {
    if($job['visible'] == false){
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job['title'] . '</h5>';
    echo '<p>' . $job['description'] . '</p>';
    echo '<p>' . getDuration($job['months']) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  } */