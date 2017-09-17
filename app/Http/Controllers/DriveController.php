<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\Users;

use Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;

class DriveController extends Controller{

	public function index(Request $request){
		if($request->session()->get('logged')){
			$data = Files::orderBy('id','desc')->get();
			return view('pages.drivedisplay')->withData($data)->withError('');
		}
		else
			return view('pages.driveaccess');
	}
	
	public function verify(Request $request){
		$password = Input::get('password');
		if($password == Users::where('username','Ethan')->first()->password){
			$request->session()->put('logged', 'true');
		}
		return redirect('drive');
	}

	public function signout(Request $request){
		$request->session()->flush();
		return redirect('drive');
	}

	public function delete(Request $request, $id){
		if($request->session()->get('logged')){
			$realname = Files::find($id)->realname;
			Files::destroy($id);
			Storage::disk('public')->delete($realname);
		}
		return redirect('drive');
	}

	public function do_upload(Request $request){
		if($request->session()->get('logged')){
			if (!$request->hasFile('userfile')){
	    		$data = Files::orderBy('id','desc')->get();
				return view('pages.drivedisplay')->withData($data)->withError('You did not choose a file to upload.');
	    	}

			$file = $request->file('userfile');
			$filename = Input::get('name');

			
			if(!$file->isValid()){
				$error = $file->getErrorMessage();
				$data = Files::orderBy('id','desc')->get();
				return view('pages.drivedisplay')->withData($data)->withError($error);
			}

			$dotPosition = strrpos($filename,'.');
			$nameWithoutType = substr($filename,0,$dotPosition);
			$filetype = substr($filename,$dotPosition,strlen($filename) - $dotPosition);
			$realname = $nameWithoutType.$filetype;

			while(true){
				$exists = Storage::disk('public')->exists($realname);
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

			Storage::disk('public')->put($realname,File::get($file));

			Files::create([
				'name' => $filename,
				'realname' => $realname,
				'size' => $filesize,
				'link' => 'public/'.$realname,
				]);
		}

		return redirect('drive');
	}
}
