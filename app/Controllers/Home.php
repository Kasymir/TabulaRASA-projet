<?php
/**
 * Home controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Home extends Controller
{
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Home');
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcomeText');
        $data['welcomeMessage'] = $this->language->get('welcomeMessage');

        View::renderTemplate('header', $data);
        View::render('Home/Home', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Define Subpage page title and load template files
     */
    public function subPage()
    {
        $data['title'] = $this->language->get('subpageText');
        $data['welcomeMessage'] = $this->language->get('subpageMessage');

        View::renderTemplate('header', $data);
        View::render('Home/SubPage', $data);
        View::renderTemplate('footer', $data);
    }
}
