<?php

namespace App\Http\Controllers\AdminPanel;

use App\Helpers\FollowTrait;
use App\Http\Requests\AdminPanel\CreateIndividualTrainingRequest;
use App\Http\Requests\AdminPanel\UpdateIndividualTrainingRequest;
use App\Repositories\AdminPanel\IndividualTrainingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class IndividualTrainingController extends AppBaseController
{
    use FollowTrait;

    /** @var IndividualTrainingRepository $individualTrainingRepository*/
    private $individualTrainingRepository;

    public function __construct(IndividualTrainingRepository $individualTrainingRepo)
    {
        $this->individualTrainingRepository = $individualTrainingRepo;
    }

    /**
     * Display a listing of the IndividualTraining.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $individualTrainings = $this->individualTrainingRepository->allQuery($request->all())->paginate($request->pagination ?? 10);

        return view('adminPanel.individual_trainings.index')
            ->with('individualTrainings', $individualTrainings);
    }

    /**
     * Show the form for creating a new IndividualTraining.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.individual_trainings.create');
    }

    /**
     * Store a newly created IndividualTraining in storage.
     *
     * @param CreateIndividualTrainingRequest $request
     *
     * @return Response
     */
    public function store(CreateIndividualTrainingRequest $request)
    {
        $input = $request->all();

        $individualTraining = $this->individualTrainingRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/individualTrainings.singular')]));

        return redirect(route('adminPanel.individualTrainings.index'));
    }

    /**
     * Display the specified IndividualTraining.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $individualTraining = $this->individualTrainingRepository->find($id);

        if (empty($individualTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/individualTrainings.singular')]));

            return redirect(route('adminPanel.individualTrainings.index'));
        }

        return view('adminPanel.individual_trainings.show')->with('individualTraining', $individualTraining);
    }

    /**
     * Show the form for editing the specified IndividualTraining.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $individualTraining = $this->individualTrainingRepository->find($id);

        if (empty($individualTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/individualTrainings.singular')]));

            return redirect(route('adminPanel.individualTrainings.index'));
        }

        return view('adminPanel.individual_trainings.edit')->with('individualTraining', $individualTraining);
    }

    /**
     * Update the specified IndividualTraining in storage.
     *
     * @param int $id
     * @param UpdateIndividualTrainingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIndividualTrainingRequest $request)
    {
        $individualTraining = $this->individualTrainingRepository->find($id);

        if (empty($individualTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/individualTrainings.singular')]));

            return redirect(route('adminPanel.individualTrainings.index'));
        }

        $individualTraining = $this->individualTrainingRepository->update($request->all(), $id);

        $this->follow_update($individualTraining);

        Flash::success(__('messages.updated', ['model' => __('models/individualTrainings.singular')]));

        return redirect(route('adminPanel.individualTrainings.index'));
    }

    /**
     * Remove the specified IndividualTraining from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $individualTraining = $this->individualTrainingRepository->find($id);

        if (empty($individualTraining)) {
            Flash::error(__('messages.not_found', ['model' => __('models/individualTrainings.singular')]));

            return redirect(route('adminPanel.individualTrainings.index'));
        }

        $this->individualTrainingRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/individualTrainings.singular')]));

        return redirect(route('adminPanel.individualTrainings.index'));
    }
}
