<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateSettingRequest;
use App\Http\Requests\AdminPanel\UpdateSettingRequest;
use App\Repositories\AdminPanel\SettingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class SettingController extends AppBaseController
{
    /** @var  SettingRepository */
    private $settingRepository;

    public function __construct(SettingRepository $settingRepo)
    {
        $this->settingRepository = $settingRepo;
    }

    /**
     * Display a listing of the setting.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $settings = $this->settingRepository->all();

        return view('adminPanel.settings.index')
            ->with('settings', $settings);
    }

    /**
     * Show the form for creating a new setting.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.settings.create');
    }

    /**
     * Store a newly created setting in storage.
     *
     * @param CreateSettingRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingRequest $request)
    {
        $input = $request->all();

        $setting = $this->settingRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/settings.singular')]));

        return redirect(route('adminPanel.settings.index'));
    }

    /**
     * Display the specified setting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/settings.singular')]));

            return redirect(route('adminPanel.settings.index'));
        }

        return view('adminPanel.settings.show')->with('setting', $setting);
    }

    /**
     * Show the form for editing the specified setting.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/settings.singular')]));

            return redirect(route('adminPanel.settings.index'));
        }

        return view('adminPanel.settings.edit')->with('setting', $setting);
    }

    /**
     * Update the specified setting in storage.
     *
     * @param int $id
     * @param UpdateSettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingRequest $request)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/settings.singular')]));

            return redirect(route('adminPanel.settings.index'));
        }

        $setting = $this->settingRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/settings.singular')]));

        return back();
    }

    /**
     * Remove the specified setting from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $setting = $this->settingRepository->find($id);

        if (empty($setting)) {
            Flash::error(__('messages.not_found', ['model' => __('models/settings.singular')]));

            return redirect(route('adminPanel.settings.index'));
        }

        $this->settingRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/settings.singular')]));

        return redirect(route('adminPanel.settings.index'));
    }
}
