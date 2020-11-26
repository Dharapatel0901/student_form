<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests; 
use App\Models\Student_details; 
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
        $hobbies =   implode(", ", $req->input('hobbies'));
        //print_r();
      //  exit();
        $firstname=$req->input('firstname');
        $lastname=$req->input('lastname');
        $gender=$req->input('gender');
        //=$req->input('hobbies');
        $address=$req->input('address');
        $branch_name=$req->input('branch_name');
        $image=$req->input('image');

        $data =array ('firstname'=>$firstname,'lastname'=>$lastname,'gender'=>$gender,'hobbies'=>$hobbies,'address'=>$address,'branch_name'=>$branch_name,'image'=>$image);
        
        DB::table('student_detail')->insert($data);
        echo" Data inserted successfully";
        echo'<a href = "/view-records">Click Here To Show Table</a>';
    }
    function show()
    {
        $users = DB::select('select * from student_detail');
        return view('showdata',['users'=>$users]);
    }
    function destroy($id) {
        DB::delete('delete from student_detail where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/view-records">Click Here</a> to go back.';
     }
     function index() {
        $users = DB::select('select * from student_detail');
        return view('showdata',['users'=>$users]);
     }
     function shows($id)
    {
        $users = DB::select('select * from student_detail where id = ?',[$id]);
        return view('edit',['users'=>$users]);
    }
     function edit(Request $req,$id)
      {
        $hobbies =   implode(", ", $req->input('hobbies'));
        $firstname=$req->input('firstname');
        $lastname=$req->input('lastname');
        $gender=$req->input('gender');
        $address=$req->input('address');
        $branch_name=$req->input('branch_name');
        $image=$req->input('image');

        DB::update('update student_detail set firstname = ?,lastname = ?,gender = ?,address = ?,branch_name = ?,image = ?,hobbies= ? where id = ?',[$firstname,$lastname,$gender,$address,$branch_name,$image,$hobbies,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to show.';
     }
}
