<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateRegulationRequest;
use App\Http\Requests\AdminPanel\UpdateRegulationRequest;
use App\Repositories\AdminPanel\RegulationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RegulationController extends AppBaseController
{
    /** @var RegulationRepository $regulationRepository*/
    private $regulationRepository;

    public function __construct(RegulationRepository $regulationRepo)
    {
        $this->regulationRepository = $regulationRepo;
    }

    /**
     * Display a listing of the Regulation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $regulations = $this->regulationRepository->paginate(10);

        return view('adminPanel.regulations.index')
            ->with('regulations', $regulations);
    }

    /**
     * Show the form for creating a new Regulation.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.regulations.create');
    }

    /**
     * Store a newly created Regulation in storage.
     *
     * @param CreateRegulationRequest $request
     *
     * @return Response
     */
    public function store(CreateRegulationRequest $request)
    {
        $input = $request->all();

        $regulation = $this->regulationRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/regulations.singular')]));

        return redirect(route('adminPanel.regulations.index'));
    }

    /**
     * Display the specified Regulation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $regulation = $this->regulationRepository->find($id);

        if (empty($regulation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regulations.singular')]));

            return redirect(route('adminPanel.regulations.index'));
        }

        return view('adminPanel.regulations.show')->with('regulation', $regulation);
    }

    /**
     * Show the form for editing the specified Regulation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $regulation = $this->regulationRepository->find($id);

        if (empty($regulation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regulations.singular')]));

            return redirect(route('adminPanel.regulations.index'));
        }

        return view('adminPanel.regulations.edit')->with('regulation', $regulation);
    }

    /**
     * Update the specified Regulation in storage.
     *
     * @param int $id
     * @param UpdateRegulationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegulationRequest $request)
    {
        $regulation = $this->regulationRepository->find($id);

        if (empty($regulation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regulations.singular')]));

            return redirect(route('adminPanel.regulations.index'));
        }

        $regulation = $this->regulationRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/regulations.singular')]));

        return redirect(route('adminPanel.regulations.index'));
    }

    /**
     * Remove the specified Regulation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $regulation = $this->regulationRepository->find($id);

        if (empty($regulation)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regulations.singular')]));

            return redirect(route('adminPanel.regulations.index'));
        }

        $this->regulationRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/regulations.singular')]));

        return redirect(route('adminPanel.regulations.index'));
    }
}
