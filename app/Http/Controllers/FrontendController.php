<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Petition;
use App\Models\Donation;
use App\Models\Page;
use App\Models\Blog;
use App\User;
use Redirect;
use Mail;

class FrontendController extends Controller
{
    public function index()
    {
		$page = Page::all();
        return view('index',['page'=>$page]);
    }

    public function profile($id)
    {
        $userdata = User::findOrFail($id);
        $petitiondata = DB::table('petitions')
            ->where('user_id', '=', $id)
            ->get();
        $donationdata = DB::table('donations')
            ->where('user_id', '=', $id)
            ->get();
        return view('profile', [
            'userdata' => $userdata,
            'petitiondata' => $petitiondata,
            'donationdata' => $donationdata,
        ]);
    }

    public function aboutus()
    {
        return view('aboutus');
    }

	public function view($slug)
    {
		$page = Page::where('slug',$slug)->get();
        return view('page',['data' => $page]);
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function donation($id)
    {
        if (!Auth::user()){
            return view('auth.login');
        }else{
        $donation = Donation::where('id', $id)->get();
        $page = Page::all();

        return view('donation', [
            'donation' => $donation,
            'page' => $page
        ]);
    }
    }

    public function donations()
    {
        $donation = Donation::all();

        return view('donations', [
            'donation' => $donation,
        ]);
    }

    public function goals()
    {
        return view('goals');
    }

    public function charity()
    {
        return view('charity');
    }

    public function detail($id)
    {
        $data = Blog::find($id);
        return view('blog-detail',['data' => $data]);
    }
    public function finances()
    {
        return view('finances');
    }

    public function petitions()
    {
        $petitions = Petition::all();

        return view('petitions', [
            'petitions' => $petitions,
        ]);
    }

    public function petition($id)
    {
        $petition = Petition::find($id);
        return view('petition', [
            'petition' => $petition,
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $petitions = Petition::where(
            'p_title',
            'LIKE',
            '%' . $search . '%'
        )->get();

        return view('search', [
            'petitions' => $petitions,
        ]);
    }

    public function volunteering()
    {
        return view('volunteering');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create_petition()
    {
        return view('create_petition');
    }

    public function save_petition(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');

            $imageName =
                'image-' .
                (strtotime(now()) . rand(111, 99)) .
                '.' .
                $img->getClientOriginalExtension();
            $request
                ->file('image')
                ->move(public_path() . '/assets/images/banners/', $imageName);
            $data['image'] = $imageName;
        }

        $status = Petition::create($data);

        if ($status) {
            return Redirect::to('/petition');
        }
    }

    public function create_donation()
    {
        return view('create_donation');
    }

    public function save_donation(Request $request)
    {
        
        $data = $request->all();

        if ($request->hasFile('image')) {
            $img = $request->file('image');

            $imageName =
                'image-' .
                (strtotime(now()) . rand(111, 99)) .
                '.' .
                $img->getClientOriginalExtension();
            $request
                ->file('image')
                ->move(public_path() . '/assets/images/banners/', $imageName);
            $data['image'] = $imageName;
        }

        $status = Donation::create($data);

        if ($status) {
            return Redirect::to('/donations');
        }
    }

    public function signpetition(Request $request)
    {
        $data = [['u_id' => $request->u_id, 'p_id' => $request->p_id]];

        $status = DB::table('petitions_signed')->insert($data);

        if ($status) {
            return redirect()
                ->back()
                ->with('success', 'Petition Signed Successfully');
        }
    }

    public function delete_donation($id)
    {
        $status = DB::table('donations')->delete($id);
        if ($status) {
            return redirect()->back();
        }
    }

    public function delete_petition($id)
    {
        $status = DB::table('petitions')->delete($id);
        if ($status) {
            return redirect()->back();
        }
    }
}