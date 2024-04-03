# xSuite Tutorial

In this tutorial, you will learn how to use ***xSuite*** to measure coverage of a specific program. But before we get into the details, let's talk about the program instrumentation.

### What is instrumentation?

The first two questions we need to figure out is:  
1. What is instrumentation?  
2. Why do we need to instrument the subject program for measuring coverage?

Imagine you were the coverage measurement tool, and you want to measure the statement coverage (the percentage of the statements that have been executed at least once) of a program. How can you do it?

Take a C program as an example, the program that is going to be run by a user is not the source code in the .c files. It's the compiled binary (in this tutorial, it will be the file ***wordcount***). The binary will be executed by the OS and hardware and does whatever it is supposed to do. Then the execution finished.

Since you, as a tool, is a regular process running in the OS, you cannot see what happened to another progress (the subject program), and you know nothing about the execution that just finished. So you may ask if I cannot know what happened to the subject program, how it is possible for me to measure the coverage?

That is why we need instrumentation. 

You can think the instrumentation as adding some additional code to the subject program (not limited to). These additional code will preserve the information about the program execution. 

Take the following C program as an example:

	...
	int a = 0;
	int b = a + 1;
	int c = b / 2;
	...

One way to instrument this program is by adding some printf statements, such as:

	...
	int a = 0;
	printf("line 10 has been executed...")
	int b = a + 1;
	printf("line 11 has been executed...")
	int c = b / 2;
	printf("line 12 has been executed...")
	...	

By doing this, you, as a tool, can determine whether a statement of the subject program has been executed or not by checking the outputs. Although the tool (***xSuite***) we used does not work this way (adding statements at source code level), the concept is the same.
	

### Finish the tutorial of xSuite

Now, you should understand what instrumentation is, and why it is needed for measuring coverage. Please go through the [tutorial](https://paris.utdallas.edu/ewong/se6367/04-Tutorial/xSuite-Tutorial/help/tutorial.html).

### Submission
Submit a screenshot, similar to the Figure 2-22 (the entire screenshot of your screen, not just the tool) shown in the tutorial.


