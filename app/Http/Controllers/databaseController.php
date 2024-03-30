<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Car;
use App\Models\Payment;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class databaseController extends Controller
{
    //
    public function do_register(Request $request){

        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'email'=>'required',
            'password'=>'required',
   ]);
        User::create([
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'email'=>$request->email,
            'password'=>(bcrypt($request->password)),
        ]);
        return redirect()->route('index');
    }
    public function do_upload(Request $request){
        $request->validate([
            'Carname'=>'required',
            'models'=>'required',
            'rate'=>'required',
            'location'=>'required',
            'photo'=>'mimes:jpeg,jpg,png,gif|max:2048',
         ]);
         $data =$request->all();
         $path = 'asset/storage/images/' .$data['photo'];
         $fileName=time().$request->file('photo')->getClientOriginalName();
         $path=$request->file('photo')->storeAs('images',$fileName,'public');
         $datas["photo"]='/storage/'.$path;
         $data['photo']=$fileName;
         Car::create($data);
        //  $path ='asset/storage/images/' .$data['photo'];
        //  $fileName=time().$request->file('photo')->getClientoriginalName();
        //  $path=$request->file('photo')->storeAs('images',$fileName,'public');
        //  $datas["photo"]='/storage/'.$path;
        //  $data['photo']=$fileName;
        //  Car::create($data);
        return redirect()->route('admin')->with('success','register successfully') ;
     }

     public function update(Request $request,$id){
           $dd =Car::find($id);
           $request->validate([
            'photo'=>"mimes:jpeg,jpg,png,gif|max:2048",
           ]);
           $dd->Carname= $request->input('Carname');
           $dd->models= $request ->input('models');
           $dd->rate=$request->input('rate');
           $dd->location=$request->input('location');
           if($request->hasFile('photo')){
            $path = 'asset/storage/images/'.$dd->photo;
            if(File::exists($path)){
                File::delete($path);
            }
            $fileName=time().$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('images',$fileName,'public');
            $dd['photo']='/storage/'.$path;
            $dd->photo=$fileName;
            $dd->update();
           }
           $dd->update();
           return redirect()->route('view')->with('success',"updated success");
     }


    public function do_booking(Request $request){

     $action = $request->input('action');
     if($action==='save'){
   
      $validatedata = $request->validate([
            'register_id' => 'required|numeric',
            'car_id' => 'required|numeric',
            'picking_up_date' => 'required|date',
            'dropping_off_date' => 'required|date|after:picking_off_date',
        ]);
       
        $datas= Booking::create($validatedata);
        $data =  $datas->booking_id;
        Session()->put('data',$data);
        return redirect()->route('payment');
    }
    elseif($action === 'check')
    {
         function isDateRangeAvailable($car_id,$startdate,$enddate){
            $existringbooking = Booking::where('car_id',$car_id)
            ->where(function ($query) use ($startdate,$enddate){
                $query->where('picking_up_date','<=',$enddate)
                ->where('dropping_off_date','>=',$startdate);
            })
            ->exists();

            return !$existringbooking;
         }
         $startdate =$request->picking_up_date;
         $enddate=$request->dropping_off_date;
         $car_id=$request->car_id;
         $check = isDateRangeAvailable($car_id,$startdate,$enddate);

         if($check){
            echo  '<script>alert("available");</script>';
         }else{
            echo '<script>alert("unavaliable");</script>';
         }
    }
    
   
    
    }

    public function do_payment(Request $request)
    {  
        $data=$request->all();
        $data['status'] ="paid";
      
        
        Payment::create($data); 
        // $request->validate([
        //     'register_id' => 'required',
        //     'car_id' => 'required',
        //     'rate'=>'required',
        //     'payment'=>'required',
        //     'status' =>'required',
        //     'paid_at' =>'required'
        // ]);
        // $data=$request->all();
        // $data['status'] ="paid";
        // $bookid = Session()->get('data');
        // $data['bookng_id']=$bookid;
        // dd($data);
      
    return redirect()->route('indexpage');
    }
}