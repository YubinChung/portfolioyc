<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Menu;

class DocsController extends Controller
{
    protected $docs; // 프로텍티드 사용 시 이

    // 생성자.. 자바의 인터페이스  = php 에서 프리츠
    // 여기 컨트롤러의 것들은 모델에 들어와야지만 작동하도록 할거다 라고 써놓은거
    public function __construct(\App\Documentation $docs){
        $this->docs = $docs;
    }

    public function show($file = null){
//        $index = \Cache::remember('docs.index', 120, function(){
//           return markdown( $this->docs->get() );
//        }); 잠깐 무시~~~
        $data['menus'] = Menu::where('status', '=', 'published')->get();
        $content = \Cache::remember('docs.{$file}', 120, function() use($file){
            return markdown($this->docs->get($file ?: 'installation.md'));


        });
        return view('layouts.profile', compact('index', 'content'), $data);
    }
}
