<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    
    {
        
        // Validationを行う
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
         // データベースに保存する
        $profile->fill($form);
        $profile->save();

        return redirect('admin/profile/create');
        
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
    
    public function update(Request $request)
    {
        // フォームの送信されたデータを取得して処理するロジックを記述する
    }
}