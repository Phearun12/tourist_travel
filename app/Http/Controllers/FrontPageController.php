<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {

        return view(view:'front-home');
    }

    public function about()
    {
        $data['title']="About";
        return view(view:'front-about',data:$data);
    }
    public function services()
    {
        $data['title']="Services";
        return view(view:'front-services',data:$data);
    }
    public function packages()
    {
        $data['title']="Our_Packages";
        return view(view:'front-packages',data:$data);
    }
    public function destination()
    {
        $data['title']="Our_distination";
        return view(view:'front-destination',data:$data);
    }
    public function booking()
    {
        $data['title']="Booking";
        return view(view:'front-booking',data:$data);
    }
    public function guide()
    {
        $data['title']="Our_Guides";
        return view(view:'front-guide',data:$data);
    }
    public function testimanial()
    {
        $data['title']="Our_Testimanial";
        return view(view:'front-testimanial',data:$data);
    }
    public function contact()
    {     $data['title']="Contact";
        return view(view:'front-contact',data:$data);
    }
}
