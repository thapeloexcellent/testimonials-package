<?php

namespace LP\Testimonials\Http\Controllers;

use Illuminate\Http\Request;
use LP\Testimonials\Models\Testimonial;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
   public function index(){
    return view('testimonials::testimonials');
    
   }

   public function add(Request $request){
    Testimonial::create($request->all());
    return redirect(route('testimonials'));
   }
}
