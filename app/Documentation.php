<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Documentation extends Model
{
    public function get($file) {

        // 실제 리턴되는 파일 컨텐츠
        // $realfile = "";

        // File::get("docs/artisan.md"); // 어떤 파일을 불러올지 몰라~~ 그럼 기본으로 잡는게 ::get()



//        $realFile = File::get($this->path($file));
//        return $realFile;




        // 기니까
        return File::get($this->path($file));
    }


// @desc 1. 요청된 파일명에 파일을 로드
//          2. 파일을 리턴
//      @param $file
    public function path($file) {
        //되돌려줄 파일 패스
        // $path = "";
        $path = base_path('docs'.DIRECTORY_SEPARATOR.$file);

        // base_path : php 명령어
        // DIRECTORY_SEPARATOR 이거는 윈도우 때문에 쓴거
        // 맥은 $path = base_path('docs\'.$file); 만 써도된다

        // 여기서 $file 은 사용자가 올리는 이름이기 떄문에 있는지 없는지 확인을 먼저 해야한다

//        if( File::exists($path)){
//            return $path;
//        } else{
//            abort(404, "There is no file."); // exeption 에서 오류 보내는 것..
//        }

        // 이렇게 쓰면 길어 그리고 리턴은 항상 마지막에 와야하니까

        if( ! File::exists($path)){
            abort(404, "There is no file.");
        }
        return $path;

    }
}
