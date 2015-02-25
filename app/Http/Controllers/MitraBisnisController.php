<?php namespace App\Http\Controllers;

class MitraBisnisController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'home';


   


    public function showMitraBisnis()
    {
      $content = view('mitra-bisnis');

        return $this->setPageContent($content);
    }




}