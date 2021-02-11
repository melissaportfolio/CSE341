<?php
//Accounts controller file

// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/dbConnect.php';
// Get the account model for use as needed
require_once '../model/account-model.php';



$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_GET, 'action');
}
switch ($action) {
  case 'login-page':
    include '../view/login.php';
    break;
  case 'register':
    include '../view/register.php';
    break;



  case 'Login':
    $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
    $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_STRING);
    $clientEmail = checkEmail($clientEmail);
    // $checkPassword = checkPassword($clientPassword);
    if (empty($clientEmail) || empty($clientPassword)) {
      $message = '<p>Please provide information for all empty form fields.</p>';
      include '../view/login.php';
      exit;
    }
    // echo $clientEmail, $checkPassword;
    // exit;

    // A valid password exists, proceed with the login process
    // Query the client data based on the email address
    $clientData = getClient($clientEmail);
    // var_dump($clientData);
    // exit;

    // Compare the password just submitted against
    // the hashed password for the matching client
    $hashCheck = password_verify($clientPassword, $clientData['clientPassword']);
    // If the hashes don't match create an error
    // and return to the login view
    if (!$hashCheck) {
      $message = '<p class="notice">Please check your password and try again.</p>';
      include '../view/login.php';
      exit;
    }
    // A valid user exists, log them in
    $_SESSION['loggedin'] = TRUE;
    // Remove the password from the array
    // the array_pop function removes the last
    // element from an array
    array_pop($clientData);
    // Store the array into the session
    $_SESSION['clientData'] = $clientData;
    // Send them to the admin view
    include '../view/admin.php';
    exit;
    break;




  case 'register-1':
    // echo 'You are in the register case statement';
    // Filter and store the data
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $email = checkEmail($email);
    $checkPassword = checkPassword($password);

    //Check for existing email address
    $existingEmail = checkExistingEmail($email);

    // Check for existing email address in the table
    if ($existingEmail) {
      $message = '<p class="notice">That email address already exists. Do you want to login instead?</p>';
      include '../view/login.php';
      exit;
    }

    // Check for missing data
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
      $message = '<p>Please provide information for all empty form fields.</p>';
      include '../view/register.php';
      exit;
    }
    // Hash the checked password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Send the data to the model
    $regOutcome = regClient($first_name, $last_name, $email, $hashedPassword);

    // Check and report the result
    if ($regOutcome === 1) {
      //set cookie
      setcookie('firstname', $first_name, strtotime('+1 year'), '/');
      $_SESSION['message'] = "Thanks for registering $first_name. Please use your email and password to login.";
      // include '../view/login.php';
      header('Location: /phpmotors/accounts/index.php?action=login');
      exit;
    } else {
      $message = "<p>Sorry $first_name, but the registration failed. Please try again.</p>";
      include '../view/register.php';
      exit;
    }
    break;




    //new case for logout "logout"
  case 'logout':
    session_unset();
    session_destroy();

    //session_destroy
    //header location: home page: break
    header('Location: /phpmotors/index.php');
    break;
    //if-else with destroyed 





    //header snippet - logout vs my account
  case 'acctinfo':
    include '../view/update-patient.php';
    break;
    require_once 'models/team6.php';
    $toPrint = '';

    $topics = getTopics();

    if(isset($_POST['book'])) {
      $book = filter_input(INPUT_POST, 'book', FILTER_SANITIZE_STRING);
      $chapter = filter_input(INPUT_POST, 'chapter', FILTER_SANITIZE_STRING);
      $verse = filter_input(INPUT_POST, 'verse', FILTER_SANITIZE_STRING);
      $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
      $faith = filter_input(INPUT_POST, 'Faith', FILTER_SANITIZE_NUMBER_INT);
      $sacrifice = filter_input(INPUT_POST, 'Sacrifice', FILTER_SANITIZE_NUMBER_INT);
      $charity = filter_input(INPUT_POST, 'Charity', FILTER_SANITIZE_NUMBER_INT);
      $userCheckbox = filter_input(INPUT_POST, 'UserCheckbox', FILTER_SANITIZE_NUMBER_INT);
      $userText = filter_input(INPUT_POST, 'UserText', FILTER_SANITIZE_STRING);

      team6($book, $chapter, $verse, $content, $faith, $sacrifice, $charity, $userCheckbox, $userText);
  
    }

    include 'view/team6/index.php';
    break;








  default:
    include '../view/admin.php';
    break;
}
