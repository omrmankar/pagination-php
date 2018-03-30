<?php

include 'pagination.class.php';
 $products = array( 
               array('title' => 'test1','body' =>'test1 test test'),
               array('title' => 'test2','body' =>'test2 test test'),
               array('title' => 'test3','body' =>'test fghftest test'),
               array('title' => 'test4','body' =>'test test test'),
               array('title' => 'test5','body' =>'test hh test'),
               array('title' => 'test6','body' =>'test test test'),
               array('title' => 'test7','body' =>'test test test'),
               array('title' => 'test8','body' =>'test test test'),
               array('title' => 'test9','body' =>'test test test'),
        );

if (count($products)) {
          // Create the pagination object
          $pagination = new pagination($products, (isset($_GET['page']) ? $_GET['page'] : 1), 3);
          // Decide if the first and last links should show
          $pagination->setShowFirstAndLast(false);
          // You can overwrite the default seperator
          $pagination->setMainSeperator(' | ');
          // Parse through the pagination class
          $productPages = $pagination->getResults();
          // If we have items 
          if (count($productPages) != 0) {
            // Create the page numbers
            echo $pageNumbers = '<div class="numbers">'.$pagination->getLinks($_GET).'</div>';
            // Loop through all the items in the array
            foreach ($productPages as $productArray) {
              // Show the information about the item
              echo '<p><b>'.$productArray['title'].'</b> &nbsp; &pound;'.$productArray['body'].'</p>';
            }
            // print out the page numbers beneath the results
            echo $pageNumbers;
          }
        }


