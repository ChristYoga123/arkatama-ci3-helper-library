<?php 

class Aritmatika {
    public function add($a, $b)
    {
        try {
            if(is_string($a) || is_string($b))
            {
                throw new Exception("Data tidak boleh string", 1);
                
            }
            return $a + $b;
        } catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function times($a, $b)
    {
        try {
            if(is_string($a) || is_string($b))
            {
                throw new Exception("Data tidak boleh string", 1);
                
            }
            return $a * $b;
        } catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function divide($a, $b)
    {
        try {
            if(is_string($a) || is_string($b))
            {
                throw new Exception("Data tidak boleh string", 1);
                
            }
            return $a / $b;
        } catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function substract($a, $b)
    {
        try {
            if(is_string($a) || is_string($b))
            {
                throw new Exception("Data tidak boleh string", 1);
                
            }
            return $a - $b;
        } catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    // public function times($a, $b)
    // {
    //     try{
            
    //     }
    // }
}

?>