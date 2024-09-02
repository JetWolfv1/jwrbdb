const mongoose = require("mongoose");
const Schema = mongoose.Schema;

// Create schema for song
const SongSchema = new Schema({
  title: {
    type: String,
    required: [true, "Song title field required."],
  },
  artist: {
    type: String,
    required: [true, "Song artist field required."]
  }
});

// Create model for song
const Song = mongoose.model("song", SongSchema);

module.exports = Song;