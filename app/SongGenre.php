<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongGenre extends Model
{
    protected $table = 'songs_genres';

    protected $fillable = [
        'song_id',
        'genre_id',
    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
