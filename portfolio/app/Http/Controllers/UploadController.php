<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Entry;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    //
    public function upload(UploadRequest $request)
    {
        $datum = $request->validated();
//ddd($datum);


        $image_path = $request ->file('photo')->store('public/avatar');
        $result = substr($image_path, strpos($image_path, "/") + 1);
        $datum['photo'] = $result;
        $r = Entry::create($datum);


        return redirect()->route('record')->with('success','追加に成功しました！');

    }
}


//"https://38fbb47958c0424b875ee9cb7ea5f32a.vfs.cloud9.ap-northeast-1.amazonaws.com/storage/avatar/3FJCSF0XFEF2sKaD86ueUHkW3VNyTqmJbphAZMW5.jpg"
