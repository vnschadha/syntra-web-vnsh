<?php
$conn = mysqli_connect("localhost" , "root","", "syntra-web-db");

if(isset($_POST["submit"])){
          $Profiles = mysqli_real_escape_string($conn, $_POST["Profiles"] ?? '');
          $BusinessStrategy = isset($_POST["BusinessStrategy"]) ? $_POST["BusinessStrategy"] : [];
          $Advertisement = isset($_POST["Advertisement"]) ? $_POST["Advertisement"] : [];
          $CreativeBrandStrategy = isset($_POST["CreativeBrandStrategy"]) ? $_POST["CreativeBrandStrategy"] : [];
          $DigitalSolutions = isset($_POST["DigitalSolutions"]) ? $_POST["DigitalSolutions"] : [];
          $MarketingAnalytics = isset($_POST["MarketingAnalytics"]) ? $_POST["MarketingAnalytics"] : [];
          $DesignServices = isset($_POST["DesignServices"]) ? $_POST["DesignServices"] : [];
          $PackagingandPrinting = isset($_POST["PackagingandPrinting"]) ? $_POST["PackagingandPrinting"] : [];
          $SocialMediaManagement = isset($_POST["SocialMediaManagement"]) ? $_POST["SocialMediaManagement"] : [];
          $MusicandVideoProduction = isset($_POST["MusicandVideoProduction"]) ? $_POST["MusicandVideoProduction"] : [];
          
          $Email = mysqli_real_escape_string($conn, $_POST['Email'] ?? '');
          $PhoneNumber = mysqli_real_escape_string($conn, $_POST["PhoneNumber"] ?? '');
          $WhatsApp = mysqli_real_escape_string($conn, $_POST["WhatsApp"] ?? '');
          $get_Started = mysqli_real_escape_string($conn, $_POST["get_Started"] ?? '');
          $tell_Us_About = mysqli_real_escape_string($conn, $_POST["tell_Us_About"] ?? '');
          $anything_Else = mysqli_real_escape_string($conn, $_POST["anything_Else"] ?? '');
        
          // Convert array inputs into comma-separated strings
          $BusinessStrategy = implode(" , ", $BusinessStrategy);
          $Advertisement = implode(" , ", $Advertisement);
          $CreativeBrandStrategy = implode(" , ", $CreativeBrandStrategy);
          $DigitalSolutions = implode(" , ", $DigitalSolutions);
          $MarketingAnalytics = implode(" , ", $MarketingAnalytics);
          $DesignServices = implode(" , ", $DesignServices);
          $PackagingandPrinting = implode(" , ", $PackagingandPrinting);
          $SocialMediaManagement = implode(" , ", $SocialMediaManagement);
          $MusicandVideoProduction = implode(" , ", $MusicandVideoProduction);
        
          // Check if the email already exists
          $email_check_query = "SELECT * FROM syntraform WHERE Email='$Email' LIMIT 1";
          $result = mysqli_query($conn, $email_check_query);
          $user = mysqli_fetch_assoc($result);
        
          if ($user) {
              echo "<script>alert('Email already exists. Please use a different email.');</script>";
          } else {
              // Prepare the SQL query
              $query = "INSERT INTO syntraform 
              (Profiles, BusinessStrategy, Advertisement, CreativeBrandStrategy, DigitalSolutions, MarketingAnalytics, DesignServices, 
              PackagingandPrinting, SocialMediaManagement, MusicandVideoProduction, Email, PhoneNumber, WhatsApp, get_Started, tell_Us_About, anything_Else)
              VALUES 
              ('$Profiles', '$BusinessStrategy', '$Advertisement', '$CreativeBrandStrategy', '$DigitalSolutions', '$MarketingAnalytics', '$DesignServices',
              '$PackagingandPrinting', '$SocialMediaManagement', '$MusicandVideoProduction', '$Email', '$PhoneNumber', '$WhatsApp', '$get_Started', '$tell_Us_About', '$anything_Else')";
        
              // Execute the query
              if (mysqli_query($conn, $query)) {
                  echo "<script>alert('Data Inserted Successfully');</script>";
              } else {
                  echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
              }
          }
        }