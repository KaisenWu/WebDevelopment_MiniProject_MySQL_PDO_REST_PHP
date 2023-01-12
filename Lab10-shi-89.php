<?php

//Require configuration
require_once('inc/config.inc.php');

//Require Entities
require_once('inc/Entities/Customer.class.php');

require_once('inc/Utilities/RestClient.class.php');
require_once('inc/Utilities/Page.class.php');
require_once('inc/Utilities/CustomerConverter.class.php');

//Check if there was get data, perofrm the action
if (!empty($_GET))    {
    //Perform the Action
    if ($_GET["action"] == "delete")  {
        //Call the rest client with DELETE
    }

    if ($_GET["action"] == "edit")  {
        //Call the rest client with GET, decode the result
        
        //Convert the decoded customer
    }

}

//Check for post data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["action"]) && $_POST["action"] == "edit")    {
        //Assemble the the postData
        //Call the RestClient with PUT
        
    //Was probably a create
    } else {
        //Assemble the Customer
        //Add the the Customer 
        
    }
}

//Get all the customers from the web service via the REST client

//Store the customer objects 



Page::$title = "Lab 10 - Sam Hill - 123456789";
Page::header();
Page::listCustomers($customers);
//Check Get again, display the right form edit or add
        Page::editCustomer($ec);
    } else {

    }

Page::footer();