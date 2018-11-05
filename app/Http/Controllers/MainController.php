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
    	return "<h3>Error - Server not reachable, please check your connection.</h3><small style='color:red;'><em>Is this your website? Please connect to your server.</em></small>";
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
		#dd($req);
		
		$req = $request->all();
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'subject' => 'required',
                             'message' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
		 else
		 {
			$em = "kudayisitobi@gmail.com";
			$e = $req["email"]; $s = $req["subject"]; $m = $req["message"]; $n = $req["name"];
			$this->helpers->sendEmail($em,$s,['email' => $e,'name' => $n,'msg' => $m],'emails.contact','view');  
			Session::flash("contact-status","ok");
			return redirect()->intended('/');
         } 	
    }
	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1541428318394";
    	return $ret;
    }


}
