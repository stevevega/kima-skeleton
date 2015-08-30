<?php
use Kima\Prime\App;

/**
 * Application Bootstrap
 */
class Bootstrap
{

    /**
     * Test bootstrap method
     */
    public function set_language()
    {
        // custom language app setup
        $app = App::get_instance()->set_language('en');
    }

}
