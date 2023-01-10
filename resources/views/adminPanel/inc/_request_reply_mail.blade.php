{!! Form::open(['route' => ['adminPanel.users.request_reply_mail', $email], 'class' => 'col-6']) !!}
{!! Form::textarea('mail_body', null, ['class' => 'form-control', 'placeholder' => __('lang.reply_by_email')]) !!}
{!! Form::submit(__('lang.send'), ['class' => 'form-control btn btn-primary']) !!}
{!! Form::close() !!}
