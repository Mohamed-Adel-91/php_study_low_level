class ClassName {
  // properties = Attribute
  propertyName: string; //propertyType

  // constructor = const
  constructor(parameters) {
      // initialize properties
      this.propertyName = parameters.propertyName;
  }

  // methods = function
  methodName() {
      // method implementation
  }
}

let objectName = new ClassName('argument');

// --------------------------------------- Example -------------------------------------------

class Person {
  name: string;
  age: number;

  constructor(name: string, age: number) {
      this.name = name;
      this.age = age;
  }

  greet() {
      console.log(`Hello, my name is ${this.name} and I'm ${this.age} years old.`);
  }
}

// Creating an object of the Person class
let person1 = new Person("Alice", 30);
person1.greet(); // Output: Hello, my name is Alice and I'm 30 years old.


