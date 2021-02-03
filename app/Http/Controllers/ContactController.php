<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getIndex(){
        return view('contact.index');
    }
    public function sendEmail(){
        $to= 'lenielluzardo@gmail.com';
        $fullname='';
        $email='';
        $subject=array();
        $discipline=array();
        $comments='';
        $newsletter='';
        $isHuman='';

        if(isset($_POST['f_button'])){
          $isValid = true;
        }
        if(!isset($_POST['fullname']) || $_POST['fullname'] === '') {
            $isValid=false;
        }
        if(!isset($_POST['email']) || $_POST['email'] === ''){
            $isValid=false;
        }
        if(!isset($_POST['subject']) || $_POST['subject'] === ''){
            $isValid=false;
        }
        if(!isset($_POST['discipline']) || $_POST['discipline'] === ''){
            $isValid=false;
        }
        if(!isset($_POST['comments']) || $_POST['comments'] === ''){
            $isValid=false;
        }
        if(!isset($_POST['is_human']) || $_POST['is_human'] === ''){
           $isValid=false;
        }

        if($isValid){

            $fullname=htmlspecialchars($_POST['fullname'], ENT_QUOTES);
            $email=htmlspecialchars($_POST['email'], ENT_QUOTES);
            $subject=htmlspecialchars(implode(' ', $_POST['subject']), ENT_QUOTES);
            $discipline=htmlspecialchars(implode(' ', $_POST['discipline']), ENT_QUOTES);
            $comments=htmlspecialchars($_POST['comments'], ENT_QUOTES);
            $newsletter=htmlspecialchars($_POST['newsletter'], ENT_QUOTES);
            $isHuman=htmlspecialchars($_POST['is_human'], ENT_QUOTES);

            echo $fullname.'<br>';
            echo $email.'<br>';
            echo $subject.'<br>';
            echo $discipline.'<br>';
            echo $comments.'<br>';
            echo $newsletter.'<br>';
            echo $isHuman.'<br>';

            $headers = "From: $email\r\n"."Reply-To: $email\r\n"."X-Mailer: PHP/".phpversion();
            $title = "$subject on $discipline";

            mail($to, $title, $comments, $headers);
        }
    }
}
