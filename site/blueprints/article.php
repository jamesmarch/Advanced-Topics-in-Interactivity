<?php if(!defined('KIRBY')) exit ?>

# page blueprint
title: Article

pages:
  num: date

fields:
  title: 
    label: Title
    type:  text
  tag: 
    label: Tag
    type:  tags
  date:
    label: Date
    type:  date  
  text: 
    label: Text
    type:  textarea
    size:  large