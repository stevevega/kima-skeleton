<?php
namespace Controller;

use Kima\Prime\Controller;
use Kima\Http\StatusCode;

/**
 * Error handler controller
 */
class Error extends Controller
{

    /**
     * Error handler get method
     * You can customize this as you like
     */
    public function get()
    {
        $status_code = http_response_code();
        $status_message = StatusCode::get_message($status_code);
        echo 'Error ' . $status_code . ': ' . $status_message;
    }

}
