// -- In JavaScript, we can access the properties of objects using dot notation. This is a concise way to reference and manipulate data within an object.
// -- Syntax: obj.propertyName

//----------------------------- Object Literals:
let person1 = {
    name: "John",
    age: 30,
    greet: function () {
        console.log(
            `Hello, my name is ${this.name} and I'm ${this.age} years old.`
        );
    },
};
person1.greet(); // Output: Hello, my name is Alice and I'm 30 years old.
console.log(person1.name); // Output: John
console.log(person1.age); // Output: 30

// -- Adding a new property to the object
person1.gender = "Male";

// -- Updating the value of an existing property
person1.age = 31;

// -- Removing a property from the object
delete person1.gender;

// Note that if you try to access a non-existent property, JavaScript will throw an error. For example:
console.log(person1.city); // Error! city is not defined on person

// -- Checking whether a property exists on an object using hasOwnProperty() method
if (person1.hasOwnProperty("name")) {
    console.log('The "name" property exists');
} else {
    console.log('The "name" property does not exist');
}

// -- The in operator can also be used to check for the existence of a property
if ("name" in person1) {
    console.log("The 'name' property belongs to person");
} else {
    console.log("The 'name' property does not belong to person");
}

//--------------------------- Constructor Functions:

function Person2(name, age) {
    this.name = name;
    this.age = age;
    this.greet = function () {
        console.log(
            `Hello, my name is ${this.name} and I'm ${this.age} years old.`
        );
    };
}

let person = new Person2("Alice", 30);
person.greet(); // Output: Hello, my name is Alice and I'm 30 years old.

// ---------------------------- Classes in JavaScript:
class Person3 {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    greet() {
        console.log(
            `Hello, my name is ${this.name} and I'm ${this.age} years old.`
        );
    }
}

let person2 = new Person3("Bob", 25);
person2.greet(); // Output: Hello, my name is Bob and I'm 25 years old.
