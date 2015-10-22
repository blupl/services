<?php namespace Blupl\Services\Http\Controllers;

use Orchestra\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Get landing page.
     *
     * @return mixed
     */
    public function index()
    {
        return 'services';
    }
}