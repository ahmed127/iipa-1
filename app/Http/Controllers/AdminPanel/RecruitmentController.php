<?php

namespace App\Http\Controllers\AdminPanel;

use App\Helpers\FollowTrait;
use App\Http\Requests\AdminPanel\CreateRecruitmentRequest;
use App\Http\Requests\AdminPanel\UpdateRecruitmentRequest;
use App\Repositories\AdminPanel\RecruitmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RecruitmentController extends AppBaseController
{
    use FollowTrait;

    /** @var RecruitmentRepository $recruitmentRepository*/
    private $recruitmentRepository;

    public function __construct(RecruitmentRepository $recruitmentRepo)
    {
        $this->recruitmentRepository = $recruitmentRepo;
    }

    /**
     * Display a listing of the Recruitment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $recruitments = $this->recruitmentRepository->allQuery($request->all())->paginate($request->pagination ?? 10);

        return view('adminPanel.recruitments.index')
            ->with('recruitments', $recruitments);
    }

    /**
     * Show the form for creating a new Recruitment.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.recruitments.create');
    }

    /**
     * Store a newly created Recruitment in storage.
     *
     * @param CreateRecruitmentRequest $request
     *
     * @return Response
     */
    public function store(CreateRecruitmentRequest $request)
    {
        $input = $request->all();

        $recruitment = $this->recruitmentRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/recruitments.singular')]));

        return redirect(route('adminPanel.recruitments.index'));
    }

    /**
     * Display the specified Recruitment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recruitment = $this->recruitmentRepository->find($id);

        if (empty($recruitment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/recruitments.singular')]));

            return redirect(route('adminPanel.recruitments.index'));
        }

        return view('adminPanel.recruitments.show')->with('recruitment', $recruitment);
    }

    /**
     * Show the form for editing the specified Recruitment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recruitment = $this->recruitmentRepository->find($id);

        if (empty($recruitment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/recruitments.singular')]));

            return redirect(route('adminPanel.recruitments.index'));
        }

        return view('adminPanel.recruitments.edit')->with('recruitment', $recruitment);
    }

    /**
     * Update the specified Recruitment in storage.
     *
     * @param int $id
     * @param UpdateRecruitmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRecruitmentRequest $request)
    {
        $recruitment = $this->recruitmentRepository->find($id);

        if (empty($recruitment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/recruitments.singular')]));

            return redirect(route('adminPanel.recruitments.index'));
        }

        $recruitment = $this->recruitmentRepository->update($request->all(), $id);

        $this->follow_update($recruitment);

        Flash::success(__('messages.updated', ['model' => __('models/recruitments.singular')]));

        return redirect(route('adminPanel.recruitments.index'));
    }

    /**
     * Remove the specified Recruitment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recruitment = $this->recruitmentRepository->find($id);

        if (empty($recruitment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/recruitments.singular')]));

            return redirect(route('adminPanel.recruitments.index'));
        }

        $this->recruitmentRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/recruitments.singular')]));

        return redirect(route('adminPanel.recruitments.index'));
    }
}
