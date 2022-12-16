<?php
function fetchPortfolios($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM portfolio ORDER BY id DESC");
    $fetch->execute();

    $portfolios = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $portfolios[] = $row;
    }
    return $portfolios;
}

function fetchPhotoPort($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM portfolio WHERE port_type=1 ORDER BY id DESC");
    $fetch->execute();
    $PhotoPort = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $PhotoPort[] = $row;
    }
    return $PhotoPort;
}

function fetchVideoPort($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM portfolio WHERE port_type=2 ORDER BY id DESC");
    $fetch->execute();
    $VideoPort = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $VideoPort[] = $row;
    }
    return $VideoPort;
}

function fetchArchives($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM archives ORDER BY id DESC");
    $fetch->execute();

    $archives = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $archives[] = $row;
    }
    return $archives;
}

function getMsg($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM message ORDER BY id DESC");
    $fetch->execute();

    $msgs = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $msgs[] = $row;
    }
    return $msgs;
}

function getHomeMsg($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM message ORDER BY id DESC LIMIT 3");
    $fetch->execute();

    $msgs = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $msgs[] = $row;
    }
    return $msgs;
}

function getHomePort($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM portfolio ORDER BY id DESC LIMIT 3");
    $fetch->execute();

    $ports = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $ports[] = $row;
    }
    return $ports;
}

function getHomeArch($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM archives ORDER BY id DESC LIMIT 3");
    $fetch->execute();

    $archs = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $archs[] = $row;
    }
    return $archs;
}


function fetchSinglePort($dbconn, $id)
{
    $single_port = $dbconn->prepare("SELECT * FROM portfolio WHERE id=:pid");
    $single_port->bindParam(":pid", $id);
    $single_port->execute();
    $port = [];

    while ($row = $single_port->fetch(PDO::FETCH_BOTH)) {
        $port = $row;
    }
    return $port;
}

function fetchSingleArch($dbconn, $id)
{
    $single_arch = $dbconn->prepare("SELECT * FROM archives WHERE id=:pid");
    $single_arch->bindParam(":pid", $id);
    $single_arch->execute();
    $arch = [];

    while ($row = $single_arch->fetch(PDO::FETCH_BOTH)) {
        $arch = $row;
    }
    return $arch;
}

function fetchClients($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM logos ORDER BY id DESC");
    $fetch->execute();

    $clients = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $clients[] = $row;
    }
    return $clients;
}

function fetchSingleClient($dbconn, $id)
{
    $single_client = $dbconn->prepare("SELECT * FROM logos WHERE port_id=:pid");
    $single_client->bindParam(":pid", $id);
    $single_client->execute();
    $client = [];

    while ($row = $single_client->fetch(PDO::FETCH_BOTH)) {
        $client = $row;
    }
    return $client;
}

function fetchTestimonials($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM testimonial ORDER BY id DESC");
    $fetch->execute();

    $testimonials = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $testimonials[] = $row;
    }
    return $testimonials;
}


function fetchSingleTest($dbconn, $id)
{
    $single_test = $dbconn->prepare("SELECT * FROM testimonial WHERE id=:tid");
    $single_test->bindParam(":tid", $id);
    $single_test->execute();
    $test = [];

    while ($row = $single_test->fetch(PDO::FETCH_BOTH)) {
        $test = $row;
    }
    return $test;
}

function fetchArticles($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM archives WHERE category='article'");
    $fetch->execute();

    $articles = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $articles[] = $row;
    }
    return $articles;
}


function fetchEbooks($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM archives WHERE category='ebook'");
    $fetch->execute();

    $ebooks = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $ebooks[] = $row;
    }
    return $ebooks;
}


function fetchMagazines($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM archives WHERE category='magazine'");
    $fetch->execute();

    $magazines = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $magazines[] = $row;
    }
    return $magazines;
}

function fetchBlogs($dbconn)
{
    $fetch = $dbconn->prepare("SELECT * FROM archives WHERE category='blog'");
    $fetch->execute();

    $blogs = [];

    while ($row = $fetch->fetch(PDO::FETCH_BOTH)) {
        $blogs[] = $row;
    }
    return $blogs;
}
