<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Str;


class InputController2 extends BaseController
{
    public function __construct(Request $request){
        $data = $request->input('somedata');
        $arr = explode(",", $data);
        $list = array();
        foreach ($arr as $line) {
            array_push($list, $this->hello($line));
        }

        $jsonlist = json_encode($list, JSON_PRETTY_PRINT);
        return View::make('handler')->with(array('list'=>$jsonlist));
//        return view('handler')->with('data', $jsonlist);
    }

    public function hello($line)
    {
        $result = array();
        //This is a line of the array i.e. all the key value:pairs connected in a string of that index
        $info = explode(";", $line);
        foreach ($info as $lin){
            array_push($result, explode(":", $lin));
        }
        return $result;
//        print_r(array_chunk($result, 6));
    }
}
