<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
        $ret = null;
    	return view('index');
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getMaskIndex()
    {
        $ret = null;
    	return "<h3>Server not reachable, please checkup ur connection</h3><small>if you are the webmaster, please connect to your server hostname</small>";
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getGallery()
    {
        $ret = null;
    	return view('gallery');
    }	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getContact()
    {
        $ret = null;
    	return view('contact');
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postContact(Request $request)
    {
        $req = $request->all();
		dd($req);
    	return redirect()->intended('/');
    }
	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1535561942737";
    	return $ret;
    }


}
