<?php


class Coordinate
{
    protected $file;

    public function __construct()
    {
        $this->file = new SplFileObject("src/coordinates.json", "w+");
    }


    public function createRandom()
    {
        $this->file->fwrite("{");
        $this->file->next();
        for ($i = 0; $i < 10; $i++) {
            $lat = rand(54, 56) . "." . rand(1_000_000, 9_999_999);
            $long = rand(36, 38) . "." . rand(1_000_000, 9_999_999);
            $this->file->fwrite("\"$i\":[" . $lat . "," . $long . "],\n");
            $this->file->next();
        }
        $this->file->fwrite("\"10\":[" . rand(54, 56) . "." . rand(1_000_000, 9_999_999) . "," . rand(36, 38) . "." . rand(1_000_000, 9_999_999) . "]}");//костылина

    }

    //public function addMoreRandom()

}