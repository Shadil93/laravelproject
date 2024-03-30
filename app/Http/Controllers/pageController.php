<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class pageController extends Controller
{
    //


    public function index(Request $request){
        $data= Car::all();
        return view('index',compact('data'));
    }
    public function indexpage(){
        $data= Car::all();
        return view('user.indexpage',compact('data'));
    }
    public function  admin(){
         return View('admin.admin');
    }
    public function register(){
         return view('register');
    }
    public function upload(){
        return view('admin.upload');
    }
    public function view(){
        $data =Car::all();
        return view('admin.view',compact('data'));
    }
    public function edit($id){
        $data =Car::find($id);
        return view('admin.edit',compact('data'));
    }
    public function delete($id){
        Car::find($id)->delete();
        return redirect()->route('view')->with('success','delete successfully');
    }
    public function search(){
        return view('user.search');
    }
 

    public function do_search(Request $request){
       $search = $request->input('search');

       $data = Car::where('Carname','like','%' .$search. '%')
       ->orwhere('location','like','%'.$search .'%')
       ->get();


       return view('index',compact('data'));

    }

    public function booking($id){
        $cc = Car::find($id);
        Session()->put('car_id',$cc);
        return view('user.booking',compact('cc'));
     }

    public function payment(){
       
       $car_id= Session()->get('car_id');
       $bookid =Session()->get('data');
        return view('user.payment',compact('car_id','bookid'));
    }

    public function viewbooking(){

        $data=DB::table('bookings')
        ->join('users','bookings.register_id', '=' , 'users.id')
        ->join('cars','bookings.car_id','=','cars.car_id')
        ->join('payments','bookings.booking_id','=','payments.booking_id')
        ->select('users.name','users.mobile','cars.*','payments.status','payments.payment','bookings.picking_up_date','bookings.dropping_off_date')
        ->get();
        
    
        return view('admin.viewbooking',compact('data'));
    }
   

   

}
