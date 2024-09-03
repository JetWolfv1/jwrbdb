// client -> src -> components -> Song.js

import React, { Component } from "react";
import axios from "axios";
import Input from "./Input";
import ListSong from "./ListSong";

class Song extends Component {
  state = {
    songs: [],
  };

  componentDidMount() {
    this.getSongs();
  }

  getSongs = () => {
    axios
      .get("/api/songs")
      .then((res) => {
        if(res.data) {
          console.log("HEY GIRL: ", res.data[0].artist);
          this.setState({
            songs: res.data,
          });
        }
      })
      .catch((err) => console.log(err));
  };

  deleteSong = (id) => {
    axios
      .delete(`/api/songs/${id}`)
      .then((res) => {
        if(res.data) {
          this.getSongs();
        }
      })
      .catch((err) => console.log(err));
  };

  render() {
    let { songs } = this.state;

    return (
      <div>
        <h1>Song List</h1>
        <Input getSongs={this.getSongs} />
        <ListSong songs={songs} deleteSong={this.deleteSong} />
      </div>
    );
  }
}

export default Song;