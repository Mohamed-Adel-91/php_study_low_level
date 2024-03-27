<?php
// * Object-Oriented Programming (OOP) and Model-View-Controller (MVC)
// * are two distinct concepts in software development, particularly in the context of PHP.
/** ---------------------------------------------------------------------------------------
 * Object-Oriented Programming (OOP):
  OOP is a programming paradigm that revolves around the concept of objects,
  which are instances of classes.
  In PHP, OOP allows you to encapsulate data (attributes) and behaviors (methods) into objects.
  This paradigm promotes modularity, reusability, and maintainability of code.
  In PHP, you can define classes, create objects from those classes,
  and use inheritance, encapsulation, and polymorphism to structure and organize your code.
  OOP in PHP allows you to create complex systems by breaking them down into smaller, manageable pieces.
 */

// Here's a brief example of OOP in PHP:
class Car {
  private $brand;
  private $model;

  public function __construct($brand, $model) {
      $this->brand = $brand;
      $this->model = $model;
  }

  public function getInfo() {
      return "This is a {$this->brand} {$this->model} car. <br>";
  }
}

$myCar = new Car("Toyota", "Corolla");
echo $myCar->getInfo(); // Output: This is a Toyota Corolla car.

echo '<hr>';
//####################################################################################################
/** --------------------------------------------------------------------------------------------------
 * MVC (Model-View-Controller):
 * MVC is a design pattern commonly used in web applications to separate concerns within the codebase.
 * It divides an application into three interconnected components:
1- Model: Represents the data and business logic of the application.
  It interacts with the database, processes data, and contains the application's core logic.

2- View: Represents the presentation layer of the application.
  It's responsible for rendering data to the user interface.
  Views are usually HTML templates with embedded code to display dynamic content.

3- Controller: Acts as an intermediary between the Model and the View.
  It receives user input, processes it (usually by interacting with the Model),
  and updates the View accordingly. Controllers handle the application's
  flow and orchestrate interactions between the Model and the View.

 * MVC helps to maintain a clear separation of concerns,
 * making the codebase easier to understand, maintain, and scale.
 */

 // Here's a simple illustration of MVC in PHP:

 // Model
class UserModel {
  public function getUser($userId) {
      // Database query to fetch user data
      return "User: {$userId} <br>";
  }
}

// View
class UserView {
  public function output($data) {
      echo "Viewing user: {$data} <br>";
  }
}

// Controller
class UserController {
  private $model;
  private $view;

  public function __construct($model, $view) {
      $this->model = $model;
      $this->view = $view;
  }

  public function showUser($userId) {
      $userData = $this->model->getUser($userId);
      $this->view->output($userData);
  }
}

// Usage
$model = new UserModel();
$view = new UserView();
$controller = new UserController($model, $view);
$controller->showUser(123); // Output: Viewing user: User: 123


//####################################################################################################
/** --------------------------------------------------------------------------------------------------
 * Comparison: (OOP) vs [MVC]

1- (OOP) is a programming paradigm, while [MVC] is a design pattern.
2- (OOP) focuses on the structure of code, emphasizing objects, classes, and their relationships.
3- [MVC] focuses on organizing the codebase of a web application into three interconnected components to separate concerns.
4- (OOP) can be used alongside [MVC]. In fact, [MVC] architecture often leverages (OOP) principles for implementation.
5- [MVC] provides a clear separation of concerns, making it easier to maintain and scale applications, while (OOP) promotes code reusability, modularity, and encapsulation.

*/