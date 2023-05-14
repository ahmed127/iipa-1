@component('mail::message')
    # @lang('lang.request_mail_thanks')

    {{ $body }}

    Thanks,
    {{ config('app.name') }}
@endcomponent
