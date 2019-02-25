<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        // Pending Task
        $taskPendingData = Tasks::where('user_id',$user->id)
                            ->where('public_status','1')
                            ->orderBy('working_date','asc')
                            ->with('category')
                            ->paginate(10);

        // Progress Task
        $taskProgressData = Tasks::where('user_id',$user->id)
                            ->where('public_status','2')
                            ->orderBy('working_date','asc')
                            ->with('category')
                            ->paginate(10);  

        // Complete Task                   
        $taskCompleteData = Tasks::where('user_id',$user->id)
                            ->where('public_status','0')
                            ->orderBy('working_date','asc')
                            ->with('category')
                            ->paginate(10);    

        return view('users.task.index',compact('taskPendingData','taskProgressData','taskCompleteData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $categoryList = Category::all()
                        ->where('user_id',$user->id) 
                        ->where('public_status','1');
        
        return view('users.task.add',compact('categoryList'));                   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $taskStore = new Tasks();

        $taskStore->user_id = $request->user_id;
        $taskStore->category_id = $request->category_id;
        $taskStore->name = $request->name;
        $taskStore->description = $request->description;
        $taskStore->working_date = $request->working_date;
        $taskStore->public_status = $request->public_status;

        $taskStore->save();

        return Redirect()->route('task.index')->with('message','Task insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taskShow = Tasks::findOrFail($id);

        return view('users.task.show',compact('taskShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();

        $categoryList = Category::all()
                        ->where('user_id',$user->id) 
                        ->where('public_status','1');

        $taskEdit = Tasks::findOrFail($id);
        
        return view('users.task.edit',compact('taskEdit','categoryList'));
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
        $taskUpdate = Tasks::find($id);

        $taskUpdate->category_id = $request->category_id;
        $taskUpdate->name = $request->name;
        $taskUpdate->description = $request->description;
        $taskUpdate->working_date = $request->working_date;

        $taskUpdate->save();

        return redirect()->route('task.index')->with('message','Task update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Tasks::find($id);

        $del->delete();

        return redirect()->route('task.index')->with('message','Delete successfully.');
    }

    // Public Status
    public function publicStatus(Request $request, $id)
    {
        $statusTask = Tasks::findOrfail($id);

        $statusTask->public_status = $request->public_status;

        $statusTask->save();
        
        return redirect()->route('task.index')->with('message','Task Status is update successfully');
    }    
}
