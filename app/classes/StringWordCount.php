<?php

namespace App\classes;
class StringWordCount
{
    protected $givenString;
    protected $word;
    protected $character;
    protected $result;

   public function __construct($data)
   {
       $this->givenString = $data['given_string'];
   }
//    public function __construct($post)
//    {
//        $this->givenString = $post['given_string'];
//    }

    public function index()
    {
       // return $this->index();
    }
    public function characterCount(){

        $this->character = strlen($this->givenString);
        return $this->character;
    }
    public function wordCount(){

                     $this->word = str_word_count($this->givenString);
        return $this->word;
    }
}