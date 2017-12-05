<?php  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\paginate;
use Response,Cookie,Redirect,Sensitive;

class RegController extends Controller{

    public function index(){
        return view('reg/index');
    }
    public function add(){
        $input = Input::all();
        $data['name'] = $input['name'];
        $data['time'] = date("Y-m-d H:i:s");
        $res = DB::table('curd')->insert($data);
        if($res){
            echo '<script>alert("添加成功");location.href="show";</script>';
        }
    }
    public function show(){
        $list = DB::table('curd')->paginate(2);
        return view('reg/show', ['list' => $list]);

    }
    //删除
    public function delete(){
        $id = Input::all('id');
        $users = DB::table('curd')->where('id', '=', $id)->delete();
        if($users){
            echo '<script>alert("删除成功");location.href="show";</script>';
        }
    }
    //修改
    public function update(){
        $id = Input::get('id');
        $list = DB::table('curd')->where('id','=',$id)->first();
        return view('reg/update', ['list' => $list]);
    }
    //修改入库
    public function show_update(){
        $input = Input::all();
        $id= $input['id'];
        $name = $input['name'];
        $list = DB::update("update curd set name='$name' where id=".$id);
        if($list){
            echo '<script>alert("修改成功");location.href="show";</script>';
        }
    }
    
}
?>