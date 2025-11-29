<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Social;
use App\Models\Product;
use App\Models\GeneralRecipe;
use App\Models\Skill;
use App\Models\Profile;
use App\Models\Message;
use App\Models\Experience;
use App\Models\Education;

class PortfolioController extends Controller
{
    public function home()
    {
        // Ambil data sosial media
        $socials = Social::all();
        
        // Kirim ke view home
        return view('home', compact('socials'));
    }

    public function about()
    {
        $profile = Profile::first();
        $socials = Social::all();
        $experience = Experience::first();
        $educations = Education::all();

        // 3. Kirim variabel $profile ke view
        return view('about', compact('profile', 'socials', 'experience', 'educations'));
    }

    public function projects()
    {
        $projects = Project::all();
        // Kita kirim juga data socials ke halaman projects
        $socials = Social::all(); 

        return view('projects', compact('projects', 'socials'));
    }

    public function product()
    {
        $products = Product::all();
        $socials = Social::all();
        
        // Ambil data resep pertama
        $recipe = GeneralRecipe::first(); 

        // Kirim variabel ke view
        return view('product', compact('products', 'socials', 'recipe'));
    }

    public function skill()
    {
        // Ambil semua data skill/prestasi dari database
        $skill = Skill::all();
        
        // Ambil data sosmed untuk footer
        $socials = Social::all();

        // Kirim ke view skill
        return view('skill', compact('skill', 'socials'));
    }

    public function storeMessage(Request $request)
    {
        // 1. Validasi (Pastikan data terisi)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // 2. Simpan ke Database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // 3. Kembali ke halaman sebelumnya dengan Pesan Sukses
        return redirect()->back()->with('success', 'pesannya sudah masuk ya kak');
    }
}