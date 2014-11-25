<?php namespace Searcher\Authorisers;


class RedditAuthoriser implements AuthoriserInterface {

    public function redirectToCode(){
        Socialite::with('reddit')->redirect();
    }

    public function redirectToToken($code){



    }

    public function getUser(){

    }

} 