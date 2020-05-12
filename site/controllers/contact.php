<?php

return function($site, $pages, $page) {
  
  $_contact_email = $site->contact_form_email();

  //var_dump($site['contact_form_email']);
  $alert = null;

  if(get('submit')) {

    $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'text'  => get('text')
    );

    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email'),
      'text'  => array('required', 'min' => 3, 'max' => 3000),
    );

    $messages = array(
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'text'  => 'Please enter a text between 3 and 3000 characters'
    );

    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;

    // the data is fine, let's send the email
    } else {

      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);

      // build the email
      $email = email(array(
        'to'      => $site->contact_form_email(),
        'from'    => 'contactform@getkirby.com',
        'subject' => 'New contact request',
        'replyTo' => $data['email'],
        'body'    => $body
      ));

      if($email->send()) {
        $alert = array("Your message has been sent.");
        return compact('alert');
      } else {
        $alert = array($email->error());
      }

    }

  }

  return compact('alert');

};