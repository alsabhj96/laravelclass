<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Faq;

//  create gareko Model use garni 
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //require login for using any url which use HomeController
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    public function getManageProduct(){
       
        $jhola=[       //jhola is used to store data 
            'products'=> Product::all()  // products is table name and Product is model name 
        ];
       return view('admin.product.manage', $jhola);

    }
    public function postAddProduct(Request $request){
       
       $name = $request->input('name');
       $detail = $request->input('detail');
       $cost = $request->input('cost');
       $photo = $request->file('photo');
       
       $uniqueNameGenerate = md5(time());
       $togetphotoextensionname = $photo->getClientOriginalExtension();
       $photoname = $uniqueNameGenerate.'.'.$togetphotoextensionname;
       $photo->move('uploads/products/',$photoname); 
      

        $xyz = New Product;
        $xyz->name = $name;
        $xyz->detail = $detail;
        $xyz->cost = $cost;
        $xyz->photo = $photoname;
        $xyz->status = 'Y';
        $xyz->save();
        return redirect()->back();
    }

    public function getDeleteProduct(Product $product){
        $product->delete();
        return redirect()->back();

    }

    public function getManageNews_Event(){
        $data =[
            'news' => News::all()
        ];
        return view('admin.newsandevent.managenews', $data);
    }

    public function getAddNewsandEvent(Request $request){
        //indirect method 
        $title = $request->input('name');
        $detail = $request->input('detail');
        $photo = $request->file('photo');

        $uniqueNameGenerate = md5(time());
        $togetphotoextensionname = $photo->getClientOriginalExtension();
        $photoname = $uniqueNameGenerate.'.'.$togetphotoextensionname;
        $photo->move('uploads/news/',$photoname);          

       
        

        $xyz = New News;
        $xyz->title = $title;
        $xyz->detail = $detail;
        $xyz->photo = $photoname;
        $xyz->save();
        return redirect()->back();


        //direct method 
        // $xyz = New NewsandEvent;
        // $xyz ->title = $request->input('title');
        // $xyz ->detail = $request->input('detail');
        // $xyz ->photo = $request->file('photo');
    }

    public function getDeletenews (News $delete_news_event){
        $delete_news_event->delete();
        return redirect()->back();

    }
    
    public function getEditnews (News $edit_news_event){
        $data=[
            'Newsandevents'=> $edit_news_event

        ];
        return view('admin.newsandevent.editnewsandevent', $data);
    }

    public function PostEditNewsandEvent (Request $request, News $edit_news_event){
        //dd($request->all());  to check whether the data comes or not 
        if($request->file('photo')){
            // echo 'photo xa';
            $photo= $request->file('photo');
            $uniqueNameGenerate = md5(time());
            $togetphotoextensionname = $photo->getClientOriginalExtension();
            $photoname = $uniqueNameGenerate.'.'.$togetphotoextensionname;
            $photo->move('uploads/news/',$photoname);  

            $edit_news_event->title=$request->input('name');
            $edit_news_event->detail=$request->input('detail');
            $edit_news_event->photo = $photoname;
            $edit_news_event->save();
        }
        else{
           // echo 'photo xaina';
           $edit_news_event->title=$request->input('name');
           $edit_news_event->detail=$request->input('detail');
           $edit_news_event->save();
        }
        return redirect()->back();

    
    }
    public function getManageFaq(){
        $data = [
            'Faq' =>Faq::all()
        ];
        return view('admin.FAQ.managefaq', $data);

    }

    public function getAddFAQ(Request $request){
        $photo = $request->file('photo');

        $FaqTimeGenerate = md5(time());   //for unique name of photo
        $togetphotoextensionname = $photo->getClientOriginalExtension(); //for extension of photo 
        // for checking- dd($togetphotoextensionname);
        $photoname = $FaqTimeGenerate. '.' .$togetphotoextensionname;
        $photo->move('uploads/faq/',$photoname);

        $abc = New Faq;
        $abc->title = $request->input('name');
        $abc->detail = $request->input('detail');
        $abc->photo = $request->file('photo');
        $abc->photo = $photoname;
        $abc->action = 'Y';
        $abc->save();
        return redirect ()->back()->with('message', 'FAQ Added successfully !!!!');

         // INdirect Method
        // $title = $request->input('name');
        // $detail = $request->input('detail');
        // $photo = $request->file('photo');
 
        //  $xyz = New Faq;
        //  $xyz->title = $title;
        //  $xyz->detail = $detail;
        //  $xyz->photo = $photo;
        //  $xyz->action = 'Y';
        //  $xyz->save();
        //  return redirect()->back();



    }

    public function getDeleteFAQ(Faq $delete_faq){
        $delete_faq->delete();
        return redirect ()->back()->with('message', 'FAQ Deleted successfully !!!!');;


    }

    public function getEDITFAQ(Faq $edit_faq){
        $data = [
            'Frequently'=>$edit_faq
        ];
        return view('admin.FAQ.editfaq',$data);
    }

    public function PostEDITFAQ(Request $request, Faq $edit_faq){
       // dd($request->all()); 
       if($request->file('photo')){
        $photo= $request->file('photo');
        $FaqTimeGenerate = md5(time());
        $togetphotoextensionname = $photo->getClientOriginalExtension();
        $photoname = $FaqTimeGenerate.'.'.$togetphotoextensionname;
        $photo->move('uploads/faq/',$photoname);  

        $edit_faq->title=$request->input('name');
        $edit_faq->detail=$request->input('detail');
        $edit_faq->photo = $photoname;
        $edit_faq->save();

       }
        else{
        $edit_faq->title=$request->input('name');
        $edit_faq->detail=$request->input('detail');
        $edit_faq->save();
        //echo 'photoxaina';
       }
       return redirect()->route('getManageFAQ')->with('message', 'FAQ Edited successfully !!!!');

    }
}