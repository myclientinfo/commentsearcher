<?php namespace Searcher\Authorisers;


interface AuthoriserInterface {

    public function redirectToCode();

    public function redirectToToken($code);

    public function getUser();

} 