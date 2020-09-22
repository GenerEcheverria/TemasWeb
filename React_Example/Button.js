import React from "react";

export const Button = ({ children, alPresionar }) => {
  return <button onClick={alPresionar}>{children}</button>;
};