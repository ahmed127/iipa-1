<?php

namespace App\Http\Controllers\AdminPanel;

use Flash;
use Response;
use App\Models\Regulation;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminPanel\RegulationRepository;
use App\Http\Requests\AdminPanel\CreateRegulationRequest;
use App\Http\Requests\AdminPanel\UpdateRegulationRequest;

class FinancialController extends AppBaseController
{
    /** @var RegulationRepository $financialRepository*/
    private $financialRepository;

    public function __construct(RegulationRepository $financialRepo)
    {
        $this->financialRepository = $financialRepo;
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
        $financials = Regulation::where('type_for', 'financial')->paginate(10);

        return view('adminPanel.financials.index')
            ->with('financials', $financials);
    }

    /**
     * Show the form for creating a new Regulation.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.financials.create');
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
        $input['type_for'] = 'financial';

        $financial = $this->financialRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/financials.singular')]));

        return redirect(route('adminPanel.financials.index'));
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
        $financial = $this->financialRepository->find($id);

        if (empty($financial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/financials.singular')]));

            return redirect(route('adminPanel.financials.index'));
        }

        return view('adminPanel.financials.show')->with('financial', $financial);
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
        $financial = $this->financialRepository->find($id);

        if (empty($financial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/financials.singular')]));

            return redirect(route('adminPanel.financials.index'));
        }

        return view('adminPanel.financials.edit')->with('financial', $financial);
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
        $financial = $this->financialRepository->find($id);

        if (empty($financial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/financials.singular')]));

            return redirect(route('adminPanel.financials.index'));
        }

        $financial = $this->financialRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/financials.singular')]));

        return redirect(route('adminPanel.financials.index'));
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
        $financial = $this->financialRepository->find($id);

        if (empty($financial)) {
            Flash::error(__('messages.not_found', ['model' => __('models/financials.singular')]));

            return redirect(route('adminPanel.financials.index'));
        }

        $this->financialRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/financials.singular')]));

        return redirect(route('adminPanel.financials.index'));
    }
}
