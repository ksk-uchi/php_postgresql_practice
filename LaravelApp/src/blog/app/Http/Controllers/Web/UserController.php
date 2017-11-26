<?php

namespace App\Http\Controllers\Web;

use Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get_user()
    {
        $actor_10 = DB::table('actor')->where('actor_id', 10)->first();
        return $actor_10->first_name;
    }
}
