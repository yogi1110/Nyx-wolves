<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mMdels\Page

class Pagecontroller extends Controller
{
public function AddPage(Request $request){
	$Page = Page::where('page_title','home')->get();
	$numrow =count($page)
	if($numrow>0)
	{
		return view('amin.home.addpage',['Page' => $Page]);
	}
	else
	{
		$Page = new Page();
		return view('amin.home.addpage',['Page' => $Page]);
	}

}    //
}
