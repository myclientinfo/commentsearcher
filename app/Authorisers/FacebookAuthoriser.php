<?php namespace Searcher\Authorisers;


class FacebookAuthoriser implements AuthoriserInterface {

    public function redirectToCode(){
        Socialite::with('facebook')->redirect();
    }

    public function redirectToToken($code){



    }

    public function getUser(){

    }

} 