<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateOutreachRequest;
use App\Http\Requests\AdminPanel\UpdateOutreachRequest;
use App\Repositories\AdminPanel\OutreachRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class OutreachController extends AppBaseController
{
    /** @var OutreachRepository $outreachRepository*/
    private $outreachRepository;

    public function __construct(OutreachRepository $outreachRepo)
    {
        $this->outreachRepository = $outreachRepo;
    }

    /**
     * Display a listing of the Outreach.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $outreaches = $this->outreachRepository->paginate(10);

        return view('adminPanel.outreaches.index')
            ->with('outreaches', $outreaches);
    }

    /**
     * Show the form for creating a new Outreach.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.outreaches.create');
    }

    /**
     * Store a newly created Outreach in storage.
     *
     * @param CreateOutreachRequest $request
     *
     * @return Response
     */
    public function store(CreateOutreachRequest $request)
    {
        $input = $request->all();

        $outreach = $this->outreachRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/outreaches.singular')]));

        return redirect(route('adminPanel.outreaches.index'));
    }

    /**
     * Display the specified Outreach.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $outreach = $this->outreachRepository->find($id);

        if (empty($outreach)) {
            Flash::error(__('messages.not_found', ['model' => __('models/outreaches.singular')]));

            return redirect(route('adminPanel.outreaches.index'));
        }

        return view('adminPanel.outreaches.show')->with('outreach', $outreach);
    }

    /**
     * Show the form for editing the specified Outreach.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $outreach = $this->outreachRepository->find($id);

        if (empty($outreach)) {
            Flash::error(__('messages.not_found', ['model' => __('models/outreaches.singular')]));

            return redirect(route('adminPanel.outreaches.index'));
        }

        return view('adminPanel.outreaches.edit')->with('outreach', $outreach);
    }

    /**
     * Update the specified Outreach in storage.
     *
     * @param int $id
     * @param UpdateOutreachRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOutreachRequest $request)
    {
        $outreach = $this->outreachRepository->find($id);

        if (empty($outreach)) {
            Flash::error(__('messages.not_found', ['model' => __('models/outreaches.singular')]));

            return redirect(route('adminPanel.outreaches.index'));
        }

        $outreach = $this->outreachRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/outreaches.singular')]));

        return redirect(route('adminPanel.outreaches.index'));
    }

    /**
     * Remove the specified Outreach from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $outreach = $this->outreachRepository->find($id);

        if (empty($outreach)) {
            Flash::error(__('messages.not_found', ['model' => __('models/outreaches.singular')]));

            return redirect(route('adminPanel.outreaches.index'));
        }

        $this->outreachRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/outreaches.singular')]));

        return redirect(route('adminPanel.outreaches.index'));
    }
}
