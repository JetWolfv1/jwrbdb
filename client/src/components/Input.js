// client -> src -> components -> Input.js

import React, { Component } from "react";
import axios from "axios";

class Input extends Component {
  state = {
    title: "",
  };

  addSong = () => {
    const song = { title: this.state.title };

    if(song.title && song.title.length > 0) {
      axios
        .post("/api/songs", song)
        .then((res) => {
          if(res.data) {
            this.props.getSongs();
            this.setState({ title: "" });
          }
        })
        .catch((err) => console.log(err));
    } else {
      console.log("Input field required.");
    }
  };

  handleChange = (e) => {
    this.setState({
      title: e.target.value,
    });
  };

  render() {
    let { title } = this.state;
    return (
      <div>
        <input type="text" onChange={this.handleChange} value={title} />
        <button onClick={this.addSong}>add song</button>
      </div>
    );
  }
}


export default Input;