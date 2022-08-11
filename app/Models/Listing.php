<?php 

    namespace App\Models;

    class Listing{
        public static function all(){
            return [
                [
                    'id' => 1,
                    'title' => 'List One',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo hic doloremque dolores maiores facilis soluta quae nihil tempore
                    assumenda recusandae omnis aspernatur praesentium magni repellat autem ex, voluptatem quas.
                    Distinctio!'
                ],
                [
                    'id' => 2,
                    'title' => 'List Two',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo hic doloremque dolores maiores facilis soluta quae nihil tempore
                    assumenda recusandae omnis aspernatur praesentium magni repellat autem ex, voluptatem quas.
                    Distinctio!'
                ]  
        ];
        }

        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] == $id) return $listing;
            }
        }
    }