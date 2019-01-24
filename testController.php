<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
libxml_use_internal_errors(true);
class testController extends Controller
{
	public function test() {
		header("Refresh: 5; url=http://hooody.ru/test");
		$this->outArr = [];
		$results = DB::select('SELECT * FROM test');
		foreach ($results as $name => $address) {
		/* dump($address->address); */
		$url = $address->address;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		if ($data = curl_exec($curl)) {
			continue;
			curl_close($curl);
			}
		}
	if ($xml = $this->isXML($data)) {
		$this->arrayOpen($xml);
	}  else {
	if ($courses = json_decode($data)) {	
	$this->arrayOpen($courses);
	}
	}
	return view('test', [
	'outarray' => $this->outArr,
	'addlist' => $results
	]);
}
	public function arrayOpen($arr) {
		$temparr = [];
		foreach((array)$arr as $name => $item) {
		if (is_array($item) || is_object($item)) {
		$this->arrayOpen($item);	
		} else {
		array_push($temparr, $item);
		}
		}
		if($temparr)array_push($this->outArr, $temparr);
	}
	public function isXML($data) {
		if (strpos($data, 'xmlns')) {
			return(new \SimpleXMLElement($data));
		} else {
			return false;
		}
	}
	public function testadd(Request $request) {
	$result = DB::insert('INSERT INTO `test` (`address`) VALUES (:adr)', [':adr' => $request->input('address')]);

	if ($result) {
		return redirect('test');
	} else {
		return "error";
	}
	}
} 
