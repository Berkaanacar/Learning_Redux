<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Use_;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json();
    }

    public function detail($id)
    {
        $user = User::where('id',$id)->get();
        return response()->json($user);
    }
    public function list(Request $request, $rowCount =0, $page =0 , $orderBy = 0, $search="")
    {
        $method = $request->method();
        if($method == 'POST'){
        $rowCount=$request->rowCount;
        $page=$request->page;
        $orderBy=$request->orderBy;
        $search=$request->search;
        }
        $count = User::get('id')->  count();
        return response()->json(User::where('name','LİKE','%'.$search.'%')
        ->orderBy('name', $orderBy == 0  ? 'asc' : 'desc')
        ->offset($page == 0 ? 0 : ($page - 1)*$rowCount)
        ->take($rowCount == 0 ? $count : $rowCount)
        ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $isUser= User::where('email', $request->email)->get()->count();
            if(!$isUser){
            return response()->json(DB::table('users')->insertGetId([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password
            ]));
        }
            return response()->json(0);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=0)
    {
            $isUser=User::where('email', $request->email)->get()->count();
            if(!$isUser){
            return response()->json(DB::table('users')->where('id' , $id ?: $request->id)->update([
            'name'=>$request->name,
            'password'=>$request->password
        ]));
    }
    return response()->json(0);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         DB::table('users')->where('id',$id)->delete();
        return response()->json($id);
    }

}
