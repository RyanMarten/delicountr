# delicountr

## Introduction
This web application was developed as part of a final in an Intro to CS class.

#### Goals
The goal of this projects was to create a web version of a deli counter ticket system that is used in a classroom setting, used to 
organize students who need help with their code. A student should be able to take a ticket (digitally) by entering their name. 
This name will be added to a queue. The website will display what their ticket number is and what number is currently being "served".
Also, this application should let two or more teachers be able to serve the same queue at the same time, which was hard with the physical version. 
The teacher will have a seperate page that they use for recieving the name (and number) of the student that they can serve. 
There are also options for the teacher to view the whole queue, edit the queue, and delete the queue.


#### Future Features
Additional features can include creating a new queue, so there can be multiple queues for multiple classrooms at the same time, and a special "sharing" link is generated for each queue. 
Password protecting the teacher page, and being able to change that password. Also security of the application, and protection from it being broken can be improved. 

## Try it!
The run this web application you need
- [x] Apache webserver
- [x] MySQL 
- [x] PHP 


The SQL statements needed for setting up the database are in the file `sqlstatements.txt`

This will also run on the xampp distro, which is very friendly for new users. 
  
Or you can try out the latest version on [cloud9](https://delicountr-ryanmarten.c9users.io/), where I am currently developing. 

## Current Version
Alpha Release

*Only desktop version works well*

## Contributions
Any ideas to improve this project are appreciated. :D 

Thanks 

# Screenshots
### Student View: Initial
![student-initial](/screenshots/student-initial.png)

### Student View: Ticket Taken
![student-ticket](/screenshots/student-ticket.png)

### Teacher View: Serve
![teacher-serve](/screenshots/teacher-serve.png)

### Teacher View: All Tickets
![teacher-view](/screenshots/teacher-view.png)



--Ryan 
