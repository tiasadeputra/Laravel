<?php namespace App\Http\Controllers;

class DashboardController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'home';


   


    public function showDashboard()
    {
      $content = view('Dashboard');

        return $this->setPageContent($content);
    }




}