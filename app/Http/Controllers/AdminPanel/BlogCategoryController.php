<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateBlogCategoryRequest;
use App\Http\Requests\AdminPanel\UpdateBlogCategoryRequest;
use App\Repositories\AdminPanel\BlogCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogCategoryController extends AppBaseController
{
    /** @var BlogCategoryRepository $blogCategoryRepository*/
    private $blogCategoryRepository;

    public function __construct(BlogCategoryRepository $blogCategoryRepo)
    {
        $this->blogCategoryRepository = $blogCategoryRepo;
    }

    /**
     * Display a listing of the BlogCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogCategories = $this->blogCategoryRepository->paginate(10);

        return view('adminPanel.blog_categories.index')
            ->with('blogCategories', $blogCategories);
    }

    /**
     * Show the form for creating a new BlogCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.blog_categories.create');
    }

    /**
     * Store a newly created BlogCategory in storage.
     *
     * @param CreateBlogCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogCategoryRequest $request)
    {
        $input = $request->all();

        $blogCategory = $this->blogCategoryRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/blogCategories.singular')]));

        return redirect(route('adminPanel.blogCategories.index'));
    }

    /**
     * Display the specified BlogCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blogCategories.singular')]));

            return redirect(route('adminPanel.blogCategories.index'));
        }

        return view('adminPanel.blog_categories.show')->with('blogCategory', $blogCategory);
    }

    /**
     * Show the form for editing the specified BlogCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blogCategories.singular')]));

            return redirect(route('adminPanel.blogCategories.index'));
        }

        return view('adminPanel.blog_categories.edit')->with('blogCategory', $blogCategory);
    }

    /**
     * Update the specified BlogCategory in storage.
     *
     * @param int $id
     * @param UpdateBlogCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogCategoryRequest $request)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blogCategories.singular')]));

            return redirect(route('adminPanel.blogCategories.index'));
        }

        $blogCategory = $this->blogCategoryRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/blogCategories.singular')]));

        return redirect(route('adminPanel.blogCategories.index'));
    }

    /**
     * Remove the specified BlogCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blogCategory = $this->blogCategoryRepository->find($id);

        if (empty($blogCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/blogCategories.singular')]));

            return redirect(route('adminPanel.blogCategories.index'));
        }

        $this->blogCategoryRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/blogCategories.singular')]));

        return redirect(route('adminPanel.blogCategories.index'));
    }
}
