# IMT-Punnapra
Web based app for storing student details along with fee details. Features like add and update student details is also privided.
The Project was done for IMT Punnapra, for their official use. They Just need to use this as localhost so I haven't included anything to adjust the layout when seen in mobile. The template used is downloaded from https://templated.co/ . I was an Ultimate beginner and this is my very first project. 
  Backend:php
  DB : MySql
  DB Connectivity : mysqli (Object Oriented)
  
Dummy website link : https://imtpunnapra.000webhostapp.com/

At First you can use                 /init/init.php             to create database and create necessary tables.
https://imtpunnapra.000webhostapp.com/init/init.php

*****************************************************************************************************************************

Details of Database :
  DB Name : fee
  Tables:
      student(name, adm (admission no. ),admt (admission type - reservation/management),phno, email, fn (name of father),fno (contcat- father),mname (name of mother),mno (contact-mother), rel, cas, addr)
      inter(adm, rno (receipt no))
      record(sem, dat (date), rno, amt (amount)
      
*****************************************************************************************************************************

You can try out the working of this by a dummy record with admission number : 00000000 
or you can add a new one.

1. VIEW
Enter the admission number, the next page will show you the details of student, below it will be the details of fee he/she paid.
The four colored dots on top-right corner shows wheather (s)he paid semster fees completely. If it is green, (s)he have paid or else (if red) (s)he have'nt. The four dots denoted four semesters.

2.Update
Enter the admission number and you can update details of student, means, fee details.

3.Add
Enter the complete details and also you can update fee detials here.


That's it !

*****************************************************************************************************************************
                            This was a project done strictly according to the user's need
*****************************************************************************************************************************
