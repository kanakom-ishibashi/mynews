<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        // $request->name, $request->gender などを使ってデータを取得できます
        // 受け取ったデータを処理するコードを記述する
    }

    public function store(Request $request)
    {
        // プロフィールを作成するためのロジック
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }
}