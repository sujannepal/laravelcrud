<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    //function to get records
    public function home(){
    	$articles = Article::all();
    	
    	return view('home', ['articles' => $articles]);

    }

    //function to insert data on database after clicking submit
    public function add(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$articles = new Article;

    	$articles->title = $request->input('title');
    	$articles->description = $request->input('description');

    	$articles->save();
    	return redirect('/')->with('info','Data sent successfully');
    }

    //function to update data
   public function update($id){
   		
   		$articles = Article::find($id);   		
   		return view('update', ['articles'=> $articles]);
   }

   //function of edit action after clicking on update
   public function edit(Request $request, $id){
   	 $this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

   	 	$data = array(
   	 		'title' => $request->input('title'),
   	 		'description' => $request->input('description')
   	 	);
   	 	Article::where('id',$id)
   	 	->update($data);    
    	return redirect('/')->with('info','Data updated successfully');
   }

   //function to read the data
   public function read($id){
   		$articles = Article::find($id);   		
   		return view('read', ['articles'=> $articles]);

   }

   //function to delete the record
   public function delete($id){
   		Article::where('id',$id)
   		->delete();
    	return redirect('/')->with('info','Data deleted successfully');

   }
}
