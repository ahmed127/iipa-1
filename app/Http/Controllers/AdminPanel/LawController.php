<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateLawRequest;
use App\Http\Requests\AdminPanel\UpdateLawRequest;
use App\Repositories\AdminPanel\LawRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LawController extends AppBaseController
{
    /** @var LawRepository $lawRepository*/
    private $lawRepository;

    public function __construct(LawRepository $lawRepo)
    {
        $this->lawRepository = $lawRepo;
    }

    /**
     * Display a listing of the Law.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $laws = $this->lawRepository->paginate(10);

        return view('adminPanel.laws.index')
            ->with('laws', $laws);
    }

    /**
     * Show the form for creating a new Law.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.laws.create');
    }

    /**
     * Store a newly created Law in storage.
     *
     * @param CreateLawRequest $request
     *
     * @return Response
     */
    public function store(CreateLawRequest $request)
    {
        $input = $request->all();

        $law = $this->lawRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/laws.singular')]));

        return redirect(route('adminPanel.laws.index'));
    }

    /**
     * Display the specified Law.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $law = $this->lawRepository->find($id);

        if (empty($law)) {
            Flash::error(__('messages.not_found', ['model' => __('models/laws.singular')]));

            return redirect(route('adminPanel.laws.index'));
        }

        return view('adminPanel.laws.show')->with('law', $law);
    }

    /**
     * Show the form for editing the specified Law.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $law = $this->lawRepository->find($id);

        if (empty($law)) {
            Flash::error(__('messages.not_found', ['model' => __('models/laws.singular')]));

            return redirect(route('adminPanel.laws.index'));
        }

        return view('adminPanel.laws.edit')->with('law', $law);
    }

    /**
     * Update the specified Law in storage.
     *
     * @param int $id
     * @param UpdateLawRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLawRequest $request)
    {
        $law = $this->lawRepository->find($id);

        if (empty($law)) {
            Flash::error(__('messages.not_found', ['model' => __('models/laws.singular')]));

            return redirect(route('adminPanel.laws.index'));
        }

        $law = $this->lawRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/laws.singular')]));

        return redirect(route('adminPanel.laws.index'));
    }

    /**
     * Remove the specified Law from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $law = $this->lawRepository->find($id);

        if (empty($law)) {
            Flash::error(__('messages.not_found', ['model' => __('models/laws.singular')]));

            return redirect(route('adminPanel.laws.index'));
        }

        $this->lawRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/laws.singular')]));

        return redirect(route('adminPanel.laws.index'));
    }
}
