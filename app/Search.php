<?php
/**
 * Created by PhpStorm.
 * User: kevin stanislas
 * Date: 10/09/2018
 * Time: 11:32
 */

namespace App;

use Categories;
use App\Post;
use App\User;
class Search
{
    /**
     * @var User
     */
    protected $user;
    /**
     * @var Post
     */
    protected $post;
    /**
     */
    /**
     * @var Categories
     */
    protected $categorie;
    /**
    *Search constructor.
    *
    * @param User         $user
    * @param Address      $address
    */
    public function __construct(
        User $user,
        Post $post,
        Categorie $categorie
    ) {
        $this->user = $user;
        $this->post = $post;
        $this->categorie = $categorie;
    }

    /**
     * @param      $query
     *
     * @return mixed
     */
    public function users($query)
    {
        return $this->user->search($query);
    }

    /**
     * @param      $query
     *
     * @return mixed
     */
    public function posts($query)
    {
        return $this->post->search($query);
    }

    /**
     * @param      $query
     *
     * @return mixed
     */
    public function categories($query)
    {
        return $this->categorie->search($query);
    }
}
