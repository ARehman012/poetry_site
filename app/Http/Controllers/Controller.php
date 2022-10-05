<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home()
    {
        $users = DB::table('images')
            ->select('*')
            ->get();
        return view('index', compact('users'));
    }

    function about()
    {
        return view('about_us');
    }

    function contact()
    {
        return view('contact_us');
    }

    function add_image()
    {
        return view('addImage');
    }

    function saveImage(Request $request)
    {
        $imageCaption = $request->imageCaption;
        $validated = $request->validate([
            'imageFile' => 'required',
            'imageCaption' => 'required|max:50',
        ]);

        $imageName = time() . '.' . $request->imageFile->extension();
        $request->imageFile->move(public_path('images'), $imageName);

        $data = [
            'imageSrc' => $imageName,
            'imageCaption' => $imageCaption
        ];

        if (DB::table('images')->insert($data)) {
            return redirect()->route('home')
                ->with('success', 'You have successfully upload image.')
                ->with('image', $imageName);
        } else {
            return 'Fail';
        }
    }
}
