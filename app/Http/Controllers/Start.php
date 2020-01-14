<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Start extends Controller
{
    public function startarr(){
        $datas = [
            [
                'class' => 'cd',
                'img'=>'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'title'=>'Jersey',
                'artist'=>'Bon Jovi',
                'year'=>'1988',
            ],
            [
                'class' => 'cd',
                'img'=>'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                'title'=>'Live at Wembley 86',
                'artist'=>'Queen',
                'year'=>'1992',
            ],
            [
                'class' => 'cd',
                'img'=>'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
                'title'=>'Ten\'s Summoner\'s Tales',
                'artist'=>'Sting',
                'year'=>'1993',
            ],
            [
                'class' => 'cd',
                'img'=>'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
                'title'=>'Steve Gadd band',
                'artist'=>'Steve Gadd Band',
                'year'=>'2018',
            ],
            [
                'class' => 'cd',
                'img'=>'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg',
                'title'=>'Brave new World',
                'artist'=>'Iron Maiden',
                'year'=>'2000',
            ],
            [
                'class' => 'cd',
                'img'=>'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
                'title'=>'One more car, one more rider',
                'artist'=>'Eric Clapton',
                'year'=>'2002',
            ],
        ]; 
        return view('cds', compact('datas'));
    }
}
