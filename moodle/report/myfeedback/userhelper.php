<?php

$q = array("What is My Feedback?","How to open My Feedback","Set up the My feedback roles for staff access",
           "How to Make a quiz ?","How do users access the report","How can student control privicity of his feedback Report");

$a = array("My Feedback is a single-view report that enables different staff and student roles to view a report of grades and feedback recorded in Moodle,"
        . " across modules. The report includes Moodle Assignments, Turnitin Assignments, Workshops, Quizzes and Grade items entered directly in the Moodle course Gradebook."
        . " The report provides links to submissions and any feedback that has been released to students.",
        "<ol><li>Sign in</li><li>From top Right Click on the drop menu</li><li>Choose Profile</li><li>Under Reports List Click on My Feedback</li></ol>",
        "<ol><li>Log in as a site admin </li><li>go to Site Administration </li><li>Users > Permission</li><li> Define Roles</li><li> At the bottom of the page 'Add a new role'</li></ol>",
         "<ol><li>Log in as a Teacher </li><li>Choose the course</li><li>Users</li><li> Participants</li><li>From Action menu choose Turn editing on</li><li>Add an activity or resourse</li><li>Quiz</li><li>Add</li></ol>",
    "the report can be accessed via the user profile (Reports > My Feedback). Access is controlled by the user context, teachers will be able to see grades and feedback for students enrolled on the courses that they teach."
    . " Students (who aren't also teachers) can only see their own grades. Programme Administrators can see all grades for all students in the category they have been assigned access to (unless permissions prohibit this).",
    "Answer is not available now 6"
    );
echo '<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UserHelper</title>
  </head>
  <body>';
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light alert alert-primary">
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <h1>User Helper for My Feedback plugin</h1>
  </div>
  <div><a class="navbar-brand" href="../myfeedback">MOODLE</a></div>
</nav>';
echo '  
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">'.$q[0].'</a>';
      for ($i = 1; $i <= sizeof($q)-1; $i++) {
      echo'<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#'.$i.'" role="tab" aria-controls="profile">'.$q[$i].'</a>';}
          

   echo ' 
</div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">'.$a[0].'</div>';
for ($i = 1; $i <= sizeof($a)-1; $i++) {
echo'<div class="tab-pane fade" id="'.$i.'" role="tabpanel" aria-labelledby="list-profile-list">'.$a[$i].'</div>';}
echo '
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>';
