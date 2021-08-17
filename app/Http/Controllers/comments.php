<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments_of_site;

class comments extends Controller
{
    public function index(){
        $all_comments = comments_of_site::orderBy('created_at', 'desc')->get();
        foreach ($all_comments as $el){
            $datetime = new \DateTime($el->date.' '.$el->time);
            $el->time = $datetime->format('H:i');
            $el->date = $datetime->format('d.m.Y');
        }
        return view('comments', compact('all_comments'));
    }

    public function add(Request $data){
        if(!empty($data->name && $data->text)){
            if(mb_strlen($data->name) >= 2 and mb_strlen($data->name) <= 10 and mb_strlen($data->text) >= 10 and mb_strlen($data->text) <= 191) {
                $nowdate = new \DateTime();
                $row = new comments_of_site;
                $row->name = $data->name;
                $row->text = $data->text;
                $row->date = $nowdate->format('Y-m-d');
                $row->time = $nowdate->format('H:i');
                $row->save();
                return redirect('/');
            }
        }
        return redirect('/comments/error');
    }
}
