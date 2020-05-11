<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
    size:  regular
  noIndexTag:
    label: Allow search engines indexing?
    type: radio
    options:
      index: Enabled
      no-index: Disabled
  meta_title:
    label: Meta title
    type: text
  meta_description:
    label: Meta description
    type: textarea
