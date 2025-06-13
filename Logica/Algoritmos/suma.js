export const sumTwoLargest = (arr) => {
  const [a = 0, b = 0] = arr.filter((n) => n > 0).sort((x, y) => y - x);
  return a + b;
};
