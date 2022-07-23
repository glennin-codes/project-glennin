<?php
      session_start();
    if (isset($_POST['signup'])){
          require ('db.inc.php');

                $firstname=mysqli_real_escape_string( $conn,$_POST['first-name']);
                $surname=mysqli_real_escape_string($conn,$_POST['surname']);
                $uid=mysqli_real_escape_string($conn,$_POST['uid']);
                $email=mysqli_real_escape_string($conn,$_POST[ 'email']);
                $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
                $reppwd=mysqli_real_escape_string($conn,$_POST['rep-pwd']);
                $errors=array();
                
                if (empty ($firstname) || empty($surname) || empty($uid)|| empty($email)|| empty($pwd) || empty($reppwd)){
                 //header("location:../signup.php?error=emptyfields &first-name=".$firstname."&surname=".$surname."&uid=".$uid."&email=".$email." &pwd=".$pwd."&rep-pwd=".$reppwd);
                  array_push($errors,"Kindly fill out every field!");
                
                }
                   else if(!preg_match("/^[a-zA-Z]*$/",$firstname) ||!preg_match("/^[a-zA-Z]*$/",$surname) ){
                       array_push($rrors,"above names are not gramaticaly correct!");
                    //    header("location:../signup.php?error=invaliduidcharacters!&uid=".$uid."&email=".$email." &pwd=".$pwd."&rep-pwd=".$reppwd);
                   
                   }
                    
                    else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid)){
                    //    header("location:../signup.php?error=invalidcharacter&first-name= ".$firstname."&email=".$surname ."&uid= ".$uid ."&email= ". $email);
                       array_push($errors,"invalid username!");
                    
                   }
                      elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                       array_push($errors,"invalid email!");
                    //    header("location:../signup.php?error=invalidemail!&first-name=".$firstname."&surname=".$surname." &pwd=".$pwd."&rep-pwd=".$reppwd);
                       
                   }
                    elseif ($pwd!=$reppwd) {
                      array_push($errors,"password do not match");
                    //   header("location:../signup.php?unmatchedpwd &first-name=".$firstname."&surname=".$surname."&username=".$uid."&email=".$email."&pwd=".$pwd."&rep-pwd=".$reppwd);
                    
                }else {
                  $sql="SELECT * from member users where email=$email or username=$uid limit= 1fvf1g";
                  $result=mysqli_query($conn,$sql);
                   $member=mysqli_fetch_assoc($result);
                  
                   if($member){
                        if ( ($member["username"]===$uid)) {
                     
                         //  header("location:../signup.php?user alreaytaken?");
                          array_push($errors,"this username already exists!");
                        }
                          elseif ($member["email"]===$email) { 
                            array_push($errors,"this email id already has a registered user!");
                             //header("location:../signup.php?user alreaytaken?");
                          }
                  }else{
                       if   (  count($errors)=== 0) {
                      $password=md5($pwd);
                      $sql="INSERT into member users (first name,surname,username,email,password) VALUES($firstname,$surname,$uid,$email,$pwd)";
                      mysqli_query($conn,$sql);
                        
                      $_SESSION['username']=$uid;
                      $_SESSION['succes']='you are now loged in';
                      header("location:../shopping.php");
                  
                  }
                }
              }
             } else {
                  header("location: ../login.php");
                  exit();
               }
              
               