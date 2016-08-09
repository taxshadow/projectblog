<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfilController extends Controller {
	
	public function index(){

		$data['nama'] = "Fernanda";
		$data['umur'] = 20;

		return view('profil')->with('data', $data);
	}

	public function materi(){

		$datas = ['html', 'css', 'js'];

		return view('materi')->with('datas', $datas);
	}

}