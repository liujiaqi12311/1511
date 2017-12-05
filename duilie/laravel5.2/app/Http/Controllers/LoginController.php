<?php  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redis;
use Illuminate\Support\Facades\paginate;
use Response,Cookie,Redirect,Sensitive;

class LoginController extends Controller{
	public function login(){
		return view("login/login");
	}
	public function add_login(){
		 $input = Input::all();
		 $username = $input['username'];
		 $password = $input['password'];
		 $users = DB::table('login')->where('username', '=', $username)->first();
		 if($users){
		 	if($password == $users->password){
		 		echo "<script>alert('登录成功');location.href='login_show'</script>";
		 	}else{
		 		echo "<script>alert('登录失败,密码错误');location.href='login'</script>";
		 	}
		 }else{
		 	echo "<script>alert('登录失败,用户名不存在');location.href='login'</script>";
		 }
	}
	public function login_show(){
		return view("login/show");
	}
	//添加入库
	public function show_list(){
		$input = Input::all();
		$data['name'] = $input['name'];
		$data['time'] = $input['time'];
		$data['content'] = $input['content'];
		$res = DB::table('day')->insert($data);
		redis::lpush('name',$input['name']);
		redis::lpush('time',$input['time']);
		redis::lpush('content',$input['content']);
		// $str = serialize($arr);
		if($res){
			echo "<script>alert('添加成功');location.href='time_show'</script>";
		}else{
			echo "添加失败";
		}
	}
	public function time_show(){
		$list = DB::table('day2')->get();
		return view("login/time_show", ['list' => $list]);
	}
}