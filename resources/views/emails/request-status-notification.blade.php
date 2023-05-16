@component('mail::message')
    # أهلاً وسهلاً {{ $body->name }} ،

    تم تغير حالة {{ $body->department_name }} إلي {{ $body->status_name }}

    ونتطلع لخدمتكم دائماً،،،
    {{ config('app.name') }}
@endcomponent
