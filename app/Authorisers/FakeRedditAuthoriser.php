<?php namespace Searcher\Authorisers;

class FakeRedditAuthoriser implements AuthoriserInterface {

    public function redirectToCode(){
        return redirect('/login?code='.md5('hello'));
    }

    public function redirectToToken($code){
        return 'the flow seems to work';
    }

    public function getUser(){

    }

} 