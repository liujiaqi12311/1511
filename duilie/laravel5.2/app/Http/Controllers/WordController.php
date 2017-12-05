<?php  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\paginate;
use Response,Cookie,Redirect,Sensitive;

class WordController extends Controller{
	public function wordindex(){
		return view("word/index");
	}
	//添加
	public function wordadd(){
		$input = Input::all();
		$data['name'] = $input['name'];
		$data['time'] = date("Y-m-d H:i:s");
		$list = DB::table('curd')->insert($data);
		if($list){
			echo "<script>alert('添加成功');location.href='wordshow'</script>";
		}else{
			echo "<script>alert('添加失败');location.href='wordindex'</script>";
		}
	}
	//查询展示
	public function wordshow(){
		$list = DB::table('curd')->get();
		return view("word/wordshow",['list'=>$list]);
	}
	//删除
	public function worddelete(){
		$id = Input::all("id");
		$list = DB::table("curd")->where("id",'=',$id)->delete();
		if($list){
			echo "<script>alert('删除成功');location.href='wordshow'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='wordshow'</script>";
		}
	}
	//修改
	public function wordupdate(){
		$id = Input::all("id");
		$list = DB::table("curd")->where("id","=",$id)->first();
		return view("word/wordupdate",['list'=>$list]);
	}
	//修改入库
	public function wordupdateadd(){
		$input = Input::all();
		$name = Input::all("name");
		$id = Input::all("id");
		$list = DB::update("update curd set name = '$name' where id=".$id);
	}
}