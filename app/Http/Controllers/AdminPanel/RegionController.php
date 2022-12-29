<?php

namespace App\Http\Controllers\AdminPanel;

use Flash;
use Response;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdminPanel\RegionRepository;
use App\Http\Requests\AdminPanel\CreateRegionRequest;
use App\Http\Requests\AdminPanel\UpdateRegionRequest;

class RegionController extends AppBaseController
{
    /** @var RegionRepository $regionRepository*/
    private $regionRepository;

    public function __construct(RegionRepository $regionRepo)
    {
        $this->regionRepository = $regionRepo;
    }

    /**
     * Display a listing of the Region.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, City $city)
    {
        $regions = $this->regionRepository->allQuery( $request->all())->where('city_id', $city->id)->paginate(request('pagination') ?? 5 );

        return view('adminPanel.regions.index', compact('city', 'regions'));
    }

    /**
     * Show the form for creating a new Region.
     *
     * @return Response
     */
    public function create(City $city)
    {
        return view('adminPanel.regions.create', compact('city'));
    }

    /**
     * Store a newly created Region in storage.
     *
     * @param CreateRegionRequest $request
     *
     * @return Response
     */
    public function store(CreateRegionRequest $request, City $city)
    {
        $input = $request->all();
        $input['city_id'] = $city->id;

        $region = $this->regionRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/regions.singular')]));

        return redirect(route('adminPanel.cities.regions.index', $city->id));
    }

    /**
     * Display the specified Region.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regions.singular')]));

            return redirect(route('adminPanel.regions.index'));
        }

        return view('adminPanel.regions.show')->with('region', $region);
    }

    /**
     * Show the form for editing the specified Region.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regions.singular')]));

            return redirect(route('adminPanel.regions.index'));
        }

        return view('adminPanel.regions.edit')->with('region', $region);
    }

    /**
     * Update the specified Region in storage.
     *
     * @param int $id
     * @param UpdateRegionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegionRequest $request)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regions.singular')]));

            return redirect()->back();
        }

        $region = $this->regionRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/regions.singular')]));

        return redirect(route('adminPanel.cities.regions.index', $region->city_id));
    }

    /**
     * Remove the specified Region from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            Flash::error(__('messages.not_found', ['model' => __('models/regions.singular')]));

            return redirect(route('adminPanel.regions.index'));
        }

        $this->regionRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/regions.singular')]));

        return redirect(route('adminPanel.regions.index'));
    }
}
