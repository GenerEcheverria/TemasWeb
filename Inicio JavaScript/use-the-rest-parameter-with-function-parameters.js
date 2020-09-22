const sum = (...args) => {
  return args.reduce((a, b) => a + b, 0);
}
console.log(sum(1,2,3));
console.log(sum(1,2,3,4,5));
console.log(sum(2,5));