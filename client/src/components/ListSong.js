// client -> src -> components -> ListSong.js

import React from "react";

const ListSong = ({ songs, deleteSong }) => {
  return (
    <ul>
      {songs && songs.length > 0 ? (
        songs.map((song) => {
          return (
            <li key={song._id} onClick={() => deleteSong(song._id)}>
              {song.title} - {song.artist}
            </li>
          );
        })
      ) : (
        <li>No song(s) left</li>
      )}
    </ul>
  );
};

export default ListSong;