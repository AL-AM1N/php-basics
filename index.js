//* 1. variable and print

let name = "Amin";
console.log("Hi" + name);
console.log(`Hi ${name}`);

//* 2. array and object

const skills = ["Java", "React", "Node"];

const project = {
  title: "Todo app",
  stars: 10,
};

console.log(project.title);

// forEach loop
skills.forEach((skill) => {
  console.log(skill);
});

//* 3. function
function greet(name) {
  return "Hello" + name;
}

console.log(greet("Al-Amin"));

//* 4. classes and object
class User {
  constructor(name) {
    this.name = name;
  }
}

const user = new User("Amin");
console.log(user.name);

//* 4. Conditional operation

if (project.stars >= 50) {
  console.log("Famous project");
} else if (project.stars >= 10){
  console.log("Popular project");
} else {
  console.log("New project");
}