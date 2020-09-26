<?php

trait logger{
    public function log($data)
    {

    }
}

class Sample{
    use logger;
}

(new Sample())->log('majid');
