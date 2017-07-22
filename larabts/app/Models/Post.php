<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

	class Post extends Model {

	}

// class Post extends Eloquent {

//     protected $table = 'satwa'; //Nama tabel
//     protected $primaryKey = 'id'; //Primary key

//  //    // get all row
//  //    $posts = Post::all();

//  //    // row berdasar primary key
//  //    $singlePost = Post::find(1);
// 	// echo '<pre>';
// 	// print_r($singlePost);
// 	// echo '</pre>';

//  //MENAMPILKAN SEMUA
// $satwa = Post::all();

// //MENAMPILKAN BERDASAR ID
// $satwa = Post::find(1006017);

// //PARAMETER WHERE
// $satwa = Post::where('semester','4')->get();

// //WHERE DENGAN AGGREGAT
// $satwa = Post::where('semester','>','2')->get();

//     // public $newAttribute = 'new attribute';

//     // public function url()
//     // {
//     //     return 'http:://www.domain.com/post/' . $this->id;
//     // }


// }