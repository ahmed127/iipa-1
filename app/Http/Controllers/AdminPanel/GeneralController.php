<?php

namespace App\Http\Controllers\AdminPanel;

use Flash;
use Response;
use App\Models\Country;
use App\Models\Director;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminPanel\DirectorRepository;
use App\Http\Requests\AdminPanel\CreateDirectorRequest;
use App\Http\Requests\AdminPanel\UpdateDirectorRequest;

class GeneralController extends AppBaseController
{
    /** @var DirectorRepository $generalRepository*/
    private $generalRepository;

    public function __construct(DirectorRepository $generalRepo)
    {
        $this->generalRepository = $generalRepo;
    }

    /**
     * Display a listing of the Director.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $generals = Director::where('type', 'generals')->paginate(10);

        return view('adminPanel.generals.index')
            ->with('generals', $generals);
    }

    /**
     * Show the form for creating a new Director.
     *
     * @return Response
     */
    public function create()
    {
        $countryCodes = Country::get()->pluck('code', 'code');
        return view('adminPanel.generals.create', compact('countryCodes'));
    }

    /**
     * Store a newly created Director in storage.
     *
     * @param CreateDirectorRequest $request
     *
     * @return Response
     */
    public function store(CreateDirectorRequest $request)
    {
        $input = $request->all();
        $input['type'] = 'generals';

        $general = $this->generalRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/generals.singular')]));

        return redirect(route('adminPanel.generals.index'));
    }

    /**
     * Display the specified Director.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $general = $this->generalRepository->find($id);

        if (empty($general)) {
            Flash::error(__('messages.not_found', ['model' => __('models/generals.singular')]));

            return redirect(route('adminPanel.generals.index'));
        }

        return view('adminPanel.generals.show')->with('general', $general);
    }

    /**
     * Show the form for editing the specified Director.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $general = $this->generalRepository->find($id);
        $countryCodes = Country::get()->pluck('code', 'code');

        if (empty($general)) {
            Flash::error(__('messages.not_found', ['model' => __('models/generals.singular')]));

            return redirect(route('adminPanel.generals.index'));
        }

        return view('adminPanel.generals.edit', compact('countryCodes', 'general'));
    }

    /**
     * Update the specified Director in storage.
     *
     * @param int $id
     * @param UpdateDirectorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDirectorRequest $request)
    {
        $general = $this->generalRepository->find($id);

        if (empty($general)) {
            Flash::error(__('messages.not_found', ['model' => __('models/generals.singular')]));

            return redirect(route('adminPanel.generals.index'));
        }

        $general = $this->generalRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/generals.singular')]));

        return redirect(route('adminPanel.generals.index'));
    }

    /**
     * Remove the specified Director from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $general = $this->generalRepository->find($id);

        if (empty($general)) {
            Flash::error(__('messages.not_found', ['model' => __('models/generals.singular')]));

            return redirect(route('adminPanel.generals.index'));
        }

        $this->generalRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/generals.singular')]));

        return redirect(route('adminPanel.generals.index'));
    }
}
