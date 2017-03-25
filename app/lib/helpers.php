<?php


// 모듈안에 펑션들 들어가있는거임



// 전역함수에서 같은 이름의 함수가있는지 먼저 확인 , 없으면 써라 있으면 안씀 . 같은 이름이면 오류가 나니까
// if로 만약 안싸놨다면 오버 라이딩이 된다 .
if( !function_exists('markdown')){
    function markdown($path=null){
        return app(ParsedownExtra::class)->text($path);
    }
}

