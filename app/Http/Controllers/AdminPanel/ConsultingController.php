<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateConsultingRequest;
use App\Http\Requests\AdminPanel\UpdateConsultingRequest;
use App\Repositories\AdminPanel\ConsultingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ConsultingController extends AppBaseController
{
    /** @var ConsultingRepository $consultingRepository*/
    private $consultingRepository;

    public function __construct(ConsultingRepository $consultingRepo)
    {
        $this->consultingRepository = $consultingRepo;
    }

    /**
     * Display a listing of the Consulting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $consultings = $this->consultingRepository->paginate(10);

        return view('adminPanel.consultings.index')
            ->with('consultings', $consultings);
    }

    /**
     * Show the form for creating a new Consulting.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.consultings.create');
    }

    /**
     * Store a newly created Consulting in storage.
     *
     * @param CreateConsultingRequest $request
     *
     * @return Response
     */
    public function store(CreateConsultingRequest $request)
    {
        $input = $request->all();

        $consulting = $this->consultingRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/consultings.singular')]));

        return redirect(route('adminPanel.consultings.index'));
    }

    /**
     * Display the specified Consulting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consulting = $this->consultingRepository->find($id);

        if (empty($consulting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultings.singular')]));

            return redirect(route('adminPanel.consultings.index'));
        }

        return view('adminPanel.consultings.show')->with('consulting', $consulting);
    }

    /**
     * Show the form for editing the specified Consulting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consulting = $this->consultingRepository->find($id);

        if (empty($consulting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultings.singular')]));

            return redirect(route('adminPanel.consultings.index'));
        }

        return view('adminPanel.consultings.edit')->with('consulting', $consulting);
    }

    /**
     * Update the specified Consulting in storage.
     *
     * @param int $id
     * @param UpdateConsultingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultingRequest $request)
    {
        $consulting = $this->consultingRepository->find($id);

        if (empty($consulting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultings.singular')]));

            return redirect(route('adminPanel.consultings.index'));
        }

        $consulting = $this->consultingRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/consultings.singular')]));

        return redirect(route('adminPanel.consultings.index'));
    }

    /**
     * Remove the specified Consulting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consulting = $this->consultingRepository->find($id);

        if (empty($consulting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/consultings.singular')]));

            return redirect(route('adminPanel.consultings.index'));
        }

        $this->consultingRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/consultings.singular')]));

        return redirect(route('adminPanel.consultings.index'));
    }
}
