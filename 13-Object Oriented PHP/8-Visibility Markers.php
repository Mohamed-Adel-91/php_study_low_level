<?php
/**
 * public ,protected ,private
 *---------------------------
 * 1.public:
   - accessible everywhere, no restriction at all
   - default access modifier for class properties and methods if not declared otherwise
 *
 * 2.protected :
   - can be accessed only within the same class or by subclasses (inheritance)
   - cannot be accessed outside of the class in which it is defined
   - used to hide some details from direct access but still allow manipulation/usage by subclasses
 *
 * 3.private   :
   - can ONLY be accessed WITHIN THE SAME CLASS where it was declared
      -> a method or property cannot be accessed from another class 
      even if that other class is a subclass of the original class
      -> a private member is invisible outsides of its own class
   - Used when we want complete control over how something behaves inside a class
 */