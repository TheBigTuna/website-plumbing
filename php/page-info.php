<?php

// Website Name
$Website_name = "Detroit Emergncy Plumbing";
$_SESSION['website_name'] = $Website_name;

// This page hold any information needed for the current page
if(strpos($_SERVER['REQUEST_URI'],"/") > -1 || strpos($_SERVER['REQUEST_URI'],"index.php") > -1){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Services";
    $_SESSION['Description'] = "If you need a contractor for concrete services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-driveway")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Driveway Services";
    $_SESSION['Description'] = "If you need a contractor for a your concrete driveway services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-commercial")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Commercial Services";
    $_SESSION['Description'] = "If you need a contractor for commercial concrete project services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-foundation")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Foundation Services";
    $_SESSION['Description'] = "If you need a contractor for concrete foundation services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"sidewalks")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Sidewalk Services";
    $_SESSION['Description'] = "If you need a contractor for concrete sidewalk services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-cutting")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Cutting Services";
    $_SESSION['Description'] = "If you need a contractor for concrete cutting services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-driveway")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Driveway Services";
    $_SESSION['Description'] = "If you need a contractor for concrete driveways in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-driveway-repair")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Driveway Repair Services";
    $_SESSION['Description'] = "If you need a contractor for driveway repairs in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-foundation")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Foundation Services";
    $_SESSION['Description'] = "If you need a contractor for concrete foundations in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-driveway-repair")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Driveway Repair Services";
    $_SESSION['Description'] = "If you need a contractor for driveway repair services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-stamped")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Stamped Concrete Services";
    $_SESSION['Description'] = "If you need a contractor for stamped concrete services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-slabs")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Slabs Services";
    $_SESSION['Description'] = "If you need a contractor for concrete slabs in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"concrete-driveway-patio")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete Patio Services";
    $_SESSION['Description'] = "If you need a contractor for concrete paito services in Ann Arbor, MI, call us!";
}
if(strpos($_SERVER['REQUEST_URI'],"faq")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Concrete FAQ";
    $_SESSION['Description'] = "If you need a contractor for concrete services in Ann Arbor, MI, call us!";
}

if(strpos($_SERVER['REQUEST_URI'],"contact-us")){
    $_SESSION['current_page'] = $Website_name . " | Ann Arbor, MI  Contact";
    $_SESSION['Description'] = "If you need a contractor for concrete services Ann Arbor, MI, call us!";
}
// Depending on the page apply the appropiate title


// else if(strpos($_SERVER['REQUEST_URI'],"/article.php") > -1){
//     // Query to fetch currently available articles
//     $ID = mysqli_real_escape_string($conn, $_GET['ID']);

//     $FetchArticles = "SELECT * FROM omoore94_animerooms.cmsarticles AS A INNER JOIN omoore94_animerooms.cmsarticlesinfo AS AI ON AI.ID = A.ID WHERE A.ID = $ID ORDER BY A.ID DESC";
//     $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
//     $ArticleRow = array();
//     while($row = mysqli_fetch_assoc($FetchArticlesResult)){
//         array_push($ArticleRow, $row);
//     }

//     $_SESSION['CurrentPage'] = $ArticleRow[0]['ArticleName'];
//     $_SESSION['CurrentSubtitle'] = $ArticleRow[0]['ArticleSubTitle'];
//     $_SESSION['Description'] = $ArticleRow[0]['ArticleSubTitle'];
//     $_SESSION['ArticleAuthor'] = $ArticleRow[0]['User'];

//     $ImageArray = array();
//     $FetchArticlesImages = "SELECT * FROM omoore94_animerooms.cmsarticlesimages WHERE ArticleID = $ID";
//     $FetchArticlesImagesResult = mysqli_query($conn, $FetchArticlesImages);
//     while($row = mysqli_fetch_assoc($FetchArticlesImagesResult)){
//         array_push($ImageArray, $row);
//     }

