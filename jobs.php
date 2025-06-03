<?php
 include('navbar.php');
?>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link href="/style/jobs.css" rel="stylesheet">




<?php 
    if(isset($_SESSION['UserCourses'])){
     if(count($_SESSION['UserCourses']) > 0){
?>
        <div class="row" style="margin-top: 6rem;">
                <div class="col-0 col-sm-2"></div>
                <div class="col-12 col-sm-8">
                    <div id="courses">
                        <h4 id="courseText">Today's jobs</h4>
                        <?php
                            $FetchCourses = "SELECT DISTINCT * FROM omoore94_growthbook.courselist";        
                            $FetchCoursesResult = mysqli_query($conn, $FetchCourses);
                            for($i=0; $i < count($_SESSION['UserCourses']); $i++){
                                if($_SESSION['UserCourses'][$i] == "HTML5"){
                                    $Icon = "<i class='devicon-html5-plain-wordmark colored'></i>";    
                                }
                                elseif($_SESSION['UserCourses'][$i] == "CSS3"){
                                    $Icon = "<i class='devicon-css3-plain-wordmark colored'></i>";
                                }
                                elseif($_SESSION['UserCourses'][$i] == "Javascript"){
                                    $Icon = "<i class='devicon-javascript-plain colored'></i>";
                                }
                        ?>
                        <a href="lessons.php?Type=<?= $_SESSION['UserCourses'][$i]; ?>">
                            <div class="card">
                                <div class="row">
                                    <div class="col-1">
                                        <!-- <?= $Icon; ?>  -->
                                    </div>
                                    <div class="col-11">
                                        <h5 class="companyName">
                                            Company Name
                                        </h5>
                                        <h4 class="jobTitle">
                                            <?= $_SESSION['UserCourses'][$i]; ?>
                                        </h4>
                                        <p class="jobDescription">
                                            Job Desciption
                                        </p>
                                        <small class="jobAge">
                                            4 days ago
                                        </small>
                                    </div>
                                </div>
                                <div class="answer"></div>
                            </div>
                        </a>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-0 col-sm-2"></div>
            </div>
        </div>
<?php
        }
    }
?>




<div class="row" style="margin-top: 6rem;">
        <div class="col-0 col-sm-1"></div>
        <div class="col-12 col-sm-10">
            <div id="courses">
                <!-- <h2 id="courseText">Today's jobs</h2> -->
                <h2 id="courseSubText" style="margin-top: 2rem;">Browse jobs by whatever peaks your interest</h2>
                <div style="width: 50%; margin: 1rem auto;">
                     <?php include('resources/jobSearchBar.php');?>
                </div>
                <?php
                    $FetchCourses = "SELECT DISTINCT * FROM omoore94_growthbook.courselist";        
                    $FetchCoursesResult = mysqli_query($conn, $FetchCourses);
                    while($row = mysqli_fetch_assoc($FetchCoursesResult)){
                        if($row['CourseName'] == "HTML5"){
                            $Icon = "<i class='devicon-html5-plain-wordmark colored'></i>";    
                        }
                        elseif($row['CourseName'] == "CSS3"){
                            $Icon = "<i class='devicon-css3-plain-wordmark colored'></i>";
                        }
                        elseif($row['CourseName'] == "Javascript"){
                            $Icon = "<i class='devicon-javascript-plain colored'></i>";
                        }
                ?>
                <a href="lessons.php?Type=<?= $row['CourseName']; ?>">
                    <div class="card">
                        <div class="row">
                            <div class="col-1">
                                <?= $Icon; ?> 
                            </div>
                            <div class="col-4">
                                <h5>Job Title</h5>
                                <h6>Company Name</h6>
                                <h6>Location Name</h6>
                                <h6>Salary</h6>
                            </div>
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Praesent tincidunt non elit eget viverra. 
                                Aliquam vitae tellus ac neque ornare luctus id ac tortor. 
                                Mauris ac porttitor libero. Ut non nunc et justo ultrices mollis eget nec lorem. 
                                In in laoreet ante. Pellentesque et malesuada erat, vitae posuere ex.</p>
                            </div>
                            <div class="col-1">
                                <p>
                                    <!-- <i class="fas fa-calendar"></i> -->
                                    11 Days
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
                }
            ?>
        </div>
        <div class="col-0 col-sm-1"></div>
    </div>
</div>