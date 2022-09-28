<?php

namespace App\Http\Controllers;

use App\Models\Ar_ayat;
use Response;
use App\Models\Juz;
use App\Models\Surah;
use App\Models\Page;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request){
            if($request->category == "Surah")
                $data = Surah::where( __('name') , 'LIKE','%'. $request->search .'%')->paginate(5);
            elseif($request->category == "Juz")
                $data = Juz::where('id' , 'LIKE','%'. $request->search .'%')->paginate(5);
            else
                $data = Page::where( 'id' , 'LIKE', '%'. $request->search .'%' )->paginate(5);

            $output = '';

            if (count($data)>0) {

                $output = '<ul class="list-group " style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row){
                    if($request->category == "Surah"){
                        $part1 = "onclick=\"location.href='/$row->id'\"";
                        $part2 ="style=\"cursor: pointer;\"";
                        $output .= '<li class="list-group-item"'. $part1 . $part2 .">". $row[__('name')] .'</li>';
                    }
                    elseif($request->category == "Juz"){
                        $part1 = "onclick=\"location.href='/juz/$row->id'\"";
                        $part2 ="style=\"cursor: pointer;\"";
                        $output .= '<li class="list-group-item"'. $part1 . $part2 .">". $row[__('En')] .'</li>';
                    }
                    else{
                        $part1 = "onclick=\"location.href='/page/$row->id'\"";
                        $part2 ="style=\"cursor: pointer;\"";
                        $output .= '<li class="list-group-item"'. $part1 . $part2 .">". $row['id'] .'</li>';
                    }

                }

                $output .= '</ul>';
            }
            else {

                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }

            return $output;

    }


}
