<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Post;
use App\Category;
use App\Menu;
use App\Image;
use App\Portfolio;
use DB;


class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $data['posts'] = DB::table('Posts')->where ('status','=', 'published')
            ->where('cat_id','=', '1')
            ->join('Images', 'Posts.post_id','=','Images.post_id')
            ->select('Posts.*', 'Images.post_id', 'Images.name')
            ->latest()
            ->get();



        $data['menus'] = Menu::where('status', '=', 'published')->get();

        return view('layouts.item', $data);

    }

    public function show($id)
    {
        // $data['user'] = \Auth::user();
        $rsp = new AjaxResponse();

        $data['items'] = DB::table('posts') -> where('post_id', '=', $id)
            -> join('Categories', 'Posts.cat_id', '=', 'Categories.cat_id')
            -> join('Portfolios', 'Posts.post_id', '=', 'Portfolios.id')
            -> get();

        if($data['items'] == null) abort(404, $id." Model has not found");

        $data['html'] = \View::make('layouts.itemDetail')->with( 'items', $data['items'])->render();

        $rsp->success= 1;
        $rsp->data = $data;

        return $rsp->toArray();


    }

    public function profile()
    {
        $data['menus'] = Menu::where('status', '=', 'published')->get();
        return view('layouts.profile', $data);
    }

    public function blog()
    {
        $data['menus'] = Menu::where('status', '=', 'published')->get();
        return view('layouts.blog', $data);
    }
}