<?php

/*
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo ini_get("session.upload_progress.name"); ?>" value="123" />
  <input type="file" name="file1" />
  <input type="file" name="file2" />
  <input type="submit" />
</form>


$_SESSION["upload_progress_123"] = array(
     "start_time" => 1234567890,   // The request time
      "content_length" => 57343257, // POST content length
       "bytes_processed" => 453489,  // Amount of bytes received and processed
        "done" => false,              // true when the POST handler has finished, successfully or not
         "files" => array(
               0 => array(
                      "field_name" => "file1",       // Name of the <input/> field
                         // The following 3 elements equals those in $_FILES
                      //    "name" => "foo.avi",
                      //       "tmp_name" => "/tmp/phpxxxxxx",
                      //          "error" => 0,
                      //             "done" => true,                // True when the POST handler has finished handling this file
                      //                "start_time" => 1234567890,    // When this file has started to be processed
                      //                   "bytes_processed" => 57343250, // Number of bytes received and processed for this file
                      //                     ),
                      //                       // An other file, not finished uploading, in the same request
                      //                         1 => array(
                      //                           "field_name" => "file2",
                      //                              "name" => "bar.avi",
                      //                                 "tmp_name" => NULL,
                      //                                    "error" => 0,
                      //                                       "done" => false,
                      //                                          "start_time" => 1234567899,
                      //                                             "bytes_processed" => 54554,
                      //                                               ),
                      //                                                )
                      //                                                );
                      //                        )
                )
            )
)

 */


