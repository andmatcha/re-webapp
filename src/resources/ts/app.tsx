import "../css/app.css";
import React from "react";
import { createRoot } from "react-dom/client";

const App = () => {
    const title: string = "This is React × Laravel App";
    return <h1>{title}</h1>;
};
const container = document.getElementById("app") as HTMLInputElement;
const root = createRoot(container);
root.render(<App />);
