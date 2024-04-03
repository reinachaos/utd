# Tutorial: Combinatorial Testing

In this tutorial, you will learn the basic knowledge and get a hands-on experience of using combinatorial testing in practice.

This tutorial has six major steps:
 1. Understand the program under test (PUT) and design your input model
 2. Create the input model using  _ACTS_  tool
 3. Create  three  CT test suites
 4. Convert your CT test suits to shell scripts
 5. Execute the test cases
 6. Find out where the bug is

## Step 1: Understand the program under test (PUT) and design your input model

Go to the directory “CT-Tutorial” under your home directory. Read the file “program_spec” to understand the requirement of PUT. You can use different commands to read the file. For example:

    cat program_spec

Figure out what parameters (factors) you would like to include in your model and assign the possible values to each parameter. A sample input model can be:

| parameter 1 | parameter 2 | parameter 3|
|--|--|--|
|value 1| value 4 | value 5 |
|value 2|  | value 6 | 
|value 3|  |

## Step 2: Create the Input model using  _ACTS_  tool

Run *ACTS* under tutorial folder:

    java -jar acts_gui_2.9.jar
Open and follow the [instructions](https://paris.utdallas.edu/ewong/se6367/04-Tutorial/CT-Tutorial/acts_user_guide_2.92.pdf) of Chapter 3.1 (Page 7) of  _ACTS_ manual to create your input space model. (Constraint and relation setup are not needed)

## Step 3: Create  three  CT test suites

Follow the [instructions](https://paris.utdallas.edu/ewong/se6367/04-Tutorial/CT-Tutorial/acts_user_guide_2.92.pdf) of Chapter 3.2 (Page 11, 15, 16) of the  _ACTS_  manual to create a 2-way test suite. Export the generated 2-way test suite to a **csv text file**. 

Repeat the above process to create 3-way and 4-way test suites and export them to **csv files**.

## Step 4: Convert your CT test suits to shell scripts

Convert your 2-way, 3-way, and 4-way test suite **csv files** to executable shell scripts so that you can automatically execute all the test cases.

A sample executable script is provided in your tutorial folder (sample_script.sh).

    #!/bin/bash
    ./ct -o XP -b Firefox -p IPv6 -c AMD -d MySQL

You can find more tips about writing shell scripts [here](http://www.linfo.org/create_shell_1.html).

If you get permission error when you run your script:

    -bash: ./test.sh: Permission denied

Make sure you give your script execute permission:

    chmod +x test.sh

## Step 5: Execute your test cases

Execute your test cases with output redirection so you can examine the output.

## Step 6: Find out the bug
 
Find out **the bug** and **which test set detects the bug**. Write your answer in a file called “testing-result” using the following format:

    The test case no.[y] of [x]-way test suite detects the bug.
    Expected results: ...
    Observed results: ...

## Submission
Submit a tar (or zip) file including to eLearning:

 - your CT-Tutorial folder on the server (should have your converted shell scripts)
 - the "***testing-result***" file required in Step 6.

using the following naming rule:

    CT-Tutorial-FirstName-LastName.tar
    or
    CT-Tutorial-FirstName-LastName.zip

Submitted files without the correct name will not be accepted.



