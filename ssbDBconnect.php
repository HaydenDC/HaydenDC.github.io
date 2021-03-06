<?php


  $db = NULL;

$random;
  // variables

  $dbUser;

  $dbPassword;

  $dbName;

  $dbHost;

  $dbPort;



  $dbUrl = getenv('DATABASE_URL');



  if (!isset($dbUrl) || empty($dbUrl)) {

  	// example localhost configuration URL with user: "ta_user", password: "ta_pass"

  	// and a database called "scripture_ta"

  	//$dbUrl = "postgres://ta_user:ta_pass@localhost:5432/scripture_ta";

  	// NOTE: It is not great to put this sensitive information right

  	// here in a file that gets committed to version control. It's not

  	// as bad as putting your Heroku user and password here, but still

  	// not ideal.

    $dbUser     = 'brother_burton';

    $dbPassword = 'bradismyfavoritestudent';

    $dbName     = 'sr_project';

    $dbHost     = 'localhost';

    $dbPort     = '5432';

  	// It would be better to put your local connection information

  	// into an environment variable on your local computer. That way

  	// it would work consistently regardless of whether the application

  	// were running locally or at heroku.

  }

  else {

    // Get the various parts of the DB Connection from the URL

    $dbUrl      = "postgres://tephnidkesykjf:701f18ebb0933986cd10b40dce76dab5b7d7d3fc9b3be95deaa3143f1b6651c4@ec2-54-243-124-240.compute-1.amazonaws.com:5432/d3sdm811bef7cq";

	  $dbopts     = parse_url($dbUrl);

    $dbUser     = $dbopts["user"];

	  $dbPassword = $dbopts["pass"];

	  $dbHost     = $dbopts["host"];

	  $dbPort     = $dbopts["port"];

	  $dbName     = ltrim($dbopts["path"],'/');

  }



  try

  {

    // create pdo connection

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);



    // this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!

    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  } catch (PDOException $ex)

  {

    // print the error

    echo "Error connecting to DB. Details: $ex";

    die();

  }

?>