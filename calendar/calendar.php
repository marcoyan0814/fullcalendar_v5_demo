<?php
/*
POST 變數
array(3) { 
    ["dtype"]=> string(13) "getLessonList" 
    ["ipc"]=> string(5) "ipc-01"
    ["start"]=> string(10) "2020-12-28" 
    ["end"]=> string(10) "2021-01-04" 
} 

回傳參數
array(
    "id"=> id
    "title"=> 說明
    "start"=> 開始時間 格式 2020-12-29T09:30:00
    "end"=> 到期時間 格式 2020-12-29T09:30:00
    "url"=> 網址(可空)
    "textColor"=>   文字顏色
    "color"=>  背景顏色
    "allDay"=> true / false 是否為全日行程
)
*/


$resArr = array(
    array("id"=>"1","title"=>"教務處節目","color"=>"#fff","start"=>"2020-12-29T09:30:00","end"=>"2020-12-29T10:30:00","color"=>"#ff0000","allDay"=>false),
    array("id"=>"2","title"=>"消防安全","color"=>"#fff","start"=>"2021-01-01T09:30:00","end"=>"2021-01-01T10:30:00","color"=>"#ff0000","allDay"=>false),
    array("id"=>"3","title"=>"用電安全","color"=>"#fff","start"=>"2020-12-31T17:00:00","end"=>"2020-12-31T17:30:00","color"=>"#ccc","allDay"=>false),
    array("id"=>"4","title"=>"安全宣導","color"=>"#fff","start"=>"2020-12-28T07:00:00","end"=>"2020-12-28T08:00:00","color"=>"#ffff00","allDay"=>false),
    array("id"=>"5","title"=>"安全宣導","color"=>"#fff","start"=>"2020-12-29T07:00:00","end"=>"2020-12-29T08:00:00","color"=>"#ffff00","allDay"=>false),
    array("id"=>"6","title"=>"安全宣導","color"=>"#fff","start"=>"2020-12-30T07:00:00","end"=>"2020-12-30T08:00:00","color"=>"#ffff00","allDay"=>false),
    array("id"=>"7","title"=>"安全宣導","color"=>"#fff","start"=>"2020-12-31T07:00:00","end"=>"2020-12-31T08:00:00","color"=>"#ffff00","allDay"=>false),
    array("id"=>"7","title"=>"安全宣導","color"=>"#fff","start"=>"2021-01-01T07:00:00","end"=>"2021-01-01T08:00:00","color"=>"#ffff00","allDay"=>false),
    array("id"=>"8","title"=>"教務處節目","color"=>"#fff","start"=>"2020-12-28","end"=>"2020-12-30","allDay"=>true),
    array("id"=>"9","title"=>"學務處節目","color"=>"#fff000","start"=>"2020-12-28","end"=>"2021-01-01","url"=>"https://www.google.com","textColor"=>"#000","allDay"=>true)
);
echo json_encode($resArr);

?>