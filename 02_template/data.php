<?php

include "libs/utility.php";

$config = (object)[];
$config->title_app = "Template";
$config->title_home = "Home";
$config->title_sync = "Page synchrone";

function getPersos() {
    return [
        ["Ralph", 0],
        ["Seya", 1],
        ["Megamind", 0],
        ["Mario", 2],
        ["Link", 2],
        ["Totoro", 1],
        ["Guts", 1]
    ];
}

function getGenres() {
    return [
        0 => "Animé",
        1 => "Manga",
        2 => "Jeu video",
    ];
}

function setUsers($persos, $genres) {
    $users = null;
    for ($i = 0; $i <  count($persos); $i += 1) {
      // en js on ferait persos.length ci-dessus
        $users[] = (object)[];
        $users[$i]->name = $persos[$i][0];
        $users[$i]->genre = $genres[$persos[$i][1]];
    }
    return $users;
}

function getUsers(){
  return setUsers(getPersos(), getGenres());
}

function getUsersAjax() {
    $users = setUsers(getPersos(), getGenres());
    // debug($users);
    echo json_encode($users);
}


if (isset($_GET["ajax"]) && $_GET["ajax"] === "users") {
    getUsersAjax();
}
