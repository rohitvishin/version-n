<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function addProducts(Request $request){
        $validate = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'password' => 'required|string'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        if ($user->save()) {
            foreach($request->p_name as $key=>$product){
                $product =new Product([
                    'username' => $request->username,
                    'product_name' => $request->p_name[$key],
                    'product_price' => $request->price[$key],
                    'product_qty' => $request->qty[$key],
                    'product_type' => $request->type[$key],
                    'product_discount' => $request->discount[$key]==''?0:$request->discount[$key],
                ]);
                if($product->save())
                return redirect()->back()->with('success','Data Inserted Successfully');
            }
        }
        return redirect()->back()->with('error','Operation Failed');
    }

    public function data(){
        $data=User::all();
        return view('data',['data'=>$data]);
    }
    public function modal(Request $request){
        $products=Product::where('username', $request->username)->get();
        $html='';
        foreach($products as $product){
            $html.='<tr>
            <td>'.$product->product_name.'</td>
            <td>'.$product->product_price.'</td>
            <td>'.$product->product_qty.'</td>
            <td>'.$product->product_type.'</td>
            <td>'.$product->product_discount.'</td>
            </tr>';
        }
        return $html;
    }

}
