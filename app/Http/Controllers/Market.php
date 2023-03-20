<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class Market extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function __invoke(Request $request){
        $keyword = $request -> input('keyword');
        $items = Item::where('name', 'like', '%' . $keyword . '%') ->orderBy('updated_at' , 'desc')->get();
        return view('market', [
            'title' => 'ゴールデンレトリーバー専門店-Golden retriever-',
            'subtitle' => '人生のパートナーに寄り添う商品をご提供いたします',
            'items' => $items,
        ]);
    }
}
