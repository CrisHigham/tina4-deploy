<?php

Tina4\Post::add("/test/deploy", function(Tina4\Response $response, Tina4\Request $request){
    (new \Tina4\GitDeploy())->log("Running a deployment");
    (new \Tina4\GitDeploy())->doDeploy();
});