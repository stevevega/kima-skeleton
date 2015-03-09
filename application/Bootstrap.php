<?php
use \Kima\Prime\App;

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
        $app = App::get_instance();

        $app->set_default_language('en');
        $app->set_available_languages(['en']);
    }

}
