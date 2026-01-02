<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 回傳所有使用者列表
     */
    public function index()
    {
        // 讀取 mysql 中的 users 資料表
        $users = User::all();

        return response()->json([
            'success' => true,
            'data' => $users
        ]);
    }
}
