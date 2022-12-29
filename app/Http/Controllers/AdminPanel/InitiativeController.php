<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateInitiativeRequest;
use App\Http\Requests\AdminPanel\UpdateInitiativeRequest;
use App\Repositories\AdminPanel\InitiativeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InitiativeController extends AppBaseController
{
    /** @var InitiativeRepository $initiativeRepository*/
    private $initiativeRepository;

    public function __construct(InitiativeRepository $initiativeRepo)
    {
        $this->initiativeRepository = $initiativeRepo;
    }

    /**
     * Display a listing of the Initiative.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $initiatives = $this->initiativeRepository->paginate(10);

        return view('adminPanel.initiatives.index')
            ->with('initiatives', $initiatives);
    }

    /**
     * Show the form for creating a new Initiative.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.initiatives.create');
    }

    /**
     * Store a newly created Initiative in storage.
     *
     * @param CreateInitiativeRequest $request
     *
     * @return Response
     */
    public function store(CreateInitiativeRequest $request)
    {
        $input = $request->all();

        $initiative = $this->initiativeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/initiatives.singular')]));

        return redirect(route('adminPanel.initiatives.index'));
    }

    /**
     * Display the specified Initiative.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $initiative = $this->initiativeRepository->find($id);

        if (empty($initiative)) {
            Flash::error(__('messages.not_found', ['model' => __('models/initiatives.singular')]));

            return redirect(route('adminPanel.initiatives.index'));
        }

        return view('adminPanel.initiatives.show')->with('initiative', $initiative);
    }

    /**
     * Show the form for editing the specified Initiative.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $initiative = $this->initiativeRepository->find($id);

        if (empty($initiative)) {
            Flash::error(__('messages.not_found', ['model' => __('models/initiatives.singular')]));

            return redirect(route('adminPanel.initiatives.index'));
        }

        return view('adminPanel.initiatives.edit')->with('initiative', $initiative);
    }

    /**
     * Update the specified Initiative in storage.
     *
     * @param int $id
     * @param UpdateInitiativeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInitiativeRequest $request)
    {
        $initiative = $this->initiativeRepository->find($id);

        if (empty($initiative)) {
            Flash::error(__('messages.not_found', ['model' => __('models/initiatives.singular')]));

            return redirect(route('adminPanel.initiatives.index'));
        }

        $initiative = $this->initiativeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/initiatives.singular')]));

        return redirect(route('adminPanel.initiatives.index'));
    }

    /**
     * Remove the specified Initiative from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $initiative = $this->initiativeRepository->find($id);

        if (empty($initiative)) {
            Flash::error(__('messages.not_found', ['model' => __('models/initiatives.singular')]));

            return redirect(route('adminPanel.initiatives.index'));
        }

        $this->initiativeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/initiatives.singular')]));

        return redirect(route('adminPanel.initiatives.index'));
    }
}
