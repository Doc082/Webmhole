<?php
use Illuminate\Database\Eloquent\Model;

class WoleController extends \BaseController {

	
	public function index()
	{
		$search = Input::get('cerca'); 
		$cerca=$search;
		if($search == ""){
			 $search = "supercalifragilistichespiralidoso";	
		}		
		$cerca = "%".$search."%";
			
		$ctr = Indirizzi::where('categoria', 'like', $cerca)->count();
		if($ctr>0){
			$randy= rand(0, $ctr-1);
			$url="http://";
			$indirizzo = Indirizzi::where('categoria', 'like', $cerca)->get();
			
			$url .= $indirizzo[$randy]->indirizzo;;	
		}else{
			$ctr = Indirizzi::all()->count();
			$randy= rand(0, $ctr-1);
			$url="http://";
			$indirizzo = Indirizzi::all();
			$url .= $indirizzo[$randy]->indirizzo;	
		}
		
		$view = View::make('whole');
		$view->url= $url;
		$view->improbabilita = $ctr;
		$view->ricerca = $search;
		return $view;
	}
	
	public function cerca($cerca)
	{
		$search = $cerca; 
		
		if($search == ""){
			 $search = "supercalifragilistichespiralidoso";	
		}		
		$cerca = "%".$search."%";
		
		$ctr = Indirizzi::where('categoria', 'like', $cerca)->count();
		if($ctr>0){
			$randy= rand(0, $ctr-1);
			$url="http://";
			$indirizzo = Indirizzi::where('categoria', 'like', $cerca)->get();
			
			$url .= $indirizzo[$randy]->indirizzo;;	
		}else{
			$ctr = Indirizzi::all()->count();
			$randy= rand(0, $ctr-1);
			$url="http://";
			$indirizzo = Indirizzi::all();
			$url .= $indirizzo[$randy]->indirizzo;	
		}
		
		$view = View::make('whole');
		$view->url= $url;
		$view->improbabilita = $ctr;
		$view->ricerca = $search;
		return $view;
	}
	
	public function admin()
	{
		
		$password = Input::get('password');
		if($password!="mustacchione") return Redirect::to('home');
		else{
			return View::make('admin')->with('success', 'no');	
		}	
	}

	public function registra()
	{
		$url = Input::get('url');
		$categoria = Input::get('categoria');
		if(strstr($url, 'http://')){
			$url = substr($url, 7);
		}
		if(strstr($url, 'https://')){
			$url = substr($url, 8);
		}
		$conto=$indirizzo = Indirizzi::where('indirizzo', 'like', $url)->count();
		if($conto>0) {
			$indirizzo = Indirizzi::where('indirizzo', 'like', $url)->first();
			//$id=$indirizzo->id;
			//$indirizzo = Indirizzi::find($id);
		}
       	else $indirizzo = new Indirizzi;
		$indirizzo->indirizzo=$url;
		$indirizzo->categoria=$categoria;
		$indirizzo->save();
   
      
		
		return Redirect::to('adminsuccess');
	}	
	
	public function crawl()
	{
		$view = View::make('crawler');
		$view->indirizzi = Indirizzi::all();
		return $view;
	}

}