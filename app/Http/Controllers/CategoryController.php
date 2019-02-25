<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $categoryData = Category::where('user_id',$user->id)
                                ->orderBy('id','desc')
                                ->paginate(10);
        
        return view('users.category.index', compact('categoryData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $categoryStore = new Category();

        $categoryStore->user_id = $request->user_id;
        $categoryStore->category_name = $request->category_name;
        $categoryStore->public_status = $request->public_status;

        $categoryStore->save();

        return Redirect()->route('category.index')->with('message','Category insert successfully');
       
    }

    // Category Model Store
    public function modalStore(Request $request)
    {
        //dd($request);
        $categoryModalStore = new Category();

        $categoryModalStore->user_id = $request->user_id;
        $categoryModalStore->category_name = $request->category_name;
        $categoryModalStore->public_status = $request->public_status;

        $categoryModalStore->save();
        
        return Redirect()->route('task.create');
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
        $catEdit = Category::findOrFail($id);

        return view('users.category.edit',compact('catEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catUpdate= Category::find($id);
        
        $catUpdate->category_name = $request->category_name;
        $catUpdate->public_status = $request->public_status;

        $catUpdate->save();

        return redirect()->route('category.index')->with('message','Category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Category::find($id);
        
        $del->delete();

        return redirect()->route('category.index')->with('message','Delete successfully.');
    }
}
