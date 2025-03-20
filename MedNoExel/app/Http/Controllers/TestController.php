<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\UserLogsModel;

class TestController extends Controller
{
    public function index() {

        $DBResults = DB::select('select * from users where id = :id', ['id' => 1]);

        // $userID = Auth::id();
        $user = Auth::user();
        return response()->json([
            'message' => 'Invalid credentials',
            'user' => $user,
            "dbresult" => $DBResults,
        ], 401);
    }

    public function createLog() {

        $newLog = new UserLogsModel;
 
        $newLog->user_id = Auth::id();
        $newLog->action = "test_action";
        $newLog->value = '{[{"testfield": "testValue1"}]}';
        $newLog->from_id = 5;
        $newLog->timestamp = now();
        $newLog->save();
    


        $allLogs = UserLogsModel::all();

        return response()->json([
            'message' => 'createLog result',
            "logs" => $allLogs,
        ], 401);
    }
}
