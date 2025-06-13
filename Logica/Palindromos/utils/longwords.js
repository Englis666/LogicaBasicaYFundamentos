export const findLongWords = (s) => {
  return (
    (s.match(/\b\w+\b/g) || []).sort((a, b) => b.length - a.length)[0] || ""
  );
};
