<?php

   function setActive($nameView){
     return request()->routeIs($nameView) ? 'active' : '';
   } 
   function Active($nameView){
    return request()->routeIs($nameView) ? 'menu-open' : '';
   } 
   function down_Active($nameView){
    return request()->routeIs($nameView) ? 'active-w' : '';
   } 