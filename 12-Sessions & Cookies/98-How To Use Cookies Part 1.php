<?php

  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only

    -->> we can search how to use infinity Cookie to make cookie saved in all browsers on this  computer until user remove it manually.  
         * HTTP only cookies are not accessible through client 
         * HTTP_Only: true or false ( default is false)
         * If true, the cookie will be made
         * If true the cookie will be accessible only      
         * If true the cookie will be accessible only        
         * The "Secure" flag indicates that the cookie should only be sent over secure connections.
         * If true, the cookie will be made      
         * If true the cookie will be accessible only
  */

  setcookie("style", "dark", time() + 60 * 60 * 24 * 30);