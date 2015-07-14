<?php
class theException extends Exception {}
class theExceptionZero extends Exception {}    
class theExceptionOne extends theExceptionZero {}
class theExceptionTwo extends theExceptionOne {}
class theClass {
        public $var="C";
            public function __construct(){
                        try { throw new theExceptionTwo('Big Error!');
                                    try { throw new theException('Error happened!'); }
                                                        catch (theExceptionOne $e) {$this->var = "1"; throw $e;}
                                                                            catch (theExceptionTwo $e) {$this->var = "2"; throw $e;}                
                                                                                            }
                                    catch (theExceptionOne $e) {$this->var = "3"; }            
                                                    catch (theExceptionTwo $e) {$this->var = "4"; } } }
                                                                try { $test = new theClass; }
                                                                                catch (theExceptionTwo $e) {$this->var = "5"; }
                                                                                                catch (theExceptionOne $e) {$this->var = "6"; }
                                                                                                                catch (theExceptionZero $e) {$this->var = "7"; }
                                                                                                                                echo $test->var;
            }
}
