<?php

namespace App\Http\Controllers\AdminPanel;

use App\Helpers\FollowTrait;
use App\Http\Requests\AdminPanel\CreateCooperativeTrainingRequest;
use App\Http\Requests\AdminPanel\UpdateCooperativeTrainingRequest;
use App\Repositories\AdminPanel\CooperativeTrainingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CooperativeTrainingController extends AppBaseController
{
    use FollowTrait;

    /** @var CooperativeTrainingRepository $cooperativeTrainingRepository*/
    private $cooperativeTrainingRepository;

    public function __construct(CooperativeTrainingRepository $cooperativeTrainingRepo)
    {
        $this->cooperativeTrainingRepository = $cooperativeTrainingRepo;
    }

    /**
     * Display a listing of the CooperativeTraining.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cooperativeTrainings = $this->cooperativeTrainingRepository->allQuery($request->all())->paginate($request->pagination ?? 10);

        return view('adminPanel.cooperative_trainings.index')
            ->with('cooperativeTrainings', $cooperativeTrainings);
    }

    /**
     * Show the form for creating a new CooperativeTraining.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.cooperative_trainings.create');
    }

    /**
     * Store a newly created CooperativeTraining in storage.
     *
     * @param CreateCooperativeTrainingRequest $request
     *
     * @return Response
     */
    public function store(CreateCooperativeTrainingRequest $request)
    {
        $input = $request->all();

        $cooperativeTraining = $this->cooperativeTrainingRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/cooperativeTrainings.singular')]));

        return redirect(route('adminPanel.cooperativeTrainings.index'));
    }

    /**
     * Display the specified CooperativeTraining.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cooperativeTraining = $this->cooperativeTrainingRepository->find($id);

        if (empty($cooperativeTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cooperativeTrainings.singular')]));

            return redirect(route('adminPanel.cooperativeTrainings.index'));
        }

        return view('adminPanel.cooperative_trainings.show')->with('cooperativeTraining', $cooperativeTraining);
    }

    /**
     * Show the form for editing the specified CooperativeTraining.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cooperativeTraining = $this->cooperativeTrainingRepository->find($id);

        if (empty($cooperativeTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cooperativeTrainings.singular')]));

            return redirect(route('adminPanel.cooperativeTrainings.index'));
        }

        return view('adminPanel.cooperative_trainings.edit')->with('cooperativeTraining', $cooperativeTraining);
    }

    /**
     * Update the specified CooperativeTraining in storage.
     *
     * @param int $id
     * @param UpdateCooperativeTrainingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCooperativeTrainingRequest $request)
    {
        $cooperativeTraining = $this->cooperativeTrainingRepository->find($id);

        if (empty($cooperativeTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cooperativeTrainings.singular')]));

            return redirect(route('adminPanel.cooperativeTrainings.index'));
        }

        $cooperativeTraining = $this->cooperativeTrainingRepository->update($request->all(), $id);

        $this->follow_update($cooperativeTraining);

        Flash::success(__('messages.updated', ['model' => __('models/cooperativeTrainings.singular')]));

        return redirect(route('adminPanel.cooperativeTrainings.index'));
    }

    /**
     * Remove the specified CooperativeTraining from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cooperativeTraining = $this->cooperativeTrainingRepository->find($id);

        if (empty($cooperativeTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cooperativeTrainings.singular')]));

            return redirect(route('adminPanel.cooperativeTrainings.index'));
        }

        $this->cooperativeTrainingRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cooperativeTrainings.singular')]));

        return redirect(route('adminPanel.cooperativeTrainings.index'));
    }
}
