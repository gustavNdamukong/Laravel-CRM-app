<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = DB::table('companies')->paginate(10);

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        $company = new Companies;
        return view('companies.create', compact('company'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        //validate file size
        $validator = Validator::make($request->all(), [
            'file' => 'min:100',
        ]);

        $company = new Companies();
        $fileName = NULL;

        if ($request->hasFile('fileUpload')) {
            //Specify file upload path
            $destinationPath = 'storage/app/public/';

            $upload = new \DGZ_Uploader\DGZ_Uploader('default');

            // move the newly uploaded file to the upload path
            $upload->move('resize');

            if ($upload->getFilenames())
            {
                $uploadedFilename = $upload->getFilenames()[0];
            }
            else
            {
                return redirect('companies');
            }

            if (isset($uploadedFilename))
            {
                $fileName = $uploadedFilename;
            }
        }

        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = $fileName;
        $company->website = $request->website;

        $saved = $company->save();

        flash("Company {$request->name} successfully created")->success();

        return redirect('companies');
    }

    public function edit(Companies $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Companies $company)
    {
        $request->validate([
            'name' => 'required',
        ]);

        //validate file size
        $validator = Validator::make($request->all(), [
            'file' => 'min:100',
        ]);

        $company = new Companies();
        $fileName = isset($request->old_logo) ? $request->old_logo : NULL;

        if ($request->hasFile('fileUpload')) {

            //check if company had a previous logo and delete first
            if (isset($request->old_logo))
            {
                //get the file upload path
                $destinationPath = 'storage/app/public/';
                $oldLogo = $request->old_logo;
                unlink($destinationPath.$oldLogo);
            }

            $upload = new \DGZ_Uploader\DGZ_Uploader('default');

            // move the newly uploaded file to the upload path
            $upload->move('resize');

            if ($upload->getFilenames())
            {
                $uploadedFilename = $upload->getFilenames()[0];
            }
            else
            {
                return redirect('companies');
            }

            if (isset($uploadedFilename))
            {
                $fileName = $uploadedFilename;
            }
        }

        //Update the company
        $affectedRows = $company::where('id', '=', $request->company_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $fileName,
            'website' => $request->website,
        ]);

        flash("Company {$request->name} successfully updated")->success();

        return redirect('companies');
    }

    public function destroy(Companies $company)
    {
        $company->delete();
        flash("Company {$company->name} deleted")->success();

        return redirect('companies');
    }

}
