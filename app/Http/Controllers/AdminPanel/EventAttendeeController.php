<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateEventAttendeeRequest;
use App\Http\Requests\AdminPanel\UpdateEventAttendeeRequest;
use App\Repositories\AdminPanel\EventAttendeeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EventAttendeeController extends AppBaseController
{
    /** @var EventAttendeeRepository $eventAttendeeRepository*/
    private $eventAttendeeRepository;

    public function __construct(EventAttendeeRepository $eventAttendeeRepo)
    {
        $this->eventAttendeeRepository = $eventAttendeeRepo;
    }

    /**
     * Display a listing of the EventAttendee.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventAttendees = $this->eventAttendeeRepository->paginate(10);

        return view('adminPanel.event_attendees.index')
            ->with('eventAttendees', $eventAttendees);
    }

    /**
     * Show the form for creating a new EventAttendee.
     *
     * @return Response
     */
    public function create()
    {
        return view('adminPanel.event_attendees.create');
    }

    /**
     * Store a newly created EventAttendee in storage.
     *
     * @param CreateEventAttendeeRequest $request
     *
     * @return Response
     */
    public function store(CreateEventAttendeeRequest $request)
    {
        $input = $request->all();

        $eventAttendee = $this->eventAttendeeRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/eventAttendees.singular')]));

        return redirect(route('adminPanel.eventAttendees.index'));
    }

    /**
     * Display the specified EventAttendee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventAttendee = $this->eventAttendeeRepository->find($id);

        if (empty($eventAttendee)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventAttendees.singular')]));

            return redirect(route('adminPanel.eventAttendees.index'));
        }

        return view('adminPanel.event_attendees.show')->with('eventAttendee', $eventAttendee);
    }

    /**
     * Show the form for editing the specified EventAttendee.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventAttendee = $this->eventAttendeeRepository->find($id);

        if (empty($eventAttendee)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventAttendees.singular')]));

            return redirect(route('adminPanel.eventAttendees.index'));
        }

        return view('adminPanel.event_attendees.edit')->with('eventAttendee', $eventAttendee);
    }

    /**
     * Update the specified EventAttendee in storage.
     *
     * @param int $id
     * @param UpdateEventAttendeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventAttendeeRequest $request)
    {
        $eventAttendee = $this->eventAttendeeRepository->find($id);

        if (empty($eventAttendee)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventAttendees.singular')]));

            return redirect(route('adminPanel.eventAttendees.index'));
        }

        $eventAttendee = $this->eventAttendeeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/eventAttendees.singular')]));

        return redirect(route('adminPanel.eventAttendees.index'));
    }

    /**
     * Remove the specified EventAttendee from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventAttendee = $this->eventAttendeeRepository->find($id);

        if (empty($eventAttendee)) {
            Flash::error(__('messages.not_found', ['model' => __('models/eventAttendees.singular')]));

            return redirect(route('adminPanel.eventAttendees.index'));
        }

        $this->eventAttendeeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/eventAttendees.singular')]));

        return redirect(route('adminPanel.eventAttendees.index'));
    }
}
