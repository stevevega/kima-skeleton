<?php
use \Kima\Controller;
use \Example\Year;

/**
 * Index
 */
class Index extends Controller
{

    /**
     * Index get test
     */
    public function get($params)
    {
        // set title view param as global
        // then render the title view
        $this->view->set('title', 'Welcome to Kima!');
        $this->view->render('title');

        // set the year from the example library
        // here we specify the view context of the param: footer
        $year = new Year();
        $this->view->set('year', $year->get_year(), 'footer');
        $this->view->show('footer');

        // display content
        // layout main view is rendered by default
        $this->view->render('content');
    }

}
