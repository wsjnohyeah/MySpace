<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;


class PostController extends Controller{

	public function test(){
		echo route('/');
	}
	
	public function index(Request $request){
		$data['logged'] = $request->session()->get('logged');
		$data['post'] = Posts::orderBy('id','desc')->get();
		return view('pages.welcome')->with($data);
	}
	
	public function getPost(Request $request, $id){
		$post = Posts::find($id);
		return view('pages.post')->withPost($post)
								 ->withLogged($request->session()->get('logged'));;
	}

	public function savePost(Request $request){
		if($request->session()->get('logged')){
			date_default_timezone_set("Etc/GMT-8");
			$title = Input::get('title');
			$content = Input::get('content');
			Posts::create([
				'title' => $title,
				'content' => $content
			]);
		}
		return redirect('/');
	}

	public function editPost(Request $request){
		if($request->session()->get('logged')){
			date_default_timezone_set("Etc/GMT-8");
			$id = Input::get('id');
			$title = Input::get('title');
			$content = Input::get('content');
			
			Posts::where('id',$id)->update([
				'title' => $title,
				'content' => $content
			]);
		}
		return redirect('post/'.$id);
	}

	public function deletePost(Request $request,$id){
		if($request->session()->get('logged')){
			Posts::find($id)->delete();
		}
		return redirect('/');
	}

}
