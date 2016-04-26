<?php if(!defined('KIRBY')) exit ?>

# slideshow blueprint

title: slideshow
pages: true
files: true

files:
  sortable: true

fields:
  title: 
    label: Titre
    type:  text
  date:
    label: Date
    type:  date  
  group:
    label: Nom
    type: tags
  place:
  	label: Lieu
  	type: tags
  event:
    label: Sujet
    type: tags
  text: 
    label: Texte
    type:  textarea