<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Home Page for SE 6367 Software Testing</title>
  <link rel="stylesheet" href="cseet.css" type="text/css" />

  <style>
    .schedule td {
      padding: 2px;
      padding-right: 12px;
      text-align: left;
    }

    ul.relative {
      position: relative;
      left: -24px;
    }
  </style>
</head>

<body>
  <?php

  $lines = file('ps');
  $credentials = array();

  foreach ($lines as $line) {
    if (empty($line)) continue;

    // whole line
    $line = trim(str_replace(": ", ':', $line));
    $lineArr = explode(' ', $line);

    // username only
    $username = explode(':', $lineArr[0]);
    $username = array_pop($username);

    // password
    $password = explode(':', $lineArr[1]);
    $password = array_pop($password);

    // putting them together
    $credentials[$username] = $password;
  }

  $user = $_POST['username'];
  $pass = $_POST['password'];

  if ((array_key_exists($user, $credentials)) && ($credentials[$user] == $pass)) {
  ?>

    <center><b>
        <font size=+2> </font>
      </b>
      <br><b>
        <font size=+2>SE 6367, CS 6367, SYSM 6310: Software Testing</font>
      </b><br>
      <br><b>
        <font size=+2>Spring 2024</font>
      </b><br>
      <!-- <br><b><font >ECSS 2.311</font></b> -->
      <br><b>
        <font>10:00am - 12:45pm, Friday, ECSS 2.415</font>
      </b>
    </center>
    <!------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Instructor</font>
        </font>
      </b>
    <blockquote>
	  <b>W. Eric Wong</b>
      <!--<b><a href="../index.html" target="_blank">W. Eric Wong</a></b>-->
      <br><b>Office: ECSS 3.224</b>
      <br><b>Email: <a href="mailto:ewong@utdallas.edu">ewong@utdallas.edu</a></b>
      <br><b>Office Hours: 9:00 am - 10:00 am, Friday or by appointment
    </blockquote>
    <!--------------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Teaching Assistant</font>
        </font>
      </b>
    <blockquote>
      <b>Zizhao Chen</b>
      <br><b>Office: ECSS 3.216</b>
      <br><b>Email: <a href="mailto:zxc190007@utdallas.edu">zxc190007@utdallas.edu</a></b>
      <br><b>Office Hours: 2:00 pm - 3:00 pm, Friday or by appointment
    </blockquote>
    <!------------------------------------------------------------------------------>
    <p><b>
        <font color="#3333FF">
          <font size=+1>Text Book</font>
        </font>
      </b>
    <blockquote>
      <b>No text book</b>
    </blockquote>
    <!------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Reference</font>
        </font>
      </b>
    <blockquote>
      <li><b><em>
            <a target="_blank" href="http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=Software%20Testing%3A%20A%20Craftsman's%20Approach">
              Software Testing: A Craftsman's Approach</em></a>
          (4th Edition) by Paul Jorgensen</b>
      <li><b><em>
            <a target="_blank" href="https://www.oreilly.com/library/view/foundations-of-software/9788131794760/">
              Foundations of Software Testing</em></a> (2nd Edition)
          by Aditya Mathur</b>
    </blockquote>
    <!------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Course Description </font>
        </font>
      </b>
    <blockquote>
      Fundamental concepts of software testing;
      Functional testing;
      Black box-based testing;<br>
      White box-based testing;
      Requirement-based test generation;
      Controlflow and dataflow-based coverage criteria;<br>
      Test adequacy measurement and enhancement;
      Automatic test generation;
      Regression Testing;<br>
      Mutation testing; Combinatorial testing;
      Program debugging<br>
      <!--<b>Fundamental concepts of software testing;
      Functional testing;  <br>
      Black box-based testing;
      White box-based testing; <br>
      Requirement-based test generation;
      Controlflow and <br>
      dataflow-based coverage criteria; <br>
      Test adequacy measurement and enhancement; Regression Testing; <br>
      Combinatorial testing; <!-- Mutation testing;  -Program debugging-->
      <!---  Model-based testing;
      GUI Testing; Combinatorial-based testing; -->
      </b>
    </blockquote>
    <!------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Course Learning Objectives </font>
        </font>
      </b>
    <blockquote>
      <li>Ability to understand software testing and verification concepts
      <li>Ability to understand and apply test adequacy measurements
      <li>Ability to understand and use automated test generation techniques
      <li>Ability to understand and use regression testing techniques
      <li>Ability to understand and use mutation testing techniques
      <li>Ability to understand and use automated oracle generation techniques
      <li>Ability to understand and apply automated debugging and repair techniques
      <li>Ability to understand and perform static source code analysis
      <li>Ability to conduct software testing research project
      <li>Ability to use various source code or byte-code analysis tools/frameworks
    </blockquote>
    <!------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Course Syllabus </font>
        </font>
      </b>
    <blockquote>
      <li>Syllabus
        <!-- [<a href=""></a>] -->
        [<a href="./Syllabus/Syllabus-SE6367-Spring-2024.pdf">pdf</a>]
      </li>
    </blockquote>
    <!------------------------------------------------------------------------------->
    <!-- <p><b><font color="#3333FF"><font size=+1>Group Organization and Student Contacts for Term Paper</font></font></b>
  <blockquote>
  <li>Group Organization
     [<a href=""></a>]
     [<a href="./Term-Paper/*.pdf">pdf</a>]</li>
  <li>Student Contacts
      [<a href=""></a>]
      [<a href="./Term-Paper/*.pdf">pdf</a>]</li>
  </blockquote> -->

    <!------------------------------------------------------------------------------->
    <!-- <p><b><font color="#3333FF"><font size="+1">Attendance Policy</font></font></b>
   </p><blockquote>
   <li>Absence in three consecutive lectures will result in the course grade being lowered by one letter. </li>
   <li>Absence in four consecutive lectures will automatically result in a failing grade (F) in the course.</li>
   <br>
   Click 
   <a href="https://cs.utdallas.edu/education/graduate/attendance-policy/"> here</a>
   for more details.
   <br>
   </blockquote> -->
    <!------------------------------------------------------------------------------->

    <p><b>
        <font color="#3333FF">
          <font size=+1>Grading</font>
        </font>
      </b>
    <blockquote>
      <table cellpadding="0" class="schedule">
        <tr>
          <td>
            <li><b>Exam I:</b></li>
          </td>
          <td><b>30%</b></td>
        </tr>
        <tr>
          <td>
            <li><b>Exam II:</b></li>
          </td>
          <td><b>30%</b></td>
        </tr>
        <tr>
          <td>
            <li><b>Projects (Individual):</b></li>
          </td>
          <td><b>20%</b></td>
        </tr>
        <tr>
        <tr>
          <td>
            <li><b>Software Testing Contest: </span></b></li>
          </td>
          <td><b>10%</b></td>
          <!--<td><b>10% <！--<span style="color:red">(03/30/2024, Saturday)</span>-->
        </tr>
        <tr>
          <td>
            <li><b>Homework & Exercises:</b></li>
          </td>
          <td><b>10%</b></td>
        </tr>
      </table>
    </blockquote>
    </p>

    <p><b>
        <font color="#3333FF">
          <font size=+1>Important Dates</font>
        </font>
      </b>
    <blockquote>
      <table cellpadding="0" class="schedule">
        <tr>
          <td>
            <li><b>Exam I:</b></li>
          </td>
          <td><b>03/22/2024 (Friday)</b></td>
        </tr>
        <tr>
          <td>
            <li><b>Exam II:</b></li>
          </td>
          <td><b>05/03/2024 (Friday)</b></td>
        </tr>
      </table>
    </blockquote>
    </p>

    <p><b>
        <font color="#3333FF">
          <font size=+1>Class Schedule (Tentative)</font>
        </font>
      </b>
    <blockquote>
      <!-- <li>Lecture Schedule
      [<a href="./03-Lecture/2020-06-02-Class-Schedule-3.pdf">pdf</a>] -->
    </blockquote>

    <blockquote>
      <table cellpadding="0" border=1 class="schedule">
        <tr>
          <td>01/19/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Lecture</td>
        <tr>
          <td>01/26/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>
            (1) Special Lecture on <font style="color: blue">Using ChatGPT for Test Generation: Demo & Discussion</font> (Dr. Linghuan Hu, Google)
            <br>
            (2) Lecture
          </td>
        <tr>
          <td>02/02/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Lecture</td>
          <!--<td style="color: blue">Special Lecture on Test-Driven Development, Technical Debt, and Refactoring</td>-->
        <tr>
          <td>02/09/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>(1) Lecture<br>(2) <font style="color: blue">xSuds Hands-on Tutorial</font> (11:00 - 12:45)</td>
        <tr>
          <td>02/16/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Special Lecture on <font style="color: blue">AI in Quality Assurance</font> (Dr. Xuelin Li, Nvidia)</td>
        <tr>
          <td>02/23/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Lecture</td>
        <tr>
          <td>03/01/2024</td>
          <td>Friday</td>
          <td>09:30am – 12:30pm <br>(3 hours)</td>
          <td>
            Special Lecture on <font style="color: blue">Software Safety: Process Overview and Application</font>
            <br>
            (Dr. Mike Siok, Former Lockheed Martin Aeronautics/UT Arlington)
          </td>
        <tr>
          <td>03/08/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>
            (1) Lecture<br>
            (2) <font style="color: blue;">Software Safety: Homework Presentation</font> (10:00 - 11:00)</td>
        <tr>
          <td>03/15/2024</td>
          <td>Friday</td>
          <td>N/A</td>
          <td>Spring Break</td>
        <tr>
          <td>03/22/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Exam I</td>
        <tr>
          <td>03/29/2024</td>
          <td>Friday</td>
          <td>N/A</td>
          <td>No class</td>
        <tr>
          <td>03/30/2024</td>
          <td>Saturday</td>
          <td>09:30am – 12:30pm <br>(3 hours)</td>
          <td>Software Testing Contest</td>
        <tr>
          <td>04/05/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Special Lecture on <font style="color: blue">Combinatorial Testing and its Applications</font> <br> (Dr. Rick Kuhn, USA National Institute of Standards and Technology)
          </td>
        <tr>
          <td>04/12/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>
            (1) Lecture
            <br>
            (2) Special Lecture on <font style="color: blue">Real-World Test Automation</font> (Dr. Paul Grizzaffi, Principle Automation Architect/Cognizant Softvision)
          </td>
        <tr>
          <td>04/19/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Lecture</td>
          <!--<td style="color: blue">Special Lecture on Software Quality and Software Testing</td>-->
        <tr>
          <td>04/26/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Lecture</td>
        <tr>
          <td>05/03/2024</td>
          <td>Friday</td>
          <td>10:00am – 12:45pm</td>
          <td>Exam II</td>
        <tr>
      </table>
    </blockquote>
    </p>


    <!------------------------------------------------------------------------------->
    <!--
<p><b><font color="#3333FF"><font size=+1>Term Paper Presentation</font></font></b>
<blockquote>
   <li>1:30 pm, Saturday, December 3
   <li>Click [<a href="http://paris.utdallas.edu/ewong-course/SE6367-Schedule.pdf">here</a>]
       for the detailed schedule
</blockquote>
-->
    <!------------------------------------------------------------------------------->

    <p><b>
        <font color="#3333FF">
          <font size=+1>Lecture Notes</font>
        </font>
      </b>
    <blockquote>
      <ul class='relative'>
        <li>Foundations of Software Testing
          [<a href="./03-Lecture/03-Preliminary-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/03-Preliminary-two-slides.pdf">two-slide</a>]
          [<a href="./Photos/Foundations-of-Software-Testing-1.jpg">Image 1</a>]
          [<a href="./Photos/Foundations-of-Software-Testing-2.jpg">Image 2</a>]
        </li>
        <li>Adaptive Random Testing
          [<a href="./03-Lecture/05-ART-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/05-ART-two-slides.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/yuvpvxh4n2v9bbbpcvcob9vdt8cg99cf">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/53ntDq13ZAo">Video</a>]-->
          [<a href="./Quiz/2020-09-03-B-Quiz-1-Adaptive-Random-Testing.pdf">HW 01</a>]
        </li>
        <li>Using Mind Mapping to Design Test Cases
          [<a href="./03-Lecture/06-Mind-Mapping-Test-Generation-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/06-Mind-Mapping-Test-Generation-two-slides.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/jgo19x1kkcj1gq0k5u0cyppmz4401hxc">Video 1</a>]
          <!--[<a href="https://www.youtube.com/embed/L12jh0Qp57Q">Video</a>]-->
          [<a href="06-In-Class-Exercise/2021-05-27 - In-Class Exercise - Mind Mapping.pdf">In-Class Exercise</a>]
          [<a href="https://utdallas.box.com/s/ujx63pr51goil88uofkex8hyujcvp2tm">Video 2</a>]
          [<a href="06-In-Class-Exercise/2021-05-27 - Homework 2 - Mind Mapping.pdf">HW 02</a>]
        </li>
        <li>Requirement-based Test Generation for Functional Testing
          (Equivalence Class Partitioning and Boundary Value Analysis)
          <br>
          [<a href="./03-Lecture/07-Requirements-based-Functional-Testing-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/07-Requirements-based-Functional-Testing-two-slides.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/dzjchnakwi4aq3uqijqryfqkzlgetniw">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/rTRWbzEnOnk">Video</a>]-->
          [<a href="./Quiz/2021-05-27-Quiz-3-Requirement-based-Test-Generation.pdf">HW 03</a>]
          <!--[<a href="./Solutions/Solution-HW3.pdf">Solution</a>]-->
        </li>
        <li>Code Coverage Testing and Tool Support
          [<a href="./03-Lecture/10-Coverage-Testing-Criteria-and-Tools-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/10-Coverage-Testing-Criteria-and-Tools-two-slides.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/c1i06t3krtp1n8bg2nfga5x4lcw9t6mh">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/yNau9fHa8vQ">Video</a>]-->
          [<a href="./03-Lecture/10-Hira-01.pdf">Paper-1</a>]
          [<a href="./03-Lecture/10-Hira-02.pdf">Paper-2</a>]
          [<a href="./Photos/image-3.pdf">Image 3</a>]
          <!-- [<a href="./Quiz/Quiz-4-Code-Coverage-Testing-and-Tool-Support.pdf">Quiz</a>] -->
        </li>
        <li>Controlflow-based Coverage Criteria
          [<a href="./03-Lecture/11-Controlflow-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/11-Controlflow-two-slides.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/4mvqo6nu11pp2om9b00agzqbw9gojz7b">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/HoATMXQMj8c">Video</a>]-->
          [<a href="./03-Lecture/image3.jpg">Image 4</a>]
          [<a href="./03-Lecture/image4.jpg">Image 5</a>]
          [<a href="./02-Homework/03-complete-Adequacy.pdf">HW 04</a>]
          <!--[<a href="./Solutions/03-Solution-HW4.pdf">Solution</a>]-->

        </li>
        <li>Dataflow-based Coverage Criteria
          [<a href="./03-Lecture/12-Dataflow-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/12-Dataflow-two-slides.pdf">two-slide</a>]
          [<a href="./03-Lecture/Revised-Image5-2021-06-15.pdf">Image</a>]
        </li>
        <li>Test Adequacy Measurement and Enhancement
          [<a href="./03-Lecture/15-Test-Adequacy-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/15-Test-Adequacy-two-slides.pdf">two-slide</a>]
        </li>
        <li>MC/DC Coverage
          [<a href="./03-Lecture/66-Special-Lecture-MC-DC-Coverage-Posted.pdf">one-slide</a>]
          <!--[<a href="./03-Lecture/66-Special-Lecture-MC-DC-Coverage-Posted-two-slides.pdf">two-slide</a>]-->
        </li>
        <li>Coverage Testing SDL Models (Architectural Design-based)
          [<a href="./03-Lecture/16-Coverage-Testing-SDL-one-slide.pdf">one-slide</a>]
          [<a href="./03-Lecture/16-Coverage-Testing-SDL-two-slides.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/aiufld9iw1lpmkvap8ppmzx30wva2xg4">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/_w-eXksWR7U">Video</a>]-->
          <!-- [<a href="./Quiz/Quiz-6-SDL.pdf">Quiz</a>] -->
        </li>
        <li>Combinatorial Testing & its Applications
          [<a href="03-Lecture/33-Combinatorial-Testing-UTD-Lecture-One-slide.pdf">one-slide</a>]
          [<a href="03-Lecture/33-Combinatorial-Testing-UTD-Lecture-Two-slide.pdf">two-slide</a>]
          [<a href="03-Lecture/33-Combinatorial-Testing-Set-2.pdf">Set-II</a>]
          [<a href="03-Lecture/2020-06-16-CT-Image.pdf">Image</a>]
          [<a href="06-In-Class-Exercise/2019-09-04-In-Class-Combinatorial-Testing-A.pdf">HW 05</a>]
          [<a href="06-In-Class-Exercise/2020-06-16-B-In-Class-Combinatorial-Testing-B.docx">HW 06</a>]
          [<a href="04-Tutorial/CT-Tutorial/CT-Tutorial.html">Hands-on Tutorial</a>]
        </li>
        <li>Regression Testing
          [<a href="./03-Lecture/20-Regression-Testing-one-slide-to-Page46.pdf">one-slide</a>]
          [<a href="./03-Lecture/20-Regression-Testing-two-slides-to-Page46.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/5ay24c6scbu931c7x05ig179orb3pnuu">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/S3z4C4r4_rE">Video</a>]-->
          [<a href="./03-Lecture/xRegress-Demo-1.wmv">Demo 1</a>]
          [<a href="./03-Lecture/xRegress-Demo-2.wmv">Demo 2</a>]
          <!-- [<a href="./Quiz/Quiz-8-Regression.pdf">Quiz</a>] -->
          [<a href="./04-Tutorial/xRegress-Tutorial/xRegress-Tutorial.html">Hands-on Tutorial</a>]
          [<a href="./03-Lecture/References.pdf">References</a>]
        </li>
        <li>Mutation Testing
          [<a href="./03-Lecture/28-Mutation-Testing-one-slide-to-Page61.pdf">one-slide</a>]
          [<a href="./03-Lecture/28-Mutation-Testing-two-slides-to-Page61.pdf">two-slide</a>]
          [<a href="https://utdallas.box.com/s/zgmsqfmg3s1t64pxkww33v9omgvnrl1l">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/4vFKwHQJvrs">Video</a>]-->
        </li>
        <li>Software Fault Localization
          [<a href="./03-Lecture/25-Fault-Localization-2017-06-20-1-slide-to-140.pdf">one-slide</a>]
          [<a href="./03-Lecture/25-Fault-Localization-2017-06-20-2-slide-to-140.pdf">two-slide</a>]
          [<a href="./03-Lecture/Image-dice.pdf">image</a>]
          [<a href="https://utdallas.box.com/s/apfstm2x3n40j2vpu5hoyv93gi0cjiti">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/r03enx5dcJg">Video</a>]-->
          [<a href="./04-Tutorial/xSlice-Tutorial/xSlice-Tutorial.html">Hands-on Tutorial</a>]
        </li>
        <li>Using Mutation to Automatically Suggest Fixes for Faulty Programs
          [<a href="https://utdallas.box.com/s/yctybg1pofwqkk6r7bien9znlnszztxc">Video</a>]
          <!--[<a href="https://www.youtube.com/embed/gCra-_paFsQ">Video</a>]-->
        </li>
      </ul>
    </blockquote>

    <!-- <p><b><font color="#3333FF"><font size=+1>Exam</font></font></b>
<blockquote>
<ul class='relative'>
  <li>Exam [<a href="09-Exam/FirstName-LastName-Exam.docx">Word Document</a>]<br>
  <li>Exam (a Word document) <br>
      &ndash; will be available at 4:00 PM, June 30

  </ul>
</ul>   
</blockquote> -->

    <!------------------------------------------------------------------------------->
    <p><b>
        <font color="#3333FF">
          <font size=+1>Projects</font>
        </font>
      </b>
    <blockquote>
      <ul class='relative'>
        <li>Project 1 (Functional Testing) [<a href="./01-Project/2020-08-28-Project-1-Functional-Testing.html">Project Description</a>]<br>
          Due: February 09, 11:59 PM (CDT)
        <li>Project 2 (Controlflow- and Dataflow-based Testing)
          [<a href="./01-Project/2020-09-12-Project-2-Controlflow-and-Dataflow-Based-Testing.html">Project Description</a>]<br>
          Part I Due: February 16, 11:59 PM (CDT) <br>
          Part II Due: March 1, 11:59 PM (CDT)
        <li>Project 3 (Effective Software Fault Localization)
          [<a href="./01-Project/2022-04-15-Project-03.pdf" class="disabled">Project Description</a>]<br>
          Part I Due: TBA<br>
          Part II Due: TBA<br>
          [<a href="./01-Project/01-Metamorphic-Slice.pdf">Paper-01</a>]
          [<a href="./01-Project/02-A-Consensus-based.pdf">Paper-02</a>]
          [<a href="./01-Project/03-RBF.pdf">Paper-03</a>]
          [<a href="./01-Project/04-BP.pdf">Paper-04</a>]
          [<a href="./01-Project/05-Crosstab.pdf">Paper-05</a>]
          [<a href="./01-Project/06-DStar.pdf">Paper-06</a>]<br>
          [<a href="./01-Project/07-Family-of-Code-Coverage-based.pdf">Paper-07</a>]
          [<a href="./01-Project/08-Inter-Block-Data-Dependency.pdf">Paper-08</a>]
          [<a href="./01-Project/09-Fault-Interference.pdf">Paper-09</a>]
          [<a href="./01-Project/10-Automatically-Suggest-Fixes.pdf">Paper-10</a>]
          [<a href="./01-Project/11-Ties.pdf">Paper-11</a>]
          [<a href="./01-Project/12-Estimation-of-Adequate-Test-Set-Size.pdf">Paper-12</a>]<br>
        <li>Project 4 (Software Testing Contest)<br>
        <li>Helpful Information</li>
        <ul>
          <li>Connect to our Project Server
            <a href="./04-Tutorial/xSudsu-Server/Project access by MobaXterm.pdf"> [Click Here]</a>
          </li>
          <li>How to download the file from the project server to the local machine
            <a href="./04-Tutorial/MobaXterm tutorial-Ready-Revised.pdf"> [Click Here]</a>
          </li>
          <li>Introduction on Shell Scripting
            <a href="./04-Tutorial/Shell-Script/Introduction on Shell Scripting.pdf"> [Click Here]</a>
          </li>
          <li>xSuds User's Manual
            <a href="./04-Tutorial/xSuite-Tutorial/help/coverpage.html"> [Click Here]</a>
          </li>
          <li>Tutorial of The xSuds Toolsuite (also known as IBM C and C++ Testing and Maintenance Tool Suite)<br>
            <a href="./04-Tutorial/xSuite-Tutorial/2021-06-08-xSuite-Tutorial.html">[Tutorial]</a>
          </li>
        </ul>
      </ul>
    </blockquote>

    <p><b>
        <font color="#3333FF">
          <font size=+1>Homework & Exercises</font>
        </font>
      </b>
    <blockquote>
      <li> Adaptive Random Testing
        <a href="Quiz/2020-09-03-B-Quiz-1-Adaptive-Random-Testing.pdf">[HW 01]</a><!--[<a href="./Solutions/Suggested-Solution-HW1.pdf">Solution</a>]-->
        Due: January 26, 11:59 PM (CDT)
      </li>
      <li> Mind Mapping for Test Generation
        <a href="./06-In-Class-Exercise/2021-05-27 - Homework 2 - Mind Mapping.pdf">[HW 02]</a><!--[<a href="./Solutions/Mind Mapping/Mind Mapping - Excellent Hotel Suggested Solution.pdf">Solution</a>]-->
        Due: February 9, 11:59 PM (CDT)
      </li>

      <li>xSuite Tutorial
        <a href="./02-Homework/02-ATAC - 2021-02-21.pdf">[Tutorial]</a> Due: February 09, 11:59 PM (CDT)
      </li>

      <li> Requirement-based Test Generation for Functional Testing
        <a href="Quiz/2021-05-27-Quiz-3-Requirement-based-Test-Generation.pdf">[HW 03]</a>
        <!--[<a href="./Solutions/Solution-HW3.pdf">Solution</a>]-->
        Due: February 9, 11:59 PM (CDT)
      </li>

      <li>Coverage Adequacy Criteria
        <a href="./02-Homework/03-complete-Adequacy.pdf">[HW 04]</a>
		Due: February 16, 11:59 PM (CDT)
        <!--[<a href="./Solutions/03-Solution-HW4.pdf">Solution</a>]-->
      </li>


      <li>Combinatorial Testing
        [<a href="./06-In-Class-Exercise/2019-09-04-In-Class-Combinatorial-Testing-A.pdf">HW 05</a>]
        <!--[<a href="./Solutions/In-Class-Combinatorial-Testing-A-Solution - 2019-09-04.pdf">Solution</a>]-->
        Due: February 23, 11:59 PM (CDT)
      </li>

      <li>Combinatorial Testing
        [<a href="./06-In-Class-Exercise/2020-06-16-B-In-Class-Combinatorial-Testing-B.pdf">HW 06</a>]
        <!--[<a href="./Solutions/In-Class-Combinatorial-Testing-B-Solutions - 2021-06-17.pdf">Solution</a>]-->
        Due: March 1, 11:59 PM (CDT)
      </li>
	  
	  <li>Combinatorial Testing: A Hands-on Tutorial
	    [<a href="./04-Tutorial/CT-Tutorial/CT-Tutorial.pptx">Readme</a>]
        [<a href="./04-Tutorial/CT-Tutorial/CT-Tutorial.html">Tutorial</a>],
        Due: March 18, 11:59 PM (CDT)
      </li>

      <li>xSuds Toolsuite xRegress (Regression Testing)
        <a href="./04-Tutorial/xRegress-Tutorial/xRegress-Tutorial.html">[Tutorial]</a>
        Due: TBA
      </li>

      <li> Slicing-based Software Fault Localization
        <a href="./02-Homework/05-xslice.pdf"> [pdf]</a>
        [<a href="./04-Tutorial/xSlice-Tutorial/xSlice-Tutorial.html">Tutorial</a>]
        Due: TBA
      </li>
    </blockquote>

    <p><b>
        <font color="#3333FF">
          <font size=+1>Special Lectures</font>
        </font>
      </b>
    <blockquote>
      <ul class='relative'>
        <!----------------------------
      <li>Test-Driven Development, Technical Debt, and Refactoring
        <!--[<a href="08-Special-Lecture/TDD-Tech-Debt-and-Refactoring.pptx">slide</a>]-->
        <!-- [<a href="08-Special-Lecture/Dr. Siok - July 8, 2021/Software-System-Safety-2.pdf">two-slide</a>]
        [<a href="https://cometmail.sharepoint.com/sites/SE6367M012228/Shared%20Documents/General/Recordings/View%20Only/Special%20Lecture%20on%20Software%20Safety_%20Process%20Overview%20and%20Application%20by%20Dr.%20Siok-20221008_090138-Meeting%20Recording.mp4?web=1">Video</a>]<br>--
        <br>Dr. Mark Paulk<br>
        <font color="blue">Date: February 2, 2024, 10:00 AM – 12:45 PM (CDT)</font><br>
          Department of Computer Science, UT Dallas<br>
		</li><br>-->
        <li>
          Using ChatGPT for Test Generation: Demo & Discussion
          [<a href="https://utdallas.box.com/s/lgot83c6q4znottkdwhn2fycjiy5oq19" target="_blank">slide</a>]
          [<a href="https://utdallas.box.com/s/f9u6odntyyxuoys6cofs2jkwwxuylhkg" target="_blank">video</a>]
          <br>Dr. Linghuan Hu<br>
          <font color="blue">Date: January 26, 2024, 11:00 AM – 12:00 PM (CDT)</font><br>
          Google
        </li>
        <br>
        
        <li>
          AI in Quality Assurance
          [<a href="https://utdallas.box.com/s/u36h6678stkf1pene6ib9wtavigwo8nw" target="_blank">slide</a>]
          <br>Dr. Xuelin Li<br>
          <font color="blue">Date: February 16, 2024</font><br>
          Nvidia
        </li>
        <br>

        <li>Software Safety: Process Overview and Application
		[<a href="https://utdallas.box.com/s/aj4lm9esc3g35xfwchvfrrpuck6nhylv">slide</a>]
		<!--[<a href="08-Special-Lecture/Mike-Siok-March 1, 2024/Group_Organization.pdf">Group Organization</a>]-->
          <!--[<a href="08-Special-Lecture/Software-System-Safety-presentation-UTD-112019.pptx">slide</a>]
		[<a href="08-Special-Lecture/Group-Organization-for-Special-Lecture-on-Software-Safety-E.pdf">Group Organization</a>]-->
		[<a href="https://utdallas.box.com/s/9920kk7qw8fevsrm7msabsc6p1gjxw8q">Video</a>]
		<!--[<a href="08-Special-Lecture/Dr.Siok- March 06, 2023/Homework Presentation for Special Lecture on Software Safety-20230310_085710-Meeting Recording.mp4">Presentation</a>]-->
          <!-- [<a href="08-Special-Lecture/Dr. Siok - July 8, 2021/Software-System-Safety-2.pdf">slide</a>]
        [<a href="https://cometmail.sharepoint.com/sites/SE6367M012228/Shared%20Documents/General/Recordings/View%20Only/Special%20Lecture%20on%20Software%20Safety_%20Process%20Overview%20and%20Application%20by%20Dr.%20Siok-20221008_090138-Meeting%20Recording.mp4?web=1">Video</a>]<br> -->


          <br>Dr. Mike Siok<br>
          <font color="blue">Date: March 1, 2024</font><br>
          Former Lockheed Martin Aeronautics/UT Arlington<br>
        </li><br>
        <li>Combinatorial Testing and its Applications
          <!--[<a href="08-Special-Lecture/Kuhn-Richard-Slides-UTD.pptx">slide</a>]
		[<a href="08-Special-Lecture/Richard Kuhn-March 24, 2023/Combinatorial Testing and its Applications.mp4">Video</a>]-->
          <!-- [<a href="https://www.dropbox.com/s/j92q8eqzl4bzddz/SE6367-CS6367-SYSM6310_%20Special%20Lecture_Richard_Meeting%20Recording.mp4?dl=0">Video</a>] -->
          <!-- [<a href="08-Special-Lecture/Dr. Kuhn - Oct 9, 2021/Scientific Test Methods and Defensible Measures of Test Coverage.pptx">pptx</a>] -->
          <!-- [<a href="https://paris.utdallas.edu/ewong/Testing Class Videos/2021-10-09 - Scientific Test Methods and Defensible Measures of Test Coverage.mp4">video</a>] -->
          <br>
          Dr. Richard Kuhn<br>
          <font color="blue">Date: April 5, 2024</font><br>
          USA National Institute of Standards and Technology<br>
        </li><br>

        <li>Real-World Test Automation
          <!--[<a href="08-Special-Lecture/Real-World Test Automation.pptx">slide</a>]
		[<a href="08-Special-Lecture/Paul Grizzaffi-March 24, 2023/Real-World Test Automation.mp4">Video</a>]-->
          <!-- [<a href="08-Special-Lecture/Dr. Grizzaffi - December 4, 2021/Real World Automation.pdf">pdf</a>] -->
          <!-- [<a href="https://www.dropbox.com/s/3svnjsomo8r7ht9/Special-Lecture-01-Paul.mp4?dl=0">Video</a>] -->
          <br>
          Dr. Paul Grizzaffi<br>
          <font color="blue">Date: April 12, 2024</font><br>
          Principle Automation Architect/Cognizant Softvision
          <br>
        </li><br>
        <!----------------------------
		<li>Software Quality and Software Testing 
		<!--[<a href="08-Special-Lecture/Dennis Frailey-Aril 21, 2023/Frailey SW Quality & Testing 2023 04 21 - Final.pptx">slide</a>]
		[<a href="08-Special-Lecture/Dennis Frailey-Aril 21, 2023/Software Quality and Software Testing - Made with Clipchamp.mp4">Video</a>]-->
        <!--[<a href="08-Special-Lecture/Dr. Siok - July 8, 2021/Software-System-Safety-2.pdf">one-slide</a>]
        [<a href="08-Special-Lecture/Dr. Siok - July 8, 2021/Software-System-Safety-1.pdf">two-slide</a>]-->
        <!-- [<a href="https://paris.utdallas.edu/ewong/Testing Class Videos/2022-07-19-Special lecture on Software Quality and Software Testing.mp4">Video</a>]<br> -->
        <!----------------------------	
      <br>Dr. Dennis Frailey<br>
		  <font color="blue">Date: April 19, 2024, 08:00 AM - 11:59 AM (CDT)</font><br>
         Retired Principle Fellow, Raytheon Company<br>
         Adjunct Faculty, UT Arlington<br>
      </li>
    </ul>-->
    </blockquote>
    <p><b>
        <font color="#3333FF">
          <font size=+1>Useful Links</font>
        </font>
      </b>

    <blockquote>
      <li> Software Reliability Engineering: More Reliable Software Faster and Cheaper, Second Edition (John Musa)
        <!--[<a href="http://johnmusa.com/">Overview</a>]-->
      <li> Effect of Code Coverage on Software Reliability Measurement
        <br>
        &nbsp; &nbsp; &nbsp;
        M. H. Chen, M. R. Lyu, and W. E. Wong
        <br>
        &nbsp; &nbsp; &nbsp;
        <em> IEEE Transactions on Reliability</em>,
        <br>
        &nbsp; &nbsp; &nbsp;
        Volume 50, Issue 2, pp. 165-170, June 2001
        [<a href="./03-Lecture/86-Code-Coverage-Reliability.pdf">pdf</a>]
      <li> CASRE - An Easy to Use Software Reliability Measurement Tool
        [<a href="./05-Additional-Materials/CASRE.pdf">pdf</a>]
        <!--[<a href="http://johnmusa.com/CASRE.htm">Overview</a>]-->
      <li> Software Reliability Models: Assumptions, Limitations, and Applicability
        [<a href="./05-Additional-Materials/Software Reliability Models_ Assumptions, Limitations, and Applicability.pdf">pdf</a>]
      <li> SDL - Specification and Description Language
        [<a href="http://www.sdl-forum.org">SDL Forum</a>]

      <li> Be More Familiar with Our Enemies and Pave the Way Forward: A Review of the Roles Bugs Played in Software Failures
        <br>
        &nbsp; &nbsp; &nbsp;
        W. Eric Wong, Xuelin Li, and Philip A. Laplante
        <br>
        &nbsp; &nbsp; &nbsp;
        <em> Journal of Systems and Software</em>,
        <br>
        &nbsp; &nbsp; &nbsp;
        Volume 133, pp. 68-94, November 2017
        [<a href="./05-Additional-Materials/Be More Familiar with Our Enemies.pdf">pdf</a>]
      <li> Basic Concepts and Taxonomy of Dependable and Secure Computing
        <br>
        &nbsp; &nbsp; &nbsp;
        A. Avizienis, J.C. Laprie, B. Randell, and C. Landwehr
        <br>
        &nbsp; &nbsp; &nbsp;
        <em> IEEE Transactions on Dependable and Secure Computing</em>,
        <br>
        &nbsp; &nbsp; &nbsp;
        Volume 1, Issue 1, pp. 11-33, January 2004
        [<a href="./05-Additional-Materials/Basic Concepts and Taxonomy of Dependable and Secure Computing.pdf">pdf</a>]

    </blockquote>

    <!--<p><b><font color="#3333FF"><font size=+1>[<a href="../Previous-Semester/index.html">Websites for the Previous Semesters</a>]</font></font></b>-->
    <hr>
    <br />
    <a href="./"> [Logoff] </a>
    <!------------------------------------------------------------------------->
  <?php
  } else {
  ?>
    Login Failed!
    <br />
    <a href="./"> [Back] </a>
  <?php
  }
  ?>
</body>

</html>