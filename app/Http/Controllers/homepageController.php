<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\homePageRequest;
use App\Models\homepage;

class homepageController extends Controller
{

    // home page
    public function homePage()
    {
        
        return view('admin.usersite.homepage');
    }



    // home page store into database
    public function homePageStore(homePageRequest $request)
    {
        $data = $request->all();
        $fileFields = [
            'sec_one_image',
            'sec_two_image_one',
            'sec_two_image_two',
            'sec_two_image_three',
            'sec_two_image_four',
            'sec_three_image_one',
            'sec_three_image_two',
            'sec_three_image_three',
            'sec_three_image_four',
            'sec_three_image_five',
            'sec_three_image_six',
            'sec_three_image_seven',
            'sec_three_image_eight',
            'sec_five_image',
            
        ];


        foreach ($fileFields as $field) {
            $file = $request->file($field);

            if ($file) {
                $originalName = $file->getClientOriginalName();
                $hashedName = md5(time() . $originalName) . '.' . $file->getClientOriginalExtension();
                $file->move('homepagefiles/', $hashedName);
                $data[$field] = $hashedName;


                // $originalName = $file->getClientOriginalName();
                // $file->move('homepagefiles/', $originalName);
                // $data[$field] = $originalName;
            }
        }

        homepage::create($data);
        return back()->with('success','Content Addedd Successfully');
    }



    // show data
    public function homePageShow()
    {
        $data = homepage::all();
        return view('admin.usersite.homepageshow', compact('data'));
    }



    // update form
    public function homePageUpdate($id)
    {
        $find = homepage::find($id);
        return view('admin.usersite.homepage-update', compact('find'));
    }

    // home page udate data into database
    public function homePageUpdateStore(Request $request, $id)
    {
        $data = $request->all();
        $fileFields = [
            'sec_one_image',
            'sec_two_image_one',
            'sec_two_image_two',
            'sec_two_image_three',
            'sec_two_image_four',
            'sec_three_image_one',
            'sec_three_image_two',
            'sec_three_image_three',
            'sec_three_image_four',
            'sec_three_image_five',
            'sec_three_image_six',
            'sec_three_image_seven',
            'sec_three_image_eight',
            'sec_five_image',
            
        ];


        foreach ($fileFields as $field) {
            $file = $request->file($field);
            if ($file) {



                // Delete the previous file
                $oldFileName = homepage::findOrFail($id)->{$field};
                $oldImagePath = public_path('homepagefiles/' . $oldFileName);              
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $originalName = $file->getClientOriginalName();
                $hashedName = md5(time() . $originalName) . '.' . $file->getClientOriginalExtension();
                $file->move('homepagefiles/', $hashedName);
                $data[$field] = $hashedName;
            }
        }

        // Update the record in the database
        $record = homepage::findOrFail($id);
        $record->update($data);
        return back();
    }


    public function homePageDeleteRecord($id)
    {
        $delete = homepage::findOrFail($id);

        // Delete files from folder
        $fileFields = [
            'sec_one_image',
            'sec_two_image_one',
            'sec_two_image_two',
            'sec_two_image_three',
            'sec_two_image_four',
            'sec_three_image_one',
            'sec_three_image_two',
            'sec_three_image_three',
            'sec_three_image_four',
            'sec_three_image_five',
            'sec_three_image_six',
            'sec_three_image_seven',
            'sec_three_image_eight',
            'sec_five_image',
            

        ];

        foreach ($fileFields as $field) {
            $oldimages = public_path('homepagefiles/' . $delete->{$field});
            if (file_exists($oldimages)) {
                unlink($oldimages);
            }
        }

        // Delete record from the database
        $delete->delete();

        return back()->with('deleteSuccess', 'Record deleted successfully');
    }
}