//     $TagsArray = array();
//     $FetchArticlesTags = "SELECT * FROM omoore94_animerooms.cmsarticlestags WHERE ID = $ID";
//     $FetchArticlesTagsResult = mysqli_query($conn, $FetchArticlesTags);
//     while($row = mysqli_fetch_assoc($FetchArticlesTagsResult)){
//         array_push($TagsArray, $row);
//     }

//     $VideoArray = array();
//     $FetchArticlesVideos = "SELECT * FROM omoore94_animerooms.cmsarticlesvideos WHERE ID = $ID";
//     $FetchArticlesVideosResult = mysqli_query($conn, $FetchArticlesVideos);
//     while($row = mysqli_fetch_assoc($FetchArticlesVideosResult)){
//         array_push($VideoArray, $row);
//     }

//     $LinksArray = array();
//     $FetchArticlesLinks = "SELECT * FROM omoore94_animerooms.cmsarticleslinks WHERE ID = $ID";
//     $FetchArticlesLinksResult = mysqli_query($conn, $FetchArticlesLinks);
//     while($row = mysqli_fetch_assoc($FetchArticlesLinksResult)){
//         array_push($LinksArray, $row);
//     }
// }
// else{
//     $_SESSION['CurrentPage'] = "animerooms";
//     $_SESSION['Description'] = "Welcome to animerooms, a place where you can come to learn and talk anything anime and manga related.";
// }

// If recent articles have not been stored create a recent articles variable and store the five most recent articles
// unset($_SESSION['RecentArticles']);
// if(!isset($_SESSION['RecentArticles'])){
//     $_SESSION['RecentArticles'] = array();
//     $FetchArticles = "
//     SELECT 
//     DISTINCT
//     * 
//     FROM omoore94_animerooms.cmsarticles AS A 
//     INNER JOIN omoore94_animerooms.cmsarticlesinfo AS B ON A.ID = B.ID 
//     INNER JOIN omoore94_animerooms.cmsarticlesimages AS C ON A.ID = C.ArticleID 
//     WHERE C.ImgNum = '1'
//     ORDER BY Timestamp DESC 
//     LIMIT 5
//     ";        
//     $FetchArticlesResult = mysqli_query($conn, $FetchArticles);
//     while($row = mysqli_fetch_assoc($FetchArticlesResult)){
//         array_push($_SESSION['RecentArticles'], $row);
//     }
// }

function createSlug($Url,$Var){
    $Url = strtolower($Url);
    // if(strpos($_SERVER['REQUEST_URI'],"/article.php")){
    //     $Url = substr($Url, 0, strrpos($Url, '?'));
    //     $Url .= "/Article";
    //     $Url .= "/" . $Var['ID'];
    //     $Url .= "/" . $Var['Title'];
    //     $Url = str_replace("_", "-", $Url);
    //     $Url = str_replace("#", "", $Url);
    //     $Url = str_replace("+", "", $Url);
    //     $Url = str_replace(">", "", $Url);
    //     $Url = str_replace("<", "", $Url);
    //     $Url = str_replace("(", "", $Url);
    //     $Url = str_replace(")", "", $Url);
    //     $Url = str_replace("=", "", $Url); 
    //     $Url = str_replace(" ", "-", $Url);
    // }
    // return $Url;





    
    $Slug = array();
    array_push($Slug,$Url);
    array_push($Slug,$Var['ID']);
    array_push($Slug,$Var['Title']);

    return $Slug;
} 

// echo  http_build_query(createSlug($_SERVER['REQUEST_URI'],$_GET));
// $Slug = createSlug($_SERVER['REQUEST_URI'],$_GET);
// http_build_query($Slug);

// if(empty($_SESSION['ShowNewsletter'])){
//     $_SESSION['ShowNewsletter'] = false;
// }
// if($_SESSION['ShowNewsletter'] === false){
//     $_SESSION['ShowNewsletter'] = true;
// }
?>