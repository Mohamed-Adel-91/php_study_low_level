<?php

  /*
    Date And Time Functions

    - date_interval_create_from_date_string()
    - date_add()
    - date_sub()
    - date_modify()

  */

  date_default_timezone_set("Africa/Cairo");

  $d = date_create();

  // date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

  // date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

  date_modify($d, "+20 months");

  echo date_format($d, "Y/m/d H-i-s a");