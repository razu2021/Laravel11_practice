<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class formController extends Controller
{
    //


    // basic form data insert 
    public function basic(Request $request){
        echo "name :" . $request->name;
        echo "<br>";
        echo "email :".$request->email;
        echo "<br>";
        echo "phone" .$request->phone;
        echo "<br>";
        print_r($request->skil) ;
        echo "<br>";
        echo "Gender: ". $request->gender;
        echo "<br>";
        echo "Country : ".$request->country;
        echo "<br>";
        echo "Age: " .$request->age;
        echo "<br>";
        echo "Acception : ".$request->condition;
        echo "<br>";

    }



    public function insert(Request $request){

        
     
        $info = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
     
        
        //dd($info);
      
        /*=====================  Return redirect back with Massages  */
         if(!empty($info['name']) && !empty($info['email']) && !empty($info['phone'])){
            Session::flash('message','Form submitted successfully!');
            return redirect()->back()->with('info', $info);
         }else{
            Session::flash('error','Form submission failed!');
            return redirect()->back()->with('error',' Form submitted  Failed !');
        }

         

        /*==============  return redirect back with data  */
        //  if(!empty($info)){
        //     Session::flash('success','Form submitted successfully!');
        //     return redirect()->back()->with('info',$info);
        //  }else{
        //     Session::flash('error','Form submission failed!');
        //     return redirect()->back()->with('error',' Form submitted  Failed !');
        // }
         
      /*================  return redirect back only data with the session ========== */
      
      //  return redirect()->back()->with('info',$info);



        


    }





    public function test(Request $request){

        $name = $request->name;

        if ($name) {
           Session::flash('success_messages', 'Information added successfully!');
         
            return redirect()->route('home')->with('success_messages', 'Information added successfully!');
        } else {
            Session::flash('error_messages', 'Information addition failed!');
            return redirect()->back()->with('error_messages', 'Information addition failed!');
        }

        

    }

    

    public function flasher(Request $request ){

        $name = $request->name;



          // Check if 'name' is present
    if ($name) {
        // Show success message if 'name' exists
        //$flasher->success('Your account has been re-activated.');
        flash()->success('Your Information Submited !');
        return redirect()->route('home');
    } else {
        // Optionally show an error message if 'name' is not present
        flash()->error('Your Information submitted Faield !.');
    }

    // Redirect back to the previous page
    return redirect()->back();

    }





    public function sweet(Request $request){

        $name = $request->name;

        if ($name) {
            Session::flash('success', 'Information added successfully!');
            return redirect()->back()->with('success', 'Information added successfully!');
        } else {
            Session::flash('error', 'Information addition failed!');
            return redirect()->back()->with('error', 'Information addition failed!');
        }

        

    }



    public function delete(){

        return redirect()->back()->with('success', 'Data saved successfully!');

    }






}


    


