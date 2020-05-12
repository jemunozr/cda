<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
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
