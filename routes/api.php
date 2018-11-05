<?php

Route::post('/sendmail', 'Mail\MailController@sendMail');
Route::post('/sendmail/sqs', 'Mail\SQSEmailController@sendEmail');
