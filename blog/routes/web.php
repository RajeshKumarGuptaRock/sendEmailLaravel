<?php
Route::get('/', function () {
    $to_name = "rajesh";
    $to_email = "rkumargupta798@gmail.com";
    $data =array("name"=>"rajesh","body"=>"test mail");
    Mail::send('mail',$data,function($message) use($to_name,$to_email){
		$message->to($to_email)->subject("lara mail subject");
    });
});
