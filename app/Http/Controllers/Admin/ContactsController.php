<?php
/*
 * @Author: zhangtao 
 * @Date: 2017-12-11 16:29:53 
 * @Last Modified by: zhangtao
 * @Last Modified time: 2017-12-11 17:12:36
 */

namespace App\Http\Controllers\Admin;
use DB;
use Config;
use \App\Posts;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use \Symfony\Component\HttpKernel\Exception\HttpException;
class ContactsController extends Controller
{
    public function show(){
        //$num=DB::table('contacts')->where(['status'=>0])->count();
        
        $contactsList=DB::table('contacts')->where(['status'=>0])->select()->get();
        
        return view('Admin/Contacts/show', ['contactsList' => $contactsList]);
    }
}
?>