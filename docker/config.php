<?php

$MONGO = [];
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

//$MONGO["servers"] = [
//    [
//        "mongo_name" => "localhost", //mongo server name
//        "mongo_host" => "127.0.0.1", //mongo host
//        "mongo_port" => "27017", //mongo port
//        "mongo_timeout" => "0", //mongo connection timeout
//        "mongo_db" => "MONGO_DATABASE", //default mongo db to connect, works only if mongo_auth=false
//        "mongo_user" => "MONGO_USERNAME", //mongo authentication user name, works only if mongo_auth=false
//        "mongo_pass" => "MONGO_PASSWORD", //mongo authentication password, works only if mongo_auth=false
//        "mongo_auth" => false, //enable mongo authentication?
//        "control_auth" => true, //enable control users, works only if mongo_auth=false
//        "control_users" => [
//            "admin" => "admin", //one of control users ["USERNAME"]=PASSWORD, works only if mongo_auth=false
//        ],
//        "ui_only_dbs" => "", //databases to display
//        "ui_hide_dbs" => "", //databases to hide
//        "ui_hide_collections" => "", //collections to hide
//        "ui_hide_system_collections" => false, //whether hide the system collections
//        "docs_nature_order" => false, //whether show documents by nature order, default is by _id field
//        "docs_render" => "default", //document highlight render, can be "default" or "plain"
//    ],
//    [
//        "mongo_name" => "localhost2",
//        "mongo_host" => "127.0.0.1",
//        "mongo_port" => "27017",
//        "control_users" => [
//            "admin" => "admin",
//        ],
//    ]
//];

$MONGO["servers"] = [

];
