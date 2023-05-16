<?php

namespace App\Http\Controllers\AdminPanel;

use Flash;
use Response;
use App\Helpers\FollowTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestStatusNotification;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminPanel\VolunteerRepository;
use App\Http\Requests\AdminPanel\CreateVolunteerRequest;
use App\Http\Requests\AdminPanel\UpdateVolunteerRequest;

class VolunteerController extends AppBaseController
{
    use FollowTrait;

    /** @var VolunteerRepository $volunteerRepository*/
    private $volunteerRepository;

    public function __construct(VolunteerRepository $volunteerRepo)
    {
        $this->volunteerRepository = $volunteerRepo;
    }

    /**
     * Display a listing of the Volunteer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $volunteers = $this->volunteerRepository->allQuery($request->all())->paginate($request->pagination ?? 10);

        return view('adminPanel.volunteers.index')
            ->with('volunteers', $volunteers);
    }

    /**
     * Show the form for creating a new Volunteer.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.volunteers.create');
    }

    /**
     * Store a newly created Volunteer in storage.
     *
     * @param CreateVolunteerRequest $request
     *
     * @return Response
     */
    public function store(CreateVolunteerRequest $request)
    {
        $input = $request->all();

        $volunteer = $this->volunteerRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/volunteers.singular')]));

        return redirect(route('adminPanel.volunteers.index'));
    }

    /**
     * Display the specified Volunteer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteers.singular')]));

            return redirect(route('adminPanel.volunteers.index'));
        }

        return view('adminPanel.volunteers.show')->with('volunteer', $volunteer);
    }

    /**
     * Show the form for editing the specified Volunteer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteers.singular')]));

            return redirect(route('adminPanel.volunteers.index'));
        }

        return view('adminPanel.volunteers.edit')->with('volunteer', $volunteer);
    }

    /**
     * Update the specified Volunteer in storage.
     *
     * @param int $id
     * @param UpdateVolunteerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVolunteerRequest $request)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteers.singular')]));

            return redirect(route('adminPanel.volunteers.index'));
        }

        $volunteer = $this->volunteerRepository->update($request->all(), $id);

        $this->follow_update($volunteer);
        Flash::success(__('messages.updated', ['model' => __('models/volunteers.singular')]));

        return redirect(route('adminPanel.volunteers.index'));
    }

    /**
     * Remove the specified Volunteer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteers.singular')]));

            return redirect(route('adminPanel.volunteers.index'));
        }

        $this->volunteerRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/volunteers.singular')]));

        return redirect(route('adminPanel.volunteers.index'));
    }
}
