<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecompanyRequest;
use App\Http\Requests\UpdatecompanyRequest;
use App\Repositories\companyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;
use DB;

use App\Models\company;
use App\Models\JobPosition;

class companyController extends AppBaseController
{
    /** @var  companyRepository */
    private $companyRepository;

    public function __construct(companyRepository $companyRepo)
    {
        $this->companyRepository = $companyRepo;
    }

    /**
     * Display a listing of the company.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $company = company::where('user_id', Auth::user()->id)->first();

        return view('companies.index')
            ->with('company', $company);
    }

    /**
     * Show the form for creating a new company.
     *
     * @return Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created company in storage.
     *
     * @param CreatecompanyRequest $request
     *
     * @return Response
     */
    public function store(CreatecompanyRequest $request)
    {
        $input = $request->all();

        $company = $this->companyRepository->create($input);

        Flash::success('Company saved successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Display the specified company.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        return view('companies.show')->with('company', $company);
    }

    public function show_resume(){
      $user = Auth::user()->have_resume->all();
      return view('companies.show_resume')->with('resumes', $user);
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        $year = array();
        $cuureny_year = date("Y")+543;

        $year[] = 'ปีที่ก่อตั้ง';
        for($i=0; $i<=100; $i++){
          $year[$cuureny_year-$i] = $cuureny_year-$i;
        }
        $year['มากกว่า 100 ปี'] = 'มากกว่า 100 ปี';

        return view('companies.edit')
        ->with('company', $company)
        ->with('year', $year);
    }

    /**
     * Update the specified company in storage.
     *
     * @param  int              $id
     * @param UpdatecompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecompanyRequest $request)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        $company = $this->companyRepository->update($request->all(), $id);

        if($request->file('image')){
          $image_binary = base64_encode(file_get_contents($request->file('image')->path()));
        }else{
          $image_binary = null;
        }

        $company->image = $image_binary;
        $company->save();

        Flash::success('Company updated successfully.');

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified company from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $company = $this->companyRepository->findWithoutFail($id);

        if (empty($company)) {
            Flash::error('Company not found');

            return redirect(route('companies.index'));
        }

        $this->companyRepository->delete($id);

        Flash::success('Company deleted successfully.');

        return redirect(route('companies.index'));
    }
}
