<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateConsultantTypeRequest;
use App\Http\Requests\AdminPanel\UpdateConsultantTypeRequest;
use App\Repositories\AdminPanel\ConsultantTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ConsultantTypeController extends AppBaseController
{
    /** @var ConsultantTypeRepository $consultantTypeRepository*/
    private $consultantTypeRepository;

    public function __construct(ConsultantTypeRepository $consultantTypeRepo)
    {
        $this->consultantTypeRepository = $consultantTypeRepo;
    }

    /**
     * Display a listing of the ConsultantType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $consultantTypes = $this->consultantTypeRepository->paginate(10);

        return view('adminPanel.consultant_types.index')
            ->with('consultantTypes', $consultantTypes);
    }

    /**
     * Show the form for creating a new ConsultantType.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.consultant_types.create');
    }

    /**
     * Store a newly created ConsultantType in storage.
     *
     * @param CreateConsultantTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateConsultantTypeRequest $request)
    {
        $input = $request->all();

        $consultantType = $this->consultantTypeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/consultantTypes.singular')]));

        return redirect(route('adminPanel.consultantTypes.index'));
    }

    /**
     * Display the specified ConsultantType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consultantType = $this->consultantTypeRepository->find($id);

        if (empty($consultantType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultantTypes.singular')]));

            return redirect(route('adminPanel.consultantTypes.index'));
        }

        return view('adminPanel.consultant_types.show')->with('consultantType', $consultantType);
    }

    /**
     * Show the form for editing the specified ConsultantType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consultantType = $this->consultantTypeRepository->find($id);

        if (empty($consultantType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultantTypes.singular')]));

            return redirect(route('adminPanel.consultantTypes.index'));
        }

        return view('adminPanel.consultant_types.edit')->with('consultantType', $consultantType);
    }

    /**
     * Update the specified ConsultantType in storage.
     *
     * @param int $id
     * @param UpdateConsultantTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultantTypeRequest $request)
    {
        $consultantType = $this->consultantTypeRepository->find($id);

        if (empty($consultantType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultantTypes.singular')]));

            return redirect(route('adminPanel.consultantTypes.index'));
        }

        $consultantType = $this->consultantTypeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/consultantTypes.singular')]));

        return redirect(route('adminPanel.consultantTypes.index'));
    }

    /**
     * Remove the specified ConsultantType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consultantType = $this->consultantTypeRepository->find($id);

        if (empty($consultantType)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultantTypes.singular')]));

            return redirect(route('adminPanel.consultantTypes.index'));
        }

        $this->consultantTypeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/consultantTypes.singular')]));

        return redirect(route('adminPanel.consultantTypes.index'));
    }
}
