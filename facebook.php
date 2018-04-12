<?php
require_once "phpwebdriver/WebDriver.php";
ini_set( 'max_execution_time', 300 ); //300 seconds = 5 minutes

// Initializing
$webdriver = new WebDriver( "localhost", "4444" );
// connecting to crome
$webdriver->connect( "chrome" );
// opening google.com website
$webdriver->get( "https://www.facebook.com/" );

$username_element  = $webdriver->findElementBy( LocatorStrategy::id, "email" );
$password_element  = $webdriver->findElementBy( LocatorStrategy::id, "pass" );
$submitBtn_element = $webdriver->findElementBy( LocatorStrategy::xpath, '//*[@id="u_0_2"]'); ////*[@id="u_0_7"]

if ( $username_element ) {
	$username_element->sendKeys( array( "username@gmail.com" ) );
	$password_element->sendKeys( array( "password" ) );
	$submitBtn_element->click();
}
 
 /*
	
		$element = false;
	do {
		try {
			$element = $webdriver->findElementBy(LocatorStrategy::xpath, '//ul[contains(@class,"dnnmega")]/li//span[text()="Inventory"]');
		} catch(Exception $e) { sleep(1); }
	} while(!$element);
		
		
	$driver->wait()->until(
    function () use ($driver) {
        $elements = $driver->findElements(WebDriverBy::cssSelector('li.foo'));

        return count($elements) > 5;
    },
    'Error locating more than five elements'
);
		
		

}
*/

//print_r( $webdriver );
//$webdriver->close();

?>
