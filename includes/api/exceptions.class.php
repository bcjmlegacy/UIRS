<?php

  /**
   * Custom exception to handle invalid incident ids 
   * handed to the front end.
   * 
   * @param string Custom error message
   */
  class ProcessIncidentException extends Exception
    {
        // Redefine the exception so message isn't optional
        public function __construct($message, $code = 0, Exception $previous = null) {
        
            // Make sure everything is assigned properly
            parent::__construct($message, $code, $previous);
        }

        // Custom string representation of object
        public function __toString() {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
        }

        public function message() {
          return $this->message;
        }
    }

    /**
     * Custom exception to handle invalid postcodes handed to
     * the front end.
     * 
     * @param string Custom error message
     */
    class ProcessPostcodeException extends Exception
    {
        // Redefine the exception so message isn't optional
        public function __construct($message, $code = 0, Exception $previous = null) {
        
            // Make sure everything is assigned properly
            parent::__construct($message, $code, $previous);
        }
    
        // Custom string representation of object
        public function __toString() {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
        }
  
        public function message() {
          return $this->message;
        }
    }

?>