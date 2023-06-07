<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateStatisticRequest;
use App\Http\Requests\AdminPanel\UpdateStatisticRequest;
use App\Repositories\AdminPanel\StatisticRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StatisticController extends AppBaseController
{
    /** @var StatisticRepository $statisticRepository*/
    private $statisticRepository;

    public function __construct(StatisticRepository $statisticRepo)
    {
        $this->statisticRepository = $statisticRepo;
    }

    /**
     * Display a listing of the Statistic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statistics = $this->statisticRepository->allQuery($request->all())->paginate(request('pagination') ?? 5);

        return view('adminPanel.statistics.index')
            ->with('statistics', $statistics);
    }

    /**
     * Show the form for creating a new Statistic.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.statistics.create');
    }

    /**
     * Store a newly created Statistic in storage.
     *
     * @param CreateStatisticRequest $request
     *
     * @return Response
     */
    public function store(CreateStatisticRequest $request)
    {
        $input = $request->all();

        $statistic = $this->statisticRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/statistics.singular')]));

        return redirect(route('adminPanel.statistics.index'));
    }

    /**
     * Display the specified Statistic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statistic = $this->statisticRepository->find($id);

        if (empty($statistic)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statistics.singular')]));

            return redirect(route('adminPanel.statistics.index'));
        }

        return view('adminPanel.statistics.show')->with('statistic', $statistic);
    }

    /**
     * Show the form for editing the specified Statistic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statistic = $this->statisticRepository->find($id);

        if (empty($statistic)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statistics.singular')]));

            return redirect(route('adminPanel.statistics.index'));
        }

        return view('adminPanel.statistics.edit')->with('statistic', $statistic);
    }

    /**
     * Update the specified Statistic in storage.
     *
     * @param int $id
     * @param UpdateStatisticRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatisticRequest $request)
    {
        $statistic = $this->statisticRepository->find($id);

        if (empty($statistic)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statistics.singular')]));

            return redirect(route('adminPanel.statistics.index'));
        }

        $statistic = $this->statisticRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/statistics.singular')]));

        return redirect(route('adminPanel.statistics.index'));
    }

    /**
     * Remove the specified Statistic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statistic = $this->statisticRepository->find($id);

        if (empty($statistic)) {
            Flash::error(__('messages.not_found', ['model' => __('models/statistics.singular')]));

            return redirect(route('adminPanel.statistics.index'));
        }

        $this->statisticRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/statistics.singular')]));

        return redirect(route('adminPanel.statistics.index'));
    }
}
