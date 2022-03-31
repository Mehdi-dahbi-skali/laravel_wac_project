<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\News;
use App\Models\image;
use App\Mail\ContactMail;
use App\Models\NextMatch;
use Illuminate\Http\Request;
use App\Models\importantNews;
use Illuminate\Support\Facades\Mail;

class WacController extends Controller
{
    public function acueil(){
        $news= News::all();
        $new=$news;
        $infos=info::all();
        $info=$infos;
        $last=importantNews::all()->count();
        $headers=importantNews::where('id',$last)->get();
        $header=$headers;
        $lastNext=NextMatch::all()->count();
        $nexts=NextMatch::where('id',$lastNext)->get();
        $next=$nexts;
        return view('acueil',[
            'news' => $news,
            'infos' => $infos,
            'headers' => $headers,
            'nexts' => $nexts,
             $new,
             $info,
             $header,
             $next,
        ]);
    }

    public function admin(){
        $news=News::all();
        $new=$news;
        return view('admin',[
            'news' => $news,
             $new,
        ]);
    }

    public function createNews(Request $request){
        $filename= time() . '.' . $request->image->extension();  
        
        $path= $request->file('image')->storeAs(
            'News-image',
             $filename,
            'public',
        );

        $News = News::create([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        $image = new image();
        $image->path =$path;
      
        $News->image()->save($image);

        return view('admin');

  }

  public function info(Request $request){

    $info = info::find(1);

    $info->update([
        'point' => $request->point,
        'classement' => $request->clasement,
    ]);

        return view('admin');
  }

  public function contact(Request $request){

    Mail::to("mdswac37@gmail.com")->send(new ContactMail($request));
    return view('acueil');
  }   

  public function createInpNews(Request $request){

    $filename= time() . '.' . $request->imageheader->extension();  
        
    $path= $request->file('imageheader')->storeAs(
        'imageheader',
         $filename,
        'public',
    );

    $News = importantNews::create([
        'title' => $request->title,
        'text' => $request->text,
    ]);

    $image = new image();
    $image->path =$path;
  
    $News->image()->save($image);
    return view('admin');
  }

  public function nextMatch( Request $request){
    
    $filename= time() . '.' . $request->logo->extension();  
        
    $path= $request->file('logo')->storeAs(
        'logo',
         $filename,
        'public',
    );

    $News = NextMatch::create([
        'date' => $request->date,
    ]);

    $image = new image();
    $image->path =$path;
  
    $News->image()->save($image);

    return view('admin');

  }

}
