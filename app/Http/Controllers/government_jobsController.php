<?php

namespace App\Http\Controllers;

use App\Http\Requests\Creategovernment_jobsRequest;
use App\Http\Requests\Updategovernment_jobsRequest;
use App\Repositories\government_jobsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

use App\Models\government_jobs;

class government_jobsController extends AppBaseController
{
    /** @var  government_jobsRepository */
    private $governmentJobsRepository;

    public function __construct(government_jobsRepository $governmentJobsRepo)
    {
      $this->governmentJobsRepository = $governmentJobsRepo;
    }

    /**
     * Display a listing of the government_jobs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $governmentJobs = government_jobs::where('status',1)->orderBy('created_at','DESC')->get();


        if(Auth::user()){
          if(Auth::user()->hasRole(['admin'])){
            $governmentJobs = government_jobs::all();
          }
        }

        return view('government_jobs.index')
            ->with('governmentJobs', $governmentJobs);
    }

    /**
     * Show the form for creating a new government_jobs.
     *
     * @return Response
     */
    public function create()
    {
        return view('government_jobs.create');
    }

    /**
     * Store a newly created government_jobs in storage.
     *
     * @param Creategovernment_jobsRequest $request
     *
     * @return Response
     */
    public function store(Creategovernment_jobsRequest $request)
    {
        $input = $request->all();

        $governmentJobs = $this->governmentJobsRepository->create($input);

        Flash::success('Government Jobs saved successfully. Wating Admin Confirm');

        return redirect(route('governmentJobs.index'));
    }

    /**
     * Display the specified government_jobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $governmentJobs = $this->governmentJobsRepository->findWithoutFail($id);

        if (empty($governmentJobs)) {
            Flash::error('Government Jobs not found');

            return redirect(route('governmentJobs.index'));
        }

        return view('government_jobs.show')
        ->with('governmentJobs', $governmentJobs);
    }

    /**
     * Show the form for editing the specified government_jobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $governmentJobs = $this->governmentJobsRepository->findWithoutFail($id);

        if (empty($governmentJobs)) {
            Flash::error('Government Jobs not found');

            return redirect(route('governmentJobs.index'));
        }

        return view('government_jobs.edit')->with('governmentJobs', $governmentJobs);
    }

    public function confirm($id)
    {
      $governmentJobs = $this->governmentJobsRepository->findWithoutFail($id);
      $governmentJobs->status = 1;
      $governmentJobs->save();

      return redirect(route('governmentJobs.index'));
    }

    /**
     * Update the specified government_jobs in storage.
     *
     * @param  int              $id
     * @param Updategovernment_jobsRequest $request
     *
     * @return Response
     */
    public function update($id, Updategovernment_jobsRequest $request)
    {
        $governmentJobs = $this->governmentJobsRepository->findWithoutFail($id);

        if (empty($governmentJobs)) {
            Flash::error('Government Jobs not found');

            return redirect(route('governmentJobs.index'));
        }

        $governmentJobs = $this->governmentJobsRepository->update($request->all(), $id);

        Flash::success('Government Jobs updated successfully.');

        return redirect(route('governmentJobs.index'));
    }

    /**
     * Remove the specified government_jobs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $governmentJobs = $this->governmentJobsRepository->findWithoutFail($id);

        if (empty($governmentJobs)) {
            Flash::error('Government Jobs not found');

            return redirect(route('governmentJobs.index'));
        }

        $this->governmentJobsRepository->delete($id);

        Flash::success('Government Jobs deleted successfully.');

        return redirect(route('governmentJobs.index'));
    }
}
