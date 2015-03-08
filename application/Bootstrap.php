<?php
use \Kima\Application;

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
        $app = Application::get_instance();

        $app->set_default_language('en');
        $app->set_available_languages(['en']);
    }

}
