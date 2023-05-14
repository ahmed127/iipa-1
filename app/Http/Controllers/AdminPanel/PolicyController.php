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

class PolicyController extends AppBaseController
{
    /** @var RegulationRepository $policyRepository*/
    private $policyRepository;

    public function __construct(RegulationRepository $policyRepo)
    {
        $this->policyRepository = $policyRepo;
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
        $policies = Regulation::where('type_for', 'policy')->paginate(10);

        return view('adminPanel.policies.index')
            ->with('policies', $policies);
    }

    /**
     * Show the form for creating a new Regulation.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.policies.create');
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
        $input['type_for'] = 'policy';

        $policy = $this->policyRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/policies.singular')]));

        return redirect(route('adminPanel.policies.index'));
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
        $policy = $this->policyRepository->find($id);

        if (empty($policy)) {
            Flash::error(__('messages.not_found', ['model' => __('models/policies.singular')]));

            return redirect(route('adminPanel.policies.index'));
        }

        return view('adminPanel.policies.show')->with('policy', $policy);
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
        $policy = $this->policyRepository->find($id);

        if (empty($policy)) {
            Flash::error(__('messages.not_found', ['model' => __('models/policies.singular')]));

            return redirect(route('adminPanel.policies.index'));
        }

        return view('adminPanel.policies.edit')->with('policy', $policy);
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
        $policy = $this->policyRepository->find($id);

        if (empty($policy)) {
            Flash::error(__('messages.not_found', ['model' => __('models/policies.singular')]));

            return redirect(route('adminPanel.policies.index'));
        }

        $policy = $this->policyRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/policies.singular')]));

        return redirect(route('adminPanel.policies.index'));
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
        $policy = $this->policyRepository->find($id);

        if (empty($policy)) {
            Flash::error(__('messages.not_found', ['model' => __('models/policies.singular')]));

            return redirect(route('adminPanel.policies.index'));
        }

        $this->policyRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/policies.singular')]));

        return redirect(route('adminPanel.policies.index'));
    }
}
