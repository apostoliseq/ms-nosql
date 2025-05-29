db = db.getSiblingDB('test');

db.coll.insertMany([
  { name: "Max", age: 30, role: "developer" },
  { name: "Alice", age: 25, role: "designer" },
  { name: "Bob", age: 35, role: "manager" },
  { name: "Carol", age: 28, role: "analyst" },
  { name: "David", age: 32, role: "developer" }
]);