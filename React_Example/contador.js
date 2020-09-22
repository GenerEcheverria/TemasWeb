import React, { useState } from "react";
import { Button } from "./Button";

export const Contador = () => {
  const [valor, setValor] = useState(0);

  const add = function () {
    setValor(valor + 1);
    console.log(valor);
  };

  const substract = function () {
    setValor(valor - 1);
    console.log("Resté");
  };

  return (
    <div>
      <h3>{valor}</h3>
      <Button alPresionar={add}>Añadir</Button>
      <Button alPresionar={substract}>Restar</Button>
    </div>
  );
};