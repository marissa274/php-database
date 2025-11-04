SET search_path TO public;

CREATE TABLE type (
    id SERIAL PRIMARY KEY,
    type TEXT NOT NULL
);

CREATE TABLE pokemon (
   id SERIAL PRIMARY KEY,
   name TEXT NOT NULL,
   hp INTEGER,
   attack INTEGER,
   defense INTEGER,
   speed INTEGER,
   special INTEGER
);