<?php

namespace App\Http\Controllers;

use App\Models\Images;

use Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;

class ImageController extends Controller{

	public function index(Request $request){
		if($request->session()->get('logged')){
			$data = Images::orderBy('id','desc')->get();
			return view('pages.images')->withData($data)->withError('');
		}
		else
			return redirect('/');
	}
	
	

	public function delete(Request $request, $id){
		if($request->session()->get('logged')){
			$realname = Images::find($id)->realname;
			Images::destroy($id);
			Storage::disk('image')->delete($realname);
		}
		return redirect('post_images');
	}

	public function do_upload(Request $request){
		if($request->session()->get('logged')){
			if (!$request->hasFile('userfile')){
	    		$data = Images::orderBy('id','desc')->get();
				return view('pages.images')->withData($data)->withError('You did not choose a file to upload.');
	    	}

			$file = $request->file('userfile');
			$filename = Input::get('name');

			
			if(!$file->isValid()){
				$error = $file->getErrorMessage();
				$data = Images::orderBy('id','desc')->get();
				return view('pages.images')->withData($data)->withError($error);
			}

			$dotPosition = strrpos($filename,'.');
			$nameWithoutType = substr($filename,0,$dotPosition);
			$filetype = substr($filename,$dotPosition,strlen($filename) - $dotPosition);
			$realname = $nameWithoutType.$filetype;

			while(true){
				$exists = Storage::disk('image')->exists($realname);
				if(!$exists)
					break;
				$nameWithoutType = $nameWithoutType.'1';
				$realname = $nameWithoutType.$filetype;
			}

			$filesize = $file->getClientSize();
			if ($filesize >= 1000000)
				$filesize = (round($filesize/1000000,1)).'M';
			else if($filesize >= 1000)
				$filesize = (round($filesize/1000,0)).'K';
			else
				$filesize = $filesize.'B';

			date_default_timezone_set("Etc/GMT-8");

			Storage::disk('image')->put($realname,File::get($file));

			Images::create([
				'name' => $filename,
				'realname' => $realname,
				'size' => $filesize,
				'link' => 'postimage/'.$realname,
				]);
		}

		return redirect('post_images');
	}
}
