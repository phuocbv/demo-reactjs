<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class BlogController extends Controller
{
    public function store(Request $request) {
    	$tweet = $request->input('tweet');
    	$newTweet = new Tweet;
    	$newTweet->tweet = $tweet;
    	$newTweet->save();
    }

    //retrieve all tweets
    public function index() {
    	return Tweet::all();
    }

    //delete a specific tweet
    public function delete(Request $request) {
    	$id = $request->input('id');
    	$spec = Tweet::find($id);
    	$spec->delete();
    }

    //edit a tweet
    public function edit(Request $request) {
    	$id = $request->input('id');
    	$editedtweet = $request->input('tweet');
    	$spec = Tweet::find($id);
    	$spec->tweet = $editedtweet;
    	$spec->save();
    }
}
