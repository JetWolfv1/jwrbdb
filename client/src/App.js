// client -> src -> App.js

import React from "react";
import Song from "./components/Song";
import "./App.css";

const App = () => {
  return (
    <div className="App">
      <Song />
    </div>
  );
};

export default App;