<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateVolunteerTypeRequest;
use App\Http\Requests\AdminPanel\UpdateVolunteerTypeRequest;
use App\Repositories\AdminPanel\VolunteerTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VolunteerTypeController extends AppBaseController
{
    /** @var VolunteerTypeRepository $volunteerTypeRepository*/
    private $volunteerTypeRepository;

    public function __construct(VolunteerTypeRepository $volunteerTypeRepo)
    {
        $this->volunteerTypeRepository = $volunteerTypeRepo;
    }

    /**
     * Display a listing of the VolunteerType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $volunteerTypes = $this->volunteerTypeRepository->paginate(10);

        return view('adminPanel.volunteer_types.index')
            ->with('volunteerTypes', $volunteerTypes);
    }

    /**
     * Show the form for creating a new VolunteerType.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.volunteer_types.create');
    }

    /**
     * Store a newly created VolunteerType in storage.
     *
     * @param CreateVolunteerTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateVolunteerTypeRequest $request)
    {
        $input = $request->all();

        $volunteerType = $this->volunteerTypeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/volunteerTypes.singular')]));

        return redirect(route('adminPanel.volunteerTypes.index'));
    }

    /**
     * Display the specified VolunteerType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $volunteerType = $this->volunteerTypeRepository->find($id);

        if (empty($volunteerType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteerTypes.singular')]));

            return redirect(route('adminPanel.volunteerTypes.index'));
        }

        return view('adminPanel.volunteer_types.show')->with('volunteerType', $volunteerType);
    }

    /**
     * Show the form for editing the specified VolunteerType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $volunteerType = $this->volunteerTypeRepository->find($id);

        if (empty($volunteerType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteerTypes.singular')]));

            return redirect(route('adminPanel.volunteerTypes.index'));
        }

        return view('adminPanel.volunteer_types.edit')->with('volunteerType', $volunteerType);
    }

    /**
     * Update the specified VolunteerType in storage.
     *
     * @param int $id
     * @param UpdateVolunteerTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVolunteerTypeRequest $request)
    {
        $volunteerType = $this->volunteerTypeRepository->find($id);

        if (empty($volunteerType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteerTypes.singular')]));

            return redirect(route('adminPanel.volunteerTypes.index'));
        }

        $volunteerType = $this->volunteerTypeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/volunteerTypes.singular')]));

        return redirect(route('adminPanel.volunteerTypes.index'));
    }

    /**
     * Remove the specified VolunteerType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $volunteerType = $this->volunteerTypeRepository->find($id);

        if (empty($volunteerType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/volunteerTypes.singular')]));

            return redirect(route('adminPanel.volunteerTypes.index'));
        }

        $this->volunteerTypeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/volunteerTypes.singular')]));

        return redirect(route('adminPanel.volunteerTypes.index'));
    }
}
