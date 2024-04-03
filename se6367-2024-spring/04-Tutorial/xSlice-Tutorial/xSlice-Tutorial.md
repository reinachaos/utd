# xSlice Tutorial 

(100 points)

In this tutorial, you will learn how to use  ***xSlice*** to locate the bug in the source code based on coverage information. The program you need to work on is called ***wordcount***.

### Compile the program

Compile the ***wordcount*** program with the instrumentation option:
`atac cc -g -o wordcount_err main_err.c wc.c`

Keep in mind that the ***wordcount_err*** you obtained here is the version with bug.

### Execute some test cases 

Execute the following three test cases against ***wordcount_err***:

The 1st test case:

    ./wordcount_err input1

The 2nd test case:

	./wordcount_err -w input1

The 3rd test case:

	./wordcount_err -w < input1


### Determine which test cases failed

In the real-world, you need to determine which test cases failed by comparing the **observed outputs** (sometimes you even need to check the system behavior) with the **expected outputs**. In this tutorial, you don't need to figure out the **expected outputs** since you can obtain them by running the test cases against a correct version of the program  – ***wordcount_correct*** – which does not have bug. Please keep in mind that this is not always the case in the real-world since you might not have a correct version of the program you are testing.

Let's continue.

Compile the correct version of the program – ***wordcount_correct*** – and clean an environmental variable:

	cc -o wordcount_correct main.c wc.c
    export ATAC_TRACE=

Now, execute the  three test cases against ***wordcount_correct*** like you just did for the faulty program.

    ./wordcount_correct input1
	......
	
	./wordcount_correct -w input1
	......

	./wordcount_correct -w < input1
	......

Compare those outputs you observed from the ***wordcount_correct*** with those outputs you observed from the ***wordcount_err***, and you should be able to determine which test cases failed against ***wordcount_err***.

### Use xSlice to help you identify the bug in the source code

Run the xSuite:
	
	xsuite wordcount_err.atacp

Switch the tool to xSlice mode by clicking menu “Coverage” -> “xSlice”.

Open the trace file ***wordcount_err.trace***

Specify which tests passed and which failed.

![enter image description here](https://paris.utdallas.edu/ewong/se6367/04-Tutorial/xSlice-Tutorial/Figure1.png)

Check the source code view in xSlice. The bug location should be highlighted by RED.

### Submission

Take a screenshot of the code highlighted in red and submit it to eLearning.
The screenshot must show ***all your screen***.

Name your screenshot to ***xSlice-Tutorial-FirstName-LastName.png*** (other file types, such as JPG, are allowed)
- Submission without the correct file name will not be accepted
