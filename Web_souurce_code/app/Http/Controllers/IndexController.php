<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;


class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $datetime = date('Y-m-d H:i:s', strtotime($request->datetime));
        $data = DB::table('number')->where('show', $datetime);

        if($data->count() > 0)
        {
            $data = $data->first();
            $val = 
            [
                'number' => $request->number,
                'show' => $datetime,
                'updated_at' => $datetimenow
            ];

            DB::table('number')->where('id',$data->id)->update($val);
            return redirect()->back()->with('update', 'Your message has been update successfully!');
        }
        else
        {
            $val = 
            [
                'number' => $request->number,
                'show' => $request->datetime,
                'created_at' => $datetimenow,
                'updated_at' => $datetimenow
            ];

            DB::table('number')->insert($val);
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }
        return redirect()->back()->with('error', 'There was a failure while sending the message!');
    }

    public function show()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();

        return response()->json([
           
            'output' => $data
          ]);
    }
}